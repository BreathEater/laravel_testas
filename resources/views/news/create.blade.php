@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Add new news</h1>
        <div class="lead">
            Add new news.
        </div>

        <div class="container mt-4">
            <form method="POST" action="{{route('news.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}"
                        type="description" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description" required>
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="active" class="form-label">Active?</label>
                    <input value="1"
                        type="checkbox" 
                        class="form-control" 
                        name="active" 
                         required>
                    @if ($errors->has('newsname'))
                        <span class="text-danger text-left">{{ $errors->first('active') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save news</button>
                <a href="{{ route('news.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection