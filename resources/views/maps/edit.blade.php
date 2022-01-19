@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
    <!--Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Surat Keluar</h1>       
     </div>

     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <i>{{ $error }}</i>
                @endforeach
            </ul>
        </div>  
     @endif

<div class="card shadow align-items-center" style="width: 30rem;">
    <div class="card-body">
        <form action="{{ route('update-maps',  $item->id) }}" method="post">
             @method('PUT')
         @csrf
        <div class="row">
          <div class="col">
                <div class="form-group mb-3">
                    <label for="Lokasi 1">Lokasi 1</label>
                    <input type="number" class="form-control" name="lokasi1" placeholder="Lokasi 1" value="{{ $item->lokasi1 }}">
                </div>
                <div class="form-group mb-3">
                    <label for="Lokasi 2">Lokasi 2</label>
                    <input type="number" class="form-control" name="lokasi2" placeholder="Lokasi 2" value="{{ $item->lokasi2 }}">
                </div>
                            
              <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">I agree to the Terms and Conditions of this Website.</label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
