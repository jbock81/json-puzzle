<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head-2">
			<h4>Don't Play with Matches</h4>
			<p>You might get burned on this puzzle. Move two and exactly two matches to make the largest possible integer number.</p>
            <p>Oh, and before you get cute because of the last puzzle, I'm setting a few ground rules. You can't flip anything upside down. You can't break any matches and you can't make an equation or an exponential number with the matches. Just a plain, regular integer number I could count on my fingers and toes (if I had very large and unusual hands and feet).</p>
		</div>
		<div class="magic-squre-pic-2">
			<img style="width:80%;" src="images/MatchstickPuzzle.png">
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