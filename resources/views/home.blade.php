@extends('layouts.app')

@section('content')

    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <a href="\host" class="btn btn-primary btn-main">
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
