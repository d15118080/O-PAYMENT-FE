import {EndPoint, loading,Token_Check} from './End-point.js';
Token_Check();

//출금정보 요청
$(document).ready(function () {
    loading('on');
    axios({
        url: EndPoint + '/user/get_setting_data',
        method: 'get',
        headers: {
            'Authorization': 'Bearer ' + $.cookie('Token'),
            'Content-Type': 'application/json'
        }
    })
        .then((response) => {
            const data = JSON.parse(response.request.response)
            loading('off')
            $('.user_bank_number').text(data.data.user_bank_number)
            $('.user_bank_name').text(data.data.user_bank)
            $('.user_name').text(data.data.user_name)
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
