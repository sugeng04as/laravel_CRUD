@extends('master')

@section('title', 'Dashboard Penjualan')
@section('content')  

<a href="{{ route('pertanyaan.create') }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Tambah Baru</a>
<table id="data1" class="table table-striped table-bordered" style="width:100%">
    <thead class="thead-dark">                  
        <tr>
            <th style="width: 200px">Opsi</th>
            <th >ID</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tgl dibuat</th>
            <th>Tgl diperbaharui</th>
        </tr>
    </thead>
    <tbody>
     @foreach($data as $p)
        <tr>
            <td>
                <form action="{{ route('pertanyaan.destroy',$p->id) }}" method="POST">
                <a href="{{ route('pertanyaan.edit', $p->id) }}" class="btn btn-primary btn-sm" aria-disabled="true" role="button">Edit</a>
                <a href="{{ route('jawaban.show', $p->id) }}" class="btn btn-primary btn-sm" aria-disabled="true" role="button">Jawab</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary btn-sm" aria-disabled="true" class="btn btn-danger">Hapus</button>
                
             </form>
            </td> 
            <td>{{ $p->id }}</td>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->isi }}</td>
            <td>{{ $p->tgl_in }}</td>
            <td>{{ $p->tgl_up }}</td>
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