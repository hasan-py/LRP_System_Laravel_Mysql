

<h1>Profile</h1>
<h3> Welcome, {{ session('data')['username'] }} </h3>
<a href="{{ url('logout') }}">Logout</a>
<br>
<br>
<br>


{{ session('status') }}

<form action="" method='get'>
	<input type="text" placeholder="add post" name="post">
	<button type="submit">Post</button>
</form>

@include('footer')