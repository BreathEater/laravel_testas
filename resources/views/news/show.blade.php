@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>News Item</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                Title: {{ $news->title }}
            </div>
            <div>
                Description: {{ $news->description }}
            </div>
            <div>
                Active?: {{ $news->active }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('news.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection