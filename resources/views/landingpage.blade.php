<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Penyakit Gigi dan Mulut</title>
    <!-- Tambahkan link ke CDN Tailwind CSS untuk tampilan modern -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Sistem Pakar Diagnosa Penyakit Gigi dan Mulut</h1>
            <p class="mt-2 text-lg">Solusi cepat untuk mengetahui masalah gigi dan mulut Anda.</p>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://source.unsplash.com/1600x900/?teeth,health');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-4">Cek Kondisi Kesehatan Gigi dan Mulut Anda</h2>
                <p class="text-xl mb-6">Dapatkan diagnosa dini berdasarkan gejala yang Anda alami.</p>
                <a href="{{ route('form.diagnosis') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg text-lg">
                    Cek Diagnosis Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} Sistem Pakar Penyakit Gigi dan Mulut. All rights reserved.</p>
    </footer>
</body>
</html>
