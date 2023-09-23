@props(['blog'])

<div class="bg-white m-auto max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="{{ $blog->image }}" alt="">
  <div class="px-6 py-4">
    <h5 class="font-bold text-xl mb-2">{{ $blog->title }}</h5>
    <p class="text-gray-700 text-base">{{ $blog->content }}</p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <form action="{{ route('blogs.show', $blog->slug) }}">
      <x-primary-button>Baca Lagi</x-primary-button>
    </form>
  </div>
</div>
