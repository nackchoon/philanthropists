<div class="topmenu">

	<ul class="dropdown">

		<li class="root-item"><a <?php if ($current_page == "home") { ?>class="active"<?php } ?>  href="/index.php">Home</a></li>

		<li class="root-item parent"><a <?php if ($current_page == "strategy") { ?>class="active"<?php } ?> href="/about/strategy.php">About us</a>

			<ul>

				<li class="first"><a <?php if ($current_page == "strategy") { ?>class="active"<?php } ?> href="/about/strategy.php">Strategy</a></li>

				<li><a <?php if ($current_page == "characteristics") { ?>class="active"<?php } ?> href="/about/characteristics.php">Characteristics</a></li>
				
				<li class="last"><a <?php if ($current_page == "members") { ?>class="active"<?php } ?> href="/about/members.php">Members</a></li>
				
			</ul>

		</li>
		
		<li class="root-item"><a <?php if ($current_page == "projects") { ?>class="active"<?php } ?> href="/projects.php">Projects</a></li>
		
    <!-- <li class="root-item parent"><a <?php if ($current_page == "conference") { ?>class ="active"<?php } ?> href="/projects/conference/index.php">Conference</a>
    
      <ul>
        
        <li class="first"><a <?php if ($current_page == "conference") { ?>class="active"<?php } ?> href="/projects/conference/index.php#content">Overview</a></li>
        
        <li><a <?php if ($current_page == "conference_topics") { ?>class="active"<?php } ?> href="/projects/conference/topics.php#content">Topics</a></li>
        
        <li class="last"><a <?php if ($current_page == "conference_speakers") { ?>class="active"<?php } ?> href="/projects/conference/mainspeaker.php#content">Speakers</a></li>
      
      </ul>
    
    </li> -->

	  
	   <!-- <li class="root-item"><a <?php if ($current_page == "gallery") { ?>class="active"<?php } ?> href="/media/gallery.php">Gallery</a></li> -->

	   <li class="root-item"><a <?php if ($current_page == "news") { ?>class="active"<?php } ?> href="/media/press.php">News Press</a></li>

	   <!-- <li class="root-item"><a <?php if ($current_page == "magazine") { ?>class="active"<?php } ?> href="/magazine.php">Magazine</a></li> -->
	   
		
		<li class="root-item"><a <?php if ($current_page == "contact") { ?>class="active"<?php } ?> href="/contact.php">Contact</a></li>

	</ul>

</div>