<html>
<head></head>
<body>
<h1> Create a project </h1>
<form action="/projects" method="POST">
{{ csrf_field() }}
<div>
<input type="text" name="title" placeholder="Project title">
</div>
<div>
<textarea name="description" placeholder="Project description"></textarea>
</div>
<div>
<button type="submit">Create a project</button>
</div>
</form>

</body>
</html>