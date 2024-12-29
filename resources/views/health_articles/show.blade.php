<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Artikel Kesehatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">

                <div class="mb-4">
                    <strong>Judul:</strong>
                    <p class="text-gray-700">{{ $healthArticle->title }}</p>
                </div>

                <div class="mb-4">
                    <strong>Penulis:</strong>
                    <p class="text-gray-700">{{ $healthArticle->author }}</p>
                </div>

                <div class="mb-4">
                    <strong>Konten:</strong>
                    <p class="text-gray-700 whitespace-pre-line">{{ $healthArticle->content }}</p>
                </div>

                <div class="flex justify-start space-x-2">
                    <a href="{{ route('health_articles.index') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-500 text-white text-sm font-medium rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Kembali
                    </a>
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                        <a href="{{ route('health_articles.edit', $healthArticle->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-yellow-400 text-white text-sm font-medium rounded-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            Edit
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
