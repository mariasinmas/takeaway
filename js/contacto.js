$(document).ready(function(){
	        var debug=true;           
            $('.row').hide();
            $('.row').fadeIn(3000);
            $('#contactForm').hide();
            $('#gracias').hide();
            $('#contactForm').slideDown(3000);
            //Capturamos evento submit del form con jQuery. A destacar que reciba la variable event para que en Firefox no de problemas.
            $('#contactForm').submit(function(event){
            	//El event.preventDefault evita que se haga un submit por defecto. Así no se ejecuta el atributo action.
            	event.preventDefault();
            	var jsonData=JSON.stringify($('#contactForm').serializeArray());
            	if(debug) console.log(jsonData);
                $.ajax({
                    url: 'php/recibedatos.php',
                    type: 'POST',
                    dataType: 'json',
                    data: jsonData,
                    success:function(result){
                            console.log("Todo ha ido bien");
                            console.log(result);
                            $('#contacto').fadeOut();
                            $('#gracias').slideDown(2500);
                            },
                    error: function(result){
                        alert("Error");

                    }
                })
                
                
      		//Fin del submit	
            })
            //Fin del document ready 
           })
