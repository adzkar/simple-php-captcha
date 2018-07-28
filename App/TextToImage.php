<?php

  namespace App;
  /**
   * [textToImage]
   * @author Adzkar Fauzie <adzkarfauzie02@gmail.com>
   */
  class TextToImage
  {
    private $img;

    // createImage
    public function createImage($text, $fontSize = 40, $imgWidth = 160, $imgHeight = 60) {

    	// font path
    	$font = __DIR__.'/fonts/font.ttf';

    	// create the image
    	$this->img = @imagecreatetruecolor($imgWidth, $imgHeight);

    	// color
    	$white = imagecolorallocate($this->img, 255, 255, 255);
    	$black = imagecolorallocate($this->img, 0, 0, 0);
    	$grey  = imagecolorallocate($this->img, 128, 128, 128);
    	imagefilledrectangle($this->img, 0, 0, $imgWidth-1, $imgHeight-1, $white);

        // property
        $y = imagesy($this->img)-10;
        $x = imagesx($this->img)-150;
        // echo $marginBottom;
    	//add the text
        imagettftext($this->img, $fontSize, 0, $x, $y, $black, $font, $text);

    	return true;
    }

    // display image
    function showImage() {
    	header('Content-type: image/jpeg');
    	return imagejpeg($this->img);
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
