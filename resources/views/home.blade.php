@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <img src="/img/logo.png" class="img-fluid" alt="logo" style="width: 10rem;">
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <a href="\host\playlist" class="btn btn-primary btn-main">
                        <h1 class="text-light">Host</h1>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <a href="\join" class="btn btn-primary btn-main">
                        <h1 class="text-light">Join</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
