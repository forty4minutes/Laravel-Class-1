<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

  table {

​

    border-spacing: 0px;

    border: 1px solid black;

  }

​

  table tr th,

  td {

    cell-spacing: 0;

    padding: 10px;

    border: 1px solid black;

  }

</style>

​
</head>
<body>
    <h1>Faculty Info List</h1>
    <div style="margin:20px 0;">
    <a href="/faculty-form/create">
        <button>
        Add Faculty Info
        </button>
    </a>
    <a href="/faculty-list">
        <button>
        View Faculty Info
        </button>
    </a>
    </div>

    ​

<table>

  <tr>

    <th>SN</th>

    <th>Name</th>

    <th>Department</th>

  </tr>

​
  @if($faculties) 

​

  @foreach($faculties as $faculty)

  <tr>

    <td>{{ $faculty->id }}</td>

    <td>{{ $faculty->name}}</td>

    <td>{{ $faculty->dep_name}}</td>

    

​

    <td>

      <a href="/faculty/{{$faculty->id}}">View</a>

​

      <a href="/faculty/update/{{$faculty->id}}">Edit</a>

​

​

​

      <a onClick="confirmDelete(this.id)" id="{{$faculty->id}}" href="javascript:void(0)">Delete</a>

​

​

    </td>

  </tr>

  @endforeach

​

  @else

  <tr colspan="5">

    <td>No dept info record found</td>

  </tr>

  @endif

</table>

​

​

<script>

  function confirmDelete(id) {

​

    let del = confirm();

​

    if (del) {

      window.location.href = '/faculty/remove/' + id

    }

  }

</script>


</body>
</html>