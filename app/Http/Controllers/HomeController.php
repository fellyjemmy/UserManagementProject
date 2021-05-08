<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Crypt;


class HomeController extends Controller
{
  public function userProfile(){
    return view('users.user_profile');
  }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


          public function getDeleteusers(){
            $users = User::onlyTrashed()->paginate(10);

            return view('users.deletedusers', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
          }

          public function restoreDeletedusers($id)
          {
            $user = User::where('id',$id)->withTrashed()->first();
            $user->restore();

            return redirect()->route('users.index')
            ->with('success', 'You successfully restored the User');
          }

          public function deletePermanently($id)
          {
            $user = User::where('id',$id)->withTrashed()->first();
            $user->forceDelete();
            return redirect()->route('users.index')
            ->with('success', 'You successfully deleted the user from the Recycle Bin');
          }



    public function index()
    {
        $users = User::paginate(5);

        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password'=>'required',
      'date_of_birth' =>'required',
      'place_of_birth' =>'required',
      'place_of_domicile' =>'required',
      'residence' =>'required',
      ]);

          user::create([
             'name' => $request->name,
             'email' => strtolower($request->email),
             'password' => bcrypt($request['password']),
             'date_of_birth'=>$request->date_of_birth,
             'age' =>$request->age,
             'place_of_birth'=>$request->place_of_birth,
             'place_of_domicile'=>$request->place_of_domicile,
             'residence'=>$request->residence,
          ]);

        // User::create($request->all());

        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user)
    {


        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $rules = [
                  'name' => 'required',
                  'email' => 'required|email',
                  'password' =>'required',
                  'date_of_birth' =>'required',
                  'place_of_birth' =>'required',
                  'place_of_domicile' =>'required',
                  'residence' =>'required',
              ];

              $errorMessage = [
                  'required' => 'Enter your :attribute first.'
              ];

              $this->validate($request, $rules, $errorMessage);

        // $user->update($request->all());
        $user->update([
                  'name' => $request->name,
                  'email' => strtolower($request->email),
                  'password' => bcrypt($request['password']),
                  'date_of_birth' =>$request->date_of_birth,
                  'place_of_birth' =>$request->place_of_birth,
                  'place_of_domicile' =>$request->place_of_domicile,
                  'residence' =>$request->residence,

              ]);
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }









    public function index1()
    {
        return view('users.home');
    }
}
