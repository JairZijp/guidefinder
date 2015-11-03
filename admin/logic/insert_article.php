<?php 
if(isset($_POST['submit_form'])) {
	$newName = md5(time().$_FILES['img']['tmp_name']). '.jpg';

	if (!empty($_POST['template']) || !empty($_POST['title']) ||!empty($_POST['date_expired'])) {
		$rs = $mysqli->query("INSERT INTO article(id, image1, date_created, content1, template_nr, title, content2, date_expired) VALUES (null, '$newName', null, '".$_POST['content']."', '".$_POST['template']."', '".$_POST['title']."', '".$_POST['content2']."', '".$_POST['date_expired']."')");
	    move_uploaded_file($_FILES['img']['tmp_name'], '../upload/'. $newName);
	    echo "<script> window.location.replace('index.php?a=beheer'); </script>";
	} else {
		echo "<script> alert('Oeps, er ontbreekt iets!');</script>";
	}
    
}

?>