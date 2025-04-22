<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Cargo;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users=User::orderByDesc('id')->get();
        //carrega a view
        return view('users.index',['users'=>$users]);
    }
    public function show(User $user){
        return view('users.show',['user'=>$user]);
    }
    public function create(){
        $cargos = Cargo::all();
        return view('users.create', compact('cargos'));
    }
    public function store(UserRequest $request){
        //valida form
        $request ->validated();
        //cadastrar funcionario
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'cargo_id'=>$request->cargo_id,
        ]);
//redireciona e envia mensagem 
        return redirect()->route('user.index')->with('sucess','Usuário cadastrado com sucesso');
    }
    public function edit(User $user){
        $cargos = Cargo::all();
        return view('users.edit',['user'=>$user], compact('user', 'cargos'));

    }
    public function update(UserRequest $request, User $user){
//valida 
        $request->validated();
        //editar
        $user->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'cargo_id'=>$request->cargo_id,
        ]);
        return redirect()->route('user.show',['user'=>$user->id])->with('sucess','Usuário editado com sucesso');

    }
    public function destroy(User $user){
        //deleta
        $user->delete();
        return redirect()->route('user.index')->with('sucess','Usuário deletado com sucesso');
    }
}
