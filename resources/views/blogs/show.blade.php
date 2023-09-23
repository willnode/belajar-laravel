@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-8 card">
            <img class="w-100" src="{{ $blog->image }}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

