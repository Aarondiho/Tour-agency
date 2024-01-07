
<?php  
            
    if(isset($_GET['assoc'])){


      $assoc  = "assoc.id_assoc = ".$_GET['assoc'];
      //$assoc  = " AND assoc.id_assoc = ".$_GET['assoc'];
      $select_ById = $conn->query("SELECT * FROM associations WHERE id_assoc=".$_GET['assoc']);
      
      foreach($select_ById->fetch() as $k =>$v){
        $meta_assoc[$k] = $v;
      }
    
    }else{
    
      $assoc  = "assoc.id_assoc"  ;
    }
    
    $ath_query = $conn->query("SELECT * FROM athlete"); 


    if($typeFed == 0){

      
        $select_associations = $conn->query("SELECT * FROM associations "); 

          $comitteQuery = $conn->query("SELECT * FROM committe com , associations assoc WHERE com.association = assoc.id_assoc AND ".$assoc." ORDER BY com.id_com DESC "); 
      
   }else{

        $select_associations = $conn->query("SELECT * FROM associations assoc , federation fed WHERE assoc.federation = fed.id_fed AND fed.id_fed = ".$typeFed); 

        $comitteQuery = $conn->query("SELECT * FROM committe com , associations assoc, federation fed WHERE com.association = assoc.id_assoc AND assoc.federation = fed.id_fed AND fed.id_fed = ".$typeFed." AND ".$assoc." ORDER BY com.id_com DESC "); 
       
   }
?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbadmlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Page</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Comité</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Comité des Associations</h6>
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
                    <h5 class="text-white mt-4 mb-5 pb-2">COMITE NATIONAL OLYMPIQUE </h5>
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
                    <h6 class="text-center mb-0">COMITE ASSOCIATIONS</h6>
                      <span class="text-xs">Total des membres</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0"><?php $coa =$comitteQuery ->rowCount(); echo $coa; ?></h5>
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
                      <h6 class="text-center mb-0">ATHLETES</h6>
                      <span class="text-xs">Total des Athlètes</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0"><?php $ath = $ath_query ->rowCount(); echo $ath ;?></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- DEBUT Filteur && button d'ajouter -->
             <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <!-- grid -->
                  <div class="row">
                    <div class="col-8 d-flex align-items-center">
                      <!-- <h6 class="mb-0">Listes des arbrites</h6> -->

                      <form id="myDropdownForm" method="POST">
                        
                            <div class="row">
                              <div class="col-9">
                                <div class="form-group">
                                    <select class=" form-control form-select" id="selectOption" name="selectOption" required>

                                      <?php if(isset($_GET['assoc'])){
                                            ?>

                                            <option value="<?php echo isset($meta_assoc['id_assoc']) ? $meta_assoc['id_assoc']: '' ?>"> <?php echo isset($meta_assoc['nom_assoc']) ? $meta_assoc['nom_assoc']: '' ?> </option>
                                            <option value ="" disabled> Choisir Association</option>
                                            <option value ="0">Tous</option>
                                              <?php
                                            
                                                  while($row = $select_associations->fetch()):
                                                  
                                                ?>
                                                  <option value ="<?php echo $row['id_assoc'];?>"> <?php echo $row['nom_assoc'];?></option>

                                              <?php  endwhile; ?>

                                          <?php }
                                          else{
                                            ?>
                                              <option value ="" selected disabled> Choisir Association</option>
                                              <?php
                                            
                                                  while($row = $select_associations->fetch()):
                                                  
                                                ?>
                                                  <option value ="<?php echo $row['id_assoc'];?>"> <?php echo $row['nom_assoc'];?></option>

                                              <?php  endwhile; ?>
                                              
                                            <?php 
                                          } ?>
                                        
                                    </select>
                                </div>
                              </div>
                              <div class="col-3 text-end">
                                  <button type="submit" id="filter-button" class="btn bg-gradient-info mb-0">
                                    Filter
                                  </button> 
                                </div>
                            </div>
                            
                      </form>
                      
                    </div>
                    <div class="col-4 text-end">
                      <a class="btn bg-gradient-info mb-0" href="index.php?page=assocComitteAdd">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Ajouter Comité Association / Ligue
                      </a>
                    </div>
                  </div>

                </div>
                <div class="card-body p-3">
                  
                </div>
              </div>
            </div>
            <!-- FIN Filteur && button d'ajouter -->

          </div>
        </div>
        <div class="col-lg-3">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Compétitions </h6>
                </div>
                <div class="col-6 text-end">
                  <a class="btn btn-outline-primary btn-sm mb-0" href="index.php?page=results">Tous</a>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <?php  
                
                   while($row = $res_query->fetch()):
                    $id = $row['id_res'];
                  ?>
               
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm"><?php echo date('F, d, Y',strtotime($row['date'])) ;?></h6>
                    <span class="text-xs"><?php echo $row['lieu']; ?></span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                  <?php echo $row['resultant']; ?>
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><?php echo $row['classement']; ?></button>
                  </div>
                </li>
                <?php endwhile; ?>
                
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
                      
                      <th class="text-uppercase text-center text-primary text-xl font-weight-bold ">No.</th>
                      <th class="text-uppercase text-center text-primary text-xl font-weight-bold ">Nom</th>
                      <th class="text-center text-uppercase  text-primary text-xl font-weight-bold ">SEXE</th>
                      <th class="text-center text-uppercase  text-primary text-xl font-weight-bold ">NIVEAU</th>
                      <th class="text-center text-uppercase  text-primary text-xl font-weight-bold ">POSTE</th>
                      <th class="text-center text-uppercase  text-primary text-xl font-weight-bold ">ASSOCIATION</th>
                      <th class="text-secondary "></th>
                      <th class="text-secondary "></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    
                    $count =0;
                    while($row = $comitteQuery->fetch()):
                      $id = $row['id_com'];
                      $count +=1;
                ?>
                    <tr>
                    <td>
                          <p class="text-xl text-center font-weight-bold mb-0"><?php echo $count; ?></p>
                            
                      </td>

                      <td>
                        <div class="d-flex px-2 py-4">
                          <div>
                            <a href="../photos/<?php echo $row['photo']; ?>"  target="_blank">
                                
                              <img src="../photos/<?php echo $row['photo']; ?>" class="avatar avatar-xl me-3" alt="user1">
                          
                            </a> 
                          </div>
                          <div class="d-flex flex-column justify-content-center">

                          
                                <?php if($typeFed == 0 && $row['comVerified'] == 0){ ?>

                                    <a href="index.php?page=assocComitte&verified=<?php echo $id; ?>"  class="font-weight-bold font-weight-bold text-lg" data-toggle="tooltip" data-original-title="Edit user">
                                    <span class="badge badge-sm bg-gradient-danger">
                                    <i class="fas fa-check  text-sm opacity-10"> </i>
                                    </span>
                                    </a>

                                <?php } ?>

                            <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['prenom_com'].' '.$row['nom_com']; ?></p>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['genre']; ?></p>
                           
                      </td>
                      <td>
                        <p class="text-xl text-center text-primary font-weight-bold mb-0"><?php echo $row['niveau']; ?></p>
                        <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['domain']; ?></p>
                      </td>
                      <td>
                        <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['titre']; ?></p>
                           
                      </td>
                      <td>
                        <p class="text-xl text-center font-weight-bold mb-0"><?php echo $row['nom_assoc']; ?></p>
                           
                      </td>
                      
                      
                    
                      <td class="align-middle">
                        <a href="index.php?page=assocComitteAdd&id=<?php echo $id ; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-primary">
                            <i class="fas fa-edit  text-sm opacity-10"></i>
                          </span>
                        </a>
                      </td>

                      <td class="align-middle">
                        <a href="index.php?page=assocComitte&supp=<?php echo $id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer?')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <span class="badge badge-sm bg-gradient-danger">
                            
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
    $delete=$conn->EXEC("DELETE FROM committe WHERE id_com = $idtodelete");
    if($delete){
      ?>
      <script>
    document.location.reload();
         
      </script>
      <?php
      }
    }

    
    if(isset($_GET["verified"])){
      $idtoverify = $_GET["verified"];
      $verified = $conn->EXEC("UPDATE committe SET comVerified = 1 WHERE id_com =  $idtoverify");
      if($verified){
        ?>
        <script>
      document.location.reload();
          
        </script>
        <?php
        }
      }
      ?>

      
<script>

  $("#myDropdownForm").submit(function(e){
      e.preventDefault();
      //start_load();
      //var formData = jQuery(this).serialize();
      var selectedOption = $("#selectOption").val();
      if (selectedOption == 0) {
          // Redirect to a different page if the selected option is 0
          window.location.href = 'index.php?page=assocComitte';
      }else{  
        $.ajax({
            type: 'POST',
            url: 'index.php?page==assocComitte',
            //method: 'POST',
            data: { selectedOption: selectedOption },
            success: function(data){
                $('#example').html(data);
                // Redirect to a new URL with the selected ID
                //window.location.href = 'index.php?page=comitte';
                window.location.href = 'index.php?page=assocComitte&assoc='+selectedOption;
                //var delay = 100;
              //setTimeout(function(){ window.location ="index.php?page=comitte&assoc="+selectedOption; }, delay);
          }
        });
      }
  });


</script>