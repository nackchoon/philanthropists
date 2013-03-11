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

                <div class="border"><h1>The Philanthropic Concert [生:콘서트]</h1></div>
						
				<div class="project-meta">날짜: <span>2013년 1월 4일 7:00 PM<br />장소: 홍대 롤링홀<br /><a href="http://www.facebook.com/the.philanthropists">페이스북 페이지</a></span></div>

            </div>
			
			<div class="clear"></div>
			
      <div class="text-center">
        
        <div class="alignleft">
          <iframe width="638" height="485" src="http://www.youtube.com/embed/cHVdiOu2YL8?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="alignleft">
          <img src="/images/projects/concert2013/concert2013.jpg" width="350"/>
        </div>
        
      </div>
			
			<div class="clear"></div>
			
			<a href="http://piuul.com/content/view/16" class="link-button3 alignright" target="_blank">티켓 구매</a>
			
          	<div class="project-descr">
          	  
              <h2>소아마비 백신 콘서트!</h2>
              
              <p><b>이제는 기부도 전략이다!</b></p>
              
              <p>
                <b>The Philanthropists</b>는 셀란트로피스트의 선진 재능기부 문화를 여러분에게 소개하고자 <b>2013 더 필란트로픽 콘서트-[生:콘서트]</b>를 주최했습니다. 이번 콘서트의 수익금은 제 3세계 <b>소아마비 백신후원</b>에 사용됩니다.
              </p>
              
              <p><b>셀란트로피스트(Celanthropist):</b> [Celebrity + Philanthropist]라는 신조어</p>
              <blockquote>
                2013 더 필란트로픽 콘서트-[生:콘서트]는 <b>아티스트들은 재능기부</b>를 통한, <b>관객들은 콘서트 관람</b>을 통한 사회 공헌 활동으로 이어주는 전략적 사회발전 콘서트입니다.
              </blockquote>
              
              <p><b>소아마비 백신후원</b></p>
              <blockquote>
                단순 공연 관람이 아닌 전략적인 기부로써 어린이들의 <b>생명을 살리는</b> 참여가 됩니다.
              </blockquote>
              
              <p>
                <strong>날짜:</strong> 2013년 1월 4일 금요일 <br />
                <strong>시간:</strong> 7:00 PM <br />
                <strong>장소:</strong> 홍대 롤링홀 <br />
                <strong>가격:</strong> 온라인 예매 40000원 / 현장구매 44000원 
              </p>
              
              <p>
                <i>오시는 길 혹은 티켓 구매 문의는 위에 있는 티켓 구매 링크를 눌러주세요!</i>
              </p>

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