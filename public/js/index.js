import {  EndPoint ,loading ,menu } from './End-point.js';
$(document).ready(function() {
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

$('#menu_on').click(function () {
    menu('on')
});
$('#menu_off').click(function () {
    menu('off')
});
