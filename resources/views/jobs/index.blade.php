<x-guest-layout>
  <div class="container my-12 ">
    <div class="grid grid-cols-2 gap-1">
      @foreach ($list as $job)
        <x-job-card :job="$job" />
      @endforeach
    </div>
  </div>
</x-guest-layout>
