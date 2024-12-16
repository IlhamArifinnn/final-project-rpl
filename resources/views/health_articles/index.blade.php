<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel Kesehatan') }}
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
                    <h3 class="text-lg font-medium">Daftar Artikel</h3>

                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                        <a href="{{ route('health_articles.create') }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                            <i class="fa-solid fa-plus"></i> Tambah
                        </a>
                    @endif

                </div>

                {{-- <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">No.</th>
                            <th class="px-4 py-2">Judul</th>
                            <th class="px-4 py-2">Penulis</th>
                            <th class="px-4 py-2">Konten</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $article->title }}</td>
                                <td class="border px-4 py-2">{{ $article->author }}</td>
                                <td class="border px-4 py-2">{{ $article->content }}</td>
                                <td class="border px-4 py-2 flex space-x-2">

                                    <a href="{{ route('health_articles.show', $article->id) }}"
                                        class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <a href="{{ route('health_articles.edit', $article->id) }}"
                                        class="text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>

                                    <form action="{{ route('health_articles.destroy', $article->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
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
                                <td colspan="4" class="text-center py-4">Tidak ada artikel.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table> --}}

                @foreach ($articles as $article)
                    <article class="py-8 max-w-screen-md border-b border-gray-300">
                        {{-- <a href="/posts/{{ $post['slug'] }}" class="hover:underline"> --}}
                        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $article->title }}</h2>
                        </a>
                        <div class="text-base text-gray-500">
                            <a href="#">{{ $article->author }}</a> | {{ $article->created_at->format('j F Y') }}
                        </div>
                        {{-- <p class="my-4 font-light">{{ Str::limit($article->content, 140) }}</p> --}}
                        <p class="my-4 font-light">{{ $article->content }}</p>

                        <div class="flex gap-3">
                            <a href="{{ route('health_articles.show', $article->id) }}"
                                class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>

                            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'doctor')
                                <a href="{{ route('health_articles.edit', $article->id) }}"
                                    class="text-white bg-yellow-400 hover:bg-yellow-500 px-3 py-1 rounded">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>

                                <form action="{{ route('health_articles.destroy', $article->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
