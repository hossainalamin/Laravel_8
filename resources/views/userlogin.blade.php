<h1>User login</h1>
<form action="userlogin" method="POST">
@csrf
<input type="text" name="name" placeholder="User name"><br>
<span style='color:red;'>@error('name'){{$message}}@enderror</span>
<br>
<input type="password" name="pass" placeholder="User password"><br>
<span style='color:red;'>@error('pass'){{$message}}@enderror</span>
<br>
<button type="submit">Submit</button>
</form>