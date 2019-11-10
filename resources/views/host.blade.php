@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <div class="form-group">
                        <input id="txtSong" class="form-control form-control-lg" type="text" placeholder="search">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12">
                    <div class="container-fluid bg-dark pre-scrollable p-0" style="height: 100%; border-radius: 1rem;">
                        <ul class="list-group">
                            @for($i = 0; $i < 15; $i++)
                                <li class="list-group-item list-group-item-dark">
                                    <div class="row">
                                        <div class="col-5">
                                            Song Name
                                        </div>
                                        <div class="col-3">
                                            Artist
                                        </div>
                                        <div class="col-2">
                                            Time
                                        </div>
                                        <div class="col-2">
                                            <a class="fas fa-plus-square"></a>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="container-fluid bg-dark pre-scrollable p-0" style="height: 100%; border-radius: 1rem;">
                        <ul class="list-group">
                            @for($i = 0; $i < 15; $i++)
                                <li class="list-group-item list-group-item-dark">
                                    <div class="row">
                                        <div class="col-5">
                                            Song Name
                                        </div>
                                        <div class="col-3">
                                            Artist
                                        </div>
                                        <div class="col-2">
                                            Time
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
    <button onclick="getUser()">click me</button>
@endsection
