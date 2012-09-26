<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- 여기 있는 모든 컨텐트는 예제 입니다!!! 밑에 있는 내용들 다 긁어왔어요, 형준이형! 나중에 "푸딩" 만들때 참고하세요!-->
<head>

<script src="../js/loopedslider.js" language="javascript" type="text/javascript"></script>

<!-- screenshots -->
<script src="../js/jquery.prettyPhoto.js" language="javascript" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css" />
<script type="text/javascript">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});
			});
</script>
<!-- screenshots -->

<script src="../js/jquery.mousewheel.min.js" language="javascript" type="text/javascript"></script>

<script src="../js/jScrollPane.js" language="javascript" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" media="all" href="../css/jScrollPane.css" />

<script type="text/javascript">

			$(function()

			{

				$('#paneDescr').jScrollPane({showArrows:true, scrollbarWidth: 9, arrowSize:5});

			});

			

</script>

<script src="../js/tagTooltip.js" language="javascript" type="text/javascript"></script>

	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - Project Info";  
	    $current_page = "projectinfo";  

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
		
		<hr class="hr-division">

		<div class="body_container clearfix">

			<!-- content -->

			<div class="content">

				<div class="project-detail">

					<!-- image slider -->

					<div id="loopedSlider">	

						<div class="slider-container">

							<noscript><div class="slides"><div class="slide-image" style="display:block"><img src="../images/projects/project_01.jpg" width="926" height="255" alt="First Image" /></div></div></noscript>

							<div class="slides">

								<div class="slide-image"><img src="../images/projects/project_01.jpg" width="926" height="255" alt="First Image" /></div>

								<div class="slide-image"><img src="../images/projects/project_02.jpg" width="926" height="255" alt="Second Image" /></div>

								<div class="slide-image"><img src="../images/projects/project_05.jpg" width="926" height="255" alt="Third Image" /></div>

								<div class="slide-image"><img src="../images/projects/project_04.jpg" width="926" height="255" alt="Fourth Image" /></div>

							</div>

						</div>

						<a href="#" class="previous"><img src="../images/arrow_previous.png" width="18" height="29" alt="Previous" /></a>

						<a href="#" class="next"><img src="../images/arrow_next.png" width="18" height="29" alt="Next" /></a>

						<ul class="pagination">

							<li><a href="#">1</a></li>

							<li><a href="#">2</a></li>

							<li><a href="#">3</a></li>

							<li><a href="#">4</a></li>

						</ul>	

					</div>

					<script language="javascript" type="text/javascript" charset="utf-8">

						$(function(){

							$('#loopedSlider').loopedSlider({

								container: ".slider-container",							

								autoStart: 7000,

							});

						});

					</script>

					<!--/ image slider -->

					<div class="project-text">

						<div class="project-name">

							<h1>Deadliest Catch</h1>

							<div class="project-meta border">Client: <span>Discovery Chanel</span></div>

							<div class="project-meta">Date: <span>April 23, 2010</span></div>

						</div>

						<div class="project-descr darkScroll" id="paneDescr">

							<p>With our 5th season of Deadliest Catch, we set out to show just how intense this job really is. Having been to Alaska to photograph and share a beer with these fisherman, we understood why they say "the only thing crazier than this job is the men who do it". It's a world where the rules don't apply, up is down and everything is out to get you. Waves grow bigger than a house and they keep growing even bigger and bigger.</p>

							<p>With our 5th season of Deadliest Catch, we set out to show just how intense this job really is. Having been to Alaska to photograph and share a beer with these fisherman, we understood why they say "the only thing crazier than this job is the men who do it". It's a world where the rules don't apply, up is down and everything is out to get you. Waves grow bigger than a house and they keep growing even bigger and bigger.</p>

						</div>

						<div class="project-view">

							<div class="project-meta project-category">

							Photography, 

								<div class="tooltip">

									<span>3 more</span><div class="tipCont"><div class="tipMiddle"><a href="#">Corparative</a> <a href="#">Portfolio</a> <a href="#">Long Category</a></div></div>

								</div>

							</div>

							<p><a href="../images/projects/project_01.jpg" class="link-button" rel="prettyPhoto[screenshots]" title="DEADLIST CATCH / Client: Discovery Chanel">Screenshots</a></p>

							<p class="hide"><a href="../images/projects/project_02.jpg" class="link-button" rel="prettyPhoto[screenshots]" title="A-TEAM / Client: 21th Century Fox">Screenshots</a></p>

							<p class="hide"><a href="../images/projects/project_03.jpg" class="link-button" rel="prettyPhoto[screenshots]" title="Third Screenshot">Screenshots</a></p>

							<p class="hide"><a href="../images/projects/project_04.jpg" class="link-button" rel="prettyPhoto[screenshots]" title="Forth Screenshot">Screenshots</a></p>

							<p><a href="#" class="link-button" target="_blank">Launch Site</a></p>

						</div>

					</div>                    

				</div>

			</div>            

		</div>

<hr class="hr-division">
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

</body>

</html>