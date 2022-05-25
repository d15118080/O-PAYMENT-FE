<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘 키프트 - 거래내역</title>
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
            <h1><a href="/"><img src="/img/main_logo.png" alt="콘 키프트"></a></h1>
            <!-- <p class="btn_close">
            <a href="#none">닫기5</a>
        </p> -->
            <!-- 메뉴열기 / 알림보기 버튼 -->
            <div class="main_right_w">
                {{-- <p class="btn_noti"> --}}
                {{-- <a href="#none"> --}}
                {{-- 알림 --}}
                {{-- <span class="cnt">0</span> --}}
                {{-- </a> --}}
                {{-- </p> --}}
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
                        언제 어디서나 누구나 바로선물!
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
                        <div class="search_w">
                            <!-- 검색버튼 클릭 시 ipt_on 추가 -->
                            <p class="search_btn">
                                <a href="#none">검색</a>
                            </p>
                            <div class="ipt_bx search">
                                <input class="search_input" type="text" placeholder="이름 검색">

                            </div>
                        </div>
                        <p class="category_btn date_info">
                            <a><span>조회기간 <span class="end_date"></span> ~ <span class="start_date"></span>
                                    &nbsp;&nbsp;&nbsp;</span></a>
                        </p>
                        <p class="category_btn">
                            <a href="#none">
                                <span id="M">1개월</span>
                                <span id="Type">전체</span>
                                <span>최신순</span>
                            </a>
                        </p>
                    </div>
                    <div class="index_list">

                    </div>
                    <div class="list ">
                        <ul class="tran_list">
                        </ul>
                    </div>
                    <!-- //거래내역 -->
                </div>
            </div>
        </div>
    </div>

    {{-- 조회 레이어 --}}
    <div class="layeroverlay trx_date_layer" style="display:none;">
        <div class="ly_pop_wrap b_pop">
            <div class="ly_con trxType_pop">
                <div class="sort_pop">
                    <div class="inner">
                        <h2>조회기간</h2>
                        <ul class="dates_ul">
                            <li class="on" data-id="30"><a href="#none">1개월</a></li><!-- 선택 시 on 클래스 추가 -->
                            <li data-id="90"><a href="#none">3개월</a></li>
                            <li data-id="180"><a href="#none">6개월</a></li>
                            {{-- <li data-id="4"><a href="#none">직접설정</a></li> --}}
                        </ul>
                    </div>
                    <div class="inner">
                        <h2>거래유형</h2>
                        <ul class="trxType">
                            <li data-id="" class="on"><a href="#none">전체</a></li>
                            <li data-id="deposit"><a>선물받은내역</a></li>
                            <li data-id="remittance"><a href="#none">선물한내역</a></li>
                            <li data-id="withdraw"><a>출금한내역</a></li>
                            <li data-id="charge"><a href="#none">충전한내역</a></li>
                        </ul>
                    </div>
                    <p class="btn">
                        <a href="#none">확인</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- //조회 레이어 --}}


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
