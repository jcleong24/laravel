<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectListController extends Controller
{
    public function saveSubject(Request $request){
        echo json_encode($request->all());
        $newSubject = new Subject();
        $newSubject->subject_title = $request->sbtitle;
        $newSubject->subject_desc = $request->sbdesc;
        $newSubject->subject_price = $request->sbprice;
        $newSubject->subject_hour = $request->sbhour;
        $newSubject->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubjects' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }
    public function markDelete($id)
    {
        $listSubject = Subject::find($id);
        $listSubject->delete();
        return redirect('mainpage');
    }

    public function markUpdate($id, Request $request)
    {
        $listSubject = Subject::find($id);
        $listSubject->subject_title = $request->sbtitle;
        $listSubject->subject_desc = $request->sbdesc;
        $listSubject->subject_price = $request->sbprice;
        $listSubject->subject_hour = $request->sbhour;
        $listSubject->update();
        return redirect('mainpage');
    }
}
