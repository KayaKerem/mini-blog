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
            @foreach($articles as $article)
                <div class="col-md-8 pb-5">
                    <div class="card">
                        <img class="card-img-top"
                             style="width: 100%;
                        height: 15vw;
                        object-fit: cover;"
                             src="{{$article->thumbnail()}}"
                             alt="Card image cap">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">
                            {{$article->content}}
                            PATH : {{$article->thumbnail()}}

                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>

                    </div>
                    <hr>
                </div>

            @endforeach


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Categories
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                </div>

            </div>
        </div>


    </div>

    </div>
@endsection
