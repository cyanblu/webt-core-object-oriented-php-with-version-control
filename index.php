<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "InterfaceVideo.php";
        require_once "Youtube.php";
        require_once "Vimeo.php";
        print("Hello World!");
        $videos[] = new Youtube('SURVIVE Trailer German Deutsch (2022)', 'https://www.youtube.com/embed/xe_2QMZ7OKs', '<div class="col"><iframe src="https://www.youtube.com/embed/xe_2QMZ7OKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $videos[] = new Vimeo('', '', '<div class="col"><iframe src="https://player.vimeo.com/video/752993149?h=2137891274" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        echo '<div class="container text-center">
        <div class="row row-cols-4">';
        for ($i = 1; $i <=5; $i++) {
            echo $videos[0]->getHtmlCode();
            echo $videos[1]->getHtmlCode();
        }
        echo '</div></div>';
    ?>

</body>
</html>
