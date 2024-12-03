@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Atualizar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection
