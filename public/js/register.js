import { EndPoint } from './End-point.js';
//은행 select2 플러그인 활성화
$("#user_bank").select2();

//약관동의
$('#register_check').click(function(){
    var checked = $('#register_check').is(':checked');
    if(checked)
        $('#register_check').val('1')
    else
        $('#register_check').val('0')
});

//사용자 계좌인증
$('#auth_check_bank').click(function () {
    Swal.fire({
        title: '잠시만 기다려주세요',
        timerProgressBar: true,
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    })
    axios({
        url: EndPoint+'/user/auth_bank_check',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        data: {
            "user_bank": $('#user_bank').val(),
            "user_bank_number": $('#user_bank_number').val(),
            "identitynumtype": "P",
            "user_brith_day": $('#user_brith_day').val()
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            Swal.close();
            $('.set_two').css('display','');
            $('.set_one').css('display','none');
            $('#user_name').val(data.data.name);
            $.cookie('uuid', data.data.uuid);
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

//인증번호 발송
$('#auth_register_phone').click(function () {
    console.log($.cookie('uuid'))
    Swal.fire({
        title: '잠시만 기다려주세요',
        timerProgressBar: true,
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    })
    axios({
        url: EndPoint+'/user/auth_register_phone',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        data: {
            "user_phone_number": $('#phone_number').val(),
            "temporary_uuid": $.cookie('uuid')
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            Swal.close();
            $('.phone_check').css('display','');
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

//인증번호 확인
$('#auth_register_phone_cer_check').click(function () {
    Swal.fire({
        title: '잠시만 기다려주세요',
        timerProgressBar: true,
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    })
    axios({
        url: EndPoint+'/user/auth_register_phone_cer_check',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        data: {
            "user_certification_number": $('#cer_number').val(),
            "temporary_uuid": $.cookie('uuid')
        }
    })
        .then((response) => {
            Swal.close();
            $("#phone_number").attr("disabled",true);
            $('.phone').addClass("ip");
            $('.phone_check').css('display','none');
            $( 'a' ).remove( '#auth_register_phone');
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

//회원가입 전송
$('#register_send').click(function () {
    Swal.fire({
        title: '잠시만 기다려주세요',
        timerProgressBar: true,
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
        }
    })
    axios({
        url: EndPoint+'/user/auth_register',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        data: {
            "user_id":$('#user_id').val(),
            "user_password":$('#user_password').val(),
            "user_re_password":$('#user_re_password').val(),
            "register_check":$('#register_check').val(),
            "temporary_uuid": $.cookie('uuid')
        }
    })
        .then((response) => {
            Swal.close();
            $.removeCookie('uuid');
            location.replace('/login')
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

