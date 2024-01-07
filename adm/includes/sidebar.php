<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="pages/index.php?page=dashboard " target="_blank">
        <img src="../assets/img/logo.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Tourism transport</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">






        <li class="nav-item">
          <a class="nav-link <?php if($current== 1){echo 'active';}?>"  href="index.php?page=dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tablet-button text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Accueil</span>
          </a>
        </li>



        <li class="nav-item">
          <a class="nav-link <?php if($current== 2){echo 'active';}?>" href="index.php?page=posts">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-medal  text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Posts</span>
          </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link <?php if($current== 14){echo 'active';}?>" href="index.php?page=user">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user  text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Utilisateurs</span>
          </a>
        </li>
      
        

       
    </div>
    <div class="sidenav-footer mx-3 ">
        
     
      

      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-20 mx-auto" src="../assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Burundi</h6>
            <p class="text-xs font-weight-bold mb-0">Tourism transport</p>
          </div>
        </div>
      </div>
      <a href="logout.php"  class="btn btn-dark btn-sm w-100 mb-3">Déconnexion</a>
      </div>
  </aside>

  