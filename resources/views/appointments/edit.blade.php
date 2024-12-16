<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Janji temu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-6">Edit Appointment</h1>

                <form action="{{ route('appointments.update', $appointment->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Dokter -->
                    <div>
                        <label for="doctor_id" class="block text-sm font-medium">Dokter</label>
                        <select id="doctor_id" name="doctor_id" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}"
                                    {{ $doctor->id == $appointment->doctor_id ? 'selected' : '' }}>
                                    {{ $doctor->name }} - {{ $doctor->specialization }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label for="date" class="block text-sm font-medium">Tanggal</label>
                        <input type="date" id="date" name="date" value="{{ $appointment->date }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Waktu -->
                    <div>
                        <label for="time" class="block text-sm font-medium">Waktu</label>
                        <input type="time" id="time" name="time" value="{{ $appointment->time }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Alasan -->
                    <div>
                        <label for="reason" class="block text-sm font-medium">Alasan</label>
                        <textarea id="reason" name="reason" rows="4"
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $appointment->reason }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium">Status</label>
                        <input type="text" id="status" name="status" value="{{ $appointment->status }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('appointments.index') }}"
                            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>

                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:ring-blue-500 focus:outline-none">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
