@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
           <!--Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Wifi</h1>       
         <a href="{{ route('create-wifi') }}" class="btn btn-sm btn-primary shadow-sm">
         <i class="fas fa-plus fa-sm text-light">Tambah Data</i></a>
     </div>
         @if(session()->has('success'))
        <div class="alert alert-success col-lg-6">
            {{ session()->get('success') }}
        </div>
          @endif

            <div class="row g-3 my-2">
                <div class="row my-5">
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Nama Wifi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                              @foreach ($data as  $Items)
                                <tr>
                                    <th scope="row">{{ $Items->id }}</th>
                                    <td>{{ $Items->maps->lokasi1 }}</td>
                                    <td>{{ $Items->nama_wifi }}</td>
                                    <td>{{ $Items->status }}</td>

                                    <td>
                                     <a href="/wifi/edit/{{ $Items->id }}" class="btn btn-info btn-sm">
                                         <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('destroy-wifi', $Items->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('yakin akan hapus data?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                         {{-- {{ $data->links() }} --}}
                    </div>
                </div>

            </div>
@endsection