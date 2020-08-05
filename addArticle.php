<?php include('header.php'); ?>
<div class="container p-3">

<div class="p-3">
	<a class="btn btn-info" href="viewArticles.php">View Articles</a>
</div>


	<div class="row p-3">
		<div class="col-md-8">
	<form action="add.php" method="post" name="form1">
		<div class="form-group">
			<label for="">Article Title</label>
			<input type="text" name="title" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="">Article Text </label>
			<textarea type="text" name="text" class="form-control" required></textarea>
		</div>

		<div class="form-group">
			<input type="submit" name="Submit" class="btn btn-primary btn-block" value="Add Articles">
		</div>
		</div>
	</form>
	</div>
		<script type="text/javascript">
					CKEDITOR.replace('text');
		</script>

</div>
<?php include('footer.php'); ?>
