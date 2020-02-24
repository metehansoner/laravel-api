<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table tr:nth-child(even) {
     background-color: #eee;
    }
    table tr:nth-child(odd) {
    background-color: #fff;
    }
    table th {
    color: white;
    background-color: black;
    }
</style>
<body>
      <table style="width:100%">
        <tr>
          <th>id</th>
          <th>Name</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <th>{{$item['id']}}</th>
            <th> <a href="/userDetail/{{$item['id']}}"> {{$item['employee_name']}}</a></th>
          </tr>  
        @endforeach
      </table>
</body>
</html>