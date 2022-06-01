<?php
	include('connect.php');	
	
	if ($_REQUEST['master'] == "")
	{
		$querymas = "select * from `master_puzzle` order by id asc";
		$resultmas = mysqli_query($db,$querymas);
		$arrmas=mysqli_fetch_array($resultmas);

		$masid = $arrmas['id'];
		$_REQUEST['master'] = $masid;
	}
	$query = "select * from `question_puzzle` where mid='".$_REQUEST['master']."' order by mid asc " ;
	$result = mysqli_query($db,$query);
	$numrow = mysqli_num_rows($result);
	$arr=mysqli_fetch_array($result);

	$id = $arr['id'];
	$mid = $arr['mid'];
	$html_link = $arr['html_link'];
	$masterpage= $html_link."?hid=".$id."&mid=".$mid;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $SITE_NAME; ?></title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
    <div class="main" id="main-site">
        <!-- START :: MAGIC SQUARE -->
        <div class="magic-squre-part">
			<input type="hidden" id="mhtml" name="mhtml" value="<?php echo $masterpage; ?>">
            <div class="magic-squre-part-left-side-main" id="puzzle_content">
                <div class="magic-squre-part-desc-dtl">
                    <div class="magic-squre-part-main-sub-dtl">
                        <h2>LOADING</h2>
						
                    </div>
                </div>
            </div>
			<?php include('right-side-menu.php'); ?>
			
        </div>
		
        <!-- END :: MAGIC SQUARE -->
    </div>
	<?
	$ab = "masterid".$mid;
	$ab2 = "master".$mid;
	
	?>
	<input type="hidden" name="ses2" id="ses2" value="<?php echo $_SESSION[$ab2]; ?>">
	<input type="hidden" name="ses" id="ses" value="<?php echo $mid; ?>">
    <script src="js/jquery.min.js"></script>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
// $(document).ready(function()
// {
	$( window ).on( "load", function()
	{
		var mhtml = $('#mhtml').val();
		var ses2 = $('#ses2').val();
		if(ses2)
		{
			$('#puzzle_content').load(ses2);
		}

		else
		{
			$('#puzzle_content').load(mhtml);
		}
	});
	
	$(document).on('click','.ajaxpuzzle',function()
	{
		var url = $(this).attr('value');

		$.ajax({
			type:'GET',
			url:url,
			success:function(html)
			{
				$('#puzzle_content').html(html);
			}
		});
	});
	
	
	$(document).on('click','#submit',function()
	{
		var ans = $('#ans').val();
		var hid = $('#hiddenans').val();
		var mid = $('#hiddenmaster').val();
		var ses = $('#ses').val();
		$.ajax({
			type:'POST',
			url:'answer.php',
			data : {ans:ans,hid:hid,mid:mid},
			beforeSend: function()
			{
				$("#loading-image").show();
			},
			success:function(response)
			{
				$("#loading-image").hide();
				
				if(response == 'success')
				{
					window.location.href="success.php?ses="+ses;
					//$('#puzzle_content').load('success.php');
				}
				else if(response) 
				{
					//alert(response);
					$("#puzzle_content").load(response);
				//	$('#puzzle_content').html(html);
					location.reload();
				}
				else
				{
					alert('Please enter correct answer.');
				}
			}
		});
	});
//});
</script>