<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>콘페이 - 회원가입</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="sign_w join_top_pd">
        <div class="sign_header">
            <h1 class="txs_xl">콘페이</h1>
            <p>서비스 사용을 위하여 회원가입을 진행 합니다.</p>
        </div>

        <!-- 회원가입 1 -->
        <div class="join set_one">
            <div class="ipt_section">
                <div class="cert_pop">
                    <!-- 텍스트 -->
                    <h2 class="join_tit">Sign up with one</h2>
                    <!-- //텍스트 -->

                    <!-- 인증정보 -->
                    <div class="cert_ipt">
                        <form action="">
                            <fieldset>
                                <legend>인증정보 입력</legend>
                                <!-- 입력박스 -->
                                <div class="ipt_section">
                                    <!-- 생년월일 -->
                                    <div class="ipt_bx id"><!-- 활성화 시 ip클래스 추가 -->
                                        <input id="user_brith_day" type="text" placeholder="생년월일을 입력해 주세요 YYYY-MM-DD" oninput="this.value = this.value.replace(/[^0-9.-]/g, '').replace(/(\..*)\./g, '$1');" onkeyup="this.value = date_mask(this.value)" maxlength="10">
                                    </div>
                                    <!-- //생년월일 -->
                                    <!-- 은행 -->
                                    <div class="sel_bx">
                                        <select  id="user_bank">
                                            <option >은행선택</option>
                                            <option value="0002,산업은행">산업 은행</option>
                                            <option value="0003,기업은행">기업은행</option>
                                            <option value="0004,국민은행">국민은행</option>
                                            <option value="0007,수협은행">수협중앙화</option>
                                            <option value="0011,농협은행">농협은행</option>
                                            <option value="0012,지역농축협">지역농축협</option>
                                            <option value="0020,우리은행">우리은행</option>
                                            <option value="0023,SC제일은행">SC은행</option>
                                            <option value="0027,한국시티은행">한국시티은행</option>
                                            <option value="0031,대구은행">대구은행</option>
                                            <option value="0032,부산은행">부산은행</option>
                                            <option value="0034,광주은행">광주은행</option>
                                            <option value="0035,제주은행">제주은행</option>
                                            <option value="0037,전북은행">전북은행</option>
                                            <option value="0039,경남은행">경남은행</option>
                                            <option value="0045,새마을금고">새마을금고연합회</option>
                                            <option value="0048,신협은행">신협</option>
                                            <option value="0088,신한은행">신한은행</option>
                                            <option value="0050,저축은행">저축은행</option>
                                            <option value="0071,우체국">우체국</option>
                                            <option value="0081,하나은행">하나은행</option>
                                            <option value="0089,케이뱅크">케이뱅크</option>
                                            <option value="0090,카카오뱅크">카카오뱅크</option>
                                            <option value="0092,토스뱅크">토스뱅크</option>
                                        </select>
                                    </div>
                                    <!-- //은행 -->
                                    <!-- 계좌번호 -->
                                    <div class="ipt_bx id"><!-- 활성화 시 ip클래스 추가 -->
                                        <input id="user_bank_number" type="text" placeholder="계좌번호를 입력해 주세요" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                    <!-- //계좌번호 -->
                                </div>
                                <!-- //입력박스 -->
                                <div class="btn_w">
                                    <a id="auth_check_bank" class="btn_default">다음</a>
                                </div>
                                <div style="font-size: small; margin-top: 1.5%; text-align: right;">
                                    <p class="password_info">
                                        <a href="/login">이미 계정이 있으신가요?</a>
                                    </p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- //인증정보 -->

                </div>
            </div>
        </div>
        <!-- //회원가입 1 끝 -->

        <!-- 회원가입 2 -->
        <div class="join set_two" style="display: none;">
            <h2 class="join_tit">Sign up with</h2>
                <fieldset>
                    <legend>회원가입</legend>
                    <!-- 입력박스 -->
                    <div class="ipt_section">

                        <!-- 이름 -->
                        <div class="ipt_bx id ip"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" id="user_name" disabled>
                        </div>
                        <!-- //이름 -->
                        <!-- 아이디 -->
                        <div class="ipt_bx id"><!-- 활성화 시 ip클래스 추가 -->
                            <input id="user_id" type="text" placeholder="아이디를 입력해 주세요.">
                        </div>
                        <!-- //아이디 -->
                        <!-- 비밀번호 입력 -->
                        <div class="ipt_bx password"><!-- 활성화 시 ip클래스 추가 -->
                            <input id="user_password" type="password" placeholder="패스워드를 입력해 주세요">
                            <a href="none" class="view_pass">텍스트보기</a>
                        </div>
                        <div class="ipt_bx password"><!-- 활성화 시 ip클래스 추가 -->
                            <input id="user_re_password" type="password" placeholder="패스워드를 입력해 주세요">
                            <a href="none" class="view_pass">텍스트보기</a>
                        </div>
                        <!-- //비밀번호 입력 -->
                        <!-- 휴대전화 번호 -->
                        <div class="ipt_bx phone"><!-- 활성화 시 ip클래스 추가 -->
                            <input type="text" id="phone_number" placeholder="휴대폰번호를 입력해주세요." oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                            <a id="auth_register_phone" class="cert_btn">인증</a>
                        </div>
                        <!-- //휴대전화 번호 -->
                        <!-- 인증번호 -->
                            <div class="ipt_bx cert phone_check" style="display: none;"><!-- 활성화 시 ip클래스 추가 -->
                                <input id="cer_number" type="text" placeholder="인증번호를 입력해 주세요."  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                                <a id="auth_register_phone_cer_check" class="cert_btn">확인</a>
                            </div>
                        <!-- //인증번호 -->
                    </div>
                    <!-- //입력박스 -->

                    <div class="agree_w">
                        <label for="">
                                <span class="check">
                                    <input id="register_check" type="checkbox" value="0">
                                </span>
                            <strong>개인정보 수집에 관한 동의</strong><br>
                            <span>개인정보는 서비스에 필요한 정보이용 이외에 다른 용도로는사용되지 않습니다</span>
                        </label>

                    </div>
                    <div class="btn_w">
                        <a id="register_send" class="btn_default">가입완료</a>
                    </div>
                    <div style="font-size: small; margin-top: 1.5%; text-align: right;">
                        <p class="password_info">
                            <a href="/login">이미 계정이 있으신가요?</a>
                        </p>
                    </div>
                </fieldset>
        </div>
        <!-- //회원가입 2 끝 -->



    </div>
</div>
<script>
    function date_mask(objValue) {
        var v = objValue.replace("--", "-");

        if (v.match(/^\d{4}$/) !== null) {
            v = v + '-';
        } else if (v.match(/^\d{4}\-\d{2}$/) !== null) {
            v = v + '-';
        }

        return v;
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="//unpkg.com/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module"  src="/js/register.js"></script>

</body>
</html>
