<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label>NIM</label>
                        <input type="text"
                               name="nim"
                               value="{{ old('nim', $mahasiswa->nim) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Nama Mahasiswa</label>
                        <input type="text"
                               name="nama_mahasiswa"
                               value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Tanggal Lahir</label>
                        <input type="date"
                               name="tanggal_lahir"
                               value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Jenis Kelamin</label>

                        <select name="jenis_kelamin"
                                class="w-full border-gray-300 rounded">

                            <option value="Laki-laki"
                                {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>

                            <option value="Perempuan"
                                {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>

                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Alamat</label>

                        <textarea name="alamat"
                                  class="w-full border-gray-300 rounded">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label>Program Studi</label>

                        <input type="text"
                               name="program_studi"
                               value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Nomor HP</label>

                        <input type="text"
                               name="nomor_hp"
                               value="{{ old('nomor_hp', $mahasiswa->nomor_hp) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Email</label>

                        <input type="email"
                               name="email"
                               value="{{ old('email', $mahasiswa->email) }}"
                               class="w-full border-gray-300 rounded">
                    </div>

                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        Update
                    </button>

                    <a href="{{ route('mahasiswa.index') }}"
                       class="ml-2 text-gray-600">
                        Kembali
                    </a>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>