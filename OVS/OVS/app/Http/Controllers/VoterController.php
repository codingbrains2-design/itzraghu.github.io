<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VoterController extends Controller
{


    public function voterRegForm()
    {
        if(Auth::check())
        {
            return redirect()->intended('home');
        }
        else
        {
            return view('voter-registration');

        }
    }

    public function feature()
    {
        return view('feature');
    }

    public function voterRegister(Request $request)
    {
        if(Auth::check())
        {
            return redirect()->intended('home');
        }
        else
        {
            $data = $request->all();
            $validator = Validator::make($data,array('name'=>'required',
                'voter_id'=>'required|alpha_num',
                'email'=>'email|required',
                'password'=>'required|min:6|max:8',
                'age'=>'required|Integer',
                'gender'=>'required',
                'location'=>'required'));
            if($validator->fails())
            {
                return redirect('voter-registration')
                ->withErrors($validator)
                ->withInput();
            }
            else{

                $data = array(
                    "remember_token"=>$request->_token,
                    "name"=>$request->name,
                    "voter_id"=>$request->voter_id,
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password),
                    "gender"=>$request->gender,
                    "location"=>$request->location
                    );
                $is_email = DB::table('voters')->select('email')->where('email',$request->email)->get();
                if(count($is_email) == 0)
                {

                    if(DB::table('voters')->insert($data))
                    {
                        return redirect('voter-registration')->with('success','Successfully Registered.! Now You can login to Vote');
                    }
                    else
                    {
                        return redirect('voter-registration')->with('error','Something is wrong .Try Again');

                    }
                }
                else
                {
                    return redirect('voter-registration')->with('error','Email Already Exist !');

                }
            }

        }
    }

    public function voterLoginForm()
    {

        if(Auth::check())
        {
            return redirect()->intended('home');
        }
        else
        {
            return view('login');

        }

    }
    public function voterLogin(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,array(
            'voter_id'=>'required|alpha_num',
            'password'=>'required'));
        if($validator->fails())
        {
            return redirect('login')
            ->withErrors($validator)
            ->withInput();
        }
        else{

            $voter = array(
                "voter_id"=>$request->voter_id,
                "password"=>$request->password
                );

            if(Auth::attempt($voter))
            {
                return redirect()->intended('home');
            }
            else
            {
             return redirect()->intended('login')->with('error','Invalid Voter Id or Password');
         }
     }

 }
 public function voterHome()
 {
    return view('home');
}

public function logout()
{
    Auth::logout();
    return redirect()->intended('login')->with('success','Logout Success!');

}
public function voterList()
{

    $voters = DB::table('voters')->paginate(2);
    $voters->setPath('voter-list');
    return view('voter-list')->with('voters',$voters);
} 
public function electionStatus()
{

    $election_status = DB::table('parties')->paginate(4);
    $election_status->setPath('election-status');
    return view('election-status')->with('election_status', $election_status);
}
public function vote(Request $request)
{
    $voter_id = Auth::user()->voter_id;
    $data = $request->all();
    $validator = Validator::make($data,array('voter_id'=>'required|alpha_num'));
    if($validator->fails())
    {
        return redirect('home')
        ->withErrors($validator)
        ->withInput();
    }
    else{

        $voter_id = Auth::user()->voter_id;
        if ($request->voter_id === $voter_id) 
        {
            $status = DB::table('voters')->select('vote_status')->where('voter_id',$voter_id)->get();
            if($status[0]->vote_status === "voted")
            {
               return redirect()->intended('home')->with('error','You Have Voted Once So You Cannot Vote Anymore !');
           }
           else
           {
            if(DB::table('voters')->where('voter_id',$voter_id)->update(array('vote_status'=>'voted','voted_to'=>$request->party)))
            {
                $vote_obtained = DB::table('parties')->select('vote_obtained')->where('party_name',$request->party)->get();
                $vote_obtained=($vote_obtained[0]->vote_obtained)+1;
                DB::table('parties')->where('party_name',$request->party)->update(array('vote_obtained'=>$vote_obtained));
                return redirect()->intended('home')->with('success','You Have Suucessfully voted  !');
            }
        }
    }
    else
    {
        return redirect()->intended('home')->with('error','Enter Your Correct Voter_id/Card Number !');

    }
}


}

}
