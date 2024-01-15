<?php

include('menu-function.php');
?>


	<!-- /asidelink -->
		<div class="cookie_agreement">
			<div class="cookie_agreement__body">
				<p class="cookie_agreement__body__text">
					This website uses cookies to ensure that you use this website comfortably. <br class="pcbr">If you continue to browse this website, you will agree to the use of our cookies.
				</p>
				<a href="#" class="cookie_agreement__body__link">Our Privacy Policy</a>
			</div>
			<button class="cookie_agreement__close">Close</button>
		</div>
		<!-- footer -->
		<footer class="footer">
			<div class="footer__content">
				<div class="footer__label"><a href="<?php echo home_url(); ?>"><?php echo $menu_list['denka-chem-holding-asia-pacific']; ?></a></div>
				<!-- OVER HERE  -->
				<div class="footer__main" style="display: flex; justify-content: space-between; gap: 40px; ">
				<!-- OVER HERE  -->
					<div class="footer__main__group">
						<div class="footer__main__group__label"><a href="#"><?php echo $menu_list['about_denka']; ?></a></div>
						<ul class="footer__main__group__nav">

							<li><a href="<?php echo home_url(); ?>/company-overview"><?php echo $menu_list['company-overview']; ?></a></li>
							<li><a href="<?php echo home_url(); ?>/company-profile"><?php echo $menu_list['company-profile']; ?></a></li>
							<li><a href="<?php echo home_url(); ?>/milestones"><?php echo $menu_list['milestones']; ?></a></li>
							<li><a href="<?php echo home_url(); ?>/plants-and-offices"><?php echo $menu_list['plants-and-offices']; ?></a></li>
						
						</ul>

					</div>
					<div class="footer__main__group">
						<div class="footer__main__group__label"><a href="#"><?php echo $menu_list['product']; ?></a></div>
						<ul class="footer__main__group__nav">
							<li><a href="<?php echo home_url(); ?>/products#electronics-innovative-products"><?php echo $menu_list['electronics-innovative-products']; ?></a></li>
							<li><a href="<?php echo home_url(); ?>/products#elastomers-infrastructure-solutions"><?php echo $menu_list['elastomers-infrastructure-solutions']; ?></a></li>
							<li><a href="<?php echo home_url(); ?>/products#polymer-solutions"><?php echo $menu_list['polymer-solutions']; ?></a></li>
							
						</ul>
					</div>
					<div class="footer__main__group">
						<div class="footer__main__group__label"><a href="<?php echo home_url(); ?>/tech-support-quality-environment"><?php echo $menu_list['tech_support_quality_enviroment']; ?></a></div>
						<div class="footer__main__group__label"><a href="<?php echo home_url(); ?>/denka-life-innovation-research"><?php echo $menu_list['denka_life_innovation_research']; ?></a></div>
						<div class="footer__main__group__label"><a href="<?php echo home_url(); ?>/our-global-network"><?php echo $menu_list['global_network']; ?></a></div>
					</div>
					<div class="footer__main__group"><!--  -->
						<div class="footer__main__group__label"><a href="<?php echo home_url(); ?>/careers"><?php echo $menu_list['careers']; ?></a></div>
						<div class="footer__main__group__label"><a href="<?php echo home_url(); ?>/denka-japan"><?php echo $menu_list['denka_japan']; ?></a></div>
						<div class="footer__main__group__label"><a href="https://denka.com.sg/stage4MA/contact-us"><?php echo $menu_list['contact']; ?></a></div>
					</div>
				</div>
				<!-- ----------------------------OVERHERE---------------------------- -->
				<div class="footer__main__group">
					<iframe src="https://go.pardot.com/l/1048411/2023-11-24/23cn" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="background-color: coral;"></iframe>
				</div>
				<!-- ----------------------------OVERHERE---------------------------- -->
				<div class="footer__sub">
					<span class="footer__sub__group">
						<a href="<?php echo home_url(); ?>/conditions-of-use" class="footer__sub__link">Conditions of Use</a><span class="footer__sub__delimiter">/</span><a href="<?php echo home_url(); ?>/privacy-policy" class="footer__sub__link">Privacy Policy</a><span class="footer__sub__delimiter">/</span><a href="<?php echo home_url(); ?>/sitemap" class="footer__sub__link">Site Map</a>
						<span class="footer__sub__delimiter">/</span><a href="https://go.pardot.com/l/1048411/2023-11-24/23cn" class="footer__sub__link">Subscription</a>
					</span>
				</div>
				
				<small class="footer__small">Copyright © 2023 Denka Chemicals Holdings Asia Pacific Pte Ltd</small>
			</div>
			<script type="text/javascript">
                piAId = '1049411';
                piCId = '3416';
                piHostname = 'pi.pardot.com';
                
                (function() {
                	function async_load(){
                		var s = document.createElement('script'); s.type = 'text/javascript';
                		s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
                		var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
                	}
                	if(window.attachEvent) { window.attachEvent('onload', async_load); }
                	else { window.addEventListener('load', async_load, false); }
                })();
            </script>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_url'); ?>/assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
	  	<script type="text/javascript">
	    

	     $('.slider').fadeIn(500);
	  
	      $(".regular").slick({
	     draggable: true,
		    autoplay: true,
		    autoplaySpeed: 2500,
		    arrows: false,
		    dots: true,
		    fade: true,
		    speed: 1500,
		    infinite: true,
		    cssEase: 'ease-in-out',
		    touchThreshold: 100,
		    dotsClass:"vertical-dots",
		    lazyLoad: 'ondemand', // ondemand progressive anticipated
	      });

 


		</script>

	</div>



</body>

</html>


