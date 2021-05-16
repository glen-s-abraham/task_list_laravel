<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<title>Task List</title>

</head>
<body>
	


	<div class="Container">
		<div class="ContainerHeader"><p>Task Form</p></div>
		<div >
			<form class="Form" action="{{route('post')}}" method="post">
				@csrf
				<input class="Text" type="text" name="task">
				<button class="Button" type="submit">+ Add Task</button>
			</form>
		</div>
	</div>

	<div class="ListContainer">
		@forelse($task->all() as $t)
		<div class="TaskList">
			<p>{{$t->task}}</p>
			<form action="{{route('delete',$t->id)}}" method="post">@csrf<Button type="submit">X</Button></form>
		</div>
		@empty
		<p>Nothing to display</p>
		@endforelse
		


	</div>

</body>
</html>