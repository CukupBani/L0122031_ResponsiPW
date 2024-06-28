<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('navbar')
    <section class="max-w-[1440px] p-6">
        <div class="flex items-center justify-center">
            <form action="{{route('pegawais.store')}}" method="POST" enctype="multipart/form-data" class="w-[35%] border rounded-lg shadow-md p-6 flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Nama</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="text" placeholder="Masukkan Nama Pegawai" name="nama" value="{{old('nama')}}" />
                    @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Jenis Kelamin</label>
                    <select class="px-4 py-2 border focus:outline-none rounded-lg" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin')}}">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Usia</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="number" placeholder="Masukkan Usia Pegawai" name="usia" value="{{old('usia')}}" />
                    @error('usia')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Departemen</label>
                    <select class="px-4 py-2 border focus:outline-none rounded-lg" name="departemen">
                        @foreach ($departemens as $data)
                            <option value="{{$data->id}}">{{$data->nama_departemen}}</option>
                        @endforeach
                    </select>
                    @error('departemen')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-semibold text-[18px]">Alamat</label>
                    <input class="px-4 py-2 border focus:outline-none rounded-lg" type="text" placeholder="Alamat Lengkap" name="alamat" value="{{old('alamat')}}" />
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-end gap-3">
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg duration-200 hover:bg-black" type="submit">Simpan</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg duration-200 hover:bg-black" type="reset">Kosongkan</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
