<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>jQuery Image Slider with Thumbnails, Bullets and Slideshow</title>

	<link rel="stylesheet" href="style.css" />

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<?php
	$imagesTotal = 3;     

?>



	<div class="galleryPreviewContainer">
		<div class="galleryPreviewImage">
			
				
					<img src=images/image1.jpg width="400" height="200"/>
				   	<img src=images/image2.jpg width="400" height="200"/>
					<img src=images/image3.jpg width="400" height="200"/>
			
		</div>
</div>
		<div class="galleryPreviewArrows">
			<a href="#" class="previousSlideArrow">&lt;</a>
			<a href="#" class="nextSlideArrow">&gt;</a>
		</div>
	

	<div class="galleryNavigationBullets">
		<?php
			
				echo '<a href="javascript: changeimage(' . 1 . ')" class="galleryBullet' . 1 . '"><span>Bullet</span><p>Free Eyeglasses</p></a> ';
			    echo '<a href="javascript: changeimage(' . 2 . ')" class="galleryBullet' . 2 . '"><span>Bullet</span><p>Buy One Get One</p></a> ';
				echo '<a href="javascript: changeimage(' . 3 . ')" class="galleryBullet' . 3 . '"><span>Bullet</span><p>Upto 30% Off</p></a> ';
		?>
	</div>



<script type="text/javascript">
// init variables
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;
var thumbsTotalWidth = 0;
var check=1;
$('a.galleryBullet' + currentImage).addClass("active");



// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {

	$('a.galleryBullet' + currentImage).removeClass("active");
	

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('.galleryPreviewImage').css("transform","translateX("+(currentImage-1) * -400+"px)");	

    check=2;
	clearInterval(a);
	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	
	$('a.galleryBullet' + currentImage).removeClass("active");


	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('.galleryPreviewImage').css("transform","translateX("+(currentImage-1) * -400+"px)");	
check=2;
clearInterval(a);

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	
	currentImage = imageNumber;
	$('.galleryPreviewImage').css("transform","translateX("+(currentImage-1) * -400+"px)");	

	$('.galleryNavigationBullets a').removeClass("active");


	$('a.galleryBullet' + imageNumber).addClass("active");
check=2;
clearInterval(a);
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	
	$('a.galleryBullet' + currentImage).removeClass("active");
	

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
$('.galleryPreviewImage').css("transform","translateX("+(currentImage-1) * -400+"px)");	
}

if(check===1)
{var a=setInterval(function() {autoChangeSlides(); }, 4000);}
else
{clearInterval(a);}



</script>

</body>
</html>