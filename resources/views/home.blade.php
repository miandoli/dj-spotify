@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
>>>>>>> luke-develop
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
</div>
>>>>>>> luke-develop
@endsection
