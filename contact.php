<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<script type="text/javascript" src="js/custom.js"></script>

	<?php  
	    //Set values for page  
	    $page_title = "The Philanthropists - Contact Us";  
	    $current_page = "contact";  

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

			<div class="body_container clearfix">

				<!-- content -->

				<div class="content">

					<div class="textpage contact">

						<div class="submenu"><h1>문의사항 연락정보</h1></div>

						<!-- columns -->

						<div class="column col-1">

							<h2>연락처</h2><br />
							
							<span class="gray">전화번호:</span><br />

							<small>한국:</small> <span class="black">(+82) 010 5052 0743</span><br />

							<small>미국:</small> <span class="black">(+1) 412 759 4956</span><br /><br />
							
							<span class="gray">이메일:</span><br />

							<span class="black">global.philanthropists@gmail.com</span><br />

							<span class="black">&nbsp;</span>

							<br />

								<!--<p><span class="gray"><small>Address:</small></span><br />

								<span>5032 Forbes Ave SMC 3865, PIttsburgh, PA 15289 <br /> USA.</span> <a href="#" class="link-view">View map</a></p>-->

						</div>

						<form action="" method="post" class="contact-form ajax_form" name="contactform" enctype="multipart/form-data">

							<input type="hidden" id="temp_url" name="temp_url" value="http://philanthropists.co.kr" />

							<input type="hidden" id="tempcode" name="tempcode" value="Z2xvYmFsLnBoaWxhbnRocm9waXN0c0BnbWFpbC5jb20=" />

							<input type="hidden" id="myblogname" name="myblogname" value="The Philanthropists" />

							<div class="column col-2">

								<h2>여러분의 의견을 보내주세요</h2>

								<p class="inputtext">

									<label>성함: *</label> <br /><input name="yourname" id="name" class="required" value="" size="40" type="text" />
					
								</p>

								<p class="inputtext">

									<label>이메일: *</label><br /><input name="email" id="email" value="" class="inputtext required" size="40" type="text" />
						
								</p>

								<p class="inputtext">
						
									<label>소속 / URL:</label><br /><input name="company" id="company" value="" class="inputtext" size="40" type="text" />
					
								</p>

							</div>

							<div class="column col-3">

								<p class="textarea"><label>메세지 *</label><br />

									<textarea name="message" id="message" class="required" cols="40" rows="10"></textarea>
						
								</p>

								<input type="submit" name="submit" id="send" value="보내기" class="btn-submit" />

							</div>

						</form>

						<div class="clear"></div>

						<!--/ columns -->

					</div>

				</div>

				<!--/ content -->

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

</body>

</html>
