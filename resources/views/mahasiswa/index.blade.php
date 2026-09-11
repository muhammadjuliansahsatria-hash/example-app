<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="mb-4">
                        <a href="{{ route('mahasiswa.create') }}"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            + Tambah Mahasiswa
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">NIM</th>
                                    <th class="border px-4 py-2">Nama</th>
                                    <th class="border px-4 py-2">Tempat Lahir</th>
                                    <th class="border px-4 py-2">Tanggal Lahir</th>
                                    <th class="border px-4 py-2">Jenis Kelamin</th>
                                    <th class="border px-4 py-2">Program Studi</th>
                                    <th class="border px-4 py-2">Nomor HP</th>
                                    <th class="border px-4 py-2">Email</th>
                                    <th class="border px-4 py-2">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($mahasiswa as $item)
                                    <tr>
                                        <td class="border px-4 py-2">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nim }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nama_mahasiswa }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->tempat_lahir }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->tanggal_lahir }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->jenis_kelamin }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->program_studi }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nomor_hp }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->email }}
                                        </td>

                                        <td class="border px-4 py-2 whitespace-nowrap">

                                            <a href="{{ route('mahasiswa.show', $item->id) }}"
                                               class="text-blue-600 hover:text-blue-900">
                                                Detail
                                            </a>

                                            <a href="{{ route('mahasiswa.edit', $item->id) }}"
                                               class="text-yellow-600 hover:text-yellow-900 ml-2">
                                                Edit
                                            </a>

                                            <form action="{{ route('mahasiswa.destroy', $item->id) }}"
                                                  method="POST"
                                                  class="inline ml-2"
                                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="text-red-600 hover:text-red-900">
                                                    Hapus
                                                </button>

                                            </form>

                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="10"
                                            class="border px-4 py-4 text-center">
                                            Belum ada data mahasiswa.
                                        </td>
                                    </tr>

                                @endforelse
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>