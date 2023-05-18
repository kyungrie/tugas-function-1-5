<?php

function penjumlahan($no1, $no2) {
    return $no1 + $no2;
}
$hasil = penjumlahan(5,3);
echo $hasil ."</br>";

function luas_lingkaran($r) {
    return 3.14 * ($r * 2);
}
$hasil_luas = luas_lingkaran(9);
echo $hasil_luas ."</br>";

function rata_rata($angka) {
    $total = array_sum($angka);
    $jumlah = count($angka);
    return $total / $jumlah;
}
$median = rata_rata($angka = [7,5,3,6,9,8,2,1]);
echo $median . "</br>";

function balik_kata($kalimat) {
    $kata = explode(' ', $kalimat);
    $Terbalik = array_reverse($kata);
    return implode(' ', $Terbalik);
}
$kata_terbalik = balik_kata($kalimat = "aku suka makan nasi");
echo $kata_terbalik ."</br>";

function nama_terpanjang($nama) {
    $nama_terpanjang = '';
    $jumlah_huruf_terpanjang = 0;

    foreach ($nama as $orang) {
        $jumlah_huruf = strlen($orang);
        if ($jumlah_huruf > $jumlah_huruf_terpanjang) {
            $jumlah_huruf_terpanjang = $jumlah_huruf;
            $nama_terpanjang = $orang;
        }
    }

    return $nama_terpanjang;
}
$nama_terpanjang = nama_terpanjang($nama = ["Agil","Arie","Hisyam","Rizwan","Zayus"]);
echo $nama_terpanjang;

?>