@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px">
                <div class="card-header" >Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth::user()->username}}
                    <img src="{{ Auth::user()->profile_picture}}" alt="">
                
                </div>
                </div>
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
                                        <div class="card" style=" margin-bottom: 20px;">
                                            <div class="card-header">{{ $post->title }}</div>
                                            <div class="card-body">
                                                {{ $post->body }}
                                                @if($post->image != null)
                                                    <img src="/images/{{ $post->image }}" alt="Image" width="100%" height="600"> 
                                                @endif
                                            </div>
                                            </div> 
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
