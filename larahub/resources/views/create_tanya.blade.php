@extends('master')

@section('title', 'Buat Pertanyaan')
@section('content') 
<div class="card">
    <div class="card-body">
    <form id="tanya" action="{{route('pertanyaan.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="judul">Judul</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="isi">Isi Pertanyaan</label>
                </div>
                <div class="col-md-8" style="">
                    <textarea rows="3" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan" style="width:100%"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </form>
    </div>
</div>
@stop