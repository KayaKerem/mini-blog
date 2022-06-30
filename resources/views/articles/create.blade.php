@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="post"  enctype="multipart/form-data" action="/article/store">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label-lg text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content" class="col-md-4 col-form-label-lg text-md-end">{{ __('Content') }}</label>

                                <div class="col-md-6">
                                    <input id="content" type="content" class="form-control-lg @error('Content') is-invalid @enderror" name="content" required autocomplete="content">

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="category" class="col-md-4 col-form-label-lg text-md-end">{{ __('Category') }}</label>

<!--                                <div class="col-md-6">
                                    <input id="category" type="category" class="form-control @error('category') is-invalid @enderror" name="category" required autocomplete="category">


                                </div>-->
                                <div class="col-md-6">
                                <select name="category" id="category">
                                        @foreach($categories as $cat)
                                        <option value="{{  $cat->category  }}">{{  $cat->category  }}</option>
                                    @endforeach
                                </select>

                                    <span class="px-4"> <a class="" href="/category/create"> Add new category </a></span>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="row mb-3">


                                        <label for="image" class="col-md-4 col-form-label-lg text-md-end ">Thumbnail</label>
                                    <div class="col-md-6 ">
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    @error('image')

                                    <strong style="color:red;">{{ $message }}</strong>

                                    @enderror
                                    </div>
                                </div>



                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Post') }}
                                    </button>


                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
