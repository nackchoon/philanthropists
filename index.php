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
			 
          <div class="front-image">
            
            <a href="/projects/concert2013.php">
              <img src="/images/projects/concert2013/main.jpg" alt="" width="996" />
            </a>
            
          </div> 
          
          <!-- <div class="front-text">
            
            <div class="front-title">
              <a href="/projects/concert2013.php">The Philanthropic Concert</a>
            </div>
            
          </div> -->
					
          <!-- <div class="front_comment text-center">
            소아마비 백신 후원 콘서트<br />
            <small>2013년 1월 4일 금요일 오후 6:30-9PM / 홍대 롤링홀</small>
          </div> -->
					
					<br />
					
					<?php  
             //Load Title image and header  
             include_once('./includes/index_countdown.php');  
		         ?>
					
          <!-- <div class="more">
          
            <a href="/projects/conference/index.php" class="link-button3 alignright">자세히</a>
            
          </div> -->
					
				</div>

				<!-- <div class="first-item scroll-content-item">

					<div class="scroll-item-img"><a href="project.php"><img src="images/projects/temp_img_6.jpg" width="304" height="227" alt="" /></a></div>

					<div class="scroll-item-name">

						<p><a href="#">Web Name</a> | <a href="#" class="link-view">view</a></p>

						<span class="item-date">APR 12, 2010 | WEBDESIGN</span>

					</div>

				</div>

				<div class="scroll-content-item">

					<div class="scroll-item-img"><a href="project.php"><img src="images/projects/temp_img_3.jpg" width="304" height="227" alt="" /></a></div>

					<div class="scroll-item-name">

						<p><a href="#">Web Name</a> | <a href="#" class="link-view">view</a></p>

						<span class="item-date">DEC 9, 2009 | WALLPAPERS</span>

					</div>

				</div> -->

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
