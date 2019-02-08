<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserEditRequest;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();

       return view('admin.users.index', compact('users'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles'));

        //return $roles;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {   
       $input = $request->all();

       if($file = $request->file('photo_id')){

            $name = time().$file->getClientOriginalName();
            $file->move('images' , $name);
            $photo = Photo::create(['src' => $name]);
            $input['photo_id'] = $photo->id;
       }

       $input['password'] = bcrypt($request->password);
       User::create($input);

       return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Show user' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('user' , 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $input;

        if($request->password){
            $input = $request->all();
            $trimmed = trim($request->password);
            $input['password'] = bcrypt($trimmed);
        }else{
            $input = $request->except('password');
        }
    
        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['src'=>$name]);

            $input['photo_id'] = $photo->id;
        }
       
        User::find($id)->update($input);

        session()->flash('user_updated', 'User has been updated');

       return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::find($id);


       if($user->photo_id){
            $photo = Photo::find($user->photo_id);
            
            unlink(public_path().'/'.$user->photo->src);
            $photo->delete();
       }

        $user->delete();
       
       session()->flash('user_deleted', 'User has been deleted');
       return redirect('/admin/users');
       

    }
}
