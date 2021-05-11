@extends('Admin.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <h2>ایجاد مقاله</h2>
        </div>
       <form class="form-horizontal" action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            @include('Admin.errors')
           <div class="form-group">
               <label for="title" class="control-label">عنوان مقاله</label>
               <input type="text" class="form-control" name="title" id="title" placeholder="عنوان مقاله را وارد کنید" value="{{old('title')}}">
           </div>
           <div class="form-group">
               <label for="description" class="control-label">توضیحات کوتاه</label>
               <textarea row="5" class="form-control" name="description" id="description" placeholder="اتوضیحات کوتاه مقاله را وارد کنید">{{old('description')}}</textarea>
           </div>
           <div class="form-group">
               <label for="body" class="control-label">متن مقاله</label>
               <textarea row="5" class="form-control" name="body" id="body" placeholder="متن را وارد کنید" value="{{old('body')}}"></textarea>
           </div>
           <div class="form-group">
               <div class="col-sm-6">
                   <label for="images " class="control-label">تصویر مقاله</label>
                   <input type="file" class="form-control" name="images" id="images  " placeholder="تصویر مقاله را انتخاب کنید" value="{{old('images')}}">
               </div>
           </div>
           <div class="form-group">
               <div class="col-sm-6">
                   <label for="tags" class="control-label">تگ ها</label>
                   <input type="text" class="form-control" name="tags" id="tags" placeholder="تگ های مقاله را وارد کنید" value="{{old('tags')}}">
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