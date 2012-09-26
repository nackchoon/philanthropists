<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<script src="../../js/loopedslider.js" language="javascript" type="text/javascript"></script>

	<!-- screenshots -->
	<script src="../../js/jquery.prettyPhoto.js" language="javascript" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css" />
	<script type="text/javascript">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});
		});
	</script>
	<!-- screenshots -->

	<script src="../../js/jquery.mousewheel.min.js" language="javascript" type="text/javascript"></script>

	<script src="../../js/tagTooltip.js" language="javascript" type="text/javascript"></script>

	<style type="text/css">
		
		table, th, td {
			border: 1px solid #31b5df;
			text-align: center;
			margin-left:auto;
			margin-right:auto;
		}
		
		td {
			width: 190px;
			height: 25px;
		}
		
		th {
			color: #31b5df;
			font-weight: 800;
			font-size: 14px;
		}
		
		.speaker_container {
			text-align: center;
			display: block;
		}
		
		.speaker_box {
			float:left;
			text-align: center;
			width: 310px;
			padding: 10 10 10 10px;
			margin: 10 10 10 10px;
		}
		

	</style>
	
	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - The Philanthropic Conference";  
	    $current_page = "conference_speakers";  

	    //Load header  
	    include_once('./../../includes/header.php');  
	?>

</head>
<body>
    
<div id="outer">

	<div class="container">

		<!-- header -->

			<div class="header">
				
				<?php  
				    //Load Title image and header  
				    include_once('./../../includes/titlehead.php');  
				?>
				
				<?php  
				    //Load Navigation  
				    include_once('./../../includes/navi.php');  
				?>

				<div class="clear"></div>

			</div>

		<!--/ header -->
<hr class="hr-division" />

<div class="body_container clearfix">

   		<!-- content -->

	<div class="content">
		
		<div class="project-text">
		
				<?php
					include_once('./../../includes/conf.php');
				?>
				
				<a name="content"></a>
				
				<div class="textpage">

					<div class="submenu"> 
						<h1>
							<a href="/projects/conference/index.php#content">Overview</a> /
							<a href="/projects/conference/topics.php#content">Topics and Panelists</a> /
							<!-- <a href="/projects/conference/panelists.php#content">Panelists</a> / -->
							Speakers
							
						</h1>
					</div>
					
					<h3>Main Speakers</h3>
					
					<br />
					
					<div class="speaker_container">
						
						<div class="speaker_box">
							<img src="/images/projects/conf2012/speakers/yoonseokin.jpg" alt="" />
							<br /><br />
							<h4>희망제작소 윤석인 소장님</h4>
							<p>
								~1985 서울대학교 종교학 학사<br />
								~2008 원광대학교 대학원 철학 석사<br />
								~2010 원광대학교 대학원 불교학 박사과정수료
							</p>
							<p>
								1986~1987 한국기독교사회문제연구원 연구간사<br />
								1987~1988 민주통일민중운동연합 정책실 간사<br />
								1988 한겨레신문 정당팀장 법조팀장
							</p>
							<p>
								~2006 한겨레신문 경영기획실 실장<br />
								~2012 희망제작소 부소장<br />
								네이버 서비스 자문위원회 자문위원<br />
								제 2대 희망제작소 소장
							</p>
						
						</div>
					
						<div class="speaker_box">
							<img src="/images/projects/conf2012/speakers/kimjaegu.jpg" alt="" />
							<br /><br />
							<h4>사회적기업진흥원 김재구 원장님</h4>
							<p>
								서울대학교 대학원 경영학과 박사<br />

								서울대학교 대학원 경영학과 석사<br />

								서울대학교 경영학과 학사
							</p>

							<p>
								제2대 한국사회적기업진흥원 원장<br />

								한국취업진로학회 부회장<br />

								한일경상학회 상임이사<br />

								한국윤리경영학회 상임이사<br />

								한국자동차산업연구회 회장<br />

								한국생산성학회 회장<br />

								한국노동연구원 연구위원<br />

								미국 스탠퍼드대학교 아시아태평양연구소 연구원<br />

								정부혁신지방분권위원회 행정개혁전문위원<br />

								정부혁신관리평가단 평가위원<br />

								기획예산처 기금운영평가단 산하기관경영평가반<br />

								명지대학교 크리스천최고경영자과정 교학부 부장<br />

								미국 하와이대학 방문교수<br />

								대통령실 서민정책자문회의 자문위원<br />

								고용노동부 고용노동정책자문회의 자문위원<br />

								명지대학교 경영대학 경영학과 교수<br />
							</p>
						</div>
					
						<div class="speaker_box">
							<img src="/images/projects/conf2012/speakers/kimsangmin.jpg" alt="" />
							<br /><br />
							<h4>김상민 의원님</h4>
							<p>
								아주대학교 사학과 학사<br />

								아주대학교 18대 총학생회장<br />

								연세대 행정대학원 사회문화과정 재학
							</p>
							
							<p>
								보건복지부 희망나눔 정책네트워크 위원<br />

								대통령실 국민소통비서관실 정책자문위원<br />

								한국소비자 브랜드 위원회 기획위원<br />

								제19대 국회의원 (비례대표/새누리당)<br />

								새누리당 중앙선거대책위원회 청년유세단장<br />

								대학생자원봉사단 V원정대 설립자<br />
							</p>
						</div>
					
					</div>
					
				</div>
				
          	</div>

		</div>

   	</div>            

        <!--/ content --> 

</div>
<hr class="hr-division" />

<!-- footer -->

			<?php  
			    //Load footer
			    include_once('./../../includes/footer.php');  
			?>

<!--/ footer -->    

    </div>

<!--/ middle -->    





</div>

</body>

</html>