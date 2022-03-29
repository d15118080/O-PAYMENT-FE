let loading_s = false;    //중복실행여부 확인 변수
let page = 1;   //불러올 페이지
let type = "all";

import {EndPoint, loading, menu, Token_Check,comma ,add_tran_list ,index_reload,today,lastWeek} from './End-point.js';
Token_Check();
let now = today();
let lastnow = lastWeek();
$('#now').text(now);
$('#last').text(lastnow);

//정보 요청
$(document).ready(function () {
    load();
    loading('on');
    axios({
        url: EndPoint + '/user/transaction_get_data?type='+type,
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

function load(){
    if(!loading_s) {
        axios({
            url: EndPoint + '/user/transaction_get_his_data?page='+page+'&type='+type ,
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

let isEnd = false;

$(function(){
    $(window).scroll(function(){
        let $window = $(this);
        let scrollTop = $window.scrollTop();
        let windowHeight = $window.height();
        let documentHeight = $(document).height();


        // scrollbar의 thumb가 바닥 전 30px까지 도달 하면 리스트를 가져온다.
        if(!loading_s) {
            if (scrollTop + windowHeight + 0.1 > documentHeight) {
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
