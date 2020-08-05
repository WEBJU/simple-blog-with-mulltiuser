<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Article</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {
	$title = $_POST['title'];
	$text = strip_tags($_POST['text']);
	$loginId = $_SESSION['id'];
		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO articles(title, text_content, login_id) VALUES('$title','$text','$loginId')");

		echo "<script type='text/javascript'>";
		//display success message
		echo "alert('Article Created successfully!!')";
		echo "</script>";
		header("Location:viewArticles.php");

	}

?>
