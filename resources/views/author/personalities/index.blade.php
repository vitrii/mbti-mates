@extends('layouts.template')
@section('content')
<!--breadcrumb-->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Dashboard</h5>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/user-dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </nav>
    </div>
  </div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">Personalities Type (Tipe Kepribadian)</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tipe</th>
                        <th>Nama Julukan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($personalities as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->tipe}}</td>
                        <td>{{$data->nama_julukan}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td>
                            <form action="{{route('barang.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('barang.edit',$data->id)}}" class="btn btn-sm btn-warning">
                                    Edit
                                </a> |
                                <a href="{{ route('barang.destroy', $data->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection