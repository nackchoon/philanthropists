<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<script language="javascript" type="text/javascript">

		$(document).ready(function(){

			$('.filter-arrow').click(function(){

				$(this).parent().parent().toggleClass("filter-hide");

				$(this).toggleClass("arrowup");

			});

		});

	</script>
	
	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - Projects";  
	    $current_page = "projects"; 

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

<hr class='hr-division' />

			<div class="body_container clearfix">

				<!-- slider -->

				<!--<div class="slider-body newspage"> -->

				<div class="newspage-title">

					<h1>The Philanthropists&#39;</h1> 
					<h2>Projects</h2>

				</div>

				<div class="content-blocks">
					
					<div class="scroll-content-item">

						<div class="news-name">
						
							<h2><a href="/projects/conference/index.php">The Philanthropic Conference</a></h2>
							
						</div>

						<div class="item-date"><em>2012년 8월 4일</em></div>
						
						<div class="project-image-box">
							
							<a href="/projects/conference/index.php">
								
								<img class="project-image aligncenter" src="/images/projects/thumb/conference.jpg" alt="" />
							
							</a>
						
						</div>
						
						<div class="news-short">
							
							<p>The Philanthropic Conference 는 20 대 글로벌 리더들과 사회발전 전문가들의 소통의 장입니다. 행사의 테마인 - Come Join, Be Inspired, and Make Impact - 는 누구나 참여할 수 있고, 모두가 공감할수 있는 사회적 이슈들과 발전 방향을 제시하며 실질적인 사회적 변화로 이어진다는 목표를 갖고 있습니다.</p>
							
							<div class="more alignright">
							
								<a href="/projects/conference/index.php" class="link-button3">자세히</a>
							
							</div>
							
						</div>

						<!-- <div class="more"><a href="/projects/conference/index.php" class="link-button3">자세히</a></div> -->

					</div>

					<div class="scroll-content-item clearfix">

						<div class="news-name">
							
							<h2><a href="/projects/concert.php">The Philanthropic Concert</a></h2>
							
						</div>
						
						<div class="item-date"><em>2012년 1월 5일</em></div>

						<div class="project-image-box">
						
							<a href="/projects/concert.php">
							
								<img class="project-image aligncenter" src="/images/projects/thumb/concert.jpg" alt="" />
						
							</a>
							
						</div>

						<div class="news-short">
							
							<p>The Philanthropic Concert - Inspire Impact:<br />
							   다양한 아티스트들의 재능기부를 통해 사회적 공헌을 하는 콘서트입니다. 수익금 전액은 르완다 성병예방 백신 후원을 위해 사용됩니다.</p>
							
							<div class="more alignright">

								<a href="projects/concert.php" class="link-button3">자세히</a>

							</div>

						</div>
						
					</div>
					
					<div class="scroll-content-item">

						<div class="news-name"><h2>The Philanthropic Magazine</h2></div>

						<div class="item-date"><em>2011년 11월</em></div>
						
						<img class="project-image aligncenter" src="/images/projects/thumb/magazine.jpg" alt="" />

						<div class="news-short">

							<p>The Philanthropists 는 다양한 전략적 사회발전 사례들을 매거진을 통해 대중에게 알립니다. The Philanthropic 매거진은 현 사회의 문제점 제시, 문제점 해소를 위 한 기존의 노력과 앞으로 나아 가야 할 전략적 접근을 제시합니다. 이를 통해 대중들 에게 사회적 책임에 대한 이해력을 높인다는 취지가 있습니다.</p>

						</div>

							<!--<div class="more"><a href="#" class="link-button3">View link</a></div>-->

					</div>
					
					<div class="clear"></div>
					
					<div class="scroll-content-item">

						<div class="news-name"><h2>The Philanthropic Brunch</h2></div>

						<div class="item-date"><em>2011년 8월 6일</em></div>
						
						<div class="project-image-box">
							
							<img class="project-image aligncenter" src="/images/projects/thumb/cambodia.jpg" alt="" />
						
						</div>
						
						<div class="news-short">

							<p>깨끗하고 안전한 물은 특권이 아니라 권리 입니다. The Philanthropists 는 물 부족 국가에게 인간의 기본적인 권리인 물을 선물했습니다. 자선 브런치를 통해 캄보디아 Kampot 군의 3개 마을에 17개의 우물을 선물하였습니다. 이를통해 약 3000명의 캄보디아인들에게 깨끗하고 안전한 물을 제공하였습니다. The Philanthropists 는 앞으로도 지속적으로 우물 프로젝트를 지원할 계획입니다.</p>

						</div>

						<!--<div class="more"><a href="#" class="link-button3">View link</a></div>-->

					</div>
					
					<div class="scroll-content-item">

						<div class="news-name"><h2>연세지역 아동센터</h2></div>

						<div class="item-date"><em>2009년 12월</em></div>

						<img class="project-image aligncenter" src="/images/projects/thumb/yonsei.jpg" alt="" />

						<div class="news-short">

							<p>아이들은 우리들의 미래입니다. The Philanthropists는 매년 크리스마스에 연세지 역 아동센터를 방문해 사랑을 나눕니다. 미혼모 자녀, 다문화가정 자녀, 저소득층 자 녀들과 선물을 나누고 아동센터를 후원합니다.</p>

						</div>

						<!--<div class="more"><a href="#" class="link-button3">View link</a></div>-->

					</div>
					
					<!-- <div class="scroll-content-item">

					           <div class="news-name"><h2>비영리 컨설팅</h2></div>

					           <div class="item-date"><em>Ongoing</em></div>

					           <img class="project-image aligncenter" src="/images/projects/thumb/consulting.jpg" alt="" />

					           <div class="news-short">

					             <p>The Philanthropists 의 nonprofit consulting은 실업과 빈곤, 질병, 대재앙, 사회 불평등 등 다양한 사회 문제 속에서 비영리 기관이 성공적인 비즈니스 기회를 발견할 수 있도록 도와주는 가치 창출 전략 프로젝트 입니다.</p>

					           </div>

					           <div class="more"><a href="#" class="link-button3">View link</a></div>

					         </div> -->
				
					<div class="scroll-content-item">

						<div class="news-name"><h2>세미나와 사례분석</h2></div>
						
						<div class="item-date"><em>Ongoing</em></div>

						<img class="project-image aligncenter" src="/images/projects/thumb/seminar.jpg" alt="" />

						<div class="news-short">

							<p>The Philanthropists는 4주간의 12개의 토픽에 대한 트레이닝과 2달간의 사례분석 을 통해 보다 전문적인 사회발전에 대한 이해를 갖습니다. 이를 통해 멤버들은 전략적 인 사고와 강한 정보력, 그리고 다양한 방면의 지식을 습득합니다. 이는 미래에 The Philanthropists 의 실제 프로젝트를 위한 초석이 됩니다.</p>

						</div>

							<!--<div class="more"><a href="#" class="link-button3">View link</a></div>-->

					</div>
					
					<div class="clear"></div>

					<!-- <div class="scroll-content-item">

						<div class="news-name"><h2><a href="#">컨텐트 제목</a></h2></div>

						<div class="item-date"><em>June 1, 2010</em></div>

						<div class="news-short">

							<h3>사람 리스트:</h3>

							<ul>

								<li>- 아무자료</li>

								<li>- 아무자료</li>

								<li>- 아무자료</li>

							</ul>

							<h3>Official Honorees:</h3>

							<ul>

								<li>- 아무자료</li>

								<li>- 아무자료</li>

							</ul>

						</div>

						<div class="more"><a href="#" class="link-button3">View link</a></div>

					</div> -->

				</div>


			<!--/ slider --> 

			</div> 

<hr class='hr-division' />

<!-- footer -->

			<?php  
			    //Load footer
			    include_once('./includes/footer.php');  
			?>

<!--/ footer -->

		</div>

	</div>

</body>

</html>