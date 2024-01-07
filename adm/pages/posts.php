
<?php  

                $user_query = $conn->query("SELECT * FROM utilisateur"); 
                
                $post_query = $conn->query("SELECT * FROM posts ORDER BY idPost DESC"); 
                   
               
                                
            ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Page</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Utilisateurs</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Liste des Utilisateurs</h6>
        </nav>


            <?php include '../includes/navbar.php' ?>


    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../photos/ol.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="fas fa-wifi text-white p-2"></i>
                    <h5 class="text-white mt-4 mb-5 pb-2">BURUNDI TOURISM TRANSPORT</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Profile</p>
                          <h6 class="text-white mb-0"><?php echo $prenom.' '.$nom ;?></h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Aujourdh'hui</p>
                          <h6 class="text-white mb-0"><?php echo date('F, d, Y'); ?> </h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fas fa-puzzle-piece  opacity-10"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">UTILISATEURS</h6>
                      <span class="text-xl">Total </span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0"><?php $user = $user_query ->rowCount(); echo $user ;?></h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fas fa-medal opacity-10"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">POSTES</h6>
                      <span class="text-xl">Total</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0"><?php  $ath = $post_query ->rowCount(); echo $ath ?></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Postes</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-info mb-0" href="index.php?page=post_add"><i class="fas fa-plus"></i>&nbsp;&nbsp;Ajouter un Post</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0"></h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn btn-outline-primary btn-sm mb-0" href="index.php?page=results"></a>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
               
               
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm"></h6>
                    <span class="text-xl"></span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"></button>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Table -->
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              
            </div>
            <div class="card-body pt-4 p-3">
            <div class="table-responsive p-0">
            <table  id="example" class="table table-striped align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-center text-primary text-xl font-weight-bold  ">photo</th>
                      <th class="text-uppercase text-center text-primary text-xl font-weight-bold   ps-2">titre</th>
                      <th class="text-uppercase text-center text-primary text-xl font-weight-bold  ">Déscription</th>
                      <th class="text-secondary "></th>
                      <th class="text-secondary "></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  

                        $i = 0;
                    while($row = $post_query->fetch()):

                      $id = $row['idPost'];
                      $i += 1;
                ?>
                    <tr>

                      <td>
                        <div class="d-flex px-2 py-4">
                          <div>
                          <?php echo $i; ?>  <img src="../photos/<?php echo $row['photo']; ?>" class="avatar avatar-sm me-5" alt="user1">
                          </div>
                        </div>
                      </td>
                      
                      <td>
                        <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['titre']; ?></p>
                      </td>

                      <td>
                        <p class="text-xl text-center mb-0"><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                      </td>
                      
                     
                       
                     
                      
                      <td class="align-middle">
                        <a href="index.php?page=post_add&id=<?php echo $id ; ?>" class="text-secondary font-weight-bold text-xl" data-toggle="tooltip" data-original-title="Edit sport">
                        <span class="badge badge-xl bg-gradient-primary">
                            <i class="fas fa-edit  text-sm opacity-10"></i>
                          </span>
                        </a>
                      </td>
              
                      <td class="align-middle">
                      <a href="index.php?page=posts&supp=<?php echo $id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer?')" class="text-secondary font-weight-bold text-xl" data-toggle="tooltip" data-original-title="Edit club">
                          <span class="badge badge-xl bg-gradient-danger">
                            <i class="fas fa-trash  text-sm opacity-10"></i>
                          </span>
                        </a>
                      </td>
                      
                      
                    </tr>

                    <?php endwhile; ?>
                   
                  </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>
        
      </div>
     

       
      <?php

      if(isset($_GET["supp"])){
        $idtodelete=$_GET["supp"];
        $delete=$conn->EXEC("DELETE FROM posts WHERE idPost = $idtodelete");
        if($delete){
          ?>
          <script>
        document.location.reload();
            
          </script>
      <?php
      }
    }
      ?>