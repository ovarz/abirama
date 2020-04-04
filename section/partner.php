  <section class="base-container content_center" id="partner">
	<span>
	  <h4 class="section-title">Partner</h4>
	  <div class="partner-client-list">
	    <?php for ($i=1; $i <= 10 ; $i++) { ?>
	    <div class="pcl-box content_center">
		  <div class="pcl-image <?php if($page != 'home') { ?>flex_ori<?php } ?>">
		    <?php if($page == 'home') { ?>
			  <img alt="img_title" data-lazy="img/sample/client-<?php echo rand(1,10); ?>.png" />
		    <?php } ?>
		    <?php if($page != 'home') { ?>
			  <img alt="img_title" data-original="img/sample/client-<?php echo rand(1,10); ?>.png" />
		    <?php } ?>
		  </div>
		</div>
		<?php } ?>
	  </div>
	</span>
  </section>
