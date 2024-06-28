<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navbar')
    <section class="max-w-[1440px] p-6">
        <div class="flex flex-col items-center justify-center">

            {{-- Add Pegawai Button --}}
            @auth
                <a href="{{route('pegawais.create')}}" class="w-[80%]">
                    <button class="flex items-center gap-2 w-fit px-4 py-2 rounded-lg shadow-md bg-green-600 text-white fill-white font-medium duration-200 hover:bg-black">
                        <p class="text-lg">Tambah</p>
                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" width='24' height='24' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm0 1.5c-4.69 0-8.497 3.808-8.497 8.498s3.807 8.497 8.497 8.497 8.498-3.807 8.498-8.497-3.808-8.498-8.498-8.498zm-.747 7.75h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill-rule="nonzero"/></svg>
                    </button>
                </a>
            @endauth
            {{-- End of Pegawai Button --}}

            {{-- Table Content --}}
            <table class="w-[80%] mt-3">
                <thead class="bg-yellow-500 text-white">
                    <tr>
                        <th class="border py-2 px-3">Nama</th>
                        <th class="border py-2 px-3">Jenis Kelamin</th>
                        <th class="border py-2 px-3">Usia</th>
                        <th class="border py-2 px-3">Departemen</th>
                        <th class="border py-2 px-3">Alamat</th>
                        <th class="border py-2 px-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pegawais as $pegawai)
                        <tr class="font-medium">
                            <td class="border p-2">{{$pegawai->nama}}</td>
                            <td class="border p-2">{{$pegawai->jenis_kelamin}}</td>
                            <td class="border p-2">{{$pegawai->usia}}</td>
                            <td class="border p-2">{{$pegawai->departemen->nama_departemen}}</td>
                            <td class="border p-2">{{$pegawai->alamat}}</td>
                            <td class="border p-2 flex items-center justify-center">
                                <form class="flex gap-3" onsubmit="return confirm('Apakah Anda Yakin?');" action="{{route('pegawais.destroy', $pegawai->id)}}" method="POST">
                                    @auth
                                        <a href="{{route('pegawais.edit', $pegawai->id)}}" class="px-4 text-[14px] py-2 rounded-lg shadow-md bg-green-600 text-white font-medium duration-200 hover:bg-black">
                                            EDIT
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-[14px] px-4 py-2 rounded-lg shadow-md bg-red-600 text-white font-medium duration-200 hover:bg-black">HAPUS</button>
                                    @else
                                        <p class="bg-red-300 text-red-600 p-2 rounded-lg text-[14px] tracking-wide">Anda Harus Login</p>
                                    @endauth
                                </form>
                            </td>
                        </tr>

                    @empty
                        <div class="bg-gray-400 font-semibold text-[18px] w-[70%] rounded-lg p-3 text-center text-white mt-5">
                            Data Pegawai Belum Tersedia!
                        </div>

                    @endforelse
                </tbody>
            </table>
            {{-- End Of Table Content --}}
        </div>
    </section>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>
</body>
</html>
