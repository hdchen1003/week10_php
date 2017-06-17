<?php
	$j=count($_FILES["file"]["name"]);
  //echo $j;
	for ($i=0; $i < $j; $i++)
  {
		if (isset($_FILES["file"]["name"][$i]))
    {
    echo "檔案名稱".$_FILES["file"]["name"][$i]."<br/>";
    echo "暫存路徑".$_FILES["file"]["tmp_name"][$i]."<br/>";
		echo "檔案大小".$_FILES["file"]["size"][$i]."<br/>";
		echo "檔案類型".$_FILES["file"]["type"][$i]."<br/>"."<br/>";
		$a=pathinfo($_FILES["file"]["name"][$i]);
		$t=time()-$i;
		copy($_FILES["file"]["tmp_name"][$i],$t.".".$a["extension"]);
		}
    else
    {
			echo "fail";
		}
	}
?>
<a href=HWupload_index.html>回首頁</a>
