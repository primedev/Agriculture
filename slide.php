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
		<?php 
			include "post-slide.php";
			include "post-slide.php";
			include "post-slide.php";
		?>
		<div class="paging cover">
			<ul>
				<li>
					<a href="#" class="more end">
						<b></b>
						>>
					</a>
				</li>
				<li>
					<a href="#" class="more end">
						<b></b>
						1
					</a>
				</li>
				<li>
					<a href="#" class="more end">
						<b></b>
						2
					</a>
				</li>
				<li>
					<a href="#" class="more end">
						<b></b>
						3
					</a>
				</li>
				<li>
					<a href="#" class="more end">
						<b></b>
						4
					</a>
				</li>
				<li>
					<a href="#" class="more end">
						<b></b>
						<<
					</a>
				</li>
			</ul>	
		</div>
		</div>
	</section>
</section>
<?php
	include "footer.php";
?>