const EndPoint = 'http://127.0.0.1:8050/api/v1';
//const EndPoint = 'https://dev.conpay.kr/api/v1';

function loading(type){
    if(type === 'on'){
        $('.wrap').fadeOut(500);
        $('.loading_start').fadeIn(1000);
    }else{
        $('.wrap').fadeIn(1000);
        $('.loading_start').fadeOut();
    }
}

function menu(type){
    if(type === 'on'){
        $('.menu_lar').fadeIn(500);
    }else{
        $('.menu_lar').fadeOut(500);
    }

}

function Token_Check(){
    axios({
        url: EndPoint + '/user/token_check',
        method: 'get',
        headers: {
            'Authorization': 'Bearer ' + $.cookie('Token'),
            'Content-Type': 'application/json'
        }
    })
        .then((response) => {
        })
        .catch(err => {
            const data = JSON.parse(err.request.response)
            alert('로그인 정보가 만료 되었습니다.')
            location.replace('/login');
        })
}

//back
$('.btn_history_back').click(function () {
    history.back();
});
function comma(str) {
    str = String(str);
    return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
}
function add_tran_list(arr){
    $.each(arr, function (index, el) {
        var amount = comma(el.amount);

        if (el.trxtype === 'charging_standby') {
            var img_url = "/img/icon_deal_charge.png";
            var title = "CON 충전대기";
            var p_class = "";
            var t_class = "+";
            var tmp_amount = el.amount;
            var tmp_balance = el.balance;
            var plus_balance = tmp_amount+tmp_balance;
            var balance = "예정 : "+comma(plus_balance);
        } else if (el.trxtype === 'charge') {
            var img_url = "/img/icon_deal_charge.png";
            var title = "CON 충전";
            var p_class = "plus";
            var t_class = "+";
            var balance = "잔액 : "+comma(el.balance);
        } else if (el.trxtype === 'deposit') {
            var title = "CON 입금";
            var img_url = "/img/icon_deal_charge.png";
            var p_class = "";
            var t_class = "";
            var balance = "잔액 : "+comma(el.balance);
        } else if (el.trxtype === 'withdraw') {
            var title = "CON 출금";
            var img_url = "/img/icon_deal_withdraw.png";
            var p_class = "minus";
            var t_class = "-";
            var balance = "잔액 : "+comma(el.balance);
        } else if (el.trxtype === 'remittance') {
            var title = "CON 송금";
            var img_url = "/img/icon_deal_transfer.png";
            var p_class = "minus";
            var t_class = "-";
            var balance = "잔액 : "+comma(el.balance);
        }

        $(".tran_list").append(`<li class="tran_list_tran">
                            <a href="#none">
                                <p class="img">
                                    <img src="${img_url}"alt="">
                                </p>
                                <div class="history_w">
                                    <strong class="txt">${el.user_name}</strong>
                                    <span style="font-size: 12px;font-weight: bolder">${title}</span> <br>
                                    <span class="date">${el.date_ymd}&nbsp;${el.date_time}</span>
                                </div>
                                <div class="money">
                                    <p class="${p_class}"><strong>${t_class} ${amount}<span class="won">원</span></strong></p>
                                    <p class="remaining">${balance}원</p>
                                </div>
                            </a>
                        </li>`);
    });
}

function index_reload(){
    loading('on');
    axios({
        url: EndPoint + '/user/get_index_data',
        method: 'get',
        headers: {
            'Authorization': 'Bearer ' + $.cookie('Token'),
            'Content-Type': 'application/json'
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            loading('off')
            $('.user_money').text(data.data.user_money)
            $('.user_id').text(data.data.user_id)
            $('.con_number').text(data.data.user_con_number)
            $('.user_name').text($.cookie('name'))
            $("li").remove(".tran_list_tran");
            add_tran_list(data.data.transaction_history)
        })
        .catch(err => {
            const data = JSON.parse(err.request.response)
            Swal.fire(
                data.result.resultMsg,
                data.result.advanceMsg,
                'question'
            )
        })
}
export { EndPoint,loading,menu,Token_Check,comma,add_tran_list,index_reload};



