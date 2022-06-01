<div class="magic-squre-part-desc-dtl">
	<div class="magic-squre-part-main-sub-dtl">
		<div class="magic-squre-part-head-2">
			<h4>Math Matters</h4>
			<p>Let's take a break for a little mathematics. These equations may not be calculations you're used to.</p>
            <h4>6 + 4 = 210<br>
9 + 2 = 711<br>
8 + 5 = 313<br>
5 + 2 = 37<br>
7 + 6 = 113<br>
9 + 8 = 117<br>
10 + 6 = 416<br>
15 + 3 = 1218<br>
?? + ?? = 123</h4>
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