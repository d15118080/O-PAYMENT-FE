<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘페이 - 출금정보 관리</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap bgGrey">
    <!-- 헤더 -->
    <div class="header_w">
        <p class="btn_history_back"><a href="/" ">이전페이지로</a></p>
        <h1>CON 출금정보 관리</h1>
        <!-- <p class="btn_close">
            <a href="#none">닫기5</a>
        </p> -->
    </div>
    <!-- //헤더 -->

    <!-- 컨테이너 -->
    <div class="container">
        <div class="contents">
            <!-- 계좌관리 -->
            <div class="acc_management">
                <h2 class="accTit">계좌 관리</h2>
                <ul class="acc">
                    <li>
                        <p>
                            <span>예금주</span>
                        </p>
                        <p>
                            <strong class="user_name"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>은행</span>
                        </p>
                        <p>
                            <strong class="user_bank_name"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span >계좌번호</span>
                        </p>
                        <p>
                            <strong class="user_bank_number"></strong>
                        </p>
                    </li>
                </ul>
                <div class="btn_w" style="margin: 15px;">
                    <a id="" class="btn_default">정보 수정</a>
                </div>
            </div>
            <!-- //계좌관리 -->
        </div>
    </div>
    <!-- 컨테이너 -->
</div>
<!--로딩바-->
<div class="loading_start" id="loading1" style="display: none">
    <div class="loading1">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div class="wait">불러오는중..</div>
</div>
<!--로딩바 끝-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//unpkg.com/axios/dist/axios.min.js"></script>
<script type="module" src="/js/setting.js"></script>
</body>
</html>
