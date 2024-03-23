<?php
// Array dengan nilai-nilai integer
$array_nilai = array(10, 5, 8, 20, 15);

// Inisialisasi variabel untuk menyimpan nilai terbesar
$nilai_terbesar = $array_nilai[0]; // Asumsi nilai terbesar adalah elemen pertama array

// Loop melalui array untuk mencari nilai terbesar
foreach ($array_nilai as $nilai) {
    if ($nilai > $nilai_terbesar) {
        $nilai_terbesar = $nilai; // Mengupdate nilai terbesar jika ditemukan nilai yang lebih besar
    }
}

// Menampilkan nilai terbesar
echo "Nilai terbesar dalam array adalah: " . $nilai_terbesar;
?>