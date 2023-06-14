<?php
function hitungTarifOjek($kotaAsal, $kotaTujuan)
{
    // Menggunakan Google Maps Distance Matrix API
    $apiKey = "AIzaSyD4ovt6rvH_TcBHIZidJUhp13spNQJCJlU";
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=" . urlencode($kotaAsal) . "&destinations=" . urlencode($kotaTujuan) . "&key=" . $apiKey;

    // Mengirim permintaan HTTP menggunakan cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Memeriksa dan memproses hasil respons JSON
    $data = json_decode($response, true);
    if ($data["status"] == "OK") {
        $distance = $data["rows"][0]["elements"][0]["distance"]["value"]; // Jarak dalam meter
        $duration = $data["rows"][0]["elements"][0]["duration"]["value"]; // Waktu perjalanan dalam detik

        // Hitung tarif berdasarkan jarak dan waktu perjalanan
        $tarifPerKilometer = 1000; // Ubah dengan tarif per kilometer yang sesuai
        $tarifPerMenit = 500; // Ubah dengan tarif per menit yang sesuai
        $tarifOjek = ($distance / 1000) * $tarifPerKilometer + ($duration / 60) * $tarifPerMenit;

        return $tarifOjek;
    } else {
        return "Gagal menghitung tarif ojek. Error: " . $data["status"];
    }
}

// Contoh penggunaan
$kotaAsal = "Jakarta";
$kotaTujuan = "Surabaya";
$tarifOjek = hitungTarifOjek($kotaAsal, $kotaTujuan);
if (is_numeric($tarifOjek)) {
    echo "Tarif ojek dari $kotaAsal ke $kotaTujuan adalah: Rp " . number_format($tarifOjek, 0, ",", ".");
} else {
    echo $tarifOjek;
}
