       var carrito=[];    
	   $(document).ready(function(){       
       $('.modal').modal();
	   $('#modal1').modal('open');
	   var debug=true;	
	     
           $.ajax({
               url: 'php/GetListPlato.php',
               type: 'GET',
               dataType: 'json',               
               success: function(result){ 
                    console.log(result);
                    $.each(result.query, function(k,v){
                          var nombre=v.nombre;
                          var descripcion=v.descripcion;
                          var precio=v.precio_racion;
                          var categoria=v.id_categoria;
                          var imagen=v.foto;
                          var id=v.id;

                          pintaCard(id, nombre, imagen, precio, descripcion, categoria);
                    });
                    
                  },
               error: function(result){
                   alert("errorrrrr!!!!!");
               }
             });                        
         });   	
     function pintaCard( id, titulo, img, precio, descripcion, cat){
            console.log ("pintaCard: " +cat);
	     	var card=`<div class="col s6 m4 l3 ">
	     	<div class="card">
	     		<div class="card-image waves-effect waves-block waves-light">
	     			<img class="activator" src="${img}">
	     		</div>
	     		<div class="card-content">
	     			<span class="card-title activator grey-text text-darken-4">${titulo}<i class="material-icons right">more_vert</i></span>
	     			<p><span class="price">${precio}€ </span></p>
	     			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a onclick="addCart(${id},1, ${precio})" class="btn-floating green lighten-4 center-align">x1</a></li>
                  <li><a onclick="addCart(${id},2, ${precio})" class="btn-floating green lighten-3 center-align ">x2</a></li>
                  <li><a onclick="addCart(${id},3, ${precio})" class="btn-floating green lighten-2 center-align">x3</a></li>
                  <li><a onclick="addCart(${id},4, ${precio})" class="btn-floating green lighten-1 center-align">x4</a></li>
                </ul>
             </div>
	     		</div>
	     		<div class="card-reveal">
	     			<span class="card-title grey-text text-darken-4">${titulo}<i class="material-icons right">close</i></span>
	     			<p>${descripcion}</p>
	     		</div>
	     	</div>
	     </div>`;
	            switch(cat){
	     		case "Ensaladas":
	     		console.log ("Ensaladas");
	     		$('#ensaRow').append(card);
	     		break;
	     		case "Arroces y Pasta":
	     		console.log ("entra en Arroces y pastas: "+cat);
	     		$('#princiRow').append(card);	     		
	     		break;
	     		case "Postres ":
	     		console.log ("Postres");
	     		$('#postreRow').append(card);
	     		break;
	     		default:console.warn("Existen platos que no coinciden con categoria")

	     	}
	     } 

	     function addCart(id, cantidad, precio){
	     	console.warn("Llega a carrito: " +id+ "," +cantidad*precio);
	     	carrito.push( "hola");
	     	console.log (carrito);


	     } 