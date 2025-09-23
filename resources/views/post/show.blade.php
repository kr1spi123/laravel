@extends('layouts.main')
@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-light">
            <h2 class="card-title mb-0">{{ $post->id }}. {{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <div class="post-content mb-4">
                <p class="card-text" style="white-space: pre-line;">{{ $post->content }}</p>
            </div>
            
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit me-1"></i>Редактировать
                </a>
                
                <form action="{{ route('post.delete', $post->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" >
                        <i class="fas fa-trash me-1"></i>Удалить
                    </button>
                </form>
                
                <a href="{{ route('post.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i>Назад
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

