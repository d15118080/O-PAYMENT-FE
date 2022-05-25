//const EndPoint = 'http://172.30.1.4:8050/api/v1';
//const EndPoint = "https://dev.conpay.kr/api/v1";
const EndPoint = "http://127.0.0.1:8060/api/v1";

function loading(type) {
    if (type === "on") {
        $(".wrap").fadeOut(500);
        $(".loading_start").fadeIn(1000);
    } else {
        $(".wrap").fadeIn(1000);
        $(".loading_start").fadeOut();
    }
}

function menu(type) {
    if (type === "on") {
        $(".menu_lar").fadeIn(500);
    } else {
        $(".menu_lar").fadeOut(500);
    }
}

function Token_Check() {
    axios({
        url: EndPoint + "/user/token_check",
        method: "get",
        headers: {
            Authorization: "Bearer " + $.cookie("Token"),
            "Content-Type": "application/json",
        },
    })
        .then((response) => {})
        .catch((err) => {
            const data = JSON.parse(err.request.response);
            alert("로그인 정보가 만료 되었습니다.");
            location.replace("/login");
        });
}

function comma(str) {
    str = String(str);
    return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, "$1,");
}

function add_tran_list(arr) {
    $.each(arr, function (index, el) {
        var amount = comma(el.amount);

        if (el.trxtype === "charging_standby") {
            var img_url = "/img/icon_deal_charge.png";
            var title = "CON 충전대기";
            var p_class = "";
            var t_class = "+";
            var balance = "예정 : " + comma(el.balance) + " 원";
        } else if (el.trxtype === "charge") {
            var img_url = "/img/icon_deal_charge.png";
            var title = "CON 충전";
            var p_class = "plus";
            var t_class = "+";
            var balance = "잔액 : " + comma(el.balance) + " 원";
        } else if (el.trxtype === "deposit") {
            var title = "CON 입금";
            var img_url = "/img/icon_deal_charge.png";
            var p_class = "";
            var t_class = "";
            var balance = "잔액 : " + comma(el.balance) + " 원";
        } else if (el.trxtype === "withdraw") {
            var title = "CON 출금";
            var img_url = "/img/icon_deal_withdraw.png";
            var p_class = "minus";
            var t_class = "-";
            var balance = "잔액 : " + comma(el.balance) + " 원";
        } else if (el.trxtype === "remittance") {
            var title = "CON 선물";
            var img_url = "/img/icon_deal_transfer.png";
            var p_class = "minus";
            var t_class = "-";
            var balance = "잔액 : " + comma(el.balance) + " 원";
        } else {
            var img_url = "/img/icon_deal_charge.png";
            var title = "CON 충전취소";
            var p_class = "";
            var t_class = "";
            var balance = "취소된 거래";
        }

        $(".tran_list").append(`<li class="tran_list_tran">
                            <a href="/transaction/${el.id}">
                                <p class="img">
                                    <img src="${img_url}"alt="">
                                </p>
                                <div class="history_w">
                                    <strong class="txt">${el.user_name}</strong>
                                    <span style="font-size: 12px;font-weight: bolder">${title}</span> <br>
                                    <span class="date">${el.date_ymd}&nbsp;${el.date_time}</span>
                                </div>
                                <div class="money">
                                    <p class="${p_class}"><strong>${t_class} ${amount}<span class="won"> 원</span></strong></p>
                                    <p class="remaining">${balance}</p>
                                </div>
                            </a>
                        </li>`);
    });
}

function index_reload() {
    loading("on");
    axios({
        url: EndPoint + "/user/get_index_data",
        method: "get",
        headers: {
            Authorization: "Bearer " + $.cookie("Token"),
            "Content-Type": "application/json",
        },
    })
        .then((response) => {
            const data = JSON.parse(response.request.response);
            loading("off");
            $(".user_money").text(data.data.user_money);
            $(".user_id").text(data.data.user_id);
            $(".con_number").text(data.data.user_con_number);
            $(".user_name").text($.cookie("name"));
            $("li").remove(".tran_list_tran");
            add_tran_list(data.data.transaction_history);
        })
        .catch((err) => {
            const data = JSON.parse(err.request.response);
            Swal.fire(
                data.result.resultMsg,
                data.result.advanceMsg,
                "question"
            );
        });
}

function today() {
    var now = new Date();
    var year = now.getFullYear();
    var month =
        now.getMonth() + 1 >= 10
            ? now.getMonth() + 1
            : "0" + (now.getMonth() + 1);
    var date = now.getDate() >= 10 ? now.getDate() : "0" + now.getDate();
    var today = `${year}-${month}-${date}`;
    return today;
}

function day(type) {
    var Nowdate = new Date();
    var Agodate = new Date(Nowdate.getTime() - type * 24 * 60 * 60 * 1000);
    var AgoMonth =
        Agodate.getMonth() + 1 >= 10
            ? Agodate.getMonth() + 1
            : "0" + (Agodate.getMonth() + 1);
    var AgoDay =
        Agodate.getDate() >= 10 ? Agodate.getDate() : "0" + Agodate.getDate();
    var d = Agodate.getFullYear() + "-" + AgoMonth + "-" + AgoDay;
    return d;
}

export {
    EndPoint,
    loading,
    menu,
    Token_Check,
    comma,
    add_tran_list,
    index_reload,
    today,
    day,
};
