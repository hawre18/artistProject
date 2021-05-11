@extends('Admin.master')
@section('ckeditor')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body' ,{
            filebrowserUploadUrl : '/admin/panel/upload-image',
            filebrowserImageUploadUrl :  '/admin/panel/upload-image'
        });
    </script>
@endsection
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <h2>ایجاد درباره ما</h2>
        </div>
       <form class="form-horizontal" action="{{route('aboutme.store')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            @include('Admin.errors')
           <div class="form-group">
               <label for="body" class="control-label">متن اصلی</label>
               <textarea row="5" class="form-control" name="body" id="body" placeholder="متن را وارد کنید" value="{{old('body')}}"></textarea>
           </div>
           <div class="form-group">
                   <label for="phone" class="control-label">شماره تلفن</label>
                   <input type="text" class="form-control" name="phone" id="phone" placeholder="شماره تلفن را انتخاب کنید" value="{{old('phone')}}">
           </div>
           <div class="form-group">
                   <label for="cellPhone" class="control-label">شماره همراه</label>
                   <input type="text" class="form-control" name="cellPhone" id="cellPhone" placeholder="شماره همراه را وارد کنید" value="{{old('cellPhone')}}">
           </div>
           <div class="form-group">
                   <label for="email" class="control-label">ایمیل</label>
                   <input type="text" class="form-control" name="email" id="email" placeholder="ایمیل را وارد کنید" value="{{old('email')}}">
           </div>
           <div class="form-group">
                   <label for="address" class="control-label">آدرس</label>
                   <input type="text" class="form-control" name="address" id="address" placeholder="آدرس را وارد کنید" value="{{old('address')}}">
           </div>
           <div class="form-group">
               <div class="col-sm-6">
                   <label for="images" class="control-label">تصویر شاخص</label>
                   <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را انتخاب کنید" value="{{old('images')}}">
               </div>
           </div>
           <div class="form-group">
               <div class="col-sm-12">
                   <button type="submit" class="btn btn-primary">ارسال</button>
               </div>
           </div>
       </form>
    </main>
@endsection