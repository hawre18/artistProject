@extends('Admin.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <a class="btn btn-primary" style="position: absolute; left: 5%;" href="{{route('articles.create')}}">ایجاد مقاله</a>
            <h2>لیست مقاله ها</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>تعداد بازدید</th>
                        <th>تعداد کامنت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->index+1}}</td>
                        <td><a href="{{$article->path()}}"></a>{{$article->title}}</td>
                        <td>{{$article->viewCount}}</td>
                        <td>{{$article->commentCount}}</td>
                        <td>
                            <form action="{{route('articles.destroy' . ['id'=>$article->id])}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_token()}}
                                <dev class="btn-group btn-grop-xs">
                                    <a class="btn btn-primary" href="{{route('articles.edit'.['id'=>$article->id])}}">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </dev>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection