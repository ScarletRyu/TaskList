<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>TASK LIST</h2>

<form id="form" action="{{Route('tasks.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <label>Task:</label><br>
  <input type="text" id="name" name="name"><br>
  <button type="submit" class="button">Add Task</button>
</form> <br>
@foreach($newtasks as $task)
<div class="currentTasks">
    <form method="POST" action="/tasks/{{$task->id}}">
    	@csrf
            @method('DELETE')
            <b>{{$task->name}}</b>
    <button type="submit" class="button">Delete</button><br>   
    </form>              
</div>
@endforeach

</body>
</html>
