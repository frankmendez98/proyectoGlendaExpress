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
    $(".tbody_tr").html(cadena);
});