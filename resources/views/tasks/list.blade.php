@extends('admin')

@section('title', 'Listagem de tarefas')

@section('content')

    <a href="{{route('logout')}}">Logout</a>

    <h1>Listagem</h1>

    <a href="{{ route('tasks.create')}}">Adicionar nova tarefa</a>

    @if(count($task)>0)
        <ul>
            @foreach ($task as $item)
                <li>
                    <a href="{{ route('tasks.done', ['task'=>$item->id]) }}">
                        [
                            @if($item->done==1)
                                Desmarcar
                            @else
                                Marcar
                            @endif
                        ]</a>
                    {{$item->title}}
                    <a href="{{ route('tasks.edit', ['task'=>$item->id]) }}">[Editar]</a>
                    <a href="{{ route('tasks.destroy', ['task'=>$item->id]) }}" onclick="return confirm('Tem certeza que deseja excluir essa tarefa?')">[Excluir]</a>
                </li>
            @endforeach
        </ul>
    @else
        Não há itens a serem listados.
    @endif

@endsection
