@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" placeholder="PARTY CODE" style="text-transform:uppercase">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <a href="\party\10" class="btn btn-primary btn-main">
                        <h1 class="text-light">GO</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
