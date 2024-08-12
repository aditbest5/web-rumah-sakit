@extends('layout.master-admin')
@section('title')
Temu Janji
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Dokter</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pesan</th>
                            <th>Dokter</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($checkup as $key => $value)
                        <tr>
                            <td>{{$key + 1}}.</td>
                            <td>{{$value->date}}</td>
                            <td>{{$value->message}}</td>
                            <td>{{$value->dokter_id}}</td>
                        </tr>
                            
                    @empty
                        <tr>
                            <td></td>
                            <td>Data not found</td>
                            <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pesan</th>
                            <th>Dokter</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection