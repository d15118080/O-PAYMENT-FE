import {EndPoint, loading, menu,Token_Check} from './End-point.js';

Token_Check();

//index 정보 요청
$(document).ready(function () {
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

//index 정보 새로고침
$('#re_load').click(function () {
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

//메뉴 오픈
$('#menu_on').click(function () {
    menu('on')
});

//메뉴 닫기
$('#menu_off').click(function () {
    menu('off')
});

//충전 레이어 오픈
$('.charge_on').click(function () {
    $('.charge_layer').fadeIn(500);
});

//충전 레이어 닫기
$(document).mouseup(function (e) {
    var LayerPopup = $(".charge_con");
    if (LayerPopup.has(e.target).length === 0) {
        $('.charge_layer').fadeOut(300);
    }
});

//출금 레이어 오픈
$('#withdraw_on').click(function () {
    $('.withdraw_layer').fadeIn(500);
});

//출금 레이어 닫기
$(document).mouseup(function (e) {
    var LayerPopup = $(".withdraw_con");
    if (LayerPopup.has(e.target).length === 0) {
        $('.withdraw_layer').fadeOut(300);
    }
});

//송금 레이어 오픈
$('#remittance_on').click(function () {
    $('.remittance_layer').fadeIn(500);
});

//송금 레이어 닫기
$(document).mouseup(function (e) {
    var LayerPopup = $(".remittance_con");
    if (LayerPopup.has(e.target).length === 0) {
        $('.remittance_layer').fadeOut(300);
    }
});
