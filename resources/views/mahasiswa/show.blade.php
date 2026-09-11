<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
                <p><strong>Nama:</strong> {{ $mahasiswa->nama_mahasiswa }}</p>
                <p><strong>Tempat Lahir:</strong> {{ $mahasiswa->tempat_lahir }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $mahasiswa->tanggal_lahir }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $mahasiswa->jenis_kelamin }}</p>
                <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
                <p><strong>Program Studi:</strong> {{ $mahasiswa->program_studi }}</p>
                <p><strong>Nomor HP:</strong> {{ $mahasiswa->nomor_hp }}</p>
                <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>

                <div class="mt-6">

                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                       class="bg-yellow-500 text-white px-4 py-2 rounded">
                        Edit
                    </a>

                    <a href="{{ route('mahasiswa.index') }}"
                       class="ml-2 text-gray-600">
                        Kembali
                    </a>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>