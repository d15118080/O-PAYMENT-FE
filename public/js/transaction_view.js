import {EndPoint, loading, menu, Token_Check,comma ,add_tran_list ,index_reload,today,day} from './End-point.js';
Token_Check();
let href = location.href;
let id = href.match(/([^\/]*)\/*$/)[1];

//거래 상세 요청
$(document).ready(function () {
    loading('on');
    axios({
        url: EndPoint + '/user/transaction_get_view/'+id,
        method: 'get',
        headers: {
            'Authorization': 'Bearer ' + $.cookie('Token'),
            'Content-Type': 'application/json'
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            loading('off')
             if(data.data[0].trxtype === "deposit"){
                 var trxtype = "CON 입금";
             }else if(data.data[0].trxtype === "withdraw"){
                 var trxtype = "CON 출금";
             }else if(data.data[0].trxtype === "remittance"){
                 var trxtype = "CON 송금";
             }else if(data.data[0].trxtype === "charge") {
                 var trxtype = "CON 충전";
             }else if(data.data[0].trxtype === "charging_standby"){
                 var trxtype = "CON 충전대기";
             }else{
                 var trxtype = "CON 충전취소";
             }
            if(data.data[0].trxtype === "charging_standby"){
                $('.charging_standby').css('display','');
                $('.amount').text(comma(data.data[0].amount)+" 원");
                $('.balance').text(comma(data.data[0].balance)+" CON");
                $('.virtual_account').text(data.data[0].virtual_account);
                if(data.data[0].virtual_account === '56605257101016'){
                    $('.virtual_name').text('기업은행');
                }else{
                    $('.virtual_name').text('경남은행 (주)윈글로벌페이');
                }

                $('.balance_text').text('거래후 예상 CON');
            }else{
                $('.balance_text').text('거래후 CON');
            }
            $('.info_trxtype').text(trxtype);
            $('.info_amount').text(comma(data.data[0].amount)+" 원");
            $('.info_balance').text(comma(data.data[0].balance)+" CON");
            $('.info_date').text(data.data[0].date_ymd+" "+data.data[0].date_time);
        })
        .catch(err => {
            const data = JSON.parse(err.request.response)
            Swal.fire(
                data.result.resultMsg,
                data.result.advanceMsg,
                'question'
            )
            location.replace('/')
        })
});

$('#charge_delete').click(function () {
    loading('on');
    Token_Check();
    axios({
        url: EndPoint + '/user/charge_delete_request/'+id,
        method: 'get',
        headers: {
            'Authorization': 'Bearer ' + $.cookie('Token'),
            'Content-Type': 'application/json'
        }
    })
        .then((response) => {
            loading('off')
            location.replace('/')
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
