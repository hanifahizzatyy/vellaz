@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron" style="margin-top:100px">
                <h4>Welcome {{ Auth::user()->username}}</h4>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <img src="{{ Auth::user()->profile_picture}}" alt="">
                
            </div>
        </div>
    </div>
</div>
<div>
        <div class="row justify-content-center">
            <ul class="nav nav-tab" role="tablist">
                <li role="presentation" class="active"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Posts</a></li>
                <li role="presentation"><a href="#comments" aria-controls="profile" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="posts">
                @foreach(Auth::user()->posts as $post)
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-md-8">
                                        <div class="page-wrapper" style=" margin-bottom: 20px;">
                                            <h4>{{ $post->title }}</h4>
                                            
                                                
                                                @if($post->image != null)
                                                    <img src="/images/{{ $post->image }}" alt="Image" width="100%" height="600"> 
                                                @endif
                                            <p>{{ $post->body }}</p>
                                        </div>
                                </div>
                        </div>
                </div>
                @endforeach
            </div>
            <div role="tabpanel" class="tab-pane" id="comments">
                
            </div>
        </div>
@endsection
