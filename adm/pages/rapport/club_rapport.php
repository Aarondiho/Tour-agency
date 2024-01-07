<?php 
 
                
$resultant_query = $conn->query("SELECT * FROM resultant r,athlete a,competitions c,type_competition ty,sport s,categorie cat  WHERE r.athlete = a.id_athlete AND r.competition = c.id_co AND c.type = ty.id_type_comp AND a.sport = s.id_sport AND a.categorie = cat.id_cat LIMIT 5"); 
           
$club_query = $conn->query("SELECT * FROM club"); 
$ath_query = $conn->query("SELECT * FROM athlete");  
$coach_query = $conn->query("SELECT * FROM entraineur"); 

$ath = $ath_query ->rowCount();
$club = $club_query ->rowCount();
$coach = $coach_query ->rowCount();
$comp = $resultant_query ->rowCount();
                

$current=1;
 ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tableau de Bord</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tableau de Bord</h6>
        </nav>

        <?php include '../includes/navbar.php' ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="index.php?page=athlete" >
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Athlètes</p>
                      <h5 class="font-weight-bolder">
                        <?php echo $ath; ?>
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">Total</span>
                        
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="index.php?page=coach" >
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Entraîneur</p>
                      <h5 class="font-weight-bolder">
                      <?php echo $coach; ?>
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">Tous</span>
                        
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="index.php?page=club" >
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Clubs</p>
                      <h5 class="font-weight-bolder">
                      <?php echo $club; ?>
                      </h5>
                      <p class="mb-0">
                        <span class="text-danger text-sm font-weight-bolder">Total</span>
                        
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6">
          <a href="index.php?page=competition" >
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Compétitions</p>
                      <h5 class="font-weight-bolder">
                      <?php echo $comp; ?>
                      </h5>
                      <p class="mb-0">
                        <span class="text-success text-sm font-weight-bolder">Total</span> 
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                      <i class="fas fa-puzzle-piece text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </a>
        </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Pérformances</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold"><?php echo date('Y') ;?></span>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url('../assets/img/carousel-1.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Motivations</h5>
                    <p>Gagner n'est pas tout, c'est la seule chose.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-2.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Slogan</h5>
                    <p>La victoire revient à ceux qui font le moins d'erreurs.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('../assets/img/carousel-3.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Tips!</h5>
                    <p>Le travail de l'horloge est trop épais, votre travail est de le battre.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Compétitions récement participées</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center ">
                <tbody>
                  <?php 

                  while($row = $resultant_query->fetch()):
                    $id = $row['id_res'];
                  
                  ?>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="../photos/<?php echo $row['photo']; ?>" class="avatar avatar-sm me-3">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">ATHLETE</p>
                          <h6 class="text-sm mb-0"><?php echo $row['prenom'].' '.$row['nom']; ?></h6>
                          <p class="text-xs text-secondary mb-0"><?php echo $row['licence']; ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">CoMPETITION</p>
                        <h6 class="text-sm mb-0"><?php echo $row['nom_comp']; ?></h6>
                        <p class="text-xs text-center font-weight-bold mb-0"><?php echo $row['lieu']; ?></p>
                        <p class="text-xs text-center text-secondary mb-0"><?php echo date('d/m/Y',strtotime($row['date'])); ?></p>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">CATEGORIE</p>
                        <h6 class="text-sm mb-0"><?php echo $row['nom_cat']; ?></h6>
                        <p class="text-xs  text-center text-secondary mb-0"><?php echo $row['genre']; ?></p>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">SPORT</p>
                        <h6 class="text-sm mb-0"><?php echo $row['nom_sport']; ?></h6>
                        <p class="text-xs text-center text-secondary mb-0"><?php echo $row['epreuve']; ?></p>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">CLASSEMENT</p>
                        <h6 class="text-sm mb-0"><?php echo $row['classement']; ?></h6>
                        
                        <p class="text-xs  text-center text-secondary mb-0"><?php echo $row['resultant']; ?></p>
                      </div>
                    </td>
                  </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     