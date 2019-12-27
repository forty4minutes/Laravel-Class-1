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
    <h1>Department Info List</h1>
    <div style="margin:20px 0;">
    <a href="/department-form/create">
        <button>
        Add Dept Info
        </button>
    </a>
    <a href="/department-list">
        <button>
        View Dept Info
        </button>
    </a>
    </div>

    ​

<table>

  <tr>

    <th>SN</th>

    <th>Name</th>

    <th>Department Head</th>

  </tr>

​
 <!-- controller ko index bhanne function ma $departments variable define xa -->
  @if($departments) 

​

  @foreach($departments as $department)

  <tr>

    <td>{{ $department->id }}</td>

    <td>{{ $department->name}}</td>

    <td>{{ $department->dep_head}}</td>

    

​

    <td>

      <a href="/department/{{$department->id}}">View</a>

​

      <a href="/department/update/{{$department->id}}">Edit</a>

​

​

​

      <a onClick="confirmDelete(this.id)" id="{{$department->id}}" href="javascript:void(0)">Delete</a>

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

      window.location.href = '/department/remove/' + id

    }

  }

</script>


</body>
</html>