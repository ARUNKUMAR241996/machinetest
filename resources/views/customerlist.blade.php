<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Customer listing</h2>

<table>
  <tr>
    <th>Customer_name</th>
    <th>Appoinment-no</th>
    <th>Slot</th>
    <th>start_date</th>
    <th>end_date</th>
    <th>bill</th>
  </tr>
@if(isset($data))
@foreach($data as $list)
  <tr>
    <td>{{$list->customer_name}}</td>
    <td>{{$list->slots."-".$list->id}}</td>
    <td>{{$list->slots}}</td>
    <td>{{$list->start_date}}</td>
    <td>{{$list->end_date}}</td>
    <td></td>
  </tr>
  @endforeach
 @endif
</table>

</body>
</html>