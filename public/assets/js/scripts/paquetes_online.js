let url = base_url+"/paquetes_online/";

$(document).ready(function(){
    //alert("aqui");
    $(".dropify").dropify({
        messages: {
            default: "Arrastra una imagen o click aqui",
            replace: "Arrastra y suelta, o click para reemplazar",
            remove: "Remover",
            error: "Ooops, algo salio mal."
        },
        error: {
            fileSize: "El archivo es muy grande(1M max)."
        }
    });
});

$("#form_add").on('submit', function(e){
    e.preventDefault();
    $(this).parsley().validate();
    if ($(this).parsley().isValid()){
        $("#btn_add").prop("disabled",true)
        save_data();
    }
});

function save_data(){
    let form = $("#form_add");
	let formdata = false;
	if (window.FormData) {
		formdata = new FormData(form[0]);
	}

	$.ajax({
		type: 'POST',
		url: url+'store',
		cache: false,
		data: formdata ? formdata : form.serialize(),
		contentType: false,
		processData: false,
		dataType: 'json',
		success: function (data) {
			notification(data.type,data.title,data.msg);
			if (data.type == "success") {
				//setTimeout("reload();", 1500);
			}
		}
	});
}

function reload() {
	location.href = url;
}