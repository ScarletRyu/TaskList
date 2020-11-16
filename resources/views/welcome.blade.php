<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="container">
<h2>TASK LIST</h2>
<!-- Crear una nueva tarea  -->
<div id="task">
<form id="form" action="{{Route('tasks.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <h3>Task:</h3><br>
  <label>Task name</label>
  <input type="text" id="name" name="name"><br>
  <button type="submit" class="button">Add Task</button>
</form> 
</div> <br>

<!--Crear nuevo usuario -->
<div id="user">
<form id="form" action="{{Route('tasks.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <h3>User:</h3><br>
  <label>User name</label>
  <input type="text" id="name" name="name"><br>
  <label>User Last Name</label>
  <input type="text" id="lastname" name="lastname"><br>
  <button type="submit" class="button">Create user</button>
</form> 
<h3>Select a existing user</h3>
<label for="cars">Choose a User:</label>
  <select name="elegiruser" id="elegiruser">
    <option value="username">username</option>
  </select>
</div> <br>



@foreach($newtasks as $task)
<h3>Current Tasks</h3>
<div class="currentTasks">
    <form method="POST" action="/tasks/{{$task->id}}">
    	@csrf
            @method('DELETE') 
            <b>{{$task->name}}</b>
    <button type="submit" class="button">Delete</button><br>   
    </form>              
</div>
@endforeach
</div>

</body>
</html>
