<?php 

if(isset($_GET['id'])){
  
    $user_query = $conn->query("SELECT * FROM utilisateur  WHERE id_util=".$_GET['id']);
  
  foreach($user_query->fetch() as $k =>$v){
    $meta[$k] = $v;
  }
  
  }

?>
  
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Page</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Utilisateur</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0"><?php if(isset($_GET['id'])){ echo 'Editer un Utilisateur' ;}else{ echo 'Ajouter un Utilisateur' ;} ?></h6>
        </nav>

            <?php include '../includes/navbar.php' ?>

            
    <!-- End Navbar -->
    
   <div class="card-body shadow-lg mx-4 card-profile-bottom">
      <div class="card p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../photos/ol.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php if(isset($_GET['id'])){ echo 'MODIFICATION' ;}else{ echo 'ENREGISTREMENT' ;} ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
               Utilisateur
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <p class="text-uppercase text-sm">Information d'un Utilisateur</p>
                <form id="add_user" enctype="multipart/form-data">
                    <div class="row">
                        <input class="form-control" type="hidden" name="id" value="<?php echo isset($meta['id_util']) ? $meta['id_util']: '' ?>">
                        <input class="form-control" type="hidden" name="util_id" value="<?php echo $session_id ?>">
                         
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nom</label>
                              <input class="form-control" type="text" name="nom"  value="<?php echo isset($meta['nom']) ? $meta['nom']: '' ?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Prénom</label>
                              <input class="form-control" type="text" name="prenom"  value="<?php echo isset($meta['prenom']) ? $meta['prenom']: '' ?>">
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Email</label>
                              <input class="form-control" type="email" name="email"  value="<?php echo isset($meta['email']) ? $meta['email']: '' ?>">
                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Type</label>
                                  <select name="type"  class="form-control" required>

                                        <?php if(isset($_GET['id'])){?>
                                            <option value="<?php echo isset($meta['type']) ? $meta['type']: '' ?>"> <?php 
                                                
                                                $type =isset($meta['type']) ? $meta['type']: '';
                                                if($type==1){ echo 'Utilisateur';}else{ echo 'Administrateur';} ?> </option>
                                           
                                        <?php } ?> 
                                        
                                        <option value ="1"> Utilisateur</option>
                                        <option value ="0"> Administrateur</option>
                                        
                            
                                      </select>
                            </div>
                          </div>
                          
                          
                          <div class="col-md-12">
                              <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                            
                              <button class="btn btn-danger btn-sm " type="reset" >Annuler</button>

                              
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
      
    
      <script>
		
			
		$("#add_user").submit(function(e){
				e.preventDefault();
				start_load();
				var formData = jQuery(this).serialize();
				$.ajax({
					type: "POST",
					url: '../fonctions/ajax.php?action=save_user',
					data: new FormData($(this)[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    type: 'POST',
					
					success: function(resp){
						
						console.log(resp);
						if (resp == 1) {

							$.jGrowl("Utilisateur ajouté ", { header: 'Succés' });
							var delay = 2000;
								setTimeout(function(){ window.location ="index.php?page=user"; }, delay); 
						
						
						}else if (resp == 2) {

							
							$.jGrowl("Utilisateur modifié ", { header: 'Succés' });
							var delay = 2000;
								setTimeout(function(){ window.location ="index.php?page=user";}, delay);
						
						}
					},
					
				});
				return false;
				});

</script>