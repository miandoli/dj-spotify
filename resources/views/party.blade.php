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
                <div class="col-sm-4 col-12 m-3">
                    <div class="form-group">
                        <input id="txtSong" class="form-control form-control-lg" type="text" placeholder="search">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12">
                    <div class="container-fluid bg-dark pre-scrollable p-0" style="height: 100%; border-radius: 1rem;">
                        <ul id="ulSongs" class="list-group"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
