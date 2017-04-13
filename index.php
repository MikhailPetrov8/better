<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Он будет лучше</title>
    <link rel="stylesheet" href="styles/site.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>

<body>
    <header>
        <div id="headerInside">
            <div id="logo"></div>
            <div id="companyName">Better</div>
            <div id="navWrap">
                <a href="#">Контакты</a>
                <a href="tovar.php">Товар</a>
                <a href="#">Корзина</a>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="gallery">
            <img id="mainPic">
            <button id="leftButton" class="arrow arrow--left">
                <img class="arrow__pic" src="images/back.svg" alt="">
            </button>
            <button id="rightButton" class="arrow arrow--right">
                <img class="arrow__pic" src="images/next.svg" alt="">
            </button>
        </div>
        <div class="picture__description">
            <p id="picture__desc">
                <span id="picture__description"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <form class="form" role="form" action="db/save_form.php" method="post" name="test_form">
        Please fill in the following information:
        <div class="form-group">
            <label for="InputName">Name</label>
            <input name="name" type="text" class="form-control" id="InputName" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="InputEmail">Email Address</label>
            <input name="mail" type="email" class="form-control" id="inputEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="InputText">Message</label>
            <input name="mess" type="text" class="form-control" id="InputText" placeholder="Enter Text">
        </div>
        <br>
        <button name="submit" type="submit" class="btn-default"><img src="images/mail-send.svg" alt="send"></button>
    </form>
    <form action="db/view_data.php" class="form" method="post" name="view_result">
        <button type="submit" class="check btn-default">Посмотреть ранее сохраненные данные</button>
    </form>

</html>
<footer>
</footer>
<script src="js/ajax.jx"></script>
<script src="js/gallery.js"></script>
</body>

</html>
