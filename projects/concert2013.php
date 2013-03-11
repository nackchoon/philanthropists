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
						
        				<!-- <div class="project-meta">날짜: <span>2013년 1월 4일 7:00 PM<br />장소: 홍대 롤링홀<br /><a href="http://www.facebook.com/the.philanthropists">페이스북 페이지</a></span></div> -->

              </div>
			
        			<div class="clear"></div>
			
              <div class="project-descr">
                
                <br />
                
                <div class="alignright">
                  <img src="/images/projects/concert2013/concert2013.jpg" width="350"/>
                </div>
                
                <br /><br />
                <h2>소아마비 예방백신 기부를 위한 필란트로픽 콘서트</h2>
                
                <p>더 필란트로피스트는 2013년에도 지난 해에 이어 두번째 더 필란트로픽 生:콘서트를 성공적으로 열었습니다. 이번 더 필란트로픽 生:콘서트는 소아마비의 위험성과 백신의 혜택을 받지 못하는 빈곤 국가 아이들에 대한 인식을 넓히고, 소아마비 백신 지원금을 마련하고자 하는 주제로 열렸습니다. 지난 1월 4일 홍대 롤링홀에서 열린 콘서트는, 엠씨더맥스와 힙합뮤지션 딥플로우, b-free, 화지, 그리고 아카펠라 그룹 메이트리, 인디밴드 동네빵집이 재능 기부로 공연하였고, 취지에 동감하는 많은 분들이 자리를 빛내주셨습니다.</p> 

                <p>이 날 콘서트에는 재능기부로 참여한 아티스트들의 열정적인 공연은 물론, 셀란트로피스트(celanthropists: 셀레브리티와 필란트로피스트의 합성어로 사회 참여에 기여하는 유명인을 칭하는 말) 개념과 전략적 사회발전에 대한 프레젠테이션도 더해졌습니다.  더 필란트로피스트는 국내에 아직 정착되지 않은 셀란트로피스트 문화를 뿌리내리고자 하는 노력의 첫 걸음으로, 자선콘서트를 일회성 행사가 아닌 연간행사로 삼고 매년 다른 사회문제를 토픽으로 열리고 있습니다.</p> 

                <p>약 250명의 관객이 함께한 이번 콘서트를 통해, 6,058,750원의 기부금이 모였으며 기부금은 전액 유니세프 한국위원회를 통해 제3세계 아이들에게 전달될 예정입니다.</p>
                
      
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