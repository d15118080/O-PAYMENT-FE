<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>오늘의 결제</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap bgGrey">
    <!-- 헤더 -->
    <div class="header_w main">
        <h1><a href="/"><img src="/img/main_logo.png" alt="콘 페이"></a></h1>
        <!-- <p class="btn_close">
            <a href="#none">닫기5</a>
        </p> -->
        <!-- 메뉴열기 / 알림보기 버튼 -->
        <div class="main_right_w">
{{--            <p class="btn_noti">--}}
{{--                <a href="#none">--}}
{{--                    알림--}}
{{--                    <span class="cnt">0</span>--}}
{{--                </a>--}}
{{--            </p>--}}
            <p class="btn_gnb">
                <a id="menu_on">메뉴열기</a>
            </p>
        </div>
        <!-- //메뉴열기 / 알림보기 버튼 -->

        <!-- 메뉴 -->

        @include('include/menu')
    </div>
    <!-- //헤더 -->

    <!-- 컨테이너 -->
    <div class="container main">
        <div class="contents">
            <div class="msg_bx">
                <p class="welcome_msg_1">
                    <span class="user_name"></span> 님! 안녕하세요
                </p>
                <p class="welcome_msg_2">
                    언제 어디서나 누구나 바로결제!
                </p>
            </div>

            <!-- 현재잔액 -->
            <div class="my_info_bx">
                <h2>Your Payinfo</h2>
                <p class="balance"><span class="user_money"></span>
                    <span class="txt_won">C</span>
                </p>
                <div class="bot_bx">
                    <p class="btn_apply">
                        <a class="charge_on">Welcome</a>
                    </p>
                    <p class="acc_number ">
                        <strong class="con_number"></strong>
                        <span>( <span class="user_id"></span> )</span>
                    </p>
                </div>
            </div>
            <!-- //현재잔액 -->


            <!-- 최근 거래내역 -->
            <div class="deal_list_w">
                <div class="top_w">
                    <h2>거래내역</h2>
                    <p class="sort">
                        <span style="font-size: 15px;"><span id="last"></span> ~ <span id="now"></span></span>&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>
                        &nbsp;&nbsp;
                        <a href="#none" class="on">전체</a>
{{--                        <a href="#none">충전</a>--}}
{{--                        <a href="#none">출금</a>--}}
{{--                        <a href="#none">송금</a>--}}
                    </p>
                </div>

                <div class="list">
                    <ul class="tran_list">
                    </ul>
                </div>
                <!-- //거래내역 -->
            </div>
        </div>
    </div>
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
<script type="module" src="/js/transaction.js"></script>
</body>
</html>
