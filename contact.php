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
			<h2>ارتباط با ما</h2>
		</div>
		<p class="f12">چنانچه در استفاده از خدمات سایت به مشکلی برخورد کردید و یا پیشنهاد، انتقاد و نظری دارید می توانید از طریق راه های زیر  با ما تماس بگیرید.<br />
توجه داشته باشید همه ایمیل های رسیده به ما مورد بررسی قرار می گیرند ولی بر حسب نیاز و صلاحدید به آنها پاسخ داده خواهد شد. </p>
		<p class="f12">شما می توانید از راههای زیر با مهندس جعفری ارتباط برقرار کنید.</p>
		<p class="f12">تلفن 09153614274-05626222041 </p>
		<p class="f12">فاكس : 05626222876</p>
		<p>Email: mahdibirjand2002@yahoo.com</p>
		<div class="divseprate"></div>
		<div class="post-title">
			<h2>فرم ارسال ایمیل</h2>
			<div class="bg-contact"></div>
		</div>
		<section class="form-content f11">
			<form id="frm-contact" name="frm-contact">
				<label>نام</label>
				<input type="text" name="firstname" id="firstname" />
				<label>ایمیل</label>
				<input type="text" name="lastname" id="lastname" />
				<label>موضوع پیام</label>
				<input type="text" name="subject" id="subject" />
				<label>متن پیام</label>
				<textarea rows="5"></textarea><br />
				<input type="submit" name="submit" value="ارسال" />
			</form>
		</section>
	</div>
	</div>
</section>
</section>
<?php
	include "footer.php";
?>