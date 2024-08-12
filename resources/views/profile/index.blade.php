@extends('layout.master-admin')
@section('title')
    Update Profil
@endsection
@section('content')
<form action="/pasien/{{$detailPasien->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Umur</label>
      <input type="number" name="umur" value="{{$detailPasien->umur}}" class="form-control">
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" value="{{$detailPasien->alamat}}" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label>Riwayat Penyakit</label>
      <input type="text" name="penyakit" value="{{$detailPasien->penyakit}}" class="form-control">
    </div>
    @error('penyakit')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection