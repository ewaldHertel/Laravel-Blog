<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Session;
use Hash;
use Input;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::orderBy('id', 'desc')->paginate(10);
      return view('admin.users.index')->withUsers($users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();
      return view('admin.users.create')->withRoles($roles);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validateWith([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users'
      ]);
      if (!empty($request->password)) {
        $password = trim($request->password);
      } else {
        # set the manual password
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $password = $str;
      }
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($password);
      $user->save();
      if ($request->roles) {
        $user->syncRoles(explode(',',implode(',',$request->roles)));
      }
      return redirect()->route('users.show', $user->id);
      // if () {
      //
      // } else {
      //   Session::flash('danger', 'Sorry a problem occurred while creating this user.');
      //   return redirect()->route('users.create');
      // }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::where('id', $id)->with('roles')->first();
      return view("admin.users.show")->withUser($user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $roles = Role::all();
      $user = User::where('id', $id)->with('roles')->first();
      return view("admin.users.edit")->withUser($user)->withRoles($roles);
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
      $this->validateWith([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,'.$id
      ]);
      $user = User::findOrFail($id);
      $user->name = $request->name;
      $user->email = $request->email;
      if (!empty($request->password))
      {
        if ($request->password === $request->password)
        {
            $user->password = Hash::make($request->confirm-password);
        }
      }
      $user->save();
      //dd($request->roles);
      $user->syncRoles(explode(',',implode(',',$request->roles)));

      return redirect()->route('users.show', $id);
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
}
