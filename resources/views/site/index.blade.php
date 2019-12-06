@extends('master')

@section('title')
    Acceuil
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($posts as $post)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{ asset('storage/'.$post->image) }}" class="d-block w-100" alt="{{$post->title}}">
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 my-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/'.$post->image) }}" alt="{{$post->title}}">
                        <div class="card-body">
                            <h4 class="card-title">{{$post->title}}</h4>
                            <p class="card-text">{{ Str::limit($post->excerpt,100) }}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel()
        })
    </script>
@endsection