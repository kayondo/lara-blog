@extends('layout')

@section('content')

<h1 class="title">Edit project</h1>


<form method="POST" action="/projects/{{$project->id}}" style="margin-bottom:20px;">

@method('PATCH')
@csrf
<div class="field">
<label class="title" for="title">Title</label>
<div class="control">
<input type="text" class="input" name="title" value="{{$project->title}}">
</div>
</div>

<div class="field">
<label class="title" for="description">Description</label>
<div class="control">
<textarea name="description" id="" class="textarea">{{$project->description}}
</textarea>
</div>
</div>

<div class="field">
<div class="control">
<button type="submit" class="button is-link">Update project</button>
</div>
</div>

</form>

<form action="/projects/{{$project->id}}" method="post">
@method('DELETE')
@csrf
<div class="field">
<div class="control">
<button type="submit" class="button">Delete project</button>
</div>
</div>
</form>
@endsection