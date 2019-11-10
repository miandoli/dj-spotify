@extends('layouts.app')

@section('content')
    <div class="row" style="height: 100%;">
        <div class="col-sm-6 col-12" style="height: 100%;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="col">
                    <h1 class="text-light text-center">Now Playing</h1>
                    <div class="text-center">
                        <img src="/img/logo.png" class="img-fluid" alt="logo" style="width: 10rem;">
                    </div>
                    <h1 class="text-light text-center">Song Name</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12" style="height: 100%;">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="col">
                    <h1 class="text-light text-center">Queue</h1>
                    <div class="container-fluid bg-dark pre-scrollable p-0" style="height: 100%; width: 75%; border-radius: 1rem;">
                        <ul class="list-group">
                            @for($i = 0; $i < 15; $i++)
                                <li class="list-group-item list-group-item-dark">
                                    <div class="row">
                                        <div class="col-3">
                                            Pic
                                        </div>
                                        <div class="col-7">
                                            Song Name
                                        </div>
                                        <div class="col-2">
                                            <a class="fas fa-plus-square"></a>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
