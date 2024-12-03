@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Nova Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Salvar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
