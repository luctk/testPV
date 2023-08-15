@extends('templates.layout')
@section('content')
    <form action="{{route('edit-nhanvien',['id'=>request()->route('id')])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tên</span>
            <input type="text" class="form-control" placeholder="tên" name="ten" value="{{$nhanvien->ten}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">email</span>
            <input type="text" class="form-control" placeholder="email" name="email"value="{{$nhanvien->email}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel</span>
            <input type="text" class="form-control" placeholder="tel" name="tel"value="{{$nhanvien->tel}}">
        </div>
        <button type="submit" class="btn btn-primary">sửa</button>
    </form>
@endsection
