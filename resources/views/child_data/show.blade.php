<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <strong>Nama:</strong>
                    <p class="text-gray-700">{{ $childData->name }}</p>
                </div>

                <div class="mb-4">
                    <strong>Tanggal Lahir:</strong>
                    <p class="text-gray-700">{{ $childData->dob }}</p>
                </div>

                <div class="mb-4">
                    <strong>Berat Badan:</strong>
                    <p class="text-gray-700">{{ $childData->weight }} kg</p>
                </div>

                <div class="mb-4">
                    <strong>Tinggi Badan:</strong>
                    <p class="text-gray-700">{{ $childData->height }} cm</p>
                </div>

                <div class="mb-4">
                    <strong>Riwayat Imunisasi:</strong>
                    <p class="text-gray-700">
                        @if ($childData->immunization_history)
                            {{ $childData->immunization_history }}
                        @else
                            <span class="text-gray-500">Tidak ada riwayat imunisasi.</span>
                        @endif
                    </p>
                </div>

                <div class="flex justify-start space-x-2">
                    <a href="{{ route('child_data.index') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded-md hover:bg-gray-600">
                        Kembali
                    </a>
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'user')
                        <a href="{{ route('child_data.edit', $childData->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-yellow-400 text-white text-sm font-medium rounded-md hover:bg-yellow-500">
                            Edit
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
