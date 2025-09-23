@extends('layouts.main')
@section('content')
<div class="container">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" placeholder="Content" name="content"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" placeholder="image" name="image">
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags">Tags</label>
            <select multiple name="tags[]" id="tags" class="form-control">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection