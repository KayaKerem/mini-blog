@extends('layouts.app')

@section('content')

    <div class="container pt-5">

        <div class="row">

{{--            <div class="col-12">--}}

{{--                <div class="card mb-3" >--}}
{{--                    <div class="row g-0">--}}
{{--                    <div class="d-flex justify-content-center align-items-center">--}}
{{--                        <div>--}}
{{--                        <img class="card-img-top"--}}
{{--                             style="width: 100%;--}}
{{--                        object-fit: cover;"--}}
{{--                             src="{{$article->thumbnail()}}"--}}
{{--                             >--}}
{{--                        </div>--}}
{{--                        {{$article->thumbnail()}}--}}
{{--                        <h1> {{$article->title}}</h1>--}}
{{--                    </div>--}}


{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
            <div class="col-12">
                <div class="card">
                    <img class="card-img-top"
                         style="width: 100%;
                        height: 20vw;
                        object-fit: cover;"
                         src="http://127.0.0.1:8000/{{$articles->thumbnail()}}"
                         alt="Card image cap">
                    <h1 class="card-title pt-4">{{$articles->title}}</h1>
                    <a href="/article" style="text-decoration: none;color:green;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost" viewBox="0 0 16 16">
                            <path d="M7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414a1 1 0 0 0-2 0zM12.532 5l1.666 2-1.666 2H2V5h10.532z"/>
                        </svg> {{$articles->category}}</a>

                    <a class="card-title pt-2" href="/profile/{{$articles->user->id}}" > {{$articles->user->name}} </a>
                    <p class="card-text pt-3">
                        {{$articles->content}}  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, aperiam consequuntur, cupiditate doloremque expedita facilis id in molestiae molestias non officia placeat repellendus tempora vero! Accusamus illo iure sapiente.
                    </p>

                </div>
                <a href="/article/{{$articles->id}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                    </svg>Add to favorites</a>


            </div>






            </div>

    </div>
@endsection
