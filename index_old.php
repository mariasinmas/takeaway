
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta charset="utf-8">
	  <link type="text/css" rel="stylesheet" href="css/styles.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
	   $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the    modal  ID that wants to be triggered
      $('.modal').modal();
	   $('#modal1').modal('open');
      });
      </script>	  
	  <nav>
         <div class="nav-wrapper purple darken-4 ">
           <a href="#" class="brand-logo">Take Away</a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li class="desplegable">
			 <a href="index.html">Inicio</a>
			   <ul class="submenu" >
			      <li><a href="#">Ensaladas</a></li>
                  <li><a href="#">Principales</a></li>
                  <li><a href="#">Postres</a></li>
				</ul>  
			 
			 </li>
             <li><a href="info.html">Info</a></li>
             <li><a href="fotos.html">Fotos</a></li>
           </ul>
         </div>
      </nav>
	  <!--Ensaladas-->
	  <section id="ensaladas">
	      <h2 class="center-align  green lighten-1 white-text">Ensaladas</h2>
	      <div class="row">
	         <div class="col s12 m6 l3">
			 <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/Ensaladacaprichosa.jpg">
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Ensalada Caprichosa<i class="material-icons right">more_vert</i></span>
             <p></p>
			 
			 
			 <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating green lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating green lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating green lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating green lighten-1 center-align">x4</a></li>
                </ul>
             </div>
        
			 
			 
			 
             </div>
             <div class="card-reveal">
            <span class="card-title white-text text-darken-4">Ensalada Caprichosa<i class="material-icons right">close</i></span>
            <p>Deliciosa combinació gracies a la base vegetal, rica en vitamines, al pernil dolç i al formatge, que aporten proteïnes i calci al plat. El toc dolç del blat de moro i les pastanagues li donen un gust agradable en boca.</p>
            </div>
            </div>
		    </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/ensaladacaprichosa.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Ensalada Cesar<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating green lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating green lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating green lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating green lighten-1 center-align">x4</a></li>
                </ul>
             </div>
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Ensalada Cesar<i class="material-icons right">close</i></span>
            <p>Has tastat ja la nostra amanida clàssica? Amb base vegetal rica en vitamines, pollastre arrebossat cruixent i formatge que ens ofereix una bona font de calci.</p>
            </div> 
		    </div>
            </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/ensaladapasta.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Ensalada Pasta<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating green lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating green lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating green lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating green lighten-1 center-align">x4</a></li>
                </ul>
             </div>
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Ensalada Pasta<i class="material-icons right">close</i></span>
            <p>Amanida fresca amb la base de pasta Fusilli, juntament amb la tonyina i les hortalisses formen un plat complet. Acompanyat amb maionesa..</p>
           </div> 
		   </div>
           </div>
		  
		   <div class="col s12 m6 l3">
		   <div class="card">
           <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/ensaladaverde.jpg">
           </div>
           <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Ensalada Verde<i class="material-icons right">more_vert</i></span>
           <p></p>
		   
		   <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating green lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating green lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating green lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating green lighten-1 center-align">x4</a></li>
                </ul>
             </div>
		   
           </div>
           <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Ensalada Verde<i class="material-icons right">close</i></span>
           <p>Saludable amanida, a base d’enciam juntament amb hortalisses aporta un alt contingut en vitamines i antioxidants.</p>
           </div>
		   </div>
           </div>
		 </div>
	  </section>
	  <!--Principales-->
	  <section id="principales">
	      <h2 class="center-align pink accent-4 white-text">Arroces y Pastas</h2>
	      <div class="row">
	         <div class="col s12 m6 l3">
			 <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/espaguetisboloñesa.jpg">
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Espaguettis Boloñesa<i class="material-icons right">more_vert</i></span>
             <p></p>
			 
			 <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating pink lighten-1 center-align">x1</a></li>
                  <li><a class="btn-floating pink darken-1 center-align ">x2</a></li>
                  <li><a class="btn-floating pink darken-2 center-align">x3</a></li>
                  <li><a class="btn-floating pink darken-3 center-align">x4</a></li>
                </ul>
             </div>
			 
			 
             </div>
             <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Espaguettis Boloñesa<i class="material-icons right">close</i></span>
            <p>Para los amantes de los clásicos. Los espaguetis con su salsa boloñesa de tomate y carne nos dan la energía necesaria durante el día. Ideal para todos los miembros de la familia.</p>
            </div>
            </div>
		    </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/macarronesgenovesa.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Macarrones Genovesa<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating pink lighten-1 center-align">x1</a></li>
                  <li><a class="btn-floating pink darken-1 center-align ">x2</a></li>
                  <li><a class="btn-floating pink darken-2 center-align">x3</a></li>
                  <li><a class="btn-floating pink darken-3 center-align">x4</a></li>
                </ul>
             </div>
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Macarrones Genovesa<i class="material-icons right">close</i></span>
            <p>Macarrones rellenos de carne con un estupendo acompañamiento de salsa napolitana a base de hortalizas. Plato nutritivo que aporta hidratos de carbono y proteïnas. Combínalo con nuestra crema de verduras para equilibrar tu menú.</p>
            </div> 
		    </div>
            </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/risottosetas.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Risotto de Setas<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating pink lighten-1 center-align">x1</a></li>
                  <li><a class="btn-floating pink darken-1 center-align ">x2</a></li>
                  <li><a class="btn-floating pink darken-2 center-align">x3</a></li>
                  <li><a class="btn-floating pink darken-3 center-align">x4</a></li>
                </ul>
             </div>
			
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Risotto de Setas<i class="material-icons right">close</i></span>
            <p>Increíble combinación de sabor que armoniza el arroz bomba del delta del Ebro, con una base de caldo de carne muy nutritiva, setas y mini salchichas. Acompáñalo con un gazpacho o cualquiera de nuestras cremas para darle las vitaminas a tu menú saludable.</p>
           </div> 
		   </div>
           </div>
		  
		   <div class="col s12 m6 l3">
		   <div class="card">
           <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/tallarinescongambasycalamar.jpg">
           </div>
           <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Tallarines con Gambas y Calamar<i class="material-icons right">more_vert</i></span>
           <p></p>
		   
		   <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating pink lighten-1 center-align">x1</a></li>
                  <li><a class="btn-floating pink darken-1 center-align ">x2</a></li>
                  <li><a class="btn-floating pink darken-2 center-align">x3</a></li>
                  <li><a class="btn-floating pink darken-3 center-align">x4</a></li>
                </ul>
             </div>
		   
           </div>
           <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Tallarines con Gambas y Calamar<i class="material-icons right">close</i></span>
           <p>¿Echas de menos ese viaje al Oriente? Relájate y degusta el nuevo WOK de Nostrum. Cierra los ojos e imagínate que estás allí. Disfruta de los tallarines combinados con gambas, calamar, setas y verduras.¡Seguro que los acabas con una sonrisa!</p>
           </div>
		   </div>
           </div>
		 </div>
	  </section>
	  <!--Postres-->
	  <section id="postres">
	      <h2 class="text-align center blue accent-2 white-text">Postres</h2>
	      <div class="row">
	         <div class="col s12 m6 l3">
			 <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/sorbetelimon.jpg">
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Sorbete de Limón<i class="material-icons right">more_vert</i></span>
             <p></p>
			 
			 <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating  blue lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating  blue lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating  blue lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating  blue lighten-1 center-align">x4</a></li>
                </ul>
             </div>
			 
             </div>
             <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Sorbete de Limón<i class="material-icons right">close</i></span>
            <p>Delicioso sorbete de limón.</p>
            </div>
            </div>
		    </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/fresamango.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Fresa y Mango<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating  blue lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating  blue lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating  blue lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating  blue lighten-1 center-align">x4</a></li>
                </ul>
             </div>
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Fresa y Mango<i class="material-icons right">close</i></span>
            <p>Fresa, mango y arándanos</p>
            </div> 
		    </div>
            </div>
		    <div class="col s12 m6 l3">
		    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="img/turronxixona.jpg">
            </div>
            <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Helado de Turrón<i class="material-icons right">more_vert</i></span>
            <p></p>
			
			<div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating  blue lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating  blue lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating  blue lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating  blue lighten-1 center-align">x4</a></li>
                </ul>
             </div>
			
            </div>
            <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Helado de Turrón<i class="material-icons right">close</i></span>
            <p>Delicioso helado de turrón de jijona.</p>
           </div> 
		   </div>
           </div>
		  
		   <div class="col s12 m6 l3">
		   <div class="card">
           <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/piña.jpg">
           </div>
           <div class="card-content">
           <span class="card-title activator grey-text text-darken-4">Piña Fresca<i class="material-icons right">more_vert</i></span>
           <p></p>
		   
		   <div class="fixed-action-btn horizontal" style="position:absolute; display: inline-block; right:10px; top:10px">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons">shopping_cart</i>
               </a>
                <ul>
                  <li><a class="btn-floating  blue lighten-4 center-align">x1</a></li>
                  <li><a class="btn-floating  blue lighten-3 center-align ">x2</a></li>
                  <li><a class="btn-floating  blue lighten-2 center-align">x3</a></li>
                  <li><a class="btn-floating  blue lighten-1 center-align">x4</a></li>
                </ul>
             </div>
		   
           </div>
           <div class="card-reveal">
           <span class="card-title grey-text text-darken-4">Piña Fresca<i class="material-icons right">close</i></span>
           <p>Saludable piña fresca.</p>
           </div>
		   </div>
           </div>
		 </div>
	  </section>
	  	  	<footer class="page-footer purple darken-4">
               <div class="container">
                <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright purple darken-3 ">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
		<!-- Modal Structure -->
        <div id="modal1" class="modal">
        <div class="modal-content">
        <h4>Subscríbete a nuestra Newsletter</h4>
        <form method="post">
		<div class="input-field">
		<input maxlenght="100" type="email" name="email" id="email">
		<label for="email">Tu correo</label>
		</div>
		<button clas="btn waves-effect-light" type="submit">Suscribirme</button>
		</form>
        </div>
        <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
        </div>
		<?php



//Se comprueba que llegan datos por método POST
if($_POST){         
   $email=$_POST['email'];     
   $mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
   mysqli_set_charset($mysqli,"utf8");   
   if($mysqli){
	   $sql="INSERT INTO newsletter (email) VALUES ('$email');"; 
	   $query=$mysqli->query($sql);
	   if($query){
		   echo"
		         <script>
		         $(document).ready(function(){                  
		         $('#modal1').modal('close');
				 alert('Gracias por suscribirte');
				 });
		        </script>";	   
		  
	   }
	   else{
		   echo"Ha habido un problema con el registro del formulario";
	   }
       }
       $mysqli->close();
       }
       

?>
		
    </body>
  </html>