<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $baseUrl ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">M E N U</li>

<!--        BERANDA ====================================================================================================-->
            <li>
                <a href="<?= $baseUrl ?>/index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>BERANDA</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

<!--        KUASA PENGGUNA ANGGARAN ====================================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>K P A</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan RUP</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Pengkajian RUP</a></li>
                </ul>
            </li>

<!--        PEJABAT PEMBUAT KOMITMEN ===================================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>P P K</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan HPS</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penetapan Kontrak</a></li>
                </ul>
            </li>

<!--        PEJABAT PENGADAAN ==========================================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-pie-chart"></i>
                    <span>P P</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan HPS</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penetapan Kontrak</a></li>
                </ul>
            </li>

<!--        KELOMPOK KERJA =============================================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>P O K J A</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan HPS</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penetapan Kontrak</a></li>
                </ul>
            </li>

<!--        PEJABAT / PANITIA PENERIMA HASIL PEKERJAAN =================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>PjPHP / PPHP</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan HPS</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penetapan Kontrak</a></li>
                </ul>
            </li>

<!--        PENGATURAN =================================================================================================-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i>
                    <span>PENGATURAN</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $baseUrl ?>/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Penetapan HPS</a></li>
                    <li><a href="<?= $baseUrl ?>/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Penetapan Kontrak</a></li>
                </ul>
            </li>

<!--            <li>-->
<!--                <a href="--><?//= $baseUrl ?><!--/pages/widgets.html">-->
<!--                    <i class="fa fa-th"></i> <span>Widgets</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-green">new</small>-->
<!--            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-pie-chart"></i>-->
<!--                    <span>Charts</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-laptop"></i>-->
<!--                    <span>UI Elements</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-edit"></i> <span>Forms</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-table"></i> <span>Tables</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?//= $baseUrl ?><!--/pages/calendar.html">-->
<!--                    <i class="fa fa-calendar"></i> <span>Calendar</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-red">3</small>-->
<!--              <small class="label pull-right bg-blue">17</small>-->
<!--            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?//= $baseUrl ?><!--/pages/mailbox/mailbox.html">-->
<!--                    <i class="fa fa-envelope"></i> <span>Mailbox</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-yellow">12</small>-->
<!--              <small class="label pull-right bg-green">16</small>-->
<!--              <small class="label pull-right bg-red">5</small>-->
<!--            </span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-folder"></i> <span>Examples</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>-->
<!--                    <li><a href="--><?//= $baseUrl ?><!--/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-share"></i> <span>Multilevel</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
<!--                    <li class="treeview">-->
<!--                        <a href="#"><i class="fa fa-circle-o"></i> Level One-->
<!--                            <span class="pull-right-container">-->
<!--                  <i class="fa fa-angle-left pull-right"></i>-->
<!--                </span>-->
<!--                        </a>-->
<!--                        <ul class="treeview-menu">-->
<!--                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>-->
<!--                            <li class="treeview">-->
<!--                                <a href="#"><i class="fa fa-circle-o"></i> Level Two-->
<!--                                    <span class="pull-right-container">-->
<!--                      <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </span>-->
<!--                                </a>-->
<!--                                <ul class="treeview-menu">-->
<!--                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
<!--            <li class="header">LABELS</li>-->
<!--            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>-->
<!--            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>-->
<!--            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>