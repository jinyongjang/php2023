<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>
    <!-- //head -->
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle center">
            <picture class="intro__images small">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture> 
            <h2>게시글 작성하기</h2>
            <p class="intro__text">
                과거의 실수보다는 미래의 가능성에 집중하여 끊임없이 성장하고 발전하는 모습을 보여드리겠습니다. 
                마지막으로 사용자의 니즈를 고려한 창의적이고 혁신적인 아이디어를 실현시켜, 가치 있는 기술을 제공하겠습니다.
            </p>
        </div>

        <div class="board__inner">
            <div class="board__write">
                <form action="boardWriteSave.php" name="boardWriteSave" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="boardTitle">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="inputStyle" required>
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" id="boardContents" rows="20" class="inputStyle" required></textarea>
                        </div>
                        <button type="submit" class="btnStyle3">저장하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    
</body>
</html>