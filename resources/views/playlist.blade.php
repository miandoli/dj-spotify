@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <p class="text-secondary m-0">Party Code</p>
            </div>
            <div class="d-flex justify-content-center">
                <h1 id="code" class="text-light">{{ $code }}</h1>
            </div>
            <div class="d-flex justify-content-center">
                <h1 class="text-light">Select Playlist</h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12">
                    <div class="container-fluid bg-dark pre-scrollable p-0 mb-3" style="height: 100%; border-radius: 1rem;">
                        <ul id="ulPlaylists" class="list-group"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
