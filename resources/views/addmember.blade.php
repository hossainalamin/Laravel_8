<h1>User login</h1>
@if(session('user'))
<h2 style="color:green;">{{session('user')}} added successfully</h2>
@else
<h2 style="color:red;">User Not added</h2>
@endif
<form action="useradd" method="POST">
@csrf
<input type="text" name="user" placeholder="User name"><br>
<br>
<input type="password" name="pass" placeholder="User password"><br>
<br>
<button type="submit">Submit</button>
</form>