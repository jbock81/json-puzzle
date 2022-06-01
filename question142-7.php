<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head-2">
			<h4>Island Hopping</h4>
			<p>I did a little research on some different islands around the world. Can you figure Acklins Codename? You'll be berry happy when you visit that island.</p>
		</div>
		<div class="magic-squre-pic-2">
            <a href="images/Islands-Puzzle-LRG.jpg" target="_blank"><img  style="width:80%;" src="images/Islands-Puzzle.jpg"></a>
		</div>
        <p style="font-size: 70%;">Click on image above for a larger image in a new tab.</p>
		<form action="javascript:;" method="post">
			<div class="magic-squre-input-part">
				<div class="magic-squre-inp-box">
					<input type="text" name="ans" id="ans" value="">
					<input type="hidden" name="hiddenans" id="hiddenans" value="<?php echo $_REQUEST['hid']; ?>">
					<input type="hidden" name="hiddenmaster" id="hiddenmaster" value="<?php echo $_REQUEST['mid']; ?>">
				</div>
				<div class="magic-squre-btn">
					<img id="loading-image" src="images/ajax-loader.gif" style="display: none;height: 100px;">
					<br>
					<a href="javascript:;"><img src="images/enter-btn.png" name="submit" id="submit"></a>
					<!-- <input type="button" name="submit" id="submit" value="Enter">-->
				</div>
			</div>
		</form>
	</div>
</div>