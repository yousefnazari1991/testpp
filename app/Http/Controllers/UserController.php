<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUserRequest;
use App\Http\Requests\UploadRezRequest;
use App\Job;
use App\Message;
use App\Rezome;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Example;
use Psy\Util\Str;

class UserController extends Controller
{
    public function EditProfile(ProfileUserRequest $request)
    {
        $oldPassword=$request->OldPassword;
        if(passwuploadRezoord_verify($oldPassword,auth()->user()->password))
        {
            $user=auth()->user();
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->address=$request->address;
            if($user->update())
            {
                return redirect()->back()->with(['flash_message'=>'ویرایش انجام شد']);
            }
            else
            {
                return redirect()->back()->withInput()->withErrors('خطایی رخ داده است');
            }
        }
        else
        {
            return redirect()->back()->withInput()->withErrors('کلمه عبور قبلی نامعتبر است');
        }
    }

    public function UploadRez()
    {
        $jobs=Job::all();
        return view('users.uploadrez',compact('jobs'));
    }

    public function uploadRezo(UploadRezRequest $request)
    {
        $rez=Rezome::where('jobId',$request->jobId)->where('userId',auth()->user()->id)->count();
        if($rez>0)
            return redirect()->back()->withErrors('شما قبلا برای این عنوان شغلی رزومه ارسال کرده اید');
        if($request->hasFile('fileId'))
        {
            $fileName=time().\Illuminate\Support\Str::random(10).$request->file('fileId')->getClientOriginalName();
            if($request->file('fileId')->move('users/pdf/',$fileName))
            {
                $job=Job::find($request->jobId);
                if($job!=null)
                {
                    $newJ=new Rezome();
                    $newJ->jobId=$request->jobId;
                    $newJ->file=$fileName;
                    $newJ->userId=auth()->user()->id;
                    if($newJ->save())
                    {
                        return redirect()->to(route('home'))->with(['flash_message'=>'انجام شد']);
                    }
                    return redirect()->back()->withErrors('خطایی رخ داده است');
                }
                return redirect()->back()->withErrors('کد عنوان شغلی نا معتبر است');
            }
            return redirect()->back()->withErrors('خطایی در آپلود فایل رخ داده است');
        }
        return redirect()->back()->withErrors('فایلی انتخاب نشده است');
    }
    public function UserProfile( $id)
    {
        $user=User::find($id);
        return response()->json(['userInformation'=>$user],200);
    }

    public function ShowStatusRez($id)
    {
        $r=Rezome::find($id);
        return view('users.ShowStatusRez',compact('r'));
    }

    public function SaveMessage($rezID,Request $request)
    {
        $rez=Rezome::where('id',$rezID)->where('commentStatus',0)->get();
        if($rez!=null)
        {
            $newMessage=new Message();
            $newMessage->message=$request->message;
            $newMessage->userId=auth()->user()->id;
            $newMessage->rezId=$rezID;
            if($newMessage->save())
            {
                return redirect()->back()->with(['flash_message'=>'انجام شد']);
            }
            else
            {
                return redirect()->back()->withErrors('خطایی رخ داده است');
            }
        }
        return redirect()->back()->withInput()->withErrors('موردی یافت نشد');
    }
}
