 <div class="user-panel">
  <div class="pull-left image">
    <img src="{{ asset('/') }}admin1/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>Alexander Pierce</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN MENU</li>
  <li>
    <a href="{{ url('/') }}">
      <i class="fa fa-dashboard"></i> <span>LIhat Property</span>
    </a>
  </li> 
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Property</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('admin.tambahproperty') }}"><i class="fa fa-circle-o"></i> Tambah</a></li>
      <li><a href="{{ route('admin.editproperty') }}"><i class="fa fa-circle-o"></i> Edit</a></li>
      <li><a href="{{ route('admin.terjual') }}"><i class="fa fa-circle-o"></i> Terjual</a></li>
    </ul>
  </li>
</ul>
<!-- end sidebar -->