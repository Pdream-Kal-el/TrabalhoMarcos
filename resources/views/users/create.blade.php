@extends('layouts/.admin')
    @section('conteudo')
    <div class="card mb-4 border-light shadow">
        <div class="card-header mt-4 hstack gap-2">
            <span>Cadastrar Funcionário</span>
            <span class="ms-auto d-sm-flex flex-row">
                <a href="{{ route('user.index')}}" class="btn btn-info btn-sm me-1">Listar</a>
            </span>
        </div>
        <div class="card-body">
            <x-alert />

    <form action="{{ route('user-store') }}" method="POST" class="row g-3">
        @csrf
        @method('POST')
        <div class="col-md-12">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" value="{{ old('name') }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email do usuario" value="{{ old('email') }}">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">senha:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Nome Completo" value="{{ old('name') }}" placeholder="Digite sua senha" value="{{ old('password') }}">
        </div>
        <div class="col-md-6">
            <label for="cargo_id" class="form-label">Cargo:</label>
            <select name="cargo_id" id="cargo_id" class="form-control">
                <option value="">Selecione um cargo</option>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->id }}" {{ old('cargo_id', $user->cargo_id ?? '') == $cargo->id ? 'selected' : '' }}>
                        {{ $cargo->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
        </div>
    </form>
        </div>
@endsection