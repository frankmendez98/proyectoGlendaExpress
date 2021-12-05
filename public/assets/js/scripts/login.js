$("#form_add").on('submit', function(e){
    e.preventDefault();
    $(this).parsley().validate();
    if ($(this).parsley().isValid()){
        save_data();
    }
});

function save_data(){
    //alert("hola");
    let form = $("#form_add");
    let formdata = false;
    if (window.FormData) {
    formdata = new FormData(form[0]);
    }
    $.ajax({
        type: 'POST',
        url: base_url+'login/login',
        cache: false,
        data: formdata ? formdata : form.serialize(),
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (data) {
            //console.log(data);
            notification(data.type,data.title,data.msg);
            if (data.type == "success") {
                setTimeout("reload();", 1500);
            }
            else {
            }
        }
    });
}
function reload() {
	location.href = base_url+"ventas";
}