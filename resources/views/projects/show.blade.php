@extends('layout')

@section('content')

<h1 class="title">{{$project->title}}</h1>

<div class="content">{{$project->description}}</div>

@if ($project->tasks->count())
<div>
@foreach ($project->tasks as $task)
<div>
    <form action="/tasks/{{$task->id}}" method="POST">
    @method('PATCH')
    @csrf
    <label for="completed" class="checkbox {{ $task->completed ? 'task-complete' : ''}}">
    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
    {{ $task->description }}
    </label>
    </form>
    </div>
@endforeach

</div>
@endif
<p>
<a href="/projects/{{$project->id}}/edit">Edit</a></p>

@endsection