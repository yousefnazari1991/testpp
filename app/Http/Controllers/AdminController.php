<?php

namespace App\Http\Controllers;

use App\Job;
use App\Message;
use App\Rezome;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function GetJobs()
    {
        $jobs=Job::all();
        return view('admins.GetJobs',compact('jobs'));
    }

    public function AddJob(Request $request)
    {
        $newJob=new Job();
        $newJob->title=$request->title;
        if($newJob->save())
            return redirect()->back()->with('flash_message','انجام شد');
        else
            return redirect()->back()->withErrors('خطایی رخ داده است');
    }

    public function ShowReceveRez($id)
    {
        $rez=Rezome::where('jobId',$id)->get();
        return view('admins.showRez',compact('rez'));
    }

    public function openRez($id)
    {
        $r=Rezome::find($id);
        if($r!=null)
        {
            $r->status=1;
            $r->save();
            return view('admins.openRez',compact('r'));
        }
        else
        {
            return redirect()->back()->withErrors('موردی یافت نشد');
        }
    }

    public function OpenORLookChat($id)
    {
        $r=Rezome::find($id);
        if($r!=null)
        {
            $r->commentStatus=!$r->commentStatus;
            if($r->update())
            {
                return redirect()->back()->with('flash_message','انجام شد');
            }
            return redirect()->back()->withErrors('خطایی رخ داده است');
        }
        return redirect()->back()->withErrors('گفتگویی یافت نشد');
    }

    public function SaveMessageAdmin($rezID,Request $request)
    {
        $rez=Rezome::find($rezID);
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

    public function RejectAndLookChat($id,Request $request)
    {
        $r=Rezome::find($id);
        if($r!=null)
        {
            if($request->changeOne==0)
                $r->status=2;
            else
            {
                $r->commentStatus=1;
                $r->status=2;
            }
            if($r->update())
            {
                return redirect()->back()->with('flash_message','انجام شد');
            }
            return redirect()->back()->withErrors('خطایی رخ داده است');
        }
        return redirect()->back()->withErrors('گفتگویی یافت نشد');
    }
    public function AcceptAndLookChat($id,Request $request)
    {
        $r=Rezome::find($id);
        if($r!=null)
        {
            if($request->changeTwo==0)
                $r->status=3;
            else
            {
                $r->commentStatus=1;
                $r->status=3;
            }
            if($r->update())
            {
                return redirect()->back()->with('flash_message','انجام شد');
            }
            return redirect()->back()->withErrors('خطایی رخ داده است');
        }
        return redirect()->back()->withErrors('گفتگویی یافت نشد');
    }
}
