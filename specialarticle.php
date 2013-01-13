<?php 
	include "header.php";
?>
	<section class="logo">
		<a href="./index.php" title="Agriculture" class="logo">
				<h1>mehdi jafary</h1>
			</a>
	</section>
<section class="content cover">
	<div class="bg-top"></div>
<?php
	include "sidebarright.php";
?>
	<section class="sideleft ">
		<div class="post">
			<div class="post-title">
				<h2>نام کامل مقاله</h2>
			</div>
			<p>
				<img src="./images/pic_big.jpg" class="pic" />
			</p>
			<p class="f12"> متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله  متن کامل مقاله </p>
			<a href="#" class="more end" target="_blank">
				<b></b>
				دانلود مقاله
			</a>
			<a href="#" class="more end nazar" target="_blank">
				<b></b>
				ارسال نظر
			</a>
			<div class="divseprate"></div>
		</div>
		<section class="comment-article" id="comment-article" >
		<div class="close-nazar"></div>
		<div id="content-comment">
		<div class="nocomments">
			<form name="frm-idea" id="frm-idea">
				<label>نام</label>
				<input type="text" name="firstname" id="firstname" />
				<label>ایمیل</label>
				<input type="text" name="lastname" id="lastname" />
				<label>پیام</label>
				<textarea rows="5"></textarea><br />
				<input type="submit" name="submit" value="ارسال نظر" />
			</form> 	
		</div>
	</div>
</section>
</section>
</section>
<?php
	include "footer.php";
?>