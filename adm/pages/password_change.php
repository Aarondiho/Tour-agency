<?php include '../includes/header.php' ?> 
  
  <?php include('../includes/session.php'); ?>

<body class="g-sidenav-show   bg-gray-100">

        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

        


  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Page</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Mot de Passe</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Changer Mot de Passe</h6>
        </nav>

            <?php include '../includes/navbar.php' ?>

            
    <!-- End Navbar -->
    
    
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
            <br><br><br><br>
          <div class="card">
            <div class="card-body">
              <p class="text-uppercase text-sm">Changer Mot de Passe</p>
                <form id="change_password" enctype="multipart/form-data">
                    <div class="row">
                    <input type="hidden" id="password" name="id" value="<?php echo $session_id ; ?>" required>
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nouveau Mot de Passe</label>
                              <input class="form-control" type="password" id="new_password" name="new_password"    required>
                            </div>
                          </div>
						  <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Retaper le Nouveau Mot de Passe</label>
                              <input class="form-control" type="password" id="retype_password" name="retype_password"   required>
                            </div>
                          </div>
                         
                          
                          <div class="col-md-12">
                              <div class="card-header pb-0">
                            <div class="d-flex align-items-center">

                            <?php if($mot_pass=="827ccb0eea8a706c4c34a16891f84e7b"){?>

                              <a class="btn btn-danger btn-sm " href="logout.php" >Retour</a>

							<?php  }else{ ;  ?>

								<a class="btn btn-danger btn-sm " href="index.php" >Retour</a>

							<?php  } ;  ?>
                              
                              <button class="btn btn-primary btn-sm ms-auto" type="submit" >Enregistrer</button>
                              </div>
                          </div>
                      
                      </div>
                  <form>
                    </div> 
                  </div>
                </div>
              </div>
        <div class="col-md-4">

          <?php include '../includes/right.php'; ?>
		  
      </div>
      </div>
        <?php include '../includes/footer.php' ?>
    </div>
  </main>
  
</body>

<?php include '../includes/script.php'; ?>


    
			<script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
					start_load();
						
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if  (new_password != retype_password){
							alert("Les mots de passe ne correspondent pas");
						}else if (new_password == retype_password){

						var formData = jQuery(this).serialize();

						$.ajax({
							type: "POST",
							url: '../fonctions/ajax.php?action=editer_mot_de_passe',
							data: formData,

							success: function(resp){
						
							$.jGrowl("Votre mot de passe a été modifié avec succès ", { header: 'Succès' });
							var delay = 2000;
								setTimeout(function(){ window.location = 'index.php'  }, delay);  
							}
						});
					}
				});
			});
			</script>
</html>