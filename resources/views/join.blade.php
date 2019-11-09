@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center" style="height: 100%;">
        <div class="col">
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <div class="form-group">
                        <input id="txtCode" class="form-control form-control-lg" type="text" placeholder="PARTY CODE" style="text-transform:uppercase" onkeydown="return txtBox(event);" maxlength="4">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-sm-4 col-12 m-3">
                    <button id="btnJoin" type="button" onclick="join()" class="btn btn-primary btn-main" disabled="true">
                        <h1 class="text-light">GO</h1>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
