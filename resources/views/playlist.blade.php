@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <h1 class="text-light">Select Playlist</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12">
                    <div class="container-fluid bg-dark pre-scrollable p-0 mb-3" style="height: 100%; border-radius: 1rem;">
                        <ul class="list-group">
                            @for($i = 0; $i < 15; $i++)
                                <li class="list-group-item list-group-item-dark">
                                    <div class="row">
                                        <div class="col-4">
                                            Pic
                                        </div>
                                        <div class="col-8">
                                            Playlist Name
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <a href="\host" class="btn btn-primary btn-main">
                        <h1 class="text-light">Go</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
