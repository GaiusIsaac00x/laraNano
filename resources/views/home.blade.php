@extends('layouts.app')

@section('content')
<div class="container">
    {{-- create blog post --}}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="my-4">
            <form action="{{ route('blog.create') }}" method="post">
                @csrf
            <div class="my-2">
                <label for="">Blog Title</label> 
                <input type="text" class="w-100 d-block" name="blogtitle">
            </div>
            <div class="my-2">
                <label for="">Blog Summary</label>
                <input type="text" class="w-100 d-block" name="blogsummary">
            </div>
            <div class="my-2">
                <label for="">Blog Post</label>
                <textarea type="text" class="w-100 d-block" name="blogpost"></textarea>
            </div>
            <button class="w-100 btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
