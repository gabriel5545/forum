<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->get();
        // $threads = DB::table("threads")->get(); way numer 2
        /*   sami hluturinn
        $threads = DB::select(" select * from threads" );
              */
    	return view('threads.index', compact('threads'));
  
    }
    public function create() 
    {
    	return view('threads.create');
    }
    public function show($id)
    {
        $thread = Thread::find($id);
        // same shit X2
        // $thread = DB::table("threads")->where("id", $id)->first();
        // same shit
    	// $thread = DB::select("select * from threads where id =?", [$id]);
        
    	return view('threads.show', compact("thread"));
    }

    public function store(Request $request)
    {
        $thread = new Thread;
        $thread->title = $request->title;
        $thread->context = $request->context; 
        $thread->user_id = 1;
        $thread->save();

        return redirect("/threads");
    }
}

/*
 Thread::all()->->orderBy('title', 'desc')
*/