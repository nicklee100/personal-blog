<?php
  /*
    Template Name: Right Sidebar
  */
?>


<div class='side'>

		<div class="widget author-widget">
			
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/headshot.jpg">

			<p>Hi, Im Nick Lee. I'm a web developer. I'm currently focusing on all things JavaScript ie React. I also like biking.</p>
		</div>

		<?php if(!dynamic_sidebar('blog')): ?>
			<h2>set up side bar </h2>
		<?php endif; ?>

			<!-- 	 <div class="widget search">
							<input type="text" placeholder="Search...">
					</div>

					<aside class="widget">
						<h4>Recent Posts</h4>
						<ul>
							<li>Linux Cronjob Doesn't Execute Python Script</li>
							<li>Resolving the Visual Studio “Project Types May Not Be Installed” Error</li>
							<li>Active Directory Users and Computers Missing on Windows 10</li>
							<li>Mounting the Raspberry Pi and Servo Motor to a Dry Food Dispenser</li>
							<li>Controlling a Servo Motor with Gmail and Raspberry Pi</li>
						</ul>
					</aside>

					<aside class="widget">
						<h4>Catagories</h4>
						<ul>
							<li>October 2017</li>
							<li>September 2017</li>
						</ul>
					</aside>
					<aside class="widget">
						<h4>Archives</h4>
						<ul>
							<li>JavaScript</li>
							<li>React.js</li>
							<li>Sports</li>
							<li>CSS</li>
							<li>Deployment</li>
							<li>Server Side</li>
							<li>Testing</li>
						</ul>
					</aside> -->
</div>
