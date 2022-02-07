<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{
    protected function rules() {
        return \Auth::check();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('organisation.dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('employee.addemployeer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo'=>'required',
            'name'=>'required',
            'card'=>'required',
            'email'=>'required',
            'passport_series_and_number'=>'required',
            'date_of_issue_of_the_identification_document'=>'required',
            'place/authority_that_issued_the_identification_document'=>'required',
            'registered'=>'required',
            'date_of_birth'=>'required',
        ]);

        $user = new User([
            'logo'=> $request->get('logo'),
            'name'=> $request->get('name'),
            'card'=> $request->get('card'),
            'email'=> $request->get('email'),
            'passport_series_and_number'=> $request->get('passport_series_and_number'),
            'date_of_issue_of_the_identification_document'=> $request->get('date_of_issue_of_the_identification_document'),
            'place/authority_that_issued_the_identification_document'=> $request->get('place/authority_that_issued_the_identification_document'),
            'registered'=> $request->get('registered'),
            'date_of_birth'=> $request->get('date_of_birth'),
        ]);


        if ($request->hasFile('logo'))  {
            $user->logo = $request->file('logo')->store('logo', 'public');
        }

        $user->save();
        return redirect('employee/users')->with('success', 'Сотрудник успешно добавлен !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
         $user = User::find($id);

        return view('employee/statistic',   compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('employee.useredit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'card'=>'required',
        ]);

        $user = User::find($id);
        $user->id = $request->get('id');
        $user->name = $request->get('name');
        $user->card = $request->get('card');
        $user->save();

        return redirect('employee/users')->with('success', 'Информация  успешно измененна !');
        //        User::find($id)->update(
//            array_merge(
//                $request->all()
//            )
//        );
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

    /**
     * Edit password
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function editUserPassword(Request $request)
    {
        if (Hash::check($request->old_password, \Auth::user()->password)) {
            User::update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return redirect('/organisation')->with('error','Старый пароль введён неверно');
        }

        return redirect('/organisation')->with('success','Информация успешно обновлена');
    }
}
