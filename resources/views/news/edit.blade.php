@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update news item</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('news.update', $news->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input value="{{ $news->title }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input value="{{ $news->description }}"
                        type="description" 
                        class="form-control" 
                        name="description" 
                        placeholder="description" required>
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="active" class="form-label">active</label>
                    <input value="{{ $news->active }}"
                        type="text" 
                        class="form-control" 
                        name="active" 
                        placeholder="active" required>
                    @if ($errors->has('active'))
                        <span class="text-danger text-left">{{ $errors->first('active') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update news</button>
                <a href="{{ route('news.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection