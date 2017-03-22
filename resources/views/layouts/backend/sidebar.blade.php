  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="backend/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Laporan Pengisian SNMPTN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Penjaminan Mutu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Seleksi & Pengumuman</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sospro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Olahraga</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Drama</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Rupa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Tari</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Musik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Laporan Pengisian SBMPTN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Penjaminan Mutu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pendaftaran</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sospro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> CBT</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Olahraga</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Drama</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Rupa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Tari</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Musik</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pelaksanaan UTUL</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Rekap Borang SNMPTN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Penjaminan Mutu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Seleksi & Pengumuman</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sospro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Olahraga</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Drama</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Rupa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Tari</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Portofolio Musik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Rekap Borang SBMPTN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Penjaminan Mutu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pendaftaran</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sospro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> CBT</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Olahraga</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Drama</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Rupa</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Tari</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> UK Musik</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Pelaksanaan UTUL</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-folder"></i> <span>Setting</span></a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>