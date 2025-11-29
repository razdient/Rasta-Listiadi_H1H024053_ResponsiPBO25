# PokéCare - Responsi Praktikum PBO

Nama: Rasta Listiadi
NIM: H1H024053
Shift awal: D
Shift akhir: C

Deskripsi Singkat
simulasi latihan Pokémon (Rattata) berbasis PHP native. Menampilkan info dasar, melakukan sesi latihan (memanggil method PBO), dan mencatat riwayat latihan ke file JSON.

Cara Menjalankan
1. Pastikan PHP terpasang.
2. Jalankan `php -S localhost:8000` di folder proyek.
3. Akses `http://localhost:8000/index.php`.
4. Tekan Mulai Latihan
5. Pilih Jenis Latihan dan Intensitas Latihan
6. Tekan tombol Mulai Latihan

## Struktur File
POKECARE/
├── asset/
├── classes/
│   ├── Pokemon.php
│   ├── Rattata.php
│   └── TrainingSession.php
├── data/
│   └── history.json
├── history.php
├── index.php
└── train.php

## Catatan Teknis
- Bahasa: PHP native (no framework)
- Konsep OOP dipakai: Encapsulation, Inheritance, Polymorphism, Abstraction
- Penyimpanan riwayat: `data/history.json`


