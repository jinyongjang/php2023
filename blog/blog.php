<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>

    <?php include "../include/head.php" ?>
    <!-- //head -->
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__search bmStyle">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발과 관련된 글입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchkeyword" aria-label="검색" placeholder="검색어를 입력하세요">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>

                    <?php if(isset($_SESSION['memberID'])){ ?>
                        <ul>
                            <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                        </ul>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="bolg__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All Post</h2>
                    <div class="cards__inner col3 line3">
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.png 2x, ../assets/img/blog01@3x.png 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축디자인 팁</h3>
                                <p>건축디자인 분야에서 일하는 전문가들이 사용하는 다양한 기법과 도구, 그리고 건축디자인을 진행할 때 고려해야 할 사항 등을 소개하는 글을 작성해 보세요. 다양한 프로그램이나 도구 사용법, 건축디자인에 대한 기술적인 설명 등을 담은 글도 좋은 방법입니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.png 2x, ../assets/img/blog02@3x.png 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축 트렌드 분석</h3>
                                <p>최근 건축계에서 떠오르는 트렌드를 조사하고, 그에 대한 분석과 해석을 담은 글을 작성해 보세요. 다양한 건축사례를 참고하며, 현재 건축계에서 논의되고 있는 주요 키워드나 이슈를 다뤄볼 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.png 2x, ../assets/img/blog03@3x.png 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축 역사 연구</h3>
                                <p>건축의 역사와 발전 과정을 조사하고, 그에 대한 연구 결과를 발표하는 글을 작성해 보세요. 특정 시대나 지역의 건축물을 중심으로 연구를 진행하거나, 건축사적인 이슈를 다루는 글도 좋은 방법입니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.png 2x, ../assets/img/blog04@3x.png 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog05.jpg, ../assets/img/blog05@2x.png 2x, ../assets/img/blog05@3x.png 3x" />
                                <img src="../assets/img/blog05.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.png 2x, ../assets/img/blog06@3x.png 3x" />
                                <img src="../assets/img/blog06.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.png 2x, ../assets/img/blog06@3x.png 3x" />
                                <img src="../assets/img/blog06.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.png 2x, ../assets/img/blog06@3x.png 3x" />
                                <img src="../assets/img/blog06.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.png 2x, ../assets/img/blog06@3x.png 3x" />
                                <img src="../assets/img/blog06.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>건축물 사진 보고서</h3>
                                <p>자신이 직접 촬영한 건축물 사진을 활용하여, 건축물의 특징이나 아름다움을 강조하는 글을 작성해 보세요. 건축물의 다양한 각도와 조명을 활용하여, 차별화된 사진 보고서를 만들 수 있습니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">JIN</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="right">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/profFace.png, ../assets/img/profFace@2x.png 2x, ../assets/img/profFace@3x.png 3x" />
                            <img src="../assets/img/profFace.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog__inner -->
    </main>
    <!-- //main -->



    <?php include "../include/footer.php" ?>
    <!-- //footer --> 
</body>
</html>