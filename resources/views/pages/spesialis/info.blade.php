@extends('layout.master-admin')
@section('title')
Spesialis
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Info Data Spesialis</h3>
            </div>
            <div class="card-body">
                <h1>{{$spesialis->spesialis}}</h1>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-warning float-right">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection