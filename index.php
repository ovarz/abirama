<?php $level='one'; $page='home'; require ('inc/top.php')?>
<?php require ('inc/header.php')?>
<div class="site-container">

  <?php require ('section/cover.php')?>
  <?php require ('section/about.php')?>
  <?php require ('section/excellence.php')?>
  <?php require ('section/services.php')?>
  <?php require ('section/partner.php')?>
  <?php require ('section/client.php')?>
  <?php require ('section/contact.php')?>

</div>
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
<?php require ('inc/footer.php')?>