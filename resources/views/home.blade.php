@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                    <p>Welcome your profile </p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    
                        <div>
                            <img class="rounded-circle" width="100" src="{{ asset('uploads/profile_photo/'.Auth::user()->image_path) }}" alt="">
                        </div>
                        <div>
                            <strong> {{ Auth::user()->name }}</strong>
                        </div>
                        <div>
                            <a class="text-muted" href="{{ route('post') }}">What's on your mind {{ Auth::user()->name }}?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
