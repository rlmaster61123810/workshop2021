extends('layouts.app')
extends 'container'
@section('content')
@section('create')
    <hr>
    <div class="container-lg">
        <div class="panel-heading">
            <h4 class="panel-title">
                เพิ่มรายการ
            </h4>
        </div>
        <div class="panel-body">
            <form action="/store" method="post" role="form">
                @csrf
                <div class="form-group">
                    <form>
                        <div class="form-group">
                            <label for="inputName">เลือกรูปภาพ :: </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="form-group">
                    <label for="inputName">กรอกชื่อหัวข้อ :: </label>
                    <input type="text" name="name" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputName">กรอกคำอธิบาย :: </label>
                    <input type="text" name="name" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputName">กรอกคำอธิบาย :: </label>
                    <input type="text" name="name" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
            </form>
        </div>
    </div>

@endsection
