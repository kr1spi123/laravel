@extends('layouts.main')
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Все посты</h2>
        <a href="{{ route('post.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Добавить пост
        </a>
    </div>
    
    <div class="list-group">
        @foreach ($posts as $post)
        <a href="{{ route('post.show', $post->id) }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $post->title }}</h5>
                <small class="text-muted">#{{ $post->id }}</small>
            </div>
            <p class="mb-1 text-muted">
                {{ $post->content }}
            </p>
        </a>
        @endforeach
        <div>
            {{ $posts->links() }}
        </div>
    </div>
@endsection