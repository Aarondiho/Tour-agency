
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../img/logo.jpg">
  <link rel="icon" type="image/png" href="../img/logo.jpg">
  <title>
    olympique
  </title>

  
  
  
  
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <!--     Fonts and icons     -->
  <link href="assets/css/fonts.css" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="assets/js/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <!-- notification  -->
  <link href="assets/js/jGrowl/jquery.jgrowls.css" rel="stylesheet" media="screen">
		<link href="assets/js/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		<script src="assets/js/jGrowl/jquery.jgrowl.js"></script>

  <style>
	

#overlay{	
  position: fixed;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.1);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  text-align:center;
  width: 400px;
  height: 400px;
}

.is-hide{
  display:none;
}
	</style>

</head>

<body class="" style="background-image: url('../img/blog-3.jpg');background-size: cover ; background-repeat: no-repeat">

<div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" >
      TOURISM SUPPORT
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="#">
              <i class="fa fa-chart-pie opacity-6  me-1"></i>
              best services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">
              <i class="fa fa-user opacity-6  me-1"></i>
              Competitive prices
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">
              <i class="fas fa-user-circle opacity-6  me-1"></i>
              Explore
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">
              <i class="fas fa-key opacity-6  me-1"></i>
              Enjoy
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="#" class="btn btn-sm mb-0 me-1 bg-gradient-light">BURUNDI</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" >
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenu!</h1>
            <p class="text-lead text-white"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Connexion</h5>
            </div>
            <div class="card-body">
              <form id="login">
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="mb-3">
                  <input type="password" name ="password"class="form-control" placeholder="Password" aria-label="Password">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Connection</button>
                </div>
                </form>
              </div>
            </div>
            
              
            
          </div>
        </div>
      </div>
    </div>
  </main>

  



  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>

      function start_load(){

      $(document).ajaxSend(function() {
          $('.spinner').prepend('<img id="loaderIcon" src="assets/img/preloader.gif" alt="..."/>');
          $("#overlay").fadeIn(300);　
      });

      }

      function end_load(){
						$('.spinner').hide();
						$("#overlay").hide();　
						$('.cv-spinner').hide();
					

					}



    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="assets/js/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <!-- jgrowl -->
  <script src="assets/js/jGrowl/jquery.jgrowl.js"></script> 

<script>

  jQuery("#login").submit(function(e){
		e.preventDefault();
		var formData = jQuery(this).serialize();
		start_load();
		$.ajax({
			type: "POST",
			url: "fonctions/ajax.php?action=login",
			data: formData,
			success: function(resp){
				console.log(resp);
			if(resp=='1')
			{
			$.jGrowl("Connexion ......", { sticky: true });
			$.jGrowl("Bienvenue", { header: 'Accèss Autorisé' });
			var delay = 1000;
				setTimeout(function(){ window.location = 'pages/'}, delay);  
			}
			else if (resp == '10'){
					$.jGrowl("Connexion ......", { sticky: true });
			$.jGrowl("Bienvenue", { header: 'Accèss Autorisé' });
			var delay = 1000;
				setTimeout(function(){ window.location = 'pages/password_change.php'  }, delay);  
			}
			else if (resp == '11')
			{
        $.jGrowl("Nom Utilisateur ou Mot de passe incorrect", { header: 'Connexion echoué ' });
          end_load();
			
			}else if (resp == '1100')
			{
				$.jGrowl("Vous avez été désactivé, Veuillez contacter l'administrateur ", { header: 'Connexion echoué ' });
				
			
			}
			}
		});
		return false;
	});

</script>
			
</body>

</html>