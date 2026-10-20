<?php
// Contoh pemakaian API fom.co.id. Jalankan: FOM_API_KEY=xxx php fom.php
function fom(string $action, array $params = []): array
{
    $ch = curl_init('https://fom.co.id/api/v1');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(['key' => getenv('FOM_API_KEY'), 'action' => $action] + $params),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
    ]);
    $body = curl_exec($ch);
    curl_close($ch);

    return json_decode($body, true) ?? ['error' => 'Respons tidak valid'];
}

print_r(fom('balance'));
// print_r(fom('add', ['service' => 1, 'link' => 'https://instagram.com/username', 'quantity' => 1000]));
// print_r(fom('status', ['order' => 80000001]));
