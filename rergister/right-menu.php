<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Untitled Document</title>

<script language="javascript" type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>

<script language="javascript" type="text/javascript" src="scripts/jquery.cookie.js"></script>

<script language="javascript" type="text/javascript" src="scripts/jquery.hoverIntent"></script>

<script type="text/javascript" src="scripts/jquery.dcjqaccordion.2.7.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
$('#melements-acc-vertical').dcAccordion({
						eventType: 'click',
						autoClose: true,
						saveState: true,
						disableLink: true,
						speed: 'slow',
						showCount: false,
						autoExpand: true,
						cookie	: 'dcjq-accordion-1',
						classExpand	 : 'dcjq-current-parent'
});
	});
</script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="acc-vertical-main-menue">
	<ul class="elements-acc-vertical-main-menue" id="melements-acc-vertical">
		<li><a href="#" class="expand-parent">همايش منطقه <span class="expand-icon"></span>
		</a>
		<ul>
			<li><a href="#">همايش منطقه </a></li>
			<li><a href="#">همايش منطقه </a>
			<ul>
				<li><a href="#">همايش منطقه </a></li>
				<li><a href="#">همايش منطقه </a></li>
			</ul>
			</li>
		</ul>
		</li>
		<li><a href="#">همايش منطقه </a></li>
		<li><a href="#">همايش منطقه </a></li>
	</ul>
</div>
</body>
</html>