<h1>User information</h1>
<table border="1">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
@foreach($data as $result)
<tr>
<td>{{$result['name']}}</td>
<td>{{$result['email']}}</td>
<td>{{$result['phone']}}</td>
</tr>
@endforeach
</table>
<span>
{{$data->links()}}
</span>
<style>
.w-5{
display:"none";
}
</style>