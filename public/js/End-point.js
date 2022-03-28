//const EndPoint = 'http://127.0.0.1:8070/api/v1';
const EndPoint = 'https://dev.conpay.kr/api/v1';
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

export { EndPoint,loading,menu};


