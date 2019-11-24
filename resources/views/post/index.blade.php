@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card" style="margin-top:100px;">
                            <div class="card-header">Home</div>
                            <div class="card-body">
                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                            
                                <form action="" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                        <input type="text" name="title" class="form-control" placeholder="Enter your post title">
                                                        @if ($errors->has('title'))
                                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="image">
                                                </div> 
                                                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">   
                                                        <textarea name="body" cols="80" rows="8" class="form-control" placeholder="Enter your post"></textarea>
                                                        @if ($errors->has('body'))
                                                            <small class="text-danger">{{ $errors->first('body') }}</small>
                                                        @endif    
                                                </div>
                                                <input type="submit" value="Post" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card" style=" margin-bottom: 20px;">
                                <div class="card-header">{{ $post->title }}</div>
                                <div class="card-body">
                                    @if($post->image != null)
                                        <img src="/images/{{ $post->image }}" alt="Image" width="100%" height="600"> 
                                    @endif
                                    {{ $post->body }}
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-link">Like</a>
                                    <a href="#" class="btn btn-link">Dislike</a>
                                    <a href="#" class="btn btn-link">Comments</a>
                                </div>
                                </div> 
                            </div>
                    </div>
            </div>
    </div>
    @endforeach
@endsection