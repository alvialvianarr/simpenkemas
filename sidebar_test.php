 <!-- Start Sidebar -->
 <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
     <ul class="list-group">
         <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
             <small>Menu</small>
         </li>
         <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
             class="bg-success list-group-item list-group-item-action flex-column align-items-start">
             <div class="d-flex w-100 justify-content-start align-items-center">
                 <span class="fa fa-dashboard fa-fw mr-3"></span>
                 <span class="menu-collapsed">Beranda</span>
                 <span class="submenu-icon ml-auto"></span>
             </div>
         </a>
         <div id='submenu1' class="collapse sidebar-submenu">
             <a href="#" class="list-group-item list-group-item-action bg-success text-white">
                 <span class="menu-collapsed">Charts</span>
             </a>
             <a href="#" class="list-group-item list-group-item-action bg-success text-white">
                 <span class="menu-collapsed">Reports</span>
             </a>
             <a href="#" class="list-group-item list-group-item-action bg-success text-white">
                 <span class="menu-collapsed">Tables</span>
             </a>
         </div>
         <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
             class="bg-success list-group-item list-group-item-action flex-column align-items-start">
             <div class="d-flex w-100 justify-content-start align-items-center">
                 <span class="fa fa-user fa-fw mr-3"></span>
                 <span class="menu-collapsed">Mahasiswa</span>
                 <span class="submenu-icon ml-auto"></span>
             </div>
         </a>
         <div id='submenu2' class="collapse sidebar-submenu">
             <a href="tambah_mhs.php" class="list-group-item list-group-item-action bg-success text-white">
                 <span class="menu-collapsed">Tambah Mahasiswa</span>
             </a>
             <a href="#" class="list-group-item list-group-item-action bg-success text-white">
                 <span class="menu-collapsed">Penilaian Mahasiswa</span>
             </a>
         </div>

     </ul>
 </div>
 <!-- End Sidebar -->