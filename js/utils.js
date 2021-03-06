        
	$(document).ready(function(){
			$('.modal').modal();
			$('#modal1').modal('open');
			$(".button-collapse").sideNav();
			$('#pasaCajaBtn').show ();
			var debug=true;
			//hayCarrito rescata la variable de localstorage para 
			//rescatar los productos añadidos al carrito
			var hayCarrito=localStorage.getItem('JsonCart');
			if (hayCarrito!=null){
				hayCarrito=JSON.parse(hayCarrito);
				$('#hayProductos').remove();
				$('#pasaCajaBtn').show();
				pintaModal(hayCarrito);
			}	

    $.ajax({
      url: 'php/getListPlato.php',
      type: 'GET',
      dataType: 'json',
      success : function(result){
        console.log(result);
       $.each(result.query, function(k,v) { 
       		console.log(result.query);
       		var nombre=v.nombre;
       		var descripcion=v.descripcion;
       		var precio=v.precio_racion;
       		var categoria=v.id_categoria;
       		var imagen=v.foto;
       		var id=v.id;
       		pintaCard(id,nombre,imagen,precio, descripcion,categoria);

       });     
      },
      error: function(result){
        alert("errorrrrrr!!!");
      }
    });  
		});
function pintaCard(id,titulo,img,precio,descripcion,cat){
		console.log("pintaCard: "+cat);
		var card =`
		<div class="col s12 m4 l3">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="fixed-action-btn horizontal" style=" position: absolute; display: inline-block; right:5px;top:5px">
				<a class="btn-floating btn-large green lighten-2">
				  <i class="large material-icons">shopping_cart</i>
				</a>
				<ul>
				  <li><a onclick="addCart(${id},4,${precio},'${titulo}')" class="btn-floating green lighten-2 center">4x</a></li>
				  <li><a onclick="addCart(${id},3,${precio},'${titulo}')" class="btn-floating green lighten-2 center">3x</a></li>
				  <li><a onclick="addCart(${id},2,${precio},'${titulo}')" class="btn-floating green lighten-2 center">2x</a></li>
				  <li><a onclick="addCart(${id},1,${precio},'${titulo}')" class="btn-floating green lighten-2 center">1x</a></li>
				</ul>
			  </div>
					<img class="activator" src="${img}">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">${titulo}<i class="material-icons right">more_vert</i></span>
					<p><span class="price">${precio} €</span></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">${titulo}<i class="material-icons right">close</i></span>
					<p>${descripcion}</p>
				</div>
			</div>
		</div>
		`;
	switch (cat){
			case "Ensaladas":
			$('#ensaRow').append(card);
			break;
			case "Arroces y Pastas":
			$('#princiRow').append(card);
			break;
			case "Postres":
			$('#postreRow').append(card);
			break;
			default:console.warn("Existen platos que no coinciden con categoría");

		}
	}
function addCart(id,cantidad,precio,titulo){	
	var cartExist=localStorage.getItem("JsonCart");
	console.warn(cartExist);
	var existeProduct=false;
	if (cartExist!=null){
		cartExist=JSON.parse(cartExist);
		console.log("Ya existen productos en el carrito");
		//buscamos si existe para añadir cantidad
	for (i in cartExist) {
		if (cartExist[i].id==id) {
			//se usa esta variable para saber si lo ha encontrado
			//si lo encuentra se pone en true para después comprobar
			//si se añade como nuevo producto al carrito.
			existeProduct=true;
			cartExist[i].cantidad=cartExist[i].cantidad+cantidad;
		}
	}
	if (!existeProduct){
		cartExist.push({id:id,cantidad:cantidad,precio:((precio*cantidad).toFixed(2)),titulo:titulo});
	}
	pintaModal(cartExist);
	}
	//este else controla que es la primera vez que se añaden productos al carrito
	else {
		//Es en el caso que previamente no existan productos en el carrito
		cartExist=[{id:id,cantidad:cantidad,precio:((precio*cantidad).toFixed(2)),titulo:titulo}];
		$('#hayProductos').remove();
		
		pintaModal(cartExist);

		
	}	
	console.log(cartExist);
	$('#pasaCajaBtn').show();
	var JsonCart=JSON.stringify(cartExist);
	localStorage.setItem("JsonCart",JsonCart);
}

function pintaModal(hayCarrito){
	$('#resProducts').empty();
	$('#resProducts').append('<tr><th>Plato</th><th>Cantidad</th><th>Total</th>');
	for (i in hayCarrito){
					var nombre=hayCarrito[i].titulo;
					var cantidad=hayCarrito[i].cantidad;
					var precio=hayCarrito[i].precio;
					var rowProduct=`
						<tr><td>${nombre}</td><td>${cantidad}</td><td>${precio}</td></tr>
					 `;
					$('#resProducts').append(rowProduct);

				}
}