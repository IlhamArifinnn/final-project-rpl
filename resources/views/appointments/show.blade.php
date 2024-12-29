<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Janji temu Monitoring') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-6">Detail Appointment</h1>

                <!-- Pasien -->
                <div class="mb-4">
                    <strong>Pasien:</strong>
                    <p class="text-gray-700">{{ $appointment->user->name }}</p>
                </div>

                <!-- Dokter -->
                <div class="mb-4">
                    <strong>Dokter:</strong>
                    <p class="text-gray-700">{{ $appointment->doctor->name }} -
                        {{ $appointment->doctor->specialization }}</p>
                </div>

                <!-- Tanggal -->
                <div class="mb-4">
                    <strong>Tanggal:</strong>
                    <p class="text-gray-700">{{ $appointment->date }}</p>
                </div>

                <!-- Waktu -->
                <div class="mb-4">
                    <strong>Waktu:</strong>
                    <p class="text-gray-700">{{ $appointment->time }}</p>
                </div>

                <!-- Alasan -->
                <div class="mb-4">
                    <strong>Alasan:</strong>
                    <p class="text-gray-700">{{ $appointment->reason ?? 'Tidak ada alasan yang diberikan.' }}</p>
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <strong>Status:</strong>
                    <p class="text-gray-700">{{ $appointment->status }}</p>
                </div>

                <div class="flex justify-start space-x-2">
                    <a href="{{ route('appointments.index') }}"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                    <a href="{{ route('appointments.edit', $appointment->id) }}"
                        class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
