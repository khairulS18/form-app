<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Formulir Pendaftaran SMK</title>
</head>

<body class="font-sans bg-slate-300 min-h-screen flex flex-col">

    {{-- Header --}}
    <header class="p-4 bg-white shadow text-center">
        <h2 class="text-2xl md:text-4xl font-bold text-slate-700">
            Sekolah Menengah Kejuruan (SMK)
        </h2>
    </header>

    {{-- Main --}}
    <main class="flex-grow flex items-center justify-center p-4">
        @php
            $nomor = '6281332517626';
            $pesan = <<<EOT
FORMULIR PENDAFTARAN SMK

NAMA LENGKAP :
TEMPAT, TANGGAL LAHIR :
ALAMAT ASAL :
ALAMAT DI YOGYAKARTA :
NOMOR HP AKTIF :
JENIS KELAMIN :
AGAMA :

ASAL SEKOLAH :
ALAMAT SEKOLAH :
TAHUN LULUS SEKOLAH :

NAMA ORANG TUA/WALI :
ALAMAT :
PEKERJAAN :

PILIHAN JURUSAN :
1. Desain Visual Komunikasi
2. Rekayasa Perangkat Lunak 
3. Teknik Instalasi Tenaga Listrik 
4. Teknik Kendaraan Ringan 
5. Teknik dan Bisnis Sepeda Motor 
EOT;

            $linkWhatsapp = "https://api.whatsapp.com/send?phone={$nomor}&text=" . urlencode($pesan);
        @endphp

        <a href="{{ $linkWhatsapp }}" target="_blank"
            class="bg-green-500 text-white font-semibold text-base md:text-lg px-6 py-3 rounded-lg shadow transition duration-300 hover:bg-green-600 text-center">
            📲 Daftar via WhatsApp
        </a>
    </main>

    {{-- Footer --}}
    <footer class="bg-black text-white text-center py-4 text-sm">
        &copy; {{ date('Y') }} Khairul
    </footer>

</body>

</html>
