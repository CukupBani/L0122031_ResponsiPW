<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navbar')
    <section class="max-w-[1440px] p-6">
        <div class="flex items-center justify-center">
            <form action="{{route('pegawais.update', $pegawai->id)}}" method="POST" enctype="multipart/form-data" class="bg-white border rounded-lg shadow-md w-[35%] p-6 flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Nama</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="text" placeholder="nama pegawai" name="nama" value="{{old('nama', $pegawai->nama)}}" />
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Jenis Kelamin</label>
                    <select class="px-4 py-2 border focus:outline-none rounded-lg" type="text" placeholder="jenis kelamin" name="jenis_kelamin" >
                        <option value="Laki-Laki" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Usia</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="number" placeholder="usia pegawai" name="usia" value="{{old('usia', $pegawai->usia)}}" />
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Departemen</label>
                    <select class="px-4 py-2 border focus:outline-none rounded-lg" name="departemen">
                        @foreach ($departemens as $data)
                            <option value="{{ $data->id }}" {{ old('departemen', $pegawai->id_departemen) == $data->id ? 'selected' : '' }}>{{ $data->nama_departemen }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Alamat</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="text" placeholder="Alamat Lengkap" name="alamat" value="{{old('alamat', $pegawai->alamat)}}" />
                </div>

                <div class="flex gap-3 items-center justify-end">
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg duration-200 hover:bg-black" type="submit">Simpan</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg duraiton-200 hover:bg-black" type="reset">Kosongkan</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
