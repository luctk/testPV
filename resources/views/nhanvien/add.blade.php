@extends('templates.layout')
@section('content')
    <form action="{{route('add-nhanvien')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tên</span>
            <input type="text" class="form-control" placeholder="tên" name="ten" {{old('ten')}}>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">email</span>
            <input type="text" class="form-control" placeholder="email" name="email" {{old('email')}}>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel</span>
            <input type="text" class="form-control" placeholder="tel" name="tel"{{old('tel')}}>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
