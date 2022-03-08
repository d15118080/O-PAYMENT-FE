<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>오늘의 결제</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="sign_w join_top_pd">
        <div class="sign_header">
            <h1 class="logo_tit"><strong>오늘의 결제</strong></h1>
            <p>서비스를 위해 로그인이 필요합니다.</p>
        </div>

        <!-- 회원가입 -->
        <div class="join">
            <h2 class="join_tit">Sign up with</h2>
                <fieldset>
                    <legend>회원가입</legend>
                    <!-- 입력박스 -->
                    <div class="ipt_section">
                        <!-- 성함 -->
                        <div class="ipt_bx name"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" placeholder="성함">
                            <a href="#none" class="cert_btn">실명인증</a>
                        </div>
                        <!-- //성함 -->
                        <!-- 아이디 -->
                        <div class="ipt_bx id ip"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" placeholder="아이디를 입력해 주세요.">
                        </div>
                        <!-- //아이디 -->
                        <!-- 비밀번호 입력 -->
                        <div class="ipt_bx password"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="password" placeholder="패스워드를 입력해 주세요">
                            <a href="none" class="view_pass">텍스트보기</a>
                        </div>
                        <div class="ipt_bx password"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="password" placeholder="패스워드를 입력해 주세요">
                            <a href="none" class="view_pass">텍스트보기</a>
                        </div>
                        <!-- //비밀번호 입력 -->
                        <!-- 휴대전화 번호 -->
                        <div class="ipt_bx phone"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" placeholder="휴대폰번호를 입력해주세요.">
                            <a href="#none" class="cert_btn">인증</a>
                        </div>
                        <!-- //휴대전화 번호 -->
                        <!-- 인증번호 -->
                        <div class="ipt_bx cert"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" placeholder="인증번호를 입력해 주세요.">
                        </div>
                        <!-- //인증번호 -->
                    </div>
                    <!-- //입력박스 -->

                    <div class="agree_w">
                        <label for="">
                                <span class="check">
                                    <input type="checkbox">
                                </span>
                            <strong>개인정보 수집에 관한 동의</strong><br>
                            <span>개인정보는 서비스에 필요한 정보이용 이외에 다른 용도로는사용되지 않습니다</span>
                        </label>

                    </div>
                    <div class="btn_w">
                        <a href="#none" class="btn_default">가입완료</a>
                    </div>
                </fieldset>
        </div>
        <!-- //회원가입 -->
    </div>
</div>
</body>
</html>
