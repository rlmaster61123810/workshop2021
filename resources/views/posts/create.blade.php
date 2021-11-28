@extends('layouts.app')
@section('content')
    <hr>
    <div class="container">
        <div class="panel-heading">
            <h4 class="panel-title">
                เพิ่มรายการ
            </h4>
        </div>
        <div class="panel-body">
            <form action="/store" method="post" role="form">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="inputName">เลือกรูปภาพ :: </label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputTitle">กรอกชื่อหัวข้อ :: </label>
                    <input type="text" name="title" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDescription">กรอกคำอธิบาย :: </label>
                    <input type="text" name="description" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDetail">กรอกรายละเอียด :: </label>
                    <input type="text" name="detail" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
            </form>
        </div>
    </div>
@endsection
