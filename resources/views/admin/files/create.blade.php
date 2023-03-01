@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col">

            <h6>Subir imagenes</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.files.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" id="file" accept="image/*">
                            @error('file')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        </form>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection