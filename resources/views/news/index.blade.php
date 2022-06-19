@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>News</h1>
        <div class="lead">
            Manage your news here.
            <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm float-right">Add new news item</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Title</th>
                <th scope="col">Description</th>
                <th scope="col" width="10%">Active</th>
                <th scope="col" width="1%" colspan="3"></th>    
            </tr>
            </thead>
            <tbody>
                @foreach($news as $news)
                    <tr>
                        <th scope="row">{{ $news->id }}</th>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->description }}</td>
                        <td>{{ $news->active }}</td>
                        <td><a href="{{ route('news.show', $news->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                        <td><a href="{{ route('news.edit', $news->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            <form action="{{ route('news.delete', $news->id) }}" method="POST">
                                {{-- <a class="btn btn-info" href="{{ route('news.show', $news->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('news.edit', $news->id) }}">Edit</a> --}}

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>

@endsection