<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

.invalid-feedback {

  color: red;

}

</style>

​
</head>
<body>



<h1>Add Dpartment Information</h1>

​

<div style="margin:20px 0;">

<a href="/department-form/create">

  <button>

    Add Dept Info

  </button></a>

<a href="/student-list"> <button>View Dept Detail</button></a>

</div>

​

<form method="post" action="/department-form/create">

@csrf

<div>

  <label for="name">Name</label>

  <input type="text" placeholder="Name" id="name" name="name">

  <!-- @if ($errors->has('name'))

  <span class="invalid-feedback">

    <strong>{{ $errors->first('name') }}</strong>

  </span>

  @endif -->

</div>

​

<div>

  <label for="dep_head">Department Head</label>

  <input type="text" placeholder="Department name" id="dep_head" name="dep_head">

  <!-- @if ($errors->has('email'))

  <span class="invalid-feedback">

    <strong>{{ $errors->first('email') }}</strong>

  </span>

  @endif -->

</div>

​

<button>Add</button>

</form>
</body>
</html>