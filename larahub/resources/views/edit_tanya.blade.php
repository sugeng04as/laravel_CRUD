@extends('master')

@section('title', 'Edit Pertanyaan')
@section('content') 
<div class="card">
    <div class="card-body">
    <form id="tanya" action="{{route('pertanyaan.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="judul">Judul</label>
                </div>
                <div class="col-md-8">
                    <input type="hidden" value="{{ $task->id }}" name="id">
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $task->judul }}" placeholder="Judul Pertanyaan">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2">
                    <label for="isi">Isi Pertanyaan</label>
                </div>
                <div class="col-md-8" style="">
                    <textarea rows="3" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan"  style="width:100%">{{ $task->isi}}</textarea>
                </div>
            </div>
            <button  type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
  </form>
 </div>
</div>
@stop