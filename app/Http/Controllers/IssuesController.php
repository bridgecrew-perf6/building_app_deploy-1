<?php

namespace App\Http\Controllers;

use App\Imports\IssuesImport;
use App\Issue;
use Illuminate\Http\Request;
use App\Mail\IssueRequstSubmitted;
use Auth;
use App\user;
use Maatwebsite\Excel\Facades\Excel;
use Alert;

class IssuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['test']);
         //should do login if not goto login page except go test without login

    }
    public function list()
    {
        //$data['issues'] = Issue::all();
        $data['users'] = User::all();
        return view('issues.list',$data);
    }
    //
    public function store(Request $request)
    {

        $issue = new Issue();
         $issue->name = $request->name;
         $issue->emmil = $request->emmil;
         $issue->phone = $request->phone;
         $issue->msg = $request->msg;
         $issue->building_number = $request->building_number;
         $issue->appartment_number = $request->appartment_number;
         $issue->user_id = Auth::user()->id; //
         $issue->attchament = null;
         $issue->save();

        \Mail::to($issue->emmil)->send(new IssueRequstSubmitted($issue));
         return "recorde crated succssfuly";




        }

        public function test()
        {
            return " This is test function";
        }


        public function importFromExcel(Request $request)
        {

         //validate excl file

            Excel::import(new IssuesImport, $request->excelFile);
            Alert::success('Successfully', 'Go');
            return back();


        }
}




