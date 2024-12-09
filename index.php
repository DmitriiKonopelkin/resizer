<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Изменение размера картинки</title>
</head>
<body>
    <div class="container mt-3">
        <h2 class="mb-2 text-center">Изменение размера картинки</h2>
        <form action="resizer.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="filename">Имя файла без расширения:</label>
                <input type="text" class="form-control" id="filename" name="filename" placeholder="Имя файла" required>
            </div>
            
            <div class="form-group">
                <label for="width">Ширина картинки (px):</label>
                <input type="number" class="form-control" id="width" name="width" min="10" max="6000" value="640" required>
            </div>
            
            <div class="form-group">
                <label for="fileToUpload">Файл:</label>
                <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" accept="image/jpeg" required>
            </div>
            
            <button type="submit" class="btn btn-secondary">Отправить</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisPd3Yg==" crossorigin="anonymous"></script>
</body>
</html>