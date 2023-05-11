<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <?php include "../include/head.php" ?>
    <!-- //head -->
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 축하드립니다. 환영합니다.<br>로그인을 해주세요!
            </p>
        </div>
        <!-- //join__inner-->

        <div class="join__inner container" style="justify-content: center;">
            <h2>완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="join__agree mt50">
                <div class='egg'>
                    <h2>ㅊㅋ<br>ㅊㅋ</h2>
                    <div class='yolk'>
                        <div class='face'>
                            <div class='eyes'></div>
                            <div class='mouth'></div>
                        </div>
                    </div>
                </div>                             
                <button href="login.php" type="submit" class="btnStyle">로그인</button>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>