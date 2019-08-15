<html>
<head></head>
<body>
<h1> Create a project </h1>
<form action="/projects" method="POST">
<!-- csrf protection. this is inbuilt in laravel -->
{{ csrf_field() }}
<div>
<!-- adding required ensures client side validation. this marks
the field as required -->

<!-- the value old title retains the input even tho it doesnt meet the 
basic requirements -->
<input type="text" name="title" placeholder="Project title" required value="{{ old('title') }}">
</div>
<div>
<textarea name="description" placeholder="Project description" required >{{ old('description') }}</textarea>
</div>
<div>
<button type="submit">Create a project</button>
</div>
@include('errors')
</form>

</body>
</html>