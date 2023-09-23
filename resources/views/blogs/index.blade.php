@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($list as $blog)
        <div class="col-lg-3 col-6">
            <div class="card">
                <img class="card-image-top" src="{{ $blog->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->content }}</p>
                </div>
                <div class="card-body">
                    <a class="btn btn-link" 
                        href="{{ route('blogs.show', $blog->slug) }}"
                    > Baca lagi </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection