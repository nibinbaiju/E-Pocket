<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\CourseModel;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $adds = collect(DB::table('course_models')
            ->select('id','course','fee','dur')
            ->get());

       //dd($adds);
        return view('courseview',compact('adds'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $getcourse=request('course');
        $getdur=request('dur');
        $getfee=request('fee');

        echo $getcourse;
        echo $getdur;
        echo $getfee;
     

        $add=new CourseModel();
        $add->course=$getcourse;
        $add->dur=$getdur;
        $add->fee=$getfee;
        $add->save();
        return redirect('/courseview');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add=CourseModel::find($id);
        //dd($add);
        return view('courseedit',compact('add'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        
        $getcourse=request('course');
        $getdur=request('dur');
        $getfee=request('fee');
    
        echo $getcourse;
        echo $getdur;
        echo $getfee;
       
        
        $add=Coursemodel::find($id);
        $add->course=$getcourse;
        $add->dur=$getdur;
        $add->fee=$getfee;
     
       
        
        
        $add->save();
        

        return redirect('/courseview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function coursedestroy($id)
    {
        $user=CourseModel::find($id);

        $user->delete();

        return redirect('/courseview');
    }

   /* public function coursedeleteview($id)
    {
        $add=CourseModel::find($id);
        return view('delete',compact('add'));


    }*/

}
