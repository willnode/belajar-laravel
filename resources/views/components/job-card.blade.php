@props(['job'])

<div class="bg-white m-auto max-w-sm rounded overflow-hidden shadow-lg">
  <div class="px-6 py-4">
    <h5 class="font-bold text-xl mb-2">{{ $job->title }}</h5>
    <p class="text-gray-700 text-base">{{ $job->description }}</p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <form action="{{ route('jobs.show', $job->slug) }}">
      <x-primary-button>Lamar Pekerjaan Ini</x-primary-button>
    </form>
  </div>
</div>
