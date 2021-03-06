<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">Cihan Alp</a>
		</div>
		<div>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/articles">Articles</a>
				</li>
				<li>
					<a href="about">About</a>
				</li>
				<li>
					<a href="contact">Contact</a>
				</li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
			@if(!Auth::check())
				<li>
					<a href="/auth/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
				</li>
				<li>
					<a href="/auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
			@else
			<li>
				<a href="/auth/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
			</li>
			@endif

			</ul>
		</div>
	</div>
</nav>
