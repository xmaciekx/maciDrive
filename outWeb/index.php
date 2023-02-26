<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maciDrive</title>
    <link rel="icon" href="img/mD/ico/logo-no-background.ico">

    <link rel="stylesheet" href="css/indexStyles.css">
    <script src="../controls/plugins/jquery-min-3.6.3.js"></script>
    <link rel="stylesheet" href="css/justifiedGallery.min.css" />
    <script src="../controls/plugins/jquery.justifiedGallery.min.js"></script>
</head>
<body>
    <div id="navBar">
        <div class="navBarItem">- - -</div>
        <img class="navBarItem" id="logoNavBar" src="img/maciDrive/png/logo-no-background.png">
        <div class="navBarItem">- - -</div>
    </div>

    <div id="photosContainer">
        <a href="img/testPhotos/DSC_0585.JPG">
            <img class="photo" alt="Title 2" src="img/testPhotos/DSC_0585.JPG"/>
        </a>
        <a href="img/testPhotos/DSC_0598.JPG">
            <img class="photo" alt="Title 2" src="img/testPhotos/DSC_0598.JPG"/>
        </a>
        <a href="img/testPhotos/DSC_0627.JPG">
            <img class="photo" alt="Title 2" src="img/testPhotos/DSC_0627.JPG"/>
        </a>
        <a href="img/testPhotos/DSC_0666.JPG">
            <img class="photo" alt="Title 2" src="img/testPhotos/DSC_0666.JPG"/>
        </a>
        <a href="img/testPhotos/DSC_0666.JPG">
            <img class="photo" alt="Title 2" src="img/testPhotos/DSC_0666.JPG"/>
        </a>
    </div>
    <script>$("#photosContainer").justifiedGallery();</script>
</body>
</html>