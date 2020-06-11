@extends('layouts.app')

@section('content')
    @if(auth()->user()->per==0)
<div class="container">
    <div class="justify-content-center">
        <div class="row">

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">اطلاعات پروفایل</div>
                    <div class="card-body">
                        <a href="{{route('UploadRez')}}" class="btn btn-primary">آپلود رزومه</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>عنوان شغلی</th>
                                    <th>رزومه</th>
                                    <td>مشاهده وضعیت</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($re as $r)
                                    <tr>
                                        <td>{{$r->job->title}}</td>
                                        <td>{{$r->file}}</td>
                                        <td>
                                            <a href="{{route('ShowStatusRez',$r->id)}}" class="btn btn-primary">مشاهده وضعیت</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid" style="width: 220px;height: 120px;" src="{{asset('img/avatar.webp')}}" >
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('EditProfile') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('تلفن') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ auth()->user()->phone }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ auth()->user()->address }}" required autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="OldPassword" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور') }}</label>

                                <div class="col-md-6">
                                    <input id="OldPassword" type="OldPassword" class="form-control @error('OldPassword') is-invalid @enderror" name="OldPassword" required autocomplete="new-OldPassword">

                                    @error('OldPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="NewPassword" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور') }}</label>

                                <div class="col-md-6">
                                    <input id="NewPassword" type="NewPassword" class="form-control @error('NewPassword') is-invalid @enderror" name="NewPassword" required autocomplete="new-NewPassword">

                                    @error('NewPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="NewPassword-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="NewPassword-confirm" type="NewPassword" class="form-control" name="NewPassword_confirmation" required autocomplete="new-NewPassword">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ویرایش') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @else
        <div class="container">
            <div class="justify-content-center">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('GetJobs')}}" class="btn btn-primary">مشاهده عناوین شغلی</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid" style="width: 220px;height: 120px;" src="{{asset('img/avatar.webp')}}" >
                            </div>
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('تلفن') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ auth()->user()->phone }}" required autocomplete="phone">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس') }}</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ auth()->user()->address }}" required autocomplete="address">

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
