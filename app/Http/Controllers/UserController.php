<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequest;

class UserController extends Controller
{
    //
    public function show($id)
{
    $user=User::find($id);

return view('fronts.users.show',compact('user'));

}

    public function store(UserRequest $userRequest)
{
User::create($userRequest->all());
return redirect()->route('users.index')->with('info', 'Utilisateur a bien été
créé');
}


public function destroy($id)
{
$user=User::find($id);
$user->delete();
return back()->with('info', 'Lutilisateur a bien été supprimé dans la base de
données.');
}


public function edit($id){
$user=User::find($id);

return view('fronts.users.edit', compact('user'));



}
public function update(UserRequest $userRequest, User $user)
{
$user->update($userRequest->all());

 return redirect('fronts.users.index')->with("info", "Votre utilisateur a ete modifiee avec succes");
   }

}
