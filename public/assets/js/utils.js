$(document).ready(function(){
    $(".numeric").numeric({
        negative: false,
        decimal: false
    });
    $(".decimal").numeric({
        negative: false,
        decimalPlaces: 2
    });
    $('.select2').select2();

    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        language: 'es',
        orientation: "bottom auto",
        autoclose: true
    }).datepicker("setDate", new Date());
});
function notification(type, title, message){
    if(type=="success" || type=="Success"){
        iziToast.success({
            title: title,
            message: message,
            position: 'topRight',
        });
    }
    else if(type=="info" || type=="Info"){
        iziToast.info({
            title: title,
            message: message,
            position: 'topRight',
        });
    }
    else if(type=="warning" || type=="Warning"){
        iziToast.warning({
            title: title,
            message: message,
            position: 'topRight',
        });
    }
    else if(type=="error" || type=="Error"){
        iziToast.error({
            title: title,
            message: message,
            position: 'topRight',
        });
    }
}