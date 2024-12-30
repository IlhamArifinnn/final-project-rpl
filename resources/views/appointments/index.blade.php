<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Janji Temu') }}
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
                    <h3 class="text-lg font-medium">Daftar Janji Temu</h3>
                    {{-- @if (Auth::user()->role == 'admin' || Auth::user()->role == 'user') --}}
                    <a href="{{ route('appointments.create') }}"
                        class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                        <i class="fa-solid fa-plus"></i> Tambah
                    </a>
                    {{-- @endif --}}

                </div>

                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border border-gray-200">No.</th>
                            <th class="px-4 py-2 border border-gray-200">Pasien</th>
                            <th class="px-4 py-2 border border-gray-200">Dokter</th>
                            <th class="px-4 py-2 border border-gray-200">Tanggal</th>
                            <th class="px-4 py-2 border border-gray-200">Waktu</th>
                            <th class="px-4 py-2 border border-gray-200">Status</th>
                            <th class="px-4 py-2 border border-gray-200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($appointments as $appointment)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $appointment->user->name }}</td>
                                <td class="border px-4 py-2">{{ $appointment->doctor->name }}</td>
                                <td class="border px-4 py-2">{{ $appointment->date }}</td>
                                <td class="border px-4 py-2">{{ $appointment->time }}</td>
                                <td class="border px-4 py-2 ">{{ $appointment->status }}</td>
                                <td class="border px-4 py-2 flex space-x-2">

                                    {{-- tombol show --}}
                                    <a href="{{ route('appointments.show', $appointment->id) }}"
                                        class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded ">
                                        <i class="fa fa-eye " aria-hidden="true"></i>
                                    </a>

                                    {{-- tombol edit --}}
                                    <a href="{{ route('appointments.edit', $appointment->id) }}"
                                        class="text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                    {{-- tombol delete --}}
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus appointment ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">Tidak ada data monitoring.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
