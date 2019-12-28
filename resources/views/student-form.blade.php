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



<h1>Add Student</h1>

​

<div style="margin:20px 0;">
<a href="/student-form/create">
  <button>
    Add Student
  </button></a>
<a href="/student-list"> <button>View Students</button></a>
</div>

​

<form method="post" action="/student-form/create">
@csrf

<div>
  <label for="name">Name</label>
  <input type="text" placeholder="Name" id="name" name="name">
  @if ($errors->has('name'))
  <span class="invalid-feedback">
    <strong>{{ $errors->first('name') }}</strong>
  </span>
  @endif
</div>

​

<div>
  <label for="email">Email Address</label>
  <input type="email" placeholder="Email Address" id="email" name="email">
  @if ($errors->has('email'))
  <span class="invalid-feedback">
    <strong>{{ $errors->first('email') }}</strong>
  </span>
  @endif
</div>

​

<div>
  <label for="phone">Phone Number</label>
  <input type="text" placeholder="Phone Number" id="phone" name="phone">
  @if ($errors->has('phone'))
  <span class="invalid-feedback">
    <strong>{{ $errors->first('phone') }}</strong>
  </span>
  @endif
</div>
<button>Add</button>
</form>
</body>
</html>