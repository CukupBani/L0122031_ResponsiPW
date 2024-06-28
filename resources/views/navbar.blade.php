<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- Navbar --}}
    <div class="py-6 px-10 bg-yellow-500 w-full flex items-center justify-between sticky">
        <h1 class="text-white font-bold text-2xl">ADMIN PANEL</h1>

        <ul class="text-white font-medium text-[18px] flex gap-4 items-center">
            <a href="/" class="duration-200 hover:text-black">
                Beranda
            </a>
            <a href="{{route('pegawais.index')}}" class="duration-200 hover:text-black">
                Data Pegawai
            </a>
        </ul>

        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="flex items-center gap-2 w-fit fill-yellow-500 bg-white text-yellow-500 font-semibold px-4 py-2 rounded-lg text-lg duration-200 hover:bg-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
                <p>LOGOUT</p>
            </button>
        </form>
        @else
            <a href="{{route('login')}}" class="flex items-center gap-2 fill-yellow-500 bg-white text-yellow-500 font-semibold px-4 py-2 rounded-lg text-lg duration-200 hover:bg-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
                <p>LOGIN</p>
            </a>
        @endauth
    </div>
    {{-- End Of Navbar --}}
</body>
</html>
