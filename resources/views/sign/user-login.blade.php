<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘페이 - 로그인</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="sign_w login_top_pd">
        <div class="sign_header">
            <h2 class="txs_x" style="margin-bottom: 5%; color: #2E56A1"><strong>내손안의 작은 지갑</strong></h2>
            <h1 class="txs_xl"><strong>콘 페이</strong></h1>
            <p>서비스를 위해 로그인이 필요합니다.</p>
        </div>

        <div class="login">
                <fieldset>
                    <legend>로그인</legend>
                    <div class="ipt_section">
                        <div class="ipt_bx id"><!-- 활성화 시 ip클래스 추가 -->
                            <input id="user_id" type="text" placeholder="아이디">
                        </div>
                        <div class="ipt_bx password"><!-- 활성화 시 ip클래스 추가 -->
                            <input id="user_password" type="password" placeholder="비밀번호">
                            <a href="none" class="view_pass">텍스트보기</a>
                        </div>
                    </div>
                    <p class="password_info">
                        <a href="#none">비밀번호를 잊어버리셨나요?</a>
                    </p>
                    <div class="btn_w">
                        <a id="login" class="btn_default">로그인</a>
                        <a href="register" class="btn_join">회원가입</a>
                    </div>
                </fieldset>
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//unpkg.com/axios/dist/axios.min.js"></script>
<script type="module"  src="/js/login.js"></script>
</body>
</html>
