@extends('layouts/.admin')
    @section('conteudo')
    <div class="card mb-4 border-light shadow">
        <div class="card-header mt-4 hstack gap-2">
            <span>Visualizar</span>
            <span class="ms-auto d-sm-flex flex-row">
                <a href="{{ route('user.index')}}" class="btn btn-info btn-sm me-1">Listar</a>
                <a href="{{ route('user.edit',['user'=>$user->id])}}" class="btn btn-warning btn-sm me-1">Editar</a>
                <form method="POST" action="{{ route('user.destroy',['user'=>$user->id]) }}" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja apagar registro?')" class="btn btn-danger btn-sm me-1">Apagar</button>
                </form>
            </span>
        </div>
        <div class="card-body">
            <x-alert />
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>

                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>

                <dt class="col-sm-3">Cargo</dt>
                <dd class="col-sm-9">{{ $user->cargo->nome ?? 'Sem cargo' }}</dd>

                <dt class="col-sm-3">Data de Cadastrado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</dd>

                <dt class="col-sm-3">Data de edição</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</dd>
            </dl>
        </div>
    </div>
@endsection