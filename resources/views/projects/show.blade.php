@extends('layout')

@section('content')

<h1 class="title">{{$project->title}}</h1>

<div class="content">{{$project->description}}</div>

@if ($project->tasks->count())
<div>
@foreach ($project->tasks as $task)
<div class="task-complete">
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
<div style="margin-top:20px; margin-bottom:20px;">
<a href="/projects/{{$project->id}}/edit">Edit project</a></div>


<!-- add a task -->
<form action="/projects/{{$project->id}}/tasks" method="POST" class="box">
@csrf
<div class="field">
    <label for="description" class="label">New Task</label>
    <div class="control">
        <input type="text" class="input" name="description" placeholder="New Task" required>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is_link">Add task</button>
    </div>
</div>
@include('errors')
</form>

@endsection