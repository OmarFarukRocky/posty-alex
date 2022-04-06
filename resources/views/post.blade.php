@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">                   
                    <div class="card-body">
                        <form action="{{ route('post') }}" method="post">
                            @csrf
                            <div class="form-group">                               
                                <textarea name="body" class="form-control" placeholder="Post here...."></textarea>
                                @error('body')
                                    <strong class="text-danger">
                                        {{ $message }}
                                    </strong>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Post</button>
                        </form>  
                        
                        <div class="my-3">
                            @foreach ($posts as $post)
                            <h4>Author: {{ $post->user->name }}</h4>
                            <p> Description: {{ $post->body }} <br> <span>Post Created at: {{ $post->created_at->diffForHumans() }}</span></p>
                            
                            @endforeach
                           
                        </div>
                    </div>
                </div>
                {{ $posts->links() }}
            </div>
            
        </div>
    </div>
@endsection