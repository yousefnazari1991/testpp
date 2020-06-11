@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        عنوان شغلی:<div>{{$r->job->title}}</div>
                        دانلود رزومه:<div><a href="{{asset('users/pdf/'.$r->file)}}">{{$r->file}}</a></div>
                        وضعیت:<div>{{$r->GetStatus()}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">ارسال پیام</div>
                    <div class="card-header">
                        <form method="post" class="form-inline" action="{{route('OpenORLookChat',$r->id)}}">
                            @csrf
                            <button type="submit" class="btn btn-primary">قفل/بازکردن گفتگو</button>
                        </form><br>
                        <form method="post" class="form-inline" action="{{route('RejectAndLookChat',$r->id)}}">
                            @csrf
                            <select name="changeOne" class="form-control">
                                <option value="0">رد کردن رزومه</option>
                                <option value="1">رد کردن رزومه وقفل گفتگو</option>
                            </select>
                            <button type="submit" class="btn btn-primary">ثبت </button>
                        </form><br>
                        <form method="post" class="form-inline" action="{{route('AcceptAndLookChat',$r->id)}}">
                            @csrf
                            <select name="changeTwo" class="form-control">
                                <option value="0">تایید کردن رزومه</option>
                                <option value="1">تایید کردن رزومه وقفل گفتگو</option>
                            </select>
                            <button type="submit" class="btn btn-primary">ثبت </button>
                        </form>
                    </div>
                    <div class="card-body">
                        @if($r->commentStatus==1)
                            <div class="text-danger">گفتگو برای کاربر ارسال کننده رزومه قفل می باشد</div>
                        @endif
                        <form method="post" action="{{route('SaveMessageAdmin',$r->id)}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea name="message" class="form-control">
                                        متن پیام خود را اینجا بنویسید
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">ثبت پیام</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">پیام های ارسالی و دریافتی</div>
                    <div class="card-body">
                        @foreach($r->Messages as $message)
                            <div class="card">
                                <div class="card-header">تاریخ و زمان ثبت:{{$message->created_at}}</div>
                                <div class="card-header">نویسنده:{{$message->User->FirstName.'-'.$message->User->LastName.'-'.$message->User->GetRole()}}</div>
                                <div class="card-body">{{$message->message}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection