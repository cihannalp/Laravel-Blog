
<!--  Admin Sidebar -->

<div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul class="sidebar-nav" id="sidebar">
          <li><a href="/admin/articles">Articles<span class="glyphicon glyphicon-link"></span></a></li>
          <li><a href="/admin/users">Users<span class="glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              @include('partials.flashMessage')
              @yield('content')
            </div>
          </div>
        </div>
      </div>
      
    </div>