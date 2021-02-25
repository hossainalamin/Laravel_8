<h1>User update</h1>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="user" value="{{$data['name']}}"><br>
<br>
<input type="text" name="email" value="{{$data['email']}}"><br>
<br>
<button type="submit">Update</button>
</form>