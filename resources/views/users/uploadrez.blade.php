@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('UploadRezo')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <select class="form-control" name="jobId">
                                    @foreach($jobs as $job)
                                        <option value="{{$job->id}}">{{$job->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5">عنوان شغلی</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <input type="file" class="form-control" name="fileId" accept="application/pdf">
                            </div>
                            <div class="col-lg-5">رزومه</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">ثبت</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>
    </div>
@endsection