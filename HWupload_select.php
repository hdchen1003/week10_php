<form action="HWupload_uploadexc.php" method="post" enctype="multipart/form-data">
<?php
			$num=$_POST["num"];
			for ($i=0; $i < $num ; $i++)
      {
		      echo '<input type="file" name="file[]"><br>';
		  }
?>
  <input type="submit" value="上傳">
</form>
