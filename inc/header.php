<div class="se-pre-con">
  <div class="content_center">
    <span>
      <img alt="logo abirama" src="img/logo-square.png" />
	</span>
  </div>
</div>



<header class="content_center">
  <span>
    <ul>
	  <li class="header-left">
	    <ul>
		  <li class="header-logo">
		    <a aria-label="Link Title" alt="link_title" class="menu-link content_center" href=" ">
			  <img alt="logo abirama" src="img/logo.png" />
			</a>
		  </li>
		</ul>
	  </li>
	  
	  <li class="header-right">
	    <ul>
		  <li class="menu-home">
		    <a aria-label="Link Title" alt="link_title" class="menu-link <?php if($page == 'home') { ?>menu-curr<?php } ?> content_center" href=" ">
			  <i class="fas fa-home"></i>
			</a>
		  </li>
		  <?php if($level == 'one') { ?>
	        <?php require ('inc/menu.php')?>
		  <?php } ?>
		  <?php if($level == 'two') { ?>
	        <?php require ('../inc/menu.php')?>
		  <?php } ?>
		  <li class="menu-main">
		    <a aria-label="Link Title" alt="link_title" class="menu-link open-popup content_center" href="javascript:void(0)">
			  <i class="fas fa-bars"></i>
			</a>
		  </li>
		</ul>
	  </li>
	</ul>
  </span>
</header>