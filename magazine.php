<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<script language="javascript" type="text/javascript">

		$(document).ready(function(){

			$('.filter-arrow').click(function(){

				$(".filter-arrow").toggleClass("arrowup");

				$(".filter-content").slideToggle(150, function() {

				});

			});

		});

	</script>

	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - Magazine";  
	    $current_page = "magazine";  
		
		//Load slider
		include_once('./includes/slider.php');

	    //Load header  
	    include_once('./includes/header.php');  
	?>

</head> 

<body> 
	
	<div id="outer"> 
		
		<div class="container"> 
		
			<!-- header -->

				<div class="header">

					<?php  
					    //Load Title image and header  
					    include_once('./includes/titlehead.php');  
					?>

					<?php  
					    //Load Navigation  
					    include_once('./includes/navi.php');  
					?>

					<div class="clear"></div>

				</div>

			<!--/ header -->

<hr class="hr-division" />

			<div class="body_container clearfix">

				<div class="content">

					<div class="textpage">

						<div class="submenu">

							<h1>The Philanthropic Magazine</h1>

							<p>Under Construction</p>

						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div>

<hr class="hr-division" />

<!-- footer -->

			<?php  
			    //Load footer
			    include_once('./includes/footer.php');  
			?>

<!--/ footer -->

		</div>

<!--/ middle -->

	</div>

</body>

</html>
