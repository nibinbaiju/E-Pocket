<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentModel;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mmm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatedues($getamt)
    {    
      
        }
    


    public function stores(Request $request)
    {
        $getname=request('sname');
        $getcourse = request('scourse');
        $getamt=request('payamount');
        //$getcurrent_date_time = Carbon::now()->toDateTimeString();

        echo $getname;
        echo "<br>";
        echo $getcourse;
       //echo "<br>";
      //  echo $getcurrent_date_time;
          
        $pay = new PaymentModel();
       
        $pay->name=$getname;
        $pay->course=$getcourse;
        $pay->fee=$getamt;
       
        
        $pay->save();

        $logid = $request->session()->get('loggeduser');

        $stufdue = collect(DB::table('register_models')
        ->join('studentadd_models', 'register_models.lemail', '=', 'studentadd_models.lemail')
        ->select('studentadd_models.due as fdue')
        ->where('register_models.id','=',"$logid")
        ->first());

        $due=$stufdue->values();
        
     
        $new_due=$due['0']-$getamt;
        
        echo "<br>";
        echo $new_due;
        
       
            $updatedval = DB::table('register_models')
            ->join('studentadd_models', 'register_models.lemail', '=', 'studentadd_models.lemail')
            ->where('register_models.id','=',"$logid")
            ->update(['studentadd_models.due' => $new_due]);

        return redirect('/mmm');         
    }

    public function paym(Request $request)
    {
         $logid = $request->session()->get('loggeduser');
         $stu = collect(DB::table('register_models')
         ->join('studentadd_models', 'register_models.lemail', '=', 'studentadd_models.lemail')
         ->select('studentadd_models.*')
         ->where('register_models.id','=',"$logid")
         ->get());
         $stuviews = $stu->flatten();
         $stuviews->all();
    
        //dd($stuviews);
     
        return view('payment',['stuviews'=>$stuviews]);
    
    }

}
