<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Data Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">

                <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium">Nama</label>
                        <input type="text" id="name" name="name" value="{{ $doctor->name }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" id="email" name="email" value="{{ $doctor->email }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Telepon -->
                    <div>
                        <label for="phone" class="block text-sm font-medium">Telepon</label>
                        <input type="text" id="phone" name="phone" value="{{ $doctor->phone }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Spesialisasi -->
                    <div>
                        <label for="specialization" class="block text-sm font-medium">Spesialisasi</label>
                        <input type="text" id="specialization" name="specialization"
                            value="{{ $doctor->specialization }}" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Verifikasi -->
                    <div>
                        <label for="verified" class="block text-sm font-medium">Verifikasi</label>
                        <select id="verified" name="verified" required
                            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="0" {{ !$doctor->verified ? 'selected' : '' }}>Tidak</option>
                            <option value="1" {{ $doctor->verified ? 'selected' : '' }}>Ya</option>
                        </select>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end space-x-2">
                        <a href="{{ route('doctors.index') }}"
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
