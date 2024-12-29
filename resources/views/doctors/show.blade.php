<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">

                <div class="mb-4">
                    <strong>Nama:</strong>
                    <p class="text-gray-700">{{ $doctor->name }}</p>
                </div>

                <div class="mb-4">
                    <strong>Email:</strong>
                    <p class="text-gray-700">{{ $doctor->email }}</p>
                </div>

                <div class="mb-4">
                    <strong>Telepon:</strong>
                    <p class="text-gray-700">{{ $doctor->phone }}</p>
                </div>

                <div class="mb-4">
                    <strong>Spesialisasi:</strong>
                    <p class="text-gray-700">{{ $doctor->specialization }}</p>
                </div>

                <div class="mb-4">
                    <strong>Verifikasi:</strong>
                    <p class="text-gray-700">{{ $doctor->verified ? 'Ya' : 'Tidak' }}</p>
                </div>

                <div class="flex justify-start space-x-2">
                    <a href="{{ route('doctors.index') }}"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                        <a href="{{ route('doctors.edit', $doctor->id) }}"
                            class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Edit</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
