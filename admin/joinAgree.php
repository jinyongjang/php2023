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
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- //join__inner-->

        <div class="join__inner container">
            <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree mt50">
                <div>
                    <h3 class="blind">JIN 블로그 이용약관</h3>
                    <div class="scroll">
                        [서비스 이용약관]<br><br>
                        제 1조 (목적) 이 약관은 (회사명) (이하 "회사"라 함)이 제공하는 (서비스명) 서비스의 이용 조건과 절차,<br>
                        회원과 회사 간의 권리, 의무 및 책임 사항을 규정함을 목적으로 합니다.<br><br>
                        제 2조 (용어의 정의) 이 약관에서 사용하는 용어의 정의는 다음과 같습니다. <br>
                        ① "서비스"란 회사가 제공하는 (서비스명) 서비스를 말합니다.<br>
                        ② "회원"이란 이 약관에 따라 회사와 이용 계약을 체결한 자를 말합니다. <br>
                        ③ "아이디(ID)"란 회원의 식별과 회원의 서비스 이용을 위하여 회원이 설정하고 회사가 승인한 문자와 숫자의 조합을 말합니다. <br>
                        ④ "비밀번호"란 회원이 부여받은 아이디와 일치되는 회원임을 확인하고 회원의 개인정보를 보호하기 위하여 회원 자신이 설정한 문자와 숫자의 조합을 말합니다.
                    </div>
                    <div class="check">
                        <input type="checkbox" id="agreeCheck1" class="agreeCheck">
                        <label for="agreeCheck1">블로그 이용약관에 동의 합니다.</label>
                    </div>
                </div>
                <div>
                    <h3 class="blind">개인정보 수집 동의</h3>
                    <div class="scroll mt50">
                        [개인정보 수집 및 이용 동의서]<br><br>
                        개인정보 수집 및 이용 목적 (진주식회사)은 다음의 목적을 위해 개인정보를 수집 및 이용합니다.<br>
                        (서비스명) 서비스 제공 및 이용에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br><br>
                        회원 관리<br>
                        서비스 개발 및 마케팅에 활용<br>
                        2.수집하는 개인정보 항목 (회사명)은 다음과 같은 개인정보 항목을 수집합니다.<br>
                        필수 항목 : 이름, 생년월일, 성별, 연락처, 이메일 주소, 주소, 아이디(ID), 비밀번호<br>
                        선택 항목 : 프로필 사진, 관심사항, 건강 정보 등<br>
                        3.개인정보 수집 방법 (회사명)은 다음과 같은 방법으로 개인정보를 수집합니다.<br><br>
                        회원가입 시 입력한 정보<br>
                        서비스 이용 과정에서 자동으로 수집되는 정보 (접속 로그, 쿠키, 접속 IP 정보 등)
                    </div>
                    <div class="check">
                        <input type="checkbox" id="agreeCheck2" class="agreeCheck">
                        <label for="agreeCheck2">개인정보 수집 및 이용에 동의합니다.</label>
                    </div>
                </div>
                <div class="">
                    <p class="agreeMsg">asdsda</p>
                    <a href="joinSave.php" class="btnStyle agreeBtn">동의</a>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script>
        // 체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");
        
        agreeBtn.addEventListener("click", (e) => {
            
            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerText = "체크박스를 다시 한번 확인해주세요.";

                    e.preventDefault();
                }
            })
        })
    </script>
</body>
</html>