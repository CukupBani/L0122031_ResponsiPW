<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="flex items-center justify-center h-screen p-20">
        <div class="bg-yellow-500 rounded-lg p-10 border w-[35%]">
            <div class="flex flex-col gap-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" class="fill-white" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
                <h1 class="text-5xl font-bold tracking-wide text-white text-center">LOGIN</h1>
            </div>

            <form class="flex flex-col gap-5 mt-8" method="POST" action="{{route('login')}}">
                @csrf

                {{-- Display Errors --}}
                @if ($errors->any())
                    <div class="bg-red-300 text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="flex flex-col gap-1">
                    <label class="font-medium text-white text-lg">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="px-4 py-2 focus:outline-none border border-white bg-transparent rounded-lg text-white"/>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-medium text-white text-lg">Password</label>
                    <input type="password" name="password" class="px-4 py-2 focus:outline-none border border-white bg-transparent rounded-lg text-white"/>
                </div>

                <button class="mt-5 px-4 py-2 font-medium bg-white text-yellow-500 tracking-wide rounded-lg duration-200 hover:bg-black">
                    MASUK
                </button>

                <a href="/register" class="text-[14px] text-white text-center duration-200 hover:text-black">
                    Belum Punya Akun? Register
                </a>
            </form>
        </div>
    </section>
</body>
</html>
