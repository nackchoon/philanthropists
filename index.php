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
	
	<link rel="Stylesheet" type="text/css" href="/css/countdown/main.css"></link>
	
	<style type="text/css">
		.countdown {
			text-align:center;
		}
	</style>
	
	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - Home";  
	    $current_page = "home";  
		
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

			<div class="body_container clearfix"> <!-- slider -->

				<div class="content">
					
					<!-- <a href="/projects/conference2013/index.php">
            <img src="/images/projects/conf2013/main.png" alt="" width="996" />
          </a> -->

					<iframe width="996" height="560" src="//www.youtube.com/embed/GBhfjNIpHtk?rel=0&autoplay=1&controls=0" frameborder="0" allowfullscreen></iframe>
			 
          <!-- with the original div-->
					<!-- <div class="front-image">
            
            <a href="/projects/concert2013.php">
              <img src="/images/projects/conf2013/main.png" alt="" width="996" />
            </a>
            
          </div> -->
          
          <!-- <div class="front-text">
            
            <div class="front-title">
              <a href="/projects/concert2013.php">The Philanthropic Concert</a>
            </div>
            
          </div> -->

					<!-- <br />
          <div class="front_comment text-center">
            2013 더 필란트로픽 生:콘서트 <br />
            필란트로피스트와 함께 해 주신 모든 분들께 진심으로 감사드립니다!
          </div> -->
          
					<br /><br />
					
          <div class="more">
          
            <a href="/projects/conf2013.php" class="link-button3 alignright">자세히</a>
            
          </div>					
					
					<?php  
             //Load Title image and header  
             include_once('./includes/index_countdown.php');  
		         ?>
					

					
				</div>

			<!--/ slider -->

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
	
	<script src="/js/jquery.shuffleLetters.js"></script>

</body>

</html>
