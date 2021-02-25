<h1>User Add</h1>
<form action="adduser" method="POST">
@csrf
<input type="text" name="user" placeholder="User name"><br>
<br>
<input type="text" name="email" placeholder="User email"><br>
<br>
<button type="submit">Submit</button>
</form>