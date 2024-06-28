<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="flex items-center justify-center h-screen">
        <div class="flex flex-col items-center justify-center w-[30%] rounded-lg shadow-lg border p-6">

            @if(session('success'))
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" class="w-48 h-48 fill-green-500" xmlns="http://www.w3.org/2000/svg"><path d="m11.998 2.005c5.517 0 9.997 4.48 9.997 9.997 0 5.518-4.48 9.998-9.997 9.998-5.518 0-9.998-4.48-9.998-9.998 0-5.517 4.48-9.997 9.998-9.997zm0 1.5c-4.69 0-8.498 3.807-8.498 8.497s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.497-8.497-8.497zm-5.049 8.886 3.851 3.43c.142.128.321.19.499.19.202 0 .405-.081.552-.242l5.953-6.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-5.453 5.962-3.298-2.938c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557z" fill-rule="nonzero"/></svg>
                <h1 class="text-green-500 font-bold text-4xl mt-2 text-center">{{session('success')}}</h1>

                <a href="/login">
                    <button class="mt-8 px-4 py-3 bg-yellow-500 text-white rounded-lg font-semibold text-lg duration-200 hover:bg-black">
                        Masuk Sekarang
                    </button>
                </a>
            @endif

            @if(session('error'))
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" class="w-48 h-48 fill-red-500" xmlns="http://www.w3.org/2000/svg"><path d="m11.998 2.005c5.517 0 9.997 4.48 9.997 9.997 0 5.518-4.48 9.998-9.997 9.998-5.518 0-9.998-4.48-9.998-9.998 0-5.517 4.48-9.997 9.998-9.997zm0 1.5c-4.69 0-8.498 3.807-8.498 8.497s3.808 8.498 8.498 8.498 8.497-3.808 8.497-8.498-3.807-8.497-8.497-8.497zm-5.049 8.886 3.851 3.43c.142.128.321.19.499.19.202 0 .405-.081.552-.242l5.953-6.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-5.453 5.962-3.298-2.938c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557z" fill-rule="nonzero"/></svg>
                <h1 class="text-red-500 font-bold text-4xl mt-2 text-center">{{session('error')}}</h1>

                <a href="/register">
                    <button class="mt-8 px-4 py-3 bg-blue-500 text-white rounded-lg font-semibold text-lg duration-200 hover:bg-black">
                        Ulangi Register
                    </button>
                </a>
            @endif

        </div>
    </section>
</body>
</html>
