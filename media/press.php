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
	    $page_title = "The Philanthropists - News and Press";  
	    $current_page = "news";  
		
		//portfolio slider
		include_once('./../includes/slider.php');
		
	    //Load header  
	    include_once('./../includes/header.php');
		
	?>
	
  <link rel="stylesheet" href="../css/column.css" type="text/css" media="screen">

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

				<div class="content">

					<div class="project-detail">

						<div class="project-text">
						  
						  
						  <div class="column2">
						  
						    <div class="project-name">

    							<h1>Youth conference strives to be open to all participants</h1>
							
    							<div class="project-meta border">출처: <span><a href="http://koreajoongangdaily.joinsmsn.com/news/article/article.aspx?aid=2957842">Korea Joongang Daily</a></span></div>

    							<div class="project-meta">날짜: <span>8월 14일 2012</span></div>

    						</div>

    						<div class="project-descr darkScroll" id="paneDescr">

    							<p>"At first glance, The Philanthropic Conference might seem like an average meeting to discuss development issues. But the international gathering, held by nonprofit organization The Philanthropists, aimed to be different in terms of the audience it reached..."</p>

    						</div>
    						
    					</div>
						  
						  <div class="column2">
						  
						    <div class="project-name">

    							<h1>8월 4일, 사회발전을 위한 컨퍼런스가 열립니다</h1>
							
    							<div class="project-meta border">출처: <span><a href="http://blog.naver.com/the_nanum/50146751016">소셜인사이트</a></span></div>

    							<div class="project-meta">날짜: <span>7월 31일 2012</span></div>

    						</div>

    						<div class="project-descr darkScroll" id="paneDescr">

    							<p>"요즘 뉴스를 들여다보면 빈곤, 인권, 환경, 상생 등 다양한 국제사회의 문제들이 하루가 멀다하고 언론에 이슈화 되고 있습니다. 쉼새없이 우리의 삶을 위협하고 있는 것들을 해결하기 위한 다양한 움직임이 국내외에서 감지되고 있는데요, 오늘 소셜 인사이트에서는 이런 노력들 중에서 한 가지 흥미로운 사례를 소개하고자 합니다..."</p>

    						</div>
    						
    					</div>
    					
    					<div class="clear"></div>
              
						  <div class="column2">
						  
						    <div class="project-name">

    							<h1>유학생들이 '사회발전 전략' 논의 콘퍼런스 마련</h1>
							
    							<div class="project-meta border">출처: <span><a href="http://news.naver.com/main/read.nhn?mode=LSD&mid=sec&sid1=102&oid=001&aid=0005671912">네이버 뉴스 (연합)</a></span></div>

    							<div class="project-meta">날짜: <span>7월 1일 2012</span></div>

    						</div>

    						<div class="project-descr darkScroll" id="paneDescr">
  
    							  <p>"세계의 가난과 자원부족으로 인한 불평등 등 다양한 사회 문제를 해결하는 전략과 이를 실천할 사회발전가 육성을 논의하는 자리가 유학생들을 중심으로 마련된다..."</p>
    							  
    						</div>
    					
    					</div>
    					
    					<div class="column2">
						  
						    <div class="project-name">

    							<h1>세히상 밝히는 해외 유학 두뇌들</h1>
							
    							<div class="project-meta border">출처: <span><a href="/images/press/chosun.jpg" target="_new">조선일보</a></span></div>

    							<div class="project-meta">날짜: <span>1월 7일 2012</span></div>

    						</div>

    						<div class="project-descr darkScroll" id="paneDescr">

    							<p>"전세계서 공부하는 한인 35명 '배운 지식으로 도움되고 싶어' 자선단체 만들고 4년째 활동 이번엔 아프리카 후원 콘서트..."</p>

    						</div>
    						
    					</div>
    					
    					
    					
						<div class="clear"></div>

					</div>

				</div>

			</div>

<hr class="hr-division" />

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
