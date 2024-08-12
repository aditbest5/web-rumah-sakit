@extends('layout.master-admin')
@section('title')
Dokter
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="/admin/dokter/store" method="POST">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Data Dokter</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Dokter</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Dokter" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Spesialis</label>
                        <div class="col-sm-10">
                            <select name="spesialis_id" class="custom-select form-control" required>
                                <option value="">Open this to select</option>
                                @forelse ($spesialis as $key => $value)
                                <option value="{{$value->id}}">{{$value->spesialis}}</option>
                                @empty
                                    
                                @endforelse
                            </select>
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