<h1>User information</h1>
<table border="1">
<th>Name</th>
<th>Email</th>
<th>Operation</th>
@foreach($data as $result)
<tr>
<td>{{$result['name']}}</td>
<td>{{$result['email']}}</td>
<td><a href={{"/delete/".$result['id']}}>Delete</a></a></td>
<td><a href={{"/edit/".$result['id']}}>Edit</a></a></td>
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