<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="index.css" />
</head>
<header>
    <h1>
        <img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60" />Harcerstwo - moje hobby<img src="img/logo_zhp_biale.svg" alt="Logo_ZHP" width="50" height="60" />
    </h1>
</header>
<?php
require_once "functions.php";
$db = get_db();

$fileName = $_FILES["uploaded_file"]["name"];
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
$fileType = $_FILES["uploaded_file"]["type"];
$fileSize = $_FILES["uploaded_file"]["size"];
$fileErrorMsg = $_FILES["uploaded_file"]["error"];
$kaboom = explode(".", $fileName);
$fileExt = end($kaboom);
$handaling_errors = 0;
$watermark_content = $_POST["watermark_content"];
$image_author = $_POST["author"];
$image_title = $_POST["title"];
if (!$fileTmpLoc)
{
    echo "ERROR: Please browse for a file before clicking the upload button.";
	$handaling_errors++;
}
else if($fileSize > 1048576)
{
    echo "ERROR: Your file was larger than 1 Megabytes in size.";
	$handaling_errors++;
}
else if (!preg_match("/.(jpg|png)$/i", $fileName) )
{
     echo "ERROR: Your image was not .jpg, or .png.";
	 $handaling_errors++;
}
else if ($fileErrorMsg == 1)
{
    echo "ERROR: An error occured while processing the file. Try again.";
	$handaling_errors++;
}
if ($handaling_errors>0)
{
	exit();
}
$moveResult = move_uploaded_file($fileTmpLoc, "images/oryginal_photos/$fileName");
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
    unlink($fileTmpLoc);
    exit();
}

include_once("resizing.php");
$target_file = "images/oryginal_photos/$fileName";
$resized_file = "images/miniatures/$fileName";
$wmax = 200;
$hmax = 125;
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);

$img = new TextToImage;
$img->createImage($watermark_content);
$img->saveAsPng('latest_watermark','images/');


if ($fileExt == "jpg")
{
    $target_file = "images/oryginal_photos/".$kaboom[0].".jpg";
    $new_file = "images/with_watermarks/".$kaboom[0].".jpg";
}
else if ($fileExt == "png")
{
    $target_file = "images/oryginal_photos/".$kaboom[0].".png";
    $new_file = "images/with_watermarks/".$kaboom[0].".png";
}
$wtrmrk_file = "images/latest_watermark.png";

ak_img_watermark($target_file, $wtrmrk_file, $new_file, $fileExt);

$added_image = [
    'title' => $image_title,
    'author' => $image_author,
    'oryginal_image' => "images/oryginal_photos/$fileName",
    'miniature_image' => "images/miniatures/$fileName",
    'watermark_image' => "images/with_watermarks/$fileName"
    ];

$db->images->insertOne($added_image);

echo "Plik o nazwie $fileName zostal z powodzeniem wyslany.<br /><br />";
echo "Ma rozmiar $fileSize bitow.<br /><br />";
echo "Jest to plik typu: $fileType .<br /><br />";
echo "O rozszerzeniu: $fileExt<br /><br />";
?>
<br/>
<a href="galeria_zdjec.php">Powrot</a>