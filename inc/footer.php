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
<script defer src="js/base.js"></script>
</body>
</html>