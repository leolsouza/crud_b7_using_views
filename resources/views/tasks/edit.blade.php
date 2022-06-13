@extends('admin')

@section('title', 'Edição de tarefas')

@section('content')
    <h1>Edição</h1>

    <form method="POST" action="{{ route('tasks.update',$task->id) }}">
        @csrf
        @method('put')
        <label>
            Título:<br/>
            <input value="{{old('title',$task->title)}}" type="text" name="title" />
        </label>

        <input type="submit" value="Salvar" />

    </form>
@endsection
