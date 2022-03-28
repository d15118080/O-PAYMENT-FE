import { EndPoint } from './End-point.js';
//사용자 계좌인증
$('#login').click(function () {
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
        url: EndPoint+'/user/auth_check',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        data: {
            "user_id" : $('#user_id').val(),
            "user_password" : $('#user_password').val()
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            Swal.close();
            $.cookie('Token', data.data.Token);
            $.cookie('name', data.data.name);
            $.cookie('state', data.data.state);
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
