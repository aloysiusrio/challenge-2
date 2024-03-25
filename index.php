<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Lomba Tim Senam</title>
</head>

<body>
    <?php
    if (isset($_GET['soal'])) {
        switch ($_GET['soal']) {
            case 'soal1':
                include 'soal/soal1.php'; //index.php?soal=soal1
                break;
            case 'soal2':
                include 'soal/soal2.php'; //index.php?soal=soal2
                break;
            default:
                echo ("error");
                break;
        }
    } else {
        echo ("halaman tidak ditemukan");
    }

    ?>

</body>

</html>