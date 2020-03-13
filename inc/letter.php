<?php 
   session_start();
	require '../db.php';
	if (isset($_POST['send'])) {
        
        $id = $_SESSION['id'];
		$content = $_POST['letter'];

        if (empty($_POST['letter'])) {
        	header("location: ../sayabout.php?id=$id");
        	exit();
        }
 
		$sql="INSERT INTO letter (gid,letter) VALUES(?,?)";
				$stmt = mysqli_stmt_init($con);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location:../index.php");
				exit();
				}
				else{
					$stmt->bind_param("ss",$id,$content);
					mysqli_stmt_execute($stmt);
					header("Location:../thanks.php?content=success");
					exit();
    }
}
    else{
    	header("location: ../index.php");
    }
 ?>