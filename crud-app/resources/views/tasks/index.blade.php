@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Criar Nova Tarefa</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
