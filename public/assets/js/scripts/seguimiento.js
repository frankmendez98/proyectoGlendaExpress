let url = base_url+"/seguimientos/";
$(document).ready(function(){
    /**
     * Procedemos a cargar los datos de la tabla
     */
     $('#tabla').DataTable(); // End of DataTable

     $("#form_add").on('submit', function(e){
        e.preventDefault();
        $(this).parsley().validate();
        if ($(this).parsley().isValid()){
            $("#btn_add").prop("disabled",true)
            save_data();
        }
    });
});

function reload() {
	location.href = url;
}