let url = base_url+"/clientes/";
$(document).ready(function(){
    /**
     * Procedemos a cargar los datos de la tabla
     */
     $('#tabla').DataTable(); // End of DataTable
});

$(document).on("click",".eliminar_elemento", function(event)
{
	event.preventDefault()
	let id_row = $(this).attr("id_detalle");
	let dataString = "id=" + id_row;
	Swal.fire({
		title: 'Alerta!!',
		text: "Estas seguro de eliminar este regitro?!",
		type: 'error',
		target:'#page-top',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Aceptar',
		cancelButtonText: 'Cancelar',
	}).then((result) => {
		if (result.value) {
			$.ajax({
				type: "POST",
				url: url+"destroy",
				data: dataString,
				dataType: 'json',
				success: function (data) {
					notification(data.type,data.title,data.msg);
					if (data.type == "success") {
						setTimeout("reload();", 1500);
					}
				}
			});
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

$("#form_edit").on('submit', function(e){
    e.preventDefault();
    $(this).parsley().validate();
    if ($(this).parsley().isValid()){
        $("#btn_add").prop("disabled",true)
        edit_data();
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
		url: url+'create',
		cache: false,
		data: formdata ? formdata : form.serialize(),
		contentType: false,
		processData: false,
		dataType: 'json',
		success: function (data) {
			notification(data.type,data.title,data.msg);
			if (data.type == "success") {
				setTimeout("reload();", 1500);
			}
		}
	});
}

function edit_data(){
    let form = $("#form_edit");
	let formdata = false;
	if (window.FormData) {
		formdata = new FormData(form[0]);
	}

	$.ajax({
		type: 'POST',
		url: url+'update',
		cache: false,
		data: formdata ? formdata : form.serialize(),
		contentType: false,
		processData: false,
		dataType: 'json',
		success: function (data) {
			notification(data.type,data.title,data.msg);
			if (data.type == "success") {
				setTimeout("reload();", 1500);
			}
		}
	});
}

function reload() {
	location.href = url;
}