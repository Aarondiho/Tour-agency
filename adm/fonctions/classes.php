<?php

session_start();



Class Action {

	private $db;

	public function __construct() {

		ob_start();

		include '../connection/db_connect.php'; 
	
    	$this->db = $conn;
	}
	
	function __destruct() {

	    ob_end_flush();
	}

	/* ***********************DEBUT FONCTION POUR UTILISATEUR ************ */

	
	function login(){

		extract($_POST);
		 $mot_pass =  md5($password);
		
		$qry = $this->db->query("SELECT * FROM utilisateur WHERE email = '$email' and mot_pass = '$mot_pass' ");

		if($qry->rowCount()> 0){

			foreach ($qry->fetch() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['util_'.$key] = $value;
				}

			$init = 12345;
			$enligne = 1;

			$id = $_SESSION['util_id_util'];
			$pass = $_SESSION['util_mot_pass'];
			$pass1 = md5($init);
			$active = $_SESSION['util_active'];
			$type = $_SESSION['util_type'];

			if($active == 0){

				return 1100;
			}else{
			
				$online = $this->db->EXEC("UPDATE utilisateur SET enligne='$enligne' WHERE id_util='$id'");
					
				if($pass == $pass1){

						return 10;
					
				}else{

					return 1;
					
				}
			};

			}else{
				return 11;
			
		};
	}

	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:index.php");
	}

	function save_user(){

		extract($_POST);
		$active = 1;
		$password = 12345;
		$crypt_pass = md5($password);
       
		if(empty($id)){

			$stmt = $this->db->prepare("INSERT INTO utilisateur(nom, prenom, email, mot_pass, type, active) VALUES(?,?,?,?,?,?)");
			$save = $stmt->execute([$nom,$prenom,$email,$crypt_pass,$type,$active]);

			if($save){
				return 1;
			}
				 
		}else{ 
			$stmt = $this->db->prepare("UPDATE utilisateur SET nom=?,prenom=?,email=?,type=?  WHERE id_util=? ");
			$save = $stmt->execute([$nom,$prenom,$email,$type,$id]);
			if($save){
				return 2;
			}
		}

		
	}

	function editer_mot_de_passe(){
		extract($_POST);

		$crypt_pass = md5($new_password);
		
		$stmt = $this->db->prepare("UPDATE utilisateur SET mot_pass =? WHERE id_util= ? ");
		$save = $stmt->execute([$crypt_pass,$id]);
		

		if($save)
			return 1;
	}

	function reinitialiser(){
		extract($_POST);
		$password = 12345;
		$crypt_pass = md5($password);
		
		$stmt = $this->db->prepare("UPDATE employe SET mot_pass =? WHERE id_util=?");
		$save = $stmt->execute([$crypt_pass,$id]);
			

		if($save)
			return 1;
	}

	function desactiver(){
		extract($_POST);

		if($status == 0 ){
			$stat= 1;

		}else{

		$stat = 0;
			
		}

		$save = $this->db->EXEC("UPDATE employe SET status ='$stat' WHERE id_util='$id'");

		if($save)
			return 1;
		
		
	}

	



/* *********************** FIN FONCTIONS POUR LES UTILISATEURS ************ */



/* *********************** DEBUT FONCTIONS POUR LES POSTS ************ */

function save_post(){

	extract($_POST);



			if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'../photos/'.$fname);
					
						}else{
							$fname ='user.jpg';
						}
					


	if(empty($id)){

		if($_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'../photos/'.$fname);
		
			}else{
				$fname ='user.jpg';
			}

		
		$stmt = $this->db->prepare("INSERT INTO  posts(titre, content, photo,idUser) VALUES(?,?,?,?) ");
		$save = $stmt->execute([$titre, $content, $fname,$idUser]);

		if($save)
		return 1;
			 
	}else{

		if($_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'../photos/'.$fname);

			$stmt = $this->db->prepare("UPDATE posts SET titre=?, content=?, photo=?,idUser=? WHERE idPost =? ");
			$save = $stmt->execute([$titre, $content, $fname,$idUser, $id]);

		
			}else{

				$stmt = $this->db->prepare("UPDATE posts SET titre=?, content=?, idUser=? WHERE idPost =? ");
			$save = $stmt->execute([$titre, $content, $idUser, $id]);

			}

		
		if($save){
		return 2;
		}
	}

	
	
}
/* *********************** FIN FONCTIONS POUR LES POSTS************ */


}

?>
