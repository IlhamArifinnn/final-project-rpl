<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-lg font-medium">Data Anak</h3>

                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'user')
                            <a href="{{ route('child_data.create') }}"
                                class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                                <i class="fa-solid fa-plus"></i> Tambah
                            </a>
                        @endif

                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                                onclick="this.parentElement.remove();">
                                <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.586 7.066 4.652a1 1 0 00-1.414 1.414l2.934 2.934-2.934 2.934a1 1 0 001.414 1.414L10 10.414l2.934 2.934a1 1 0 001.414-1.414L11.414 9.348l2.934-2.934z" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <table class="table-auto w-full">
                        <thead>
                            <tr class="text-left bg-gray-100">
                                <th class="px-4 py-2 border border-gray-200">No.</th>
                                <th class="px-4 py-2 border border-gray-200">Nama</th>
                                <th class="px-4 py-2 border border-gray-200">Tanggal Lahir</th>
                                <th class="px-4 py-2 border border-gray-200">Berat Badan</th>
                                <th class="px-4 py-2 border border-gray-200">Tinggi Badan</th>
                                <th class="px-4 py-2 border border-gray-200">Riwayat Imunisasi</th>
                                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'user')
                                    <th class="px-4 py-2 border border-gray-200">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($childData as $child)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $child->name }}</td>
                                    <td class="border px-4 py-2">{{ $child->dob }}</td>
                                    <td class="border px-4 py-2">{{ $child->weight }} kg</td>
                                    <td class="border px-4 py-2">{{ $child->height }} cm</td>
                                    <td class="border px-4 py-2">{{ $child->immunization_history }}</td>
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'user')
                                        <td class="border px-4 py-2 flex space-x-2">

                                            <!-- Tombol show -->
                                            <a href="{{ route('child_data.show', $child->id) }}"
                                                class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <!-- Tombol Update -->
                                            <a href="{{ route('child_data.edit', $child->id) }}"
                                                class="text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <!-- Tombol Delete -->
                                            <form action="{{ route('child_data.destroy', $child->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">
                                        Tidak ada data anak yang ditemukan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
