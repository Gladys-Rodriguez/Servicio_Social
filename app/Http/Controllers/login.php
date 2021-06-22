<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\UserSendRecover, App\Mail\UserSendNewPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Mail, Str, Hash;
//use Validator, Hash, Auth;


class login extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials=request()->only('email','password');
        if(Auth::attempt($credentials)){
            return 'No estas logueado';
        }

        return 'No estas logueado';
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
    public function getRecover(){
        return view('Pantallas_Principales.recover');
    }

   public function  postRecover(Request $request){
    $user = User::where('email', $request->input('email'))->count();
    if($user == "1"):
        $user = User::where('email', $request->input('email'))->first();
        $code = rand(100000000, 999999999);
        $data = ['name' => $user->name, 'email' => $user->email, 'id' => $user->id, 'code' => $code];
        $u = User::find($user->id);
        $u->password_code = $code;
        if($u->save()):
         Mail::to($user->email)->send(new UserSendRecover($data));
         return redirect('/reset?email='.$user->email);
        //return view('emails.recover', $data);
        endif;

    else:
        return back()->with('Este correo electronico no existe');
    endif;


   }
   public function getReset(Request $request){
    $data = ['email' => $request->get('email')];
    return view('Pantallas_Principales.reset', $data);

   }
   public function postReset(Request $request){
    $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->count();
    if($user == 1):
        $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->first();
        $new_password = Str::random(8);
        $user-> password = Hash::make($new_password);
        $user->password_code = null;
        if($user->save()):
            $data = [ 'email' => $user->email, 'id' => $user->id,  'password' => $new_password];
            Mail::to($user->email)->send(new UserSendNewPassword($data));
            return redirect('/LoginForm');
        endif;
    else:
        return back();
    endif;

   }
}
