@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('AddJob')}}">
                    @csrf
                    <div class="col-lg-12">
                        <input name="title" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">ثبت عنوان شغلی</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">عنوان های شغلی</div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{$job->title}}</td>
                        <td><a href="{{route('ShowReceveRez',$job->id)}}" class="btn btn-primary">مشاهده رزومه ها</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection