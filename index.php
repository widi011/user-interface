<?php
    switch (@$_GET['mod']) {
        case 'rekap':
            $page= 'frontpage/rekap.php';
            break;
        case 'book':
            $page= 'frontpage/book.php';
            break;
        default:
            $page= 'frontpage/beranda.php';
            break;
    }
    include 'template.php';
?>