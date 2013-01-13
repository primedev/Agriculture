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
			<h2>خرید آنلاین</h2>
		</div>
		<table class="tbl-hesab">
			<tr>
				<td>شماره کارت</td>
				<td>شماره حساب</td>
				<td>بانک مقصد</td>
				<td>به نام</td>
				<td>نشانه بانک</td>
			</tr>
			<tr class="content-td">
				<td>123456789</td>
				<td>214587412548</td>
				<td>jafari</td>
				<td>سامان</td>
				<td>ax</td>
			</tr>
		</table>
		<p class="f12"> این فرم را فقط بعد از واریز نهایی به شماره حساب اعلام شده پر کنید .</p>
		<p class="f12">لطفاً تمامی موارد را با دقت وارد کنید و قبل از پر کردن فرم <a href="register-rules.php" target="_blank" class="rules">قوانین</a> را مطالعه کنید. </p>
		<div class="divseprate"></div>
		<div class="bg-sale"></div>
		<section class="form-register f11">
			<form id="frm-register" name="frm-register">
				<label>نام </label>
				<input type="text" name="firstname" id="firstname" />
				<label>نام خانوادگی </label>
				<input type="text" name="lastname" id="lastname" />
				<label>نام اسلاید</label>
				<input type="text" name="slide" id="slide" />
				<label>نحوه پرداخت :</label>
				<select>
				  <option value="volvo">کارت به کارت</option>
				  <option value="saab">پرداخت نقدی</option>
				</select><br />
				<label> 4 رقم آخر کارت / شماره فیش بانکی : 
 </label>
				<input type="text" name="code" id="code" />
				<label>پست الکترونیک</label>
				<input type="text" name="subject" id="subject" />
				<label>تلفن همراه</label>
				<input type="text" name="subject" id="subject" />
				<br />
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