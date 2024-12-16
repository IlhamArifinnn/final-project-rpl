<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Data Anak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('child_data.update', $childData->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name" value="{{ $childData->name }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="dob" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="dob" name="dob" value="{{ $childData->dob }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Berat Badan -->
                    <div>
                        <label for="weight" class="block text-sm font-medium text-gray-700">Berat Badan (kg)</label>
                        <input type="number" id="weight" name="weight" step="0.1"
                            value="{{ $childData->weight }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Tinggi Badan -->
                    <div>
                        <label for="height" class="block text-sm font-medium text-gray-700">Tinggi Badan (cm)</label>
                        <input type="number" id="height" name="height" step="0.1"
                            value="{{ $childData->height }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Riwayat Imunisasi -->
                    <div>
                        <label for="immunization_history" class="block text-sm font-medium text-gray-700">Riwayat
                            Imunisasi</label>
                        <textarea id="immunization_history" name="immunization_history"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ $childData->immunization_history }}</textarea>
                    </div>

                    <!-- Tombol Update -->
                    <div class="flex justify-end">
                        <a href="{{ route('child_data.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-2">
                            Kembali
                        </a>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
