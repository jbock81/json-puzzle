<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head">
			<h4>Diddle for the Middle</h4>
			<p>Three mates headed to the pub to throw a few after tossing a few
			down. It wasn’t the greatest game of all time. In fact, it was more
			than sloppy. But, I realized when I looked at the board, it was a
			great way to keep you from drafting my players. Can you sort
			out this board?</p>
		</div>
		<div class="magic-squre-pic">
			<img src="images/DartboardPuzzle.png" width="45%" style="vertical-align:top;">
			<img src="images/Dartboard-Scoreboard.png" width="45%">
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