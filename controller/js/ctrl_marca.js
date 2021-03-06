
function marca_main(){
    alert("marca")
    $.ajax({
        cache: false,
        url: 'vista/marca_control.php',
        type: 'post',
        beforesend: function() {
            
        },
        success: function(response) {
            $("#control").html(response);
            listarMarca();
        }
    })


}


function listarMarca(){

    $.ajax({
        cache: false,
        url: 'controller/marca/ctrl_marca_listar.php',
        type: 'post',
        beforesend: function(){

        },
        success: function(response) {
            $("#datos").html(response);
        }
    })
}


function nuevoProducto(){
	$.ajax({
		 cache: false,
		 url: 'controller/marca/ctrl_marca_nuevo.php',
		 type: 'post',
		 beforeSend: function () {
			$("#frm_modal_cuerpo").html("<img src='recursos/images/loading_4.gif'>Procesando...");
	
		 },
		 success: function (response) {
			$('#frm_modal_size').addClass("modal-lg");
			
		 	$('#frm_modal_titulo').html("<i class='fas fa-file'></i> NUEVO PRODUCTO");
			$('#frm_modal_cuerpo').html(response);
			$('#frm_modal_pie').html("<button type='button' class='btn btn-cancelar' data-dismiss='modal'>Cancelar</button><button type='button' onclick='insertarMarca();' class='btn btn-aceptar'>Aceptar</button>");
			$('#frm_modal_box').modal({backdrop: 'static', keyboard: false});
			$('#frm_modal_box').modal('show'); 	
		 }		
		
	}); //end ajax	

}

function insertarMarca(){

    let nombre = $("#nombre").val();

    const parametros = {"nombre":nombre};

    $.ajax({
        data: parametros,
        cache: false,
        url: 'controller/marca/ctrl_marca_insertar.php',
        type: 'post',
        beforesend: function(){

        },

        success: function(response) {
            listarMarca();
            $('#frm_modal_box').modal('hide'); 
        }

    });
}


function ModificarProducto(idMarca){

   

   const parametros = {"idMarca":idMarca}; 
	$.ajax({
        data: parametros,
		cache: false,
		url: 'controller/marca/ctrl_marca_modificar.php',
		type: 'post',
		beforeSend: function () {
		$("#frm_modal_cuerpo").html("<img src='recursos/images/loading_4.gif'>Procesando...");
	
		},
		success: function (response) {
			$('#frm_modal_size').addClass("modal-lg");
			
		 	$('#frm_modal_titulo').html("<i class='fas fa-file'></i> NUEVO PRODUCTO");
			$('#frm_modal_cuerpo').html(response);
			$('#frm_modal_pie').html("<button type='button' class='btn btn-cancelar' data-dismiss='modal'>Cancelar</button><button type='button' onclick='ActualizarMarca();' class='btn btn-aceptar'>Aceptar</button>");
			$('#frm_modal_box').modal({backdrop: 'static', keyboard: false});
			$('#frm_modal_box').modal('show'); 	
		 }		
		
	}); //end ajax	

}

function ActualizarMarca(){
    let idMarca = $("#idMarca").val();
    let nombre = $("#nombre").val();

    alert(idMarca+" "+nombre);
    const parametros = {"idMarca":idMarca,"nombre":nombre};

    $.ajax({
        data: parametros,
        cache: false,
        url: 'controller/marca/ctrl_marca_actualizar.php',
        type: 'post',
        beforesend: function(){

        },

        success: function(response) {
            listarMarca();
            $('#frm_modal_box').modal('hide'); 
        }

    });
}


function MensajeEliminarMarca(){

		$('#frm_modal_size').removeClass("modal-lg");
		$('#frm_modal_titulo').html("<i class='fas fa-trash'></i> ELIMINAR REGISTRO");
		$('#frm_modal_cuerpo').html("Desea eliminar el registro?");
		$('#frm_modal_pie').html("<button type='button' class='btn btn-cancelar' data-dismiss='modal'>No</button><button type='button' onclick='EliminarMarca();' class='btn btn-aceptar'>Si</button>");
		$('#frm_modal_box').modal({backdrop: 'static', keyboard: true});
		$('#frm_modal_box').modal('show');	
}

function EliminarMarca(idMarca){

    alert(idMarca);
	const parametros={"idMarca":idMarca};
	
	$.ajax({
		 data: parametros,
		 cache: false,
		 url: 'controller/marca/ctrl_marca_eliminar.php',
		 type: 'post',
		 beforeSend: function () {
			 
		 },
		 success: function (response) {
			 listarMarca();			 
			$('#frm_modal_box').modal('hide'); 	
			
		 }		
		
	}); //end ajax	
}
