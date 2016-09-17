<?php
	require_once "config.php";
	$projectType = $_POST["type"];
	//$projectName = $_POST["name"]; MODIFY MODIFY
	//$projectDescription = $_POST["description"]; MODIFY MODIFY
	$dbConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
	// connection error for MYSQL

    //WILL UPDATE SOON
	//$result = $dbConnection ->query("SELECT * FROM projects P WHERE P.projectType LIKE '%".$projectType."%' AND P.projectName LIKE '%".$projectName."%' AND P.projectDescription LIKE '%".$projectDescription."%'");
	$final = array();
	while ($row = $result->fetch_assoc()){
		//if ($row["projectType"] === "homeFurnishing"){ // home furnishing project, choose to display the after photo
	   //     $photos = $dbConnection->query("SELECT * FROM photos P, ownership O WHERE O.projectID = ".$row["projectID"]." AND P.photoID = O.photoID AND P.photoType = 'homeFurnishingAfter'");
	   // } else { // not home furnishing, get the first photo we have
	   //     $photos = $dbConnection->query("SELECT * FROM photos P, ownership O WHERE O.projectID = ".$row["projectID"]." AND P.photoID = O.photoID");
	   // }
	   // $photo = $photos->fetch_assoc();
		$a = array(
		//	"id"=>$row["projectID"],
//			"name"=>$row["projectName"],
//			"description" =>$row["projectDescription"],
//			"type" =>$row["projectType"],
//			"path" =>$photo["path"]
			);
//		$final[] = $a;
	}
//	header('Content-Type: application/json');
	echo json_encode($final);
?>