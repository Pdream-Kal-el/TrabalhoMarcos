@extends('layouts/.admin')
    @section('conteudo')
        
    <div class="card mb-4 border-light shadow">
        <div class="card-header mt-4 hstack gap-2">
            <span>Listar Funcionários</span>
            <span class="ms-auto"><a href="{{ route('user.create')}}" class="btn btn-success btn-sm">Cadastrar</a></span>
        </div>
        <div class="card-body">
            <x-alert />
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Cargo</th>
            <th scope="col" class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->cargo->nome ?? 'Sem cargo' }}</td>
                <td class="text-center">
                    <a href="{{ route('user.show',['user'=>$user->id]) }}" class="btn btn-primary btn-sm" >visualizar</a>
                    <a href="{{ route('user.edit',['user'=>$user->id]) }}" class="btn btn-warning btn-sm">editar</a>
                    <form method="POST" action="{{ route('user.destroy',['user'=>$user->id]) }}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja apagar registro?')" class="btn btn-danger btn-sm">Apagar</button>
                    </form>
                </td>
            </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
@endsection
