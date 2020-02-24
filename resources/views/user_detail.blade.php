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
   img {
   border-radius: 50%;
   }
</style>

<body>
      <table style="width:100%">
        <tr>
          <th>image</th>
          <th>id</th>
          <th>Name</th>
          <th>Salary</th>
          <th>age</th>
        </tr>
        <tr>
            @if (isset($item["profile_image"]))
            <th><img src="img_avatar.png" alt="Avatar" style="width:10px"></th> 
            @else
            <th><img src="{{$item["profile_image"]}}" alt="Avatar" style="width:10px"></th>    
            @endif
            
            <th>{{$item["id"]}} </th>
            <th>{{$item['employee_name']}}</th>
            <th>{{$item['employee_salary']}}</th>
            <th>{{$item['employee_age']}}</th>
          </tr>  
      </table>
</body>
</html>