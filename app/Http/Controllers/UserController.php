<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Models\District;
use App\Models\Department;

use Spatie\Permission\Models\Role;

use DB;

use Hash;

use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Auth;



class UserController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

       $data = User::orderBy('id','DESC')->paginate(5);

        return view('users.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $roles = Role::pluck('name','name')->all();
        $roles = Role::all();
        $districts = District::all();
        return view('users.create',compact('roles','districts'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'first_name' => 'required',
            'last_name'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password',
            'role' => 'required',
            'distict' => 'required',
          'department' => 'required'

        ]);



        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        $user->assignRole($request->input('roles'));



        return redirect()->route('users.index')

                        ->with('success','User created successfully');

    }
    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $user = User::find($id);

        return view('users.show',compact('user'));

    }

    public function profile(Request $request)

    {

       $data = User::orderBy('id','DESC')->paginate(5);

        return view('users.profile',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

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
        $districts = District::get();

        $roles = Role::pluck('name','name')->all();

        $userRole = $user->roles->pluck('name','name')->all();

        $districtUser = DB::table("district_user")->where("district_user.user_id",$id)

        ->pluck('district_user.district_id','district_user.district_id')->all();

        return view('users.edit',compact('user','roles','userRole','districtUser','districts'));

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

        $this->validate($request, [

            'first_name' => 'required',

            'last_name' => 'required',

            'email' => 'required|email|unique:users,email,'.$id,

            'password' => 'same:password',

            'roles' => 'required'

        ]);



        $input = $request->all();

        if(!empty($input['password'])){

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = Arr::except($input,array('password'));

        }


        $districts = $request->input('districts');



        $user = User::find($id);

        $user->update($input);

        //delete the previous district assignments for the user
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        //delete the previous district assignments for the user
        DB::table('district_user')->where('user_id',$id)->delete();


        $user->assignRole($request->input('roles'));

       foreach ($districts as $key => $value) {
           DB::table('district_user')->insert(['user_id'=>$id, 'district_id' => $value]);
       }

        return redirect()->route('users.index')

                        ->with('success','User updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {
        User::find($id)->delete();

        return redirect()->route('users.index')

                        ->with('success','User deleted successfully');
    }

    public function search()
    {
      $search_text = $_GET['query'];
      $users=User::where('first_name','LIKE','%'.$search_text.'%')->paginate(10);
      return view('users.search',compact('users'));
    }
}
