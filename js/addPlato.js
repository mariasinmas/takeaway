$(document).ready(function() {
           var debug=true;   
           $.ajax({
               url: '../php/getSelectCat.php',
               type: 'GET',
               dataType: 'json',               
               success: function(result){ 
                    console.log(result);
                    var etiquetas =""; 
                    var values ="";
                    var options =""; 
                    //Recorrer el array que manda el php
                    $.each(result.query, function() {
                        if (debug) console.log ("Pintando");
                                                                       
                        $.each(this, function(campo,valor){
                        if(campo=="id") values = valor;
                        else etiquetas = valor;                                            
                                                            
                    });
                       options+="<option value='" +values +"'>" +etiquetas +"</option>";  
                    
                   });

                   if(debug) console.log (options); 
                   $("#categoria").html(options);
                   $('select').material_select();
                  },
               error: function(result){
                   alert("errorrrrr!!!!!");
               }
             });

             //Ajax para enviar formulario
             $("#formPlato").submit(function(event){
             event.preventDefault(); //Evita el refreh automático que se produce al enviar el form  
             var jsonData= JSON.stringify($("#formPlato").serializeArray());
             if (debug)console.log("Datos en Json:");
             if (debug)console.log(jsonData);
             $.ajax({
               url: '../php/recibePlato.php',
               type: 'POST',
               dataType: 'json',
               data: jsonData,
               success: function(result){ 
                   if (debug) console.log(result.sql);
                   if(result.error===0) 
                        { 
                        Materialize.toast('Plato creado!', 4000);
                        $('#formPlato').trigger("reset");
                        }
                   else{ 
                        Materialize.toast('Error al crear categoría!', 6000); // 4000 is the duration of the toast
                        $('#formPlato').trigger("reset");
                        }

               },
               error:function(result){
                   alert("errorrrrr!!!!!");
               }
             });                       
                       
           });

           });   
           