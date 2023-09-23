<x-guest-layout>
  <div class="container my-12 ">
    <div class="grid grid-cols-2 gap-1">
      @foreach ($list as $blog)
        <x-blog-card :blog="$blog" />
      @endforeach
    </div>
  </div>
</x-guest-layout>
