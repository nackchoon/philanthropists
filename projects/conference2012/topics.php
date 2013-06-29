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
		

	</style>
	
	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - The Philanthropic Conference";  
	    $current_page = "conference_topics";  

	    //Load header  
	    include_once('../../includes/header.php');  
	?>

</head>
<body>
    
<div id="outer">

	<div class="container">

		<!-- header -->

			<div class="header">
				
				<?php  
				    //Load Title image and header  
				    include_once('../../includes/titlehead.php');  
				?>
				
				<?php  
				    //Load Navigation  
				    include_once('../../includes/navi.php');  
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
					include_once('../../includes/conf.php');
				?>
				
				<a name="content"></a>
				
				<div class="textpage">

					<div class="submenu"> 
						<h1>
							<a href="/projects/conference/index.php#content">Overview</a> /
							Topics and Panelists /
							<!-- <a href="/projects/conference/panelists.php#content">Panelists</a> / -->
							<a href="/projects/conference/mainspeaker.php#content">Speakers</a>
							
						</h1>
					</div>
					
					<h3>12개의 전략적 사회발전 패널</h3>
					
					<p>각 주제별로 나누어진 스트림은 컨프런스 당일 선착순으로 싸인업이 가능합니다.<br />
					패널은 전문가 패널리스트의 프레즌테이션, 질문답변, 그리고 열린 토론 형식으로 진행 됩니다.</p>
					
					<br />
					
					<div align="center"><iframe width="853" height="480" src="http://www.youtube.com/embed/F8YH1rqTIRI" frameborder="0" allowfullscreen></iframe></div>
					
					<br />
					
					<table width="935">
						<tr>
							<th colspan="4">12개의 사회발전 패널</th>
						</tr>
						<tr>
							<td><a href="#snp">전략적 비영리</a></td>
							<td><a href="#mf">마이크로 금융</a></td>
							<td><a href="#se">소셜 벤처 &amp; 사회적 기업</a></td>
							<td><a href="#csv">사회적 책임 경영</a></td>
						</tr>
						<tr>
							<td><a href="#g">열린 정책</a></td>
							<td><a href="#gd">녹색 성장</a></td>
							<td><a href="#e">교육</a></td>
							<td><a href="#hp">의료 &amp; 복지</a></td>
						</tr>
						<tr>
							<td><a href="#msd">미디어 in 사회발전</a></td>
							<td><a href="#sd">소셜 디자인 &amp; 기술</a></td>
							<td><a href="#npc">비영리 컨설팅</a></td>
							<td><a href="#sns">SNS in 사회발전</a></td>
						</tr>
					</table>
					
					<br /><br />
					
					<a name="snp"></a><h4>Strategic Non-Profit (전략적 비영리와 전략적 기부)</h4>
					<p>전략적 사고는 현실에 기반하여 미래의 목표를 달성하기 위해 취해야 할 최선의 전략을 선택하고 그 전략에 집중할 수 있는 자기선택적 사고를 말한다. 전략적 비영리 단체는 이러한 전략적 사고를 바탕으로 기존의 비영리단체와는 차별화된 전략적 기부를 통한 사회발전을 추구하는 비영리단체이다.</p> 
					<h2><b>Panelists:</b></h2>
					<p>
						WEGENERATION 문성현 대표님<br />
						IDP UN MDGs Campaign 김정훈 특별 대표님<br />
						국제아동돕기연합 
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/wegeneration.png" alt="" />
						<img src="/images/projects/conf2012/panels/idp.png" alt="" />
						<img src="/images/projects/conf2012/panels/intlchildren.png" alt="" />
					</p>
					
					<br /><br />

					<a name="mf"></a><h4>Microfinance (마이크로금융)</h4>
					<p>한국사회에선 조금 생소한 마이크로금융은 주로 중소기업과 저소득층을 대상으로 한 각종 금융서비를 통칭하며, 마이크로금융 서비스는 크게 각각의 개인과 은행간의 관계를 토대로 진행되는 개인형모델과 다수의 중소기업이 모여 대출등의 서비스를 함께 신청하는 그룹형모델로 나뉜다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						신나는 조합 한종훈 대리님<br />
						열매나눔재단 국내사업부 서경준 차장님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/joyfulunion.png" alt="" />
						<img src="/images/projects/conf2012/panels/yeolmae.png" alt="" />
					</p>
					
					<br /><br />

					<a name="se"></a><h4>Social Entrepreneurship (사회적기업)</h4>
					<p>현세대의 주목을 받고있는 사회적기업은 비영리조직과 영리기업의 중간형태로 취약계층에가 일자리 제공, 환경보호등 사회적 목적을 우선적으로 추구하면서 영업활동을 수행하는 기업을 통칭한다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						FRED 임남수 사장님<br />
						사회적기업진흥원<br />
						빅이슈<br />
						헤드플로 전하상 사장님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/ksocialenterprise.png" alt="" />
						<img src="/images/projects/conf2012/panels/bigissue.png" alt="" />
						<img src="/images/projects/conf2012/panels/headflow.png" alt="" />
					</p>
					
					<br /><br />

					<a name="csv"></a><h4>CSV (Creating Shared Value) (공유가치창출)</h4>
					<p>하버드 경영대 마이클 포터 교수가 처음으로 주장하였으며 기업의 주주에게 돌아갈 이익을 극대화 하는 데만 머물지 않고 종업원과 협력업체 지역사회와 국가등 기업을 둘러싼 다양한 이해관계자들의 이익까지 생각하는 경영마인드를 말한다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						삼성경제연구소 사회공헌연구실 신미주 수석연구원님<br />
						SUSTINVEST 류영재 사장님<br />
						KDI 국제정책 대학원 심상달 명예 교수님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/seri.png" alt="" />
						<img src="/images/projects/conf2012/panels/sustinvest.png" alt="" />
						<img src="/images/projects/conf2012/panels/kdi.png" alt="" />
					</p>
					
					<br /><br />
						
					<a name="g"></a><h4>Governance (열린정책)</h4>
					<p>국가정책에 관해 더이상 일부 소수집단이 아닌 온 국민이 참여를 이끌어 내는 것, 또한 일방통행식의 정부 단일의 통보형이아닌 정부와 국민이 소통하며 만들어나가는 쌍방향 정책을 말한다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						새누리당 김정 님
					</p>
					
					<br /><br />

					<a name="gd"></a><h4>Green Development (녹색성장)</h4>
					<p>에너지와 자원을 절약하고 효율적으로 사용하여 기후변화와 환경훼손을 줄이고 청정에너지와 녹색기술을 연구, 개발하여 새로운 성장 동력을 확보하여 새로운 일자리를 창출해 나가는 등 경제와 환경이 조화를 이루는 성장을 얘기한다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						국립환경과학원/UNFCCC 연구사 유영숙님<br />
						환경연합 및 세종대 기후변화구 김상훈 연구실장님<br />
						환경보존협회 홍성호 박사님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/hwangyung.png" alt="" />
						<img src="/images/projects/conf2012/panels/unfccc.png" alt="" />
					</p>
					
					<br /><br />

					<a name="e"></a><h4>Education (교육)</h4>
					<p>인간이 선천적으로 가지고 태어나는 특성들을 올바른 교육을 통해 개발되어 자기발전을 도모한다. 나아가 교육을 통해 그 목표와 방향에 따라 후천적으로 자아성을 확립하게 된다.</p> 
					<h2><b>Panelists:</b></h2>
					<p>
						알고리디어 강병규 대표님<br />
						한국과학창의재단 창의인재기획단 단장님<br />
						CAN 파운데이션 아트버스 김보경 교육팀장님<br />
						서울대학교 화공생명공학과 유영제 교수님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/ksca.png" alt="" />
					</p>
					
					<br /><br />

					<a name="hp"></a><h4>Health Policy (의료 &amp; 보건)</h4>
					<p>의료란 일정의 관련지식과 기술을 가진 자들이 인간의 질병의 예방, 치료, 사회복지 등을 목적으로 하는 의학의 실천이다. 의료 및 보건 분야에는 국민의 건강을 지키고 유지하기 위한 정부의 각종 정책들과 아울러 건강과 관련된 의료산업, 보다 나은 삶을 위한 보건복지산업등 여러 구성요소가 있다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						바이오신약장기 사업단 단장, 수원대학교 화학공학 임교빈 교수님<br />
						한국보건사회연구원 원장 최병호 박사님<br />
						한국국제보건의료재단 (KOFIH) 김현경 부장님<br />
						성심병원 응급의학과장, 한림대학교 의예과 안무업 교수님<br />
						KOICA 보건연구관 이훈상님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/kihasa.png" alt="" />
						<img src="/images/projects/conf2012/panels/kofih.png" alt="" />
						<img src="/images/projects/conf2012/panels/koica.png" alt="" />
					</p>
					
					<br /><br />

					<a name="msd"></a><h4>Media in Social Development (사회발전과 언론)</h4>
					<p>사회의 워치 독(watch dog)으로 국민의 소리를 대변하는 한편 때로는 정부의 탄압으로 인한 편파적인 보도와 오보로 사회적 혼란을 가져오는 언론의 기본이념은 국가의 자주성을 보전하고 문화적 정체성을 확립하며 국가발전에 긍정적인 영향을 미치는 것이다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						MBC 아마존의 눈물 김현철 PD님<br />
						Benefit Magazine 조재호 대표님<br />
						GP3 Korea 대표 최은창 교수님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/benefit.png" alt="" />
					</p>
					
					<br /><br />

					<a name="sd"></a><h4>Social Design (사회디자인)</h4>
					<p>사회 디자인은 전략적 사고와 기술을 바탕으로 미래가치를 구현하는 정책과 기술을 개발하며 경쟁보다는 협력을 추구하고 모두의 자연환경과 인적자원을 효율적으로 조화시켜 더불어 살아가는 사회를 만들어 나가는 것을 가르킨다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						Planning Korea 이병주 대표이사님<br />
						한국이산화탄소포집및처리연구개발센터(KCRC), 한국에너지기술연구원(KIER) 박태성 연구개발지원실장님<br />
						AHHA 프로젝트 한진우 대표님<br />
						Co-up 양석원 이장님<br />
						DOMC 정인애 대표님
					</p>
					
					<br /><br />

					<a name="npc"></a><h4>Non-Profit Consulting (비영리 컨설팅)</h4>
					<p>전략적 사고를 바탕으로 미래적 가치를 추구하여 상업적 이익보다는 사회적 가치 창출을 목표로 하는 전문적인 컨설팅업무를 이른다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						KoreaCSR 유명훈 대표님<br />
						SCG 고영 대표님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/socialconsulting.png" alt="" />
					</p>
					
					<br /><br />

					<a name="sns"></a><h4>SNS (소셜네트워크서비스)</h4>
					<p>소셜파워가 주목을 받으며 사람과 사람을 이어주는 소셜네트워크가 떠오르고 있다. 트위터 페이스북등으로 대표되는 소셜네트워크서비스는 개인, 집단, 사회의 관계를 네트워크로 파악하여 연결시키는 개념에서 출발하였으며 온라인상에서 사회적 관계를 맺는 서비스를 통칭한다.</p>
					<h2><b>Panelists:</b></h2>
					<p>
						한국소셜미디어진흥원 김주상 이사님<br />
						Impact Square 박동천 사장님<br />
						스토리텔링 연구소 박사영님<br />
						Big Walk 힌완회 사장님
					</p>
					
					<p>
						<img src="/images/projects/conf2012/panels/impactsquare.png" alt="" />
					</p>
					
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
			    include_once('../../includes/footer.php');  
			?>

<!--/ footer -->    

    </div>

<!--/ middle -->    





</div>

</body>

</html>