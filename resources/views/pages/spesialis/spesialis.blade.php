@extends('layout.master-admin')
@section('title')
Spesialis
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Spesialis</h3>
                <a href="/admin/spesialis/create" class="btn btn-outline-success btn-sm float-right"><i class="fa fa-plus mr-1"></i>Add</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Spesialis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($spesialis as $key => $value)
                        <tr>
                            <td>{{$key + 1}}.</td>
                            <td>{{$value->spesialis}}</td>
                            <td>
                                <form action="/admin/spesialis/{{$value->id}}/delete" method="POST">
                                    <a href="/admin/spesialis/{{$value->id}}/info" class="btn btn-outline-primary btn-sm"><i class="fa fa-external-link-alt mr-1"></i>Info</a>
                                    <a href="/admin/spesialis/{{$value->id}}/update"  class="btn btn-outline-warning btn-sm"><i class="fa fa-edit mr-1"></i>Update</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-outline-danger btn-sm">
                                </form>
                            </td>
                        </tr> 
                    @empty
                        <tr>
                            <td></td>
                            <td>Data not found</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Spesialis</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection