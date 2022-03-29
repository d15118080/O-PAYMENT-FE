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
export { EndPoint,loading,menu,Token_Check};



