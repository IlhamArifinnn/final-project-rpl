<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('child_data.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="dob" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="dob" name="dob" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Berat Badan -->
                    <div>
                        <label for="weight" class="block text-sm font-medium text-gray-700">Berat Badan (kg)</label>
                        <input type="number" id="weight" name="weight" step="0.1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Tinggi Badan -->
                    <div>
                        <label for="height" class="block text-sm font-medium text-gray-700">Tinggi Badan (cm)</label>
                        <input type="number" id="height" name="height" step="0.1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Riwayat Imunisasi -->
                    <div>
                        <label for="immunization_history" class="block text-sm font-medium text-gray-700">Riwayat
                            Imunisasi</label>
                        <textarea id="immunization_history" name="immunization_history"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>

                    <!-- Tombol Simpan -->
                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
