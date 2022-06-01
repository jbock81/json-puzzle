<?php
	include('connect.php');	
?>
					<div class="magic-squre-part-right-side-main">
						<div class="magic-squre-part-right-code-pic">
							
							<?php
							$query = "select * from `question_puzzle` where mid=".$_REQUEST['master'];
							$result = mysqli_query($db,$query);
							
							$count=0;
							$idc=0;
							while($arr=mysqli_fetch_array($result))
							{
								$count++;
								$idc++;
								$id = $arr['id'];
								$mid = $arr['mid'];
								$html_link = $arr['html_link'];
								
								$ab = "masterid".$mid;
							?>
								<div class="magic-squre-sm-box" >
									<?php if($count <= $_SESSION[$ab])
									{
									?>
									<!-- <a href="<?php echo $html_link."?hid=".$id; ?>"><img src="images/right-sidebar-box1.png"></a> -->
										<a href="javascript:;" class="ajaxpuzzle" value="<?php echo $html_link."?hid=".$id."&mid=".$mid; ?>"><img src="images/open-door<?php echo $idc;?>.png"></a>
									<?php
									}
									else
									{
									?>
										<a style="cursor: not-allowed;"><img src="images/close-door<?php echo $idc;?>.png"></a>
									<?php
									}
									?>
								</div>
							<?php
							}
							?>
						</div>
					</div>
			
