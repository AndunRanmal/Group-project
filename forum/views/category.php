<?php
	include("../include/header.php");
?>
<div class="container">
	<h3 style="text-align:center"> Add a New Category and Contribute to the Travelling Community.</h3><br/><br/>
	<div class="col-md-12">
<form method="post" action="../php/AddCategory.php" onsubmit="">
	<div class="form-group">
		<label for="category">Category Type:</label>
		<input type="text" name="category" /><br/>
		<label for="Description">Description:</label><br/>
		<textarea name="cat_description" cols="100" rows="5"></textarea></form></br>
		<input type="submit" name="submit" value="Add A New Category" class="btn btn-info btn-md">
	</div>
</form>
	</div>
</div>
<?php
	include("../include/footer.php");
?>