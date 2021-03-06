<?php

namespace ORC\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ORC\Http\Controllers\Controller;
use ORC\User;
use ORC\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users',User::where('id','!=','1')->paginate(10));
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
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'You are not allowed');
        }
        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
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
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'You are not allowed');
        }
        
        // tutto tranne password che non tocco in fase di modifica
        $request->validate([ 'name' => ['required', 'string', 'max:255'],
                            'surname' => ['required', 'string', 'max:255'],
                            'username' => ['required', 'string', 'max:255',],
                            'email' => ['required', 'string', 'email', 'max:255'],
                            'birth_date' => ['required']]); 
        
        
        
        $user = User::find($id);
        //$user->roles()->sync($request->roles);
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->birth_date = $request['birth_date'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->save();
        
        return redirect(route('admin.users.index'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id == $id){
            return redirect(route('admin.users.index'));
        }
        $user = User::find($id);
        if($user){
            $user->roles()->detach();
            $user->delete();
            return redirect(route('admin.users.index'));
        }
        return redirect(route('admin.users.index'));
    }
    
    
    
    public function searchUser(Request $request){
        if(strlen($request['search_key']) >0){
            $byName = User::where('name','LIKE',"%{$request['search_key']}%")->get();
            $byEmail = User::where('email','LIKE',"%{$request['search_key']}%")->get();
            $union = $byName->union($byEmail);

            return view('admin.users.index')->with(['users' =>$union,
                                                    'search' => true]);
        }
       return redirect(route('admin.users.index'));
    }
   
}
