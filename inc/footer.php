<!-- footer -->
<footer class="content_center">
  <span>
    Abirama @2020 - All Right Reserved
  </span>
</footer>
<!-- end footer -->



<menu id="menu-main" class="header-popup">
  <div class="popup-overlay"><a itemprop="url" alt="link_title" class="popup-overlay-close" href="javascript:void(0)"><i class="fas fa-times-circle"></i></a></div>
  <div class="popup-content">
    <ul>
	  <?php if($level == 'one') { ?>
		<?php require ('inc/menu.php')?>
	  <?php } ?>
	  <?php if($level == 'two') { ?>
		<?php require ('../inc/menu.php')?>
	  <?php } ?>
    </ul>
  </div>
</menu>



<div class="floating-rightbottom">
  <div id="btt" title="Return To Top">
    <div class="content_center">
	  <i class="fas fa-angle-double-up"></i>
	</div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/core.css"/>
  <link rel="stylesheet" href="css/core-mobile.css" media="(max-width:1023px)">
  <link rel="stylesheet" href="css/core-desktop.css" media="(min-width:1024px)">
  <?php if($page == 'home') { ?>
    <link rel="stylesheet" href="css/slideshow.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/home.css" type="text/css" media="screen">
  <?php } ?>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   window.jQuery || document.write('<script src="js/jquery.js"><\/script>');
</script>
<script defer src="js/base.js"></script>

<?php if($page == 'home') { ?>
<script defer src="js/slideshow.js"></script>
<script defer>
$(window).on('load', function(){ 
 $('.partner-client-list').slick({
	prevArrow:'<div type="button" data-role="none" class="slick-prev content_center fa fa-chevron-left"></div>',
	nextArrow:'<div type="button" data-role="none" class="slick-next content_center fa fa-chevron-right"></div>',
	lazyLoad:'ondemand',
	dots:false,
	infinite:true,
	slidesToShow:5,
	slidesToScroll:1,
	autoplay:false,
	swipeToSlide:true,
	arrows:true,
	autoplaySpeed:5000,
	responsive:[
	  {
		breakpoint:1024,
		settings:{slidesToShow:4,}
	  },
	  {
		breakpoint:768,
		settings:{slidesToShow:3,}
	  },
	  {
		breakpoint:568,
		settings:{slidesToShow:2,}
	  },
	  {
		breakpoint:414,
		settings:{slidesToShow:1,}
	  }
	],
  });
});
</script>
<?php } ?>
</body>
</html>