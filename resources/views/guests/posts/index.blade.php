@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card my-4">
                <div class="card-header"> 
                    <a href="{{ route('guest_show', $post->slug) }}"> {{ $post->title }} </a>
                </div>

                <div class="card-body"> {{ $post->body }} </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
