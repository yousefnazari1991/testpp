@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">رزومه های دریافتی</div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>از</th>
                        <th>تاریخ و زمان ارسال</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rez as $r)
                        <tr>
                            <td>{{$r->User->FirstName}}</td>
                            <td>{{$r->created_at}}</td>
                            <td>
                                <a href="{{route('openRez',$r->id)}}" class="btn btn-primary">مشاهده</a>
                                <a href="{{asset('users/pdf/'.$r->file)}}" class="btn btn-primary">دانلود رزومه</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection