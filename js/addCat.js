$(document).ready(function() {
           var debug=true;

           $('select').material_select();
           $("#formCat").submit(function(event){
             event.preventDefault(); //Evita el refreh automático que se produce al enviar el form  
             var jsonData= JSON.stringify($("#formCat").serializeArray());
             if (debug)console.log("Datos en Json:");
             if (debug)console.log(jsonData);
             $.ajax({
               url: '../php/recibeCat.php',
               type: 'POST',
               dataType: 'json',
               data: jsonData,
               success: function(result){ 
                   if (debug) console.log(result.sql);
                   if(result.error===0) 
                        { 
                        Materialize.toast('Categoría creada!', 4000);
                        $('#formCat').trigger("reset");
                        }
                   else{ 
                        Materialize.toast('Error al crear categoría!', 6000); // 4000 is the duration of the toast
                        $('#formCat').trigger("reset");
                        }

               },
               error:function(result){
                   alert("errorrrrr!!!!!");
               }
             })
             
             });
             
             
              
           });
           