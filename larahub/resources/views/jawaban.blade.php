@extends('master')

@section('title', 'Input Jawaban')
@section('content') 
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Untuk Pertanyaan</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pertanyaan ID:</strong>
                    {{ $task->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    {{ $task->judul }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi:</strong>
                    {{ $task->isi }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form id="jawab" action="{{route('jawaban.store') }}" method="POST">
            @csrf
            <div class="col-md-12">
                
                <div class="row form-group">
                    <div class="col-md-2">
                        <label for="isi">Isi Jawaban</label>
                    </div>
                    <div class="col-md-8" style="">
                        <input type="hidden" value="{{ $task->id }}" name="pertanyaan_id">
                        <textarea rows="3" class="form-control" name="isi" id="isi" placeholder="Isi Jawaban" style="width:100%"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>



<table id="data1" class="table table-striped table-bordered" style="width:100%">
    <thead class="thead-dark">                  
        <tr>
            <th style="width: 200px">Opsi</th>
            <th >ID</th>
            <th >Pertanyaan ID</th>
            <th>Isi</th>
            <th>Tgl dibuat</th>
        </tr>
    </thead>
    <tbody>
     @foreach($data as $p)
        <tr>
            <td>
                <form action="{{ route('jawaban.destroy',$p->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-sm" aria-disabled="true" class="btn btn-danger">Hapus</button>
                
             </form>
            </td> 
            <td>{{ $p->id }}</td>
            <td>{{ $p->pertanyaan_id}}</td>
            <td>{{ $p->isi }}</td>
            <td>{{ $p->tgl_in }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop

@push('scripts')
<script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
$(document).ready(function() {
    $('#data1').DataTable( {
       
    } );
} );
</script>

@endpush