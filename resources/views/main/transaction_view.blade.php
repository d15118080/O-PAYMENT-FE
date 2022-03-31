<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘페이 - 거래상세 보기</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap bgGrey">
    <!-- 헤더 -->
    <div class="header_w">
        <p class="btn_history_back"><a onclick="history.back()">이전페이지로</a></p>
        <h1>CON 거래내역 상세보기</h1>
        <!-- <p class="btn_close">
            <a href="#none">닫기5</a>
        </p> -->
    </div>

    <!-- //헤더 -->

    <!-- 컨테이너 -->
    <div class="container">
        {{--거래정보--}}
        <div class="contents">
            <!-- 거래상세 -->
            <div class="acc_management">
                <h2 class="accTit">거래 정보</h2>
                <ul class="acc">
                    <li>
                        <p>
                            <span>거래 금액</span>
                        </p>
                        <p>
                            <strong class="info_amount"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>거래 구분</span>
                        </p>
                        <p>
                            <strong class="info_trxtype"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>거래 시간</span>
                        </p>
                        <p>
                            <strong class="info_date"></strong>
                        </p>
                    </li>
                    <li >
                        <p>
                            <span class="balance_text"></span>
                        </p>
                        <p>
                            <strong class="info_balance"></strong>
                        </p>
                    </li>
                    <li class="send_info" style="display:none;">
                        <p>
                            <span>거래 CON 정보</span>
                        </p>
                        <p>
                            <strong class="user_bank_number"></strong>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- //계좌관리 -->
        </div>
        {{--입금계좌정보--}}
        <div class="contents charging_standby" style="display: none">
            <!-- 거래상세 -->
            <div class="acc_management">
                <h2 class="accTit">입금 계좌</h2>
                <ul class="acc">
                    <li>
                        <p>
                            <span>입금하실 계좌번호</span>
                        </p>
                        <p>
                            <strong class="virtual_account"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>입금하실 은행</span>
                        </p>
                        <p>
                            <strong class="virtual_name"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>입금 금액 </span>
                        </p>
                        <p>
                            <strong class="amount"></strong>
                        </p>
                    </li>
                    <li>
                        <p>
                            <span>입금후 예상 잔액 </span>
                        </p>
                        <p>
                            <strong class="balance"></strong>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="btn_w" style="margin: 15px;">
                <a id="charge_delete" class="btn_delete">충전 취소</a>
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
<script type="module" src="/js/transaction_view.js"></script>
</body>
</html>
