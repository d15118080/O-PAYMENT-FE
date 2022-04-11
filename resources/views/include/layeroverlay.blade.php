{{--충전 레이어--}}
<div class="layeroverlay charge_layer" style="display: none;">
    <div class="ly_pop_wrap">
        <div class="ly_con charge_con">
            <div class="apply_pop">
                <!-- 텍스트 -->
                <h1>CON 충전 신청</h1>
                <div class="apply_info">
                    <p>
                        가입시 입력한 입금계좌로만 입금이 가능하며
                        금액과 입금정보가 다를 경우 승인이 되지 않습니다.<br>
                        승인이 되지 않을 경우 최장 5일의 시간이 걸리니 이점 유의하시기 바랍니다.
                    </p>
                    <p>
                        <strong class="txc_black txw_bold">최소 충전가능 금액 10,000 원</strong> 입니다
                        <span class="txc_red">
                                1만원 단위만 가능합니다 Ex) 10,000원 충전요청의 경우
                                1 이라고 적어주시면 됩니다 이에 대하여 잘못 입력한경우
                                고객센터로 문의주세요.
                            </span>
                    </p>
                    <p>
                        <strong class="txc_red"><strong>반드시 충전신청 후 입금 하시길 바랍니다</strong></strong>
                        입금후 신청시 처리되지 않으며 고객센터로 연락주시면 환불처리 해드립니다.
                    </p>
                </div>
                <!-- //텍스트 -->
                <!-- 입력박스 -->
                <div class="ipt_section">
                    <form action="">
                        <fieldset class="charge_lay">
                            <legend>CON 충전 신청</legend>
                            <!-- 입력 -->
                            <h2>CON 충전금액</h2>
                            <div class="ipt_bx">
                                <input id="amount" type="text" placeholder="1회 최대 충전금액 300만원" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3">
                                <span class="won">만원</span>
                            </div>
                            <!-- //입력 -->
                            <div class="agree_w">
                                <label for="">
                                <span class="check">
                                    <input id="charge_check" type="checkbox" value="0">
                                </span>
                                    <strong>CON 충전 약관의 관한 동의</strong><br>
                                    <span>미동의 시 충전신청이 이루어지지 않습니다.</span>
                                </label>

                            </div>
                            <!-- 버튼영역 -->
                            <div class="btn_w">
                                <a id="charge_send" class="btn_default">콘 충전신청</a>
                            </div>
                            <!-- //버튼영역 -->
                        </fieldset>
                    </form>
                </div>
                <!-- //입력박스 -->
            </div>
        </div>
    </div>
</div>
{{--//충전 레이어--}}

{{--출금 레이어--}}
<div class="layeroverlay withdraw_layer"  style="display: none;">
    <div class="ly_pop_wrap">
        <div class="ly_con withdraw_con">
            <div class="apply_pop">
                <!-- 텍스트 -->
                <h1>CON 출금신청</h1>
                <div class="apply_info">
                    <p>가입시 입력한 입금계좌로만 출금이 가능하며 초기 셋팅된
                        일입금 평균액의 20%를 제외한 금액만 출금이 가능합니다.
                        출금 신청 후 30분이내 처리 됩니다
                    </p>
                    <p>
                        <strong class="txc_default">고민정</strong> 님은 현재 <strong class="txc_default">일반회원</strong>으로<br>
                        출금 시 출금 수수료 1.5%를 제외한 금액이 출금됩니다
                    </p>
                </div>
                <!-- //텍스트 -->
                <!-- 입력박스 -->
                <div class="ipt_section">
                    <form action="">
                        <fieldset>
                            <legend>CON 출금신청</legend>
                            <!-- 입력 -->
                            <h2>CON 출금 금액</h2>
                            <div class="ipt_bx">
                                <input type="text" placeholder="CON 출금액은 숫자로만 입력해 주세요">
                                <span class="won">원</span>
                            </div>
                            <!-- //입력 -->
                            <!-- 버튼영역 -->
                            <div class="btn_w">
                                <a href="noen" class="btn_default">CON 출금신청</a>
                            </div>
                            <!-- //버튼영역 -->
                        </fieldset>
                    </form>
                </div>
                <!-- //입력박스 -->
            </div>
        </div>
    </div>
</div>
{{--//출금 레이어--}}

{{--송금 레이어--}}
<div class="layeroverlay remittance_layer"  style="display: none;">
    <div class="ly_pop_wrap">
        <div class="ly_con remittance_con">
            <div class="apply_pop">
                <!-- 텍스트 -->
                <h1>콘 송금</h1>
                <!-- //텍스트 -->
                <div class="apply_info">
                    <p style="font-size: 15px; color: #3A87EF">
                       <b> 송금 금액은 1일 최대 6,000,000 Con 입니다.</b>
                    </p>

                </div>
                <!-- 입력박스 -->
                <div class="ipt_section">
                    <form action="">
                        <fieldset>
                            <legend>CON 송금</legend>
                            <!-- 입력 -->
                            <h2>받는사람</h2>
                            <div class="ipt_bx">
                                <input id="remittance_info" type="text" placeholder="받는분의 콘계좌 또는 가맹점명">
                            </div>

                            <h2>보낼 금액</h2>
                            <div class="ipt_bx">
                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" id="remittance_moeny" type="text" placeholder="보낼 금액을 입력해 주세요">
                                <span class="won">con</span>
                            </div>
                            <!-- //입력 -->
                            <!-- 버튼영역 -->
                            <div class="btn_w">
                                <a id="send_money" class="btn_default">콘 송금</a>
                            </div>
                            <!-- //버튼영역 -->
                        </fieldset>
                    </form>
                </div>
                <!-- //입력박스 -->
            </div>
        </div>
    </div>
</div>
{{--// 송금 레이어--}}

