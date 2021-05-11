@extends('Admin.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <a class="btn btn-primary" style="position: absolute; left: 5%;" href="{{route('aboutme.create')}}">ایجاد درباره ما</a>
            <h2>درباره ما</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>متن اصلی</th>
                    <th>شماره تلفن</th>
                    <th>شماره همراه</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artist as $artis)
                    <tr>
                        <td><a href="#"></a>{{$artis->body}}</td>
                        <td>{{$artis->phone}}</td>
                        <td>{{$artis->cellPhone}}</td>
                        <td>
                            <form action="{{route('aboutme.destroy' ,[$artis->id])}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                                <dev class="btn-group btn-grop-xs">
                                    <a class="btn btn-primary" href="{{route('aboutme.edit',$artis->id)}}">ویرایش</a>
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