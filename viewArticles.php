
<?php
//including the database connection file
include('header.php');
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT articles.id,articles.title,articles.text_content ,users.name FROM articles  INNER JOIN users ON articles.login_id=users.id");
// login_id=".$_SESSION['id'].
// $user=mysqli_query();
?>
<div class="container p-4">


<div class="p-2 ml-auto">
 <a href="addArticle.php" class="btn btn-info mt3">Add New Article</a>
</div>

	<table class="table table-striped">
		<tr>
			<td>#</td>
			<td>Article Title</td>
			<td>Article Text </td>
			<td>Author</td>
			<td colspan="2">Actions</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['title']."</td>";
			echo "<td>".$res['text_content']."</td>";
			echo "<td>".$res['name']."</td>";
			echo "<td><a  class='btn btn-primary' href=\"edit.php?id=$res[id]\">Edit</a> <a class='btn btn-danger' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
</div>
