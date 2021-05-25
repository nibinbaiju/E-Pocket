<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getemail=request('lemail');
        $getpass=request('lpass');
        echo $getemail;
        echo $getpass;
        $register=new LoginModel();
        $register->lemail=$getemail;
        $register->lpass=Hash::make($request->lpass);

        $register->save();

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

    public function check(Request $request)
    {

        $userInfo =LoginModel::where('lemail','=',$request->lemail)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->lpass , $userInfo->lpass))
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('/addview');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
    
    }

}


        //$getemail=$request -> input('lemail');
        //$getpass=$request -> input('lpass');
        //$data = DB::select('select id from login_models where lemail=? and lpass=?',[$getemail,$getpass]);

        

      /*  if(count($data))
        {
            return redirect('addview');
        }
        else
        {
    
            return back()->with('fail','Error: Invalid Login');
            return view('test');

            
        }

    }


    */

    public function lgoutu()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/test2');
        }
    
    }

    public function lgout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/');
        }
    
    }


}
