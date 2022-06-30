@extends('layouts.app')

@section('content')
    <div class="container pt-5">

        <div class="row">
            <!--        <div class="col-md-8">
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
    </div>-->

            <div class=""></div>

            <div class="col-md-12 pb-5">
                @foreach($articles as $article)
                    <div class="card">
                        <img class="card-img-top"
                             style="width: 100%;
                        height: 15vw;
                        object-fit: cover;"
                             src="http://127.0.0.1:8000/{{$article->thumbnail()}}"
                             alt="Card image cap">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <a href="/article" style="text-decoration: none;color:green;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost" viewBox="0 0 16 16">
                                <path d="M7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414a1 1 0 0 0-2 0zM12.532 5l1.666 2-1.666 2H2V5h10.532z"/>
                            </svg> {{$article->category}}</a>
                        <a class="card-title " href="/" > {{$article->user->name}} </a>
                        <p class="card-text" style="display: block;
                                                        width: 800px;
                                                        overflow: hidden;
                                                        white-space: nowrap;
                                                        text-overflow: ellipsis;">
                            {{$article->content}}

                        </p>
                        <a href="/article/{{$article->id}}" class="btn btn-primary">Read more...</a>

                    </div>
                    <hr>
                @endforeach
            </div>









        </div>
    </div>

    </div>
@endsection
