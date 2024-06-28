<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body>
    @include('navbar')

    <section class="max-w-[1440px] p-6">
        <div class="flex flex-col gap-3 items-center justify-center h-[80vh]">
            <h1 class="font-bold text-4xl">SELAMAT DATANG DI WEBSITE ADMIN PANEL</h1>
            <h3 class="font-semibold text-2xl">Silahkan Klik Tombol Berikut Untuk Pergi Ke Halaman Pegawai</h3>
            <a href="{{route('pegawais.index')}}">
                <button class="px-4 py-2 rounded-lg text-white font-medium bg-green-500 duration-200 hover:bg-black">
                    Halaman Pegawai >>
                </button>
            </a>
        </div>
    </section>
</body>
</html>
