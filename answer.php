<?php
	include('connect.php');	
	
	$hid = $_POST['hid'];
	$ans = $_POST['ans'];
	$mid = $_POST['mid'];

	$query = "select * from `answer_puzzle` where qid='".$hid."' and mid ='".$mid."' and answer='".$ans."' ";
	$result = mysqli_query($db,$query);
	if(mysqli_num_rows($result) > 0) 
	{
		
		$queryn = "select * from `question_puzzle` where mid=".$mid;
		$resultn = mysqli_query($db,$queryn);
		$numrown=mysqli_affected_rows($db);
		
		$query = "select * from `question_puzzle` where id > '".$hid."' and mid ='".$mid."' order by id";
		$result = mysqli_query($db,$query);
		$numrow=mysqli_affected_rows($db);
		$numrow2 = mysqli_num_rows($result);
		$arr=mysqli_fetch_array($result);
		
		for ($i = $numrow; $i > $numrow; $i--)
		{ //2nd for loop
			  //  echo $i;    
        }
		$ab = "masterid".$mid;
		$ab2 = "master".$mid;
		$_SESSION[$ab]= $numrown - $numrow;
		
		$id = $arr['id'];
		$mid = $arr['mid'];
		$html_link = $arr['html_link'];
		$success = $arr['success'];
		if($numrow2 == 0)
		{
			$page = "success";
			echo $_SESSION[$ab2] = $page;
		}
		else
		{
			$_SESSION[$ab2] = $html_link."?hid=".$id."&mid=".$mid."&numrow=".$i;
			echo $_SESSION[$ab2];
		}
	}
	else
	{
	
	}
?>