<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
    $newFilename = $_POST['filename'];
    $desiredWidth = intval($_POST['width']);
    
    if ($newFilename === '') {
        die('Неверное имя файла!!!');
    }
    if (!is_numeric($desiredWidth) || $desiredWidth <= 0) {
        die('Ошибка в ширине изображения!!!');
    }
    $uploadedFile = $_FILES['fileToUpload']['tmp_name'];
    $fileType = exif_imagetype($uploadedFile);
    
    if ($fileType !== IMAGETYPE_JPEG) {
        die('файл должен быть в формате jpg');
    }
    $sourceImage = imagecreatefromjpeg($uploadedFile);
    list($originalWidth, $originalHeight) = getimagesize($uploadedFile);
    $aspectRatio = $originalWidth / $originalHeight;
    $newHeight = round($desiredWidth / $aspectRatio);
    $resizedImage = imagecreatetruecolor($desiredWidth, $newHeight);
    imagecopyresampled(
        $resizedImage,
        $sourceImage,
        0, 0, 0, 0,
        $desiredWidth, $newHeight,
        $originalWidth, $originalHeight
    );
    

  $targetPath = __DIR__ . '/' . $newFilename . '.jpg';
imagejpeg($resizedImage, $targetPath, 90);
    
    echo "Все прошло успешно!";
}
?>
