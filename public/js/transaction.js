let loading_s = false;    //중복실행여부 확인 변수
let page = 1;   //불러올 페이지
let type = "all";

import {EndPoint, loading, menu, Token_Check,comma ,add_tran_list ,index_reload,today,day} from './End-point.js';
Token_Check();
let search = "";
let trxtype = "";
let now = today();
let set_day = 30;
let threedaysago = day(set_day);

function set_data_text(){
    $('.start_date').text(now);
    $('.end_date').text(threedaysago);
}


//정보 요청
$(document).ready(function () {
    load();
    set_data_text()
    loading('on');
    axios({
        url: EndPoint + '/user/transaction_get_data',
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
        })
        .catch(err => {
            const data = JSON.parse(err.request.response)
            Swal.fire(
                data.result.resultMsg,
                data.result.advanceMsg,
                'question'
            )
        })
});

//페이지네이션 로드
function load(){
    if(!loading_s) {
        axios({
            url: EndPoint + `/user/transaction_get_his_data?page=${page}&lookup_start=${threedaysago}&lookup_end=${now}&trxtype=${trxtype}&search=${search}` ,
            method: 'get',
            headers: {
                'Authorization': 'Bearer ' + $.cookie('Token'),
                'Content-Type': 'application/json'
            }
        })
            .then((response) => {
                const data = JSON.parse(response.request.response)
                loading('off')
                console.log(data)
                add_tran_list(data.data[0].data)
                let length = data.data[0].last_page;
                if( length < page ){
                    loading_s = true;
                }else{
                    page++; //페이지 증가
                    loading_s = false;
                }

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
}

//상세검색 리로드
function re_load(){
        axios({
            url: EndPoint + `/user/transaction_get_his_data?page=1&lookup_start=${threedaysago}&lookup_end=${now}&trxtype=${trxtype}&search=${search}` ,
            method: 'get',
            headers: {
                'Authorization': 'Bearer ' + $.cookie('Token'),
                'Content-Type': 'application/json'
            }
        })
            .then((response) => {
                const data = JSON.parse(response.request.response)
                console.log(data)
                $("li").remove(".tran_list_tran");
                add_tran_list(data.data[0].data)
            })
            .catch(err => {
                console.log(err)
                const data = JSON.parse(err.request.response)
                Swal.fire(
                    data.result.resultMsg,
                    data.result.advanceMsg,
                    'question'
                )
            })
}


//윈도우 스크롤 체크
$(function(){
    $(window).scroll(function(){
        let $window = $(this);
        let scrollTop = $window.scrollTop();
        let windowHeight = $window.height();
        let documentHeight = $(document).height();


        // scrollbar의 thumb가 바닥 전 30px까지 도달 하면 리스트를 가져온다.
        if(!loading_s) {
            if (scrollTop + windowHeight + 50 > documentHeight) {
                load()
                loading_s = true;
            }
        }
    })

})

//메뉴 오픈
$('#menu_on').click(function () {
    menu('on')
});

//메뉴 닫기
$('#menu_off').click(function () {
    menu('off')
});


$(function(){
    let oldVal = $(".search_input").val()
    $(".search_input").on("propertychange change keyup paste input", function() {
        var currentVal = $(this).val();
        if(currentVal == oldVal) {
            return;
        }

        oldVal = currentVal;
        search = currentVal;
        re_load()
    });

    $(".search_btn a").on({
        click:function(){
            $(".search_w").addClass("ipt_on");
            $('.date_info').hide()
        }
    })//검색영역 열기버튼(돋보기)

    $(".ipt_close").on({
        click:function(){
            $(".search_w").removeClass("ipt_on");
            $('.date_info').show()
        }
    })//검색영역 닫기버튼(X버튼)

    $(".category_btn a").on({
        click : function(){
            $("body").css("overflow", "hidden");
            $('.trx_date_layer').fadeIn(500);
        }
    })//카테고리 버튼 클릭 시 레이어팝업 활성화

    $(".b_pop .btn a").on({
        click : function(){
            $("body").removeAttr("style");
            $('.trx_date_layer').fadeOut(500);

            re_load()
        }
    })// 확인 버튼 클릭 시 팝업 닫힘

})

//조회 레이어 닫기
$(document).mouseup(function (e) {
    var LayerPopup = $(".trxType_pop");
    if (LayerPopup.has(e.target).length === 0) {
        $('.layeroverlay').fadeOut(300);
    }
});

//상세 검색 인풋 닫기
$(document).mouseup(function (e) {
    var LayerPopup = $(".search_w");
    if (LayerPopup.has(e.target).length === 0) {
        $(".search_w").removeClass("ipt_on");
        $('.date_info').show()
    }
});

//조회기간
$(document).ready(function() {
    $(".dates_ul li").click(function() {
        var idx = $(this).index();
        set_day= $(this).data('id')
        $('.end_date').text(day(set_day));
        if(set_day === 30){
            $('#M').text('1개월')
        }else if(set_day === 90){
            $('#M').text('3개월')
        }else{
            $('#M').text('6개월')
        }
        $(".dates_ul li").removeClass("on");
        $(".dates_ul li").eq(idx).addClass("on");
    })
});

//거래유형
$(document).ready(function() {
    $(".trxType li").click(function() {
        var idx = $(this).index();
        trxtype = $(this).data('id')
        if(trxtype === 'deposit'){
            $('#Type').text('입금')
        }else if(trxtype==='withdraw'){
            $('#Type').text('출금')
        }else if(trxtype === 'remittance'){
            $('#Type').text('송금')
        }else if(trxtype ==='charge'){
            $('#Type').text('충전')
        }else{
            $('#Type').text('전체')
        }
        $(".trxType li").removeClass("on");
        $(".trxType li").eq(idx).addClass("on");
    })
});

