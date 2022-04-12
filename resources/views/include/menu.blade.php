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
{{--                <li class="myinfo">--}}
{{--                    <a href="#none">--}}
{{--                        <img src="/img/icon_my_info.png" alt="">내정보--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="noti">--}}
{{--                    <a href="#none">--}}
{{--                        <img src="/img/icon_notice.png" alt="">공지사항--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="cs">
                    <a href="https://pf.kakao.com/_xcxaNvb" target="_blank">
                        <img src="/img/icon_cs.png" alt="">고객센터
                    </a>
                </li>

                <li class="info">
                    <a href="#none">
                        <img src="/img/icon_info.png" alt="">이용안내
                    </a>
                </li>

                <li class="logout">
                    <a href="#none" onclick="logout();">
                        <img src="/img/icon_logout.png" alt="">로그아웃
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- //메뉴 -->
</div>
<script>
    function logout(){
        if($.removeCookie('Token')){
            return location.replace('/')
        }else{
            alert('에러가 발생하였습니다')
        }
    }
</script>
<!-- //레이어팝업 -->
<!-- //메뉴 -->
