@extends('layout.master-admin')
@section('title')
Spesialis
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="/admin/spesialis/store" method="POST">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Data Spesialis</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Spesialis</label>
                        <div class="col-sm-10">
                            <input type="text" name="spesialis" class="form-control" placeholder="Nama Spesialis" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-success float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection