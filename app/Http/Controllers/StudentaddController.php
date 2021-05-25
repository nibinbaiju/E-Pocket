<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\StudentaddModel;
use App\Models\LoginModel;
use App\Models\RegisterModel;


class StudentaddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adds=StudentaddModel::all();
        $data=['LoggedUserinfo'=>LoginModel::where('id','=',session('loggeduser'))->first()];
        return view('addview',compact('adds'),$data);
      
    }
public function ro(Request $request)
{
     $logid = $request->session()->get('loggeduser');
     $stuviews = collect(DB::table('register_models')
     ->join('studentadd_models', 'register_models.lemail', '=', 'studentadd_models.lemail')
     ->select('studentadd_models.*')
     ->where('register_models.id','=',"$logid")
     ->get());
     $stuviews = $stuviews->flatten();
     $stuviews->all();

    //dd($stuviews);

 
    return view('roro',['stuviews'=>$stuviews]);

}

public function pay(Request $request)
{
     $logid = $request->session()->get('loggeduser');
     $stuviews = collect(DB::table('register_models')
     ->join('studentadd_models', 'register_models.lemail', '=', 'studentadd_models.lemail')
     ->select('studentadd_models.*')
     ->where('register_models.id','=',"$logid")
     ->get());
     $stuviews = $stuviews->flatten();
     $stuviews->all();

    //dd($stuviews);
 
    return view('roro',['stuviews'=>$stuviews]);

}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addstd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      


        $getfname=request('fname');
        $getgname=request('gname');
        $getbday=request('bday');
        $getcourse=request('course');
        $getgender=request('gender');
        $getpno=request('pno');
        $getcadd=request('cadd');
        $getemail=request('lemail');
        $getpass=request('lpass');
        $gettot = DB::table('course_models')
        ->select('fee')
        ->where('course','LIKE',"$getcourse")
        ->first();

    
        

        $add=new StudentaddModel();
        $add->fname=$getfname;
        $add->gname=$getgname;
        $add->bday=$getbday;
        $add->course=$getcourse;
        $add->gender=$getgender;
        $add->pno=$getpno;
        $add->cadd=$getcadd;
        $add->lemail=$getemail;
        $add->lpass=$getpass;
        $add->due=$gettot->fee;
        $add->save();
        

        $use=new RegisterModel();
        $use->lemail=$getemail;
        $use->lpass=$getpass;
        $use->save();

        return redirect('/addview');



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
        $add=StudentaddModel::find($id);
        $use=Registermodel::find($id);
        return view('edit',compact('add'));
    
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
        $add=Studentaddmodel::find($id);
        $getfname=request('fname');
        $getgname=request('gname');
        $getbday=request('bday');
        $getcourse=request('course');
        $getgender=request('gender');
        $getpno=request('pno');
        $getcadd=request('cadd');
        $getemail=request('lemail');
        $getlpass=request('lpass');
        
        echo $getfname;
        echo $getgname;
        echo $getbday;
        echo $getcourse;
        echo $getcourse;
        echo $getgender;
        echo $getpno;
        echo $getcadd;
        echo $getemail;
        echo $getlpass;
       
        
        $add->fname=$getfname;
        $add->gname=$getgname;
        $add->bday=$getbday;
        $add->course=$getcourse;
        $add->gender=$getgender;
        $add->pno=$getpno;
        $add->cadd=$getcadd;
        $add->lemail=$getemail;
        $add->lpass=$getlpass;

        $add->save();

       
        $use=Registermodel::find($id);
        $use->lemail=$getemail;
        $use->lpass=$getlpass;
        $use->save();
        

        

        return redirect('/addview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=StudentaddModel::find($id);

        $user->delete();

        return redirect('/addview');
    }

    public function deleteview($id)
    {
        $add=StudentaddModel::find($id);
        return view('delete',compact('add'));


    }


    
    public function checku(Request $request)
    {

        $userInfo =RegisterModel::where('lemail','=',$request->lemail)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login1');
        }
        else
        {
            if(strcmp($request->lpass , $userInfo->lpass)==0)
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('/studentviews');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login2');
        } 
    }
    }

  

}
