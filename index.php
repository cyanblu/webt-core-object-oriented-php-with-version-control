<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mit Version Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once "InterfaceVideo.php";
        require_once "Youtube.php";
        require_once "Vimeo.php";
        require_once "HTL.php";
        $videos[] = new Youtube('SURVIVE Trailer German Deutsch (2022)', 'https://www.youtube.com/embed/xe_2QMZ7OKs', '<div class="col"><iframe src="https://www.youtube.com/embed/xe_2QMZ7OKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
        $videos[] = new Vimeo('', '', '<div class="col"><iframe src="https://player.vimeo.com/video/202696600?h=c3a851aff4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
        $videos[] = new HTL('<div class="col"><iframe src="https://www.htlrennweg.at"></iframe></div>');
        echo '<div class="container text-center">
        <div class="row row-cols-4">';
        for ($i = 1; $i <=10; $i++) {
            echo $videos[0]->getHtmlCode();
            echo $videos[1]->getHtmlCode();
            echo $videos[2]->htmlCode;

        }
        echo '</div></div>';
    ?>

</body>
</html>
