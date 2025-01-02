<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
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

                <div class="flex justify-between mb-4">
                    <h3 class="text-lg font-medium">Daftar Dokter</h3>
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                        <a href="{{ route('doctors.create') }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </a>
                    @endif
                </div>

                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border border-gray-200">No.</th>
                                <th class="px-4 py-2 border border-gray-200">Nama</th>
                                <th class="px-4 py-2 border border-gray-200">Email</th>
                                <th class="px-4 py-2 border border-gray-200">Telepon</th>
                                <th class="px-4 py-2 border border-gray-200">Spesialisasi</th>
                                <th class="px-4 py-2 border border-gray-200">Verifikasi</th>
                                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                                    <th class="px-4 py-2 border border-gray-200">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $doctor)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $doctor->name }}</td>
                                    <td class="border px-4 py-2">{{ $doctor->email }}</td>
                                    <td class="border px-4 py-2">{{ $doctor->phone }}</td>
                                    <td class="border px-4 py-2">{{ $doctor->specialization }}</td>
                                    <td class="border px-4 py-2">{{ $doctor->verified ? 'Ya' : 'Tidak' }}</td>
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                                        <td class="border px-4 py-2">

                                            <div class="flex gap-3">

                                                <a href="{{ route('doctors.show', $doctor->id) }}"
                                                    class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>


                                                <a href="{{ route('doctors.edit', $doctor->id) }}"
                                                    class="text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <form action="{{ route('doctors.destroy', $doctor->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus dokter ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">Tidak ada data dokter.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
