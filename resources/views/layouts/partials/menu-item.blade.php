<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="text-center info">
          <p  style="margin: 5px">{{ Auth::user()->name }}</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">USER NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-o"></i>
            <span>User</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> All User</a></li>
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> New User</a></li>
          </ul>
        </li>
        <li class="header">POST NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Posts</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('posts.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{ route('posts.create') }}"><i class="fa fa-circle-o"></i> New Post</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Tags</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tags.index') }}"><i class="fa fa-circle-o"></i> All Tags</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Categories</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i> All Categories</a></li>
          </ul>
        </li>
        <li class="header">GALLERY NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Galleries</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('galleries.index') }}"><i class="fa fa-circle-o"></i> All Galleries</a></li>
            <li><a href="{{ route('galleries.create') }}"><i class="fa fa-circle-o"></i> New Galleries</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Types</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('types.index') }}"><i class="fa fa-circle-o"></i> All Types</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
