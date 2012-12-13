<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

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
	    $page_title = "The Philanthropists - The Philanthropic Concert";  
	    $current_page = "concert";  

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
		
		<div class="project-text">

          	<div class="project-name">

                <div class="border"><h1>The Philanthropic Concert</h1></div>
						
				<div class="project-meta">날짜: <span>2013년 1월 4일 7:00 PM - 9:00 PM <br />장소: 홍대 롤링홀</span></div>

            </div>
			
			<div class="clear"></div>
			
			<div class="text-center">
				
        <!-- <img src="../images/photo/concert2013.png" alt="" class="project-image-ncj" /> -->
        <img src="../images/projects/concert2013/poster.jpg" />

			</div>
			
          	<div class="project-descr">

             	<p><b>소아마비 백신 콘서트!</b></p>
              
              <p>저희 콘서트는 사회적 혁신 프로젝트이며, 자선 콘서트를 통해 대한민국의 젊은 리더들의 사회적 책임의식 개선과 전략적 사회공헌에 대한 인식을 알리는 데에 목적이 있습니다. 또한 수익금 전액은 제 3세계의 소아마비 백신 지원에 사용되며, 이 것은 전략적 기부의 한 예로써 기부금의 용도와 백신의 금액이 명확히 정해져 있습니다. 초청 아티스트들의 재능기부를 통한 사회공헌 공연인만큼 여러분들의 많은 관심 부탁드립니다.</p>
				
				<p><strong>날짜:</strong> 2013년 1월 4일 금요일</p>

				<p><strong>시간:</strong> 7:00 PM - 9:00 PM </p>

				<p><strong>장소:</strong> 홍대 롤링홀</p>

				<p><strong>가격:</strong> 온라인 예매 40000원 / 현장구매 44000원</p>

				<p>*문의사항은 global.philanthropists@gmail.com 으로 연락해 주세요.</p>
          	</div>

		</div>

   	</div>            

        <!--/ content --> 

</div>
<hr class="hr-division">

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