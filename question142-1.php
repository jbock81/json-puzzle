<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head-2">
			<h4>An Easy Beginning</h4>
			<p>Welcome to my menagerie of puzzles, brainteasers and more. Complete all 10 of my challenges within one hour and unlock your laptop.</p>
            <p>You have 10 doors you need to open on the right hand side. Each time you correctly answer a puzzle, you will open the next door. To answer a puzzle, enter the password in the field below. Passwords could be numbers, letters or words. If words, they could be more than one word. I won't expect you to include common articles (like "the" and "a") if it's a word. Capitals or lower case doesn't matter.</p>
            <p>If you need a hint, contact a gamemaster through zoom.</p>
            <p><b>Let's play!</b> I wanted to start you off easy. Answer the riddle below to move on:</p>
            <h5>What runs around the whole yard without moving?</h5>
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