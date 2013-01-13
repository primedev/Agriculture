<?php 
	include "header.php";
	include "topheader.php";
?>
<section class="content cover">
	<div class="bg-top"></div>
<?php
	include "sidebarright.php";
?>
<section class="sideleft">
	<div class="ajaxcontent">
	<div class="post">
		<div class="post-title">
			<h2>عضویت در سایت</h2>
		</div>
		<p class="f12"> با عضویت در این سایت شما قادر خواهید بود تا مقالات موجود در این سایت را رایگان دانلود کنید. </p>
		<p class="f12">لطفاً تمامی موارد را با دقت وارد کنید و قبل از عضویت <a href="register-rules.php" target="_blank" class="rules">قوانین</a> را مطالعه کنید. </p>
		<div class="divseprate"></div>
		<section class="form-register f11">
			<form id="frm-register" name="frm-register">
				<label>نام کاربری </label>
				<input type="text" name="firstname" id="firstname" />
				<label>کلمه عبور </label>
				<input type="text" name="lastname" id="lastname" />
				<label>تکرار کلمه عبور</label>
				<input type="text" name="subject" id="subject" />
				<label>پست الکترونیک</label>
				<input type="text" name="subject" id="subject" />
				<label>تلفن همراه</label>
				<input type="text" name="subject" id="subject" />
				<input type="checkbox" /> من به عنوان متقاضی عضویت سایت مهندس جعفری بعد از مطالعه کامل <a href="register-rules.php" target="_blank">قوانین و مقررات</a> سایت موافقت خود را با این قوانین اعلام می کنم.
				<br />
				<input type="submit" name="submit" value="ثبت نام" />
			</form>
		</section>
	</div>
</div>
</section>
</section>
<?php
	include "footer.php";
?>