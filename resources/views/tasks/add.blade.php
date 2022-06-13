@extends('admin')

@section('title', 'Adição de tarefas')

@section('content')
    <h1>Adição</h1>

    <form method="POST" action="{{route('tasks.store')}}">
        @csrf


        <label>
            Título:<br/>
            <input type="text" name="title" />
        </label>

        <input type="submit" value="Adicionar" />

    </form>
@endsection
