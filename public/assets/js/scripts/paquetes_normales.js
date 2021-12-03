let url = base_url+"/paquetes_normales/";
$(document).ready(function(){
    /**
     * Procedemos a cargar los datos de la tabla
     */
     $('#tabla').DataTable(); // End of DataTable
});

$(document).on("click",".agregar_paquete", function(event)
{
	event.preventDefault();
    var producto = $("#productoSelect option:selected").text();
	var cadena = "";
    cadena += "<tr>";
    cadena += "<td>"+producto+"</td><td><input class='form-control peso'></td><td><input readonly class='form-control peso_dolares'></td><td><input readonly class='form-control subtotal'></td>";
    cadena += "</tr>";
    $(".tbody_tr").append(cadena);

    totales();
});

$(document).on("change",".peso", function(event)
{
    totales();
});
function totales(){
    var total = 0;
    $(".tbody_tr > tr").each(function(){
        var peso = parseFloat($(this).find('.peso').val());
        (isNaN(peso))?peso=0:'';
        var pesoDolares = 0;
        pesoDolares = (peso) * 6;

        total += pesoDolares;

        $(this).find('.peso_dolares').val(pesoDolares);
        $(this).find('.subtotal').val(pesoDolares);
    });
    $(".total").val(total);
}

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
				setTimeout("reload();", 1500);
			}
		}
	});
}