<?php
function ak_img_resize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $img = "";
    $ext = strtolower($ext);
    if($ext =="png")
    {
        $img = imagecreatefrompng($target);
    }
    else if ($ext == "jpg")
    {
        $img = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w, $h);
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 80);
}

class TextToImage {
    private $img;

    function createImage($text, $fontSize = 15, $imgWidth = 200, $imgHeight = 80){

        $font = 'fonts/arial.ttf';

        $this->img = imagecreatetruecolor($imgWidth, $imgHeight);

        $white = imagecolorallocate($this->img, 255, 255, 255);
        $grey = imagecolorallocate($this->img, 128, 128, 128);
        imagefilledrectangle($this->img, 0, 0, $imgWidth - 1, $imgHeight - 1, $white);

        $splitText = explode ( "\\n" , $text );
        $lines = count($splitText);

        foreach($splitText as $txt){
            $textBox = imagettfbbox($fontSize,0,$font,$txt);
            $textWidth = abs(max($textBox[2], $textBox[4]));
            $textHeight = abs(max($textBox[5], $textBox[7]));
            $x = (imagesx($this->img) - $textWidth)/2;
            $y = ((imagesy($this->img) + $textHeight)/2)-($lines-2)*$textHeight - $fontSize;
            $lines = $lines-1;

            imagettftext($this->img, $fontSize, 0, $x, $y, $grey, $font, $txt);

            imagettftext($this->img, $fontSize, 0, $x, $y, $grey, $font, $txt);
        }
	return true;
    }


    function saveAsPng($fileName = 'watermark', $location = ''){
        $fileName = $fileName.".png";
        $fileName = !empty($location)?$location.$fileName:$fileName;
        return imagepng($this->img, $fileName);
    }

}

function ak_img_watermark($target, $wtrmrk_file, $newcopy, $ext) {
    $watermark = imagecreatefrompng($wtrmrk_file);
    imagealphablending($watermark, false);
    imagesavealpha($watermark, true);
    if($ext =="png")
    {
        $img = imagecreatefrompng($target);
    }
    else if ($ext == "jpg")
    {
        $img = imagecreatefromjpeg($target);
    }
    $img_w = imagesx($img);
    $img_h = imagesy($img);
    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);
    $dst_x = $img_w - $wtrmrk_w; 
    $dst_y = $img_h - $wtrmrk_h; 
    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
    if($ext =="png")
    {
        imagepng($img, $newcopy);
    }
    else if ($ext == "jpg")
    {
        imagejpeg($img, $newcopy, 100);
    }
    imagedestroy($img);
    imagedestroy($watermark);
}
?>