<?php

  class textToImage
  {
    private $img;

    // createImage
    function createImage($text, $fontSize = 40, $imgWidth = 400, $imgHeight = 80) {

    	// font path
    	$font = __DIR__.'/fonts/font.ttf';

    	// create the image
    	$this->img = imagecreatetruecolor($imgWidth, $imgHeight);

    	// color
    	$white = imagecolorallocate($this->img, 255, 255, 255);
    	$black = imagecolorallocate($this->img, 0, 0, 0);
    	$grey  = imagecolorallocate($this->img, 128, 128, 128);
    	imagefilledrectangle($this->img, 0, 0, $imgWidth-1, $imgHeight-1, $white);

    	//add the text
        imagettftext($this->img, $fontSize, 0, 20, 50, $black, $font, $text);

    	return true;
    }

    // display image
    function showImage() {
    	header('Content-type: image/png');
    	return imagepng($this->img);
    }

    // save image as png
    function saveAsPng($fileName = 'text-image', $location = '') {
    	$fileName .= ".png";
    	$fileName = !empty($location) ? $location.$fileName:$fileName;
    	return imagepng($this->img, $fileName);
    }

    // save as jpg
    function saveAsJpg($fileName = 'text-image', $location = '') {
    	$fileName .= ".jpg";
    	$fileName = !empty($location) ? $location.$fileName:$fileName;
    }
  }
