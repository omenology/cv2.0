      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/sb-admin-2.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon">
                  <i class="fas fa-hamsa"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Omenology</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
               <a class="nav-link" href="<?= base_url(); ?>admin">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Profile</span>
               </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Experiences
            </div>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>admin/experience">
                  <i class="fas fa-fw fa-book-reader"></i>
                  <span>Education</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.html">
                  <i class="fas fa-fw fa-briefcase"></i>
                  <span>Careers</span>
               </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Abilities
            </div>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>admin/abilities/skill">
                  <i class="fas fa-fw fa-brain"></i>
                  <span>Skills</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>admin/abilities/language">
                  <i class="fas fa-fw fa-comments"></i>
                  <span>Languages</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>admin/abilities/tool">
                  <i class="fas fa-fw fa-tools"></i>
                  <span>Tools</span>
               </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Projects
            </div>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>admin/project">
                  <i class="fas fa-fw fa-tasks"></i>
                  <span>Projects</span>
               </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <div class="topbar-divider d-none d-sm-block"></div>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button">
                           <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$profile['nama'] ?></span>
                           <img class="img-profile rounded-circle" src="<?=base_url()?>assets/img/<?=$profile['photo'] ?>">
                        </a>
                     </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->