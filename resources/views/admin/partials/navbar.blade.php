
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cihan Alp</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Panel <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="/admin/articles">Articles</a></li>
            <li><a href=""></a></li>
          </ul>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
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
