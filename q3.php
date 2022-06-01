<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head">
			<p>What is the next number in the sequence below?</p>
		</div>
		<div class="magic-squre-pic">
			<img src="images/number-puzzles_2.gif">
		</div>
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