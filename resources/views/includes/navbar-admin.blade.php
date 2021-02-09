<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">

        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/assets/img/admin/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Etnicode</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EI</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Admin</li>
               <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin-dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
               <li class="{{ (request()->is('admin/blogcategory')) ? 'active' : '' }}"><a class="nav-link " href="{{ route('blogcategory.index') }}"><i class="fas fa-tags"></i> <span>Blog Category</span></a></li>
               <li class="{{ (request()->is('admin/blog')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('blog.index') }}"><i class="far fa-newspaper"></i> <span>Blog</span></a></li>
               <hr>
               <li class="{{ (request()->is('admin/suport')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('suport.index') }}"><i class="fas fa-code-branch"></i> <span>Suport</span></a></li>
               <li class="{{ (request()->is('admin/portfolio')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('portfolio.index') }}"><i class="far fa-bookmark"></i></i> <span>Portfolio</span></a></li>
               <li class="{{ (request()->is('admin/team')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('team.index') }}"><i class="fas fa-address-card"></i></i> <span>Team</span></a></li>
               <hr>
               <li><a class="nav-link" href="/dashboard/logout"><i class="fas fa-sign-out-alt"></i></i> <span>Out</span></a></li>

        </aside>
      </div>
