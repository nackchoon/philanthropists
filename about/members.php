<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<link type="text/css" rel="stylesheet" href="../js/jquery.qtip.css" />

	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - About Us: Members";  
	    $current_page = "members";  

	    //Load header  
	    include_once('./../includes/header.php');  
	?>

</head>

<body>

	<div id="outer">

		<div class="container">

			<!-- header -->

				<div class="header">

					<?php  
					    //Load Title image and header  
					    include_once('./../includes/titlehead.php');  
					?>

					<?php  
					    //Load Navigation  
					    include_once('./../includes/navi.php');  
					?>

					<div class="clear"></div>

				</div>

			<!--/ header -->

<hr class="hr-division" />
<div class="body_container clearfix">

<!-- content -->

			<div class="content">

				<div class="textpage">

					<div class="submenu"> 
						<h1>
							<a href="strategy.php">Strategy</a> / 
							<a href="characteristics.php">Characteristics</a> / 
							The Philanthropists Members
						</h1>
					</div>
					
					<div class="clear">&nbsp;</div>
					
					<div class="submenu">
					
						<h1>Under Construction</h1>
					
					</div>
					

			</div>
		</div>
			
</div>
<hr class="hr-division" />

<!--/ content -->

<!-- footer -->

			<?php  
			    //Load footer
			    include_once('./../includes/footer.php');  
			?>

<!--/ footer -->

		</div>

<!--/ middle -->

	</div>

	
	<script type="text/javascript">
$('div.member_box').each(function() {
	$(this).qtip({
		content: $('.children(.ui-tooltip)'),
		style: {
			classes: "ui-tooltip"
		}
		hide: {
			fixed: true,
			delay: 180
		}
	});
});
$('.div.member_box').remove('.ui-tooltip');
</script>

</body>

</html>
