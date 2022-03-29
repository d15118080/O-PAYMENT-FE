<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘페이 - 대시보드</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"  rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>

</style>
<body>
<div class="wrap bgGrey" >
    <!-- 헤더 -->
    <div   class="header_w main">
        <h1><a href="#none">CON-PAY</a></h1>
        <!-- <p class="btn_close">
            <a href="#none">닫기5</a>
        </p> -->
        <!-- 메뉴열기 / 알림보기 버튼 -->
        <div class="main_right_w">
            <p class="btn_noti">
                <a href="#none">
                    알림
                    <span class="cnt">0</span>
                </a>
            </p>
            <p class="btn_gnb">
                <a id="menu_on">메뉴열기</a>
            </p>
        </div>
        <!-- //메뉴열기 / 알림보기 버튼 -->

        <!-- 메뉴 -->

        <!-- 레이어팝업 -->
        <div class="layeroverlay bgGrey menu_lar" style="display:none;">
            <!-- 메뉴 -->
            <div class="gnb_w">
                <p class="btn_close">
                    <a id="menu_off">닫기5</a>
                </p>

                <div class="acc_number">
                    <strong class="con_number"></strong>
                    <span class="txc_blue user_id"></span>
                </div>

                <div class="mybalance_w">
                    <p>현재 Con</p>
                    <p class="balance"><span class="user_money"></span>
                        <span class="won">C</span>
                    </p>
                </div>

                <nav class="gnb">
                    <p class="withdraw_btn">
                        <a href="/setting"><img src="/img/icon_withdraw.png" alt="">출금정보 관리</a>
                    </p>
                    <ul>
                        <li class="myinfo">
                            <a href="#none">
                                <img src="/img/icon_my_info.png" alt="">내정보
                            </a>
                        </li>

                        <li class="noti">
                            <a href="#none">
                                <img src="/img/icon_notice.png" alt="">공지사항
                            </a>
                        </li>

                        <li class="cs">
                            <a href="#none">
                                <img src="/img/icon_cs.png" alt="">고객센터
                            </a>
                        </li>

                        <li class="info">
                            <a href="#none">
                                <img src="/img/icon_info.png" alt="">이용안내
                            </a>
                        </li>

                        <li class="logout">
                            <a href="#none">
                                <img src="/img/icon_logout.png" alt="">로그아웃
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- //메뉴 -->
        </div>
        <!-- //레이어팝업 -->
        <!-- //메뉴 -->
    </div>
    <!-- //헤더 -->

    <!-- 컨테이너 -->
    <div class="container main">
        <div class="contents">
            <div class="msg_bx">
                <p class="welcome_msg_1">
                    <span class="user_name"></span> 님! 안녕하세요 <i id="re_load" class="fa fa-refresh" aria-hidden="true"></i>
                </p>
                <p class="welcome_msg_2">
                    언제 어디서나 누구나 바로결제!
                </p>
            </div>

            <!-- 현재잔액 -->
            <div class="my_info_bx">
                <h2>Your Payinfo</h2>
                <p class="balance" > <span class="user_money"></span>
                    <span class="txt_won">C</span>
                </p>
                <div class="bot_bx">
                    <p class="btn_apply">
                        <a class="charge_on">충전신청</a>
                    </p>
                    <p class="acc_number ">
                        <strong class="con_number"></strong>
                        <span>( <span class="user_id"></span> )</span>
                    </p>
                </div>

            </div>
            <!-- //현재잔액 -->
            <!-- 금융메뉴 -->
            <div class="finance_w">
                <a class="charge_on">
                    <img src="/img/icon_finance_1.png" alt="충전">
                    <span>CON 충전</span>
                </a>
                <a id="remittance_on">
                    <img src="/img/icon_finance_2.png" alt="송금">
                    <span>CON 송금</span>
                </a>
                <a id="withdraw_on">
                    <img src="/img/icon_finance_3.png" alt="출금">
                    <span>CON 출금</span>
                </a>
            </div>
            <!-- //금융메뉴 -->

            <!-- 최근 거래내역 -->
            <div class="deal_list_w">

                <div class="top_w">
                    <h2>최근 거래내역</h2>

                    <p class="btn_info_menu">
                        <a style="text-decoration-line:none;font-size: small;" href="#none">더보기</a>
                    </p>

                </div>

                <div class="list ">
                    {{--거래내역5건--}}
                    <ul class="tran_list">
                    </ul>
                    {{--거래내역5건--}}
                </div>
            </div>

        </div>
    </div>

</div>
<!-- 컨테이너 -->

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
@include('include/layeroverlay')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//unpkg.com/axios/dist/axios.min.js"></script>
<script type="module" src="/js/index.js"></script>
</body>
</html>
