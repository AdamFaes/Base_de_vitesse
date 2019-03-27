<!DOCTYPE html>
<?php 
 	  require_once("./header.php");
 	  require_once("./navbar.php");
?>
<style>

 .my-container{
 	border: black;
 }

.espace{
	margin-top: 50px;
}

.espacebas{
	margin-top: 350px;
}

.my-row{
	margin-bottom: 50px;
	margin-top: 50px;
	margin-right: 15px; 
	margin-left: 15px;


	height: 300px;
}

.my-col{
	border: 3px solid navy;
	background-color: #1E90FF;
	border-radius: 10px;
}

.my-text{
	color: black;
	font-size: xx-large;
	font-family: Noto Sans, sans-serif;
}
</style>

 <body>
 	<div class="view" style="background-image: url('images/rade1.jpg'); background-repeat: no-repeat;background-size: cover; background-position: center center;
 		<div class="container my-container">

 			<div class="row espace">
 			</div>
      <div class="row espace">
      </div>
      <div class="row justify-content-around">
        <div class="col-3 my-col">
          <a>Date de la compétition</a>
        </div>

        <div class="col-3 my-col">
          <a>Nom de la compétition</a>
        </div>

        <div class="col-3 my-col">
          <a>Sport</a>
        </div>
      </div> 
       
      <div class="row espace"></div>  
 			<div class="row justify-content-around my-row">

 				<div class="col-8 my-col text-center">

 					<p class="text-center my-text "> Résultats </p>

          <table class="table table-striped table-dark">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Place</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Vitesse</th>
              </tr> 
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Adam</td>
                <td>Faes</td>
                <td>50km/h</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Adam</td>
                <td>Faes</td>
                <td>50km/h</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Adam</td>
                <td>Faes</td>
                <td>50km/h</td>
              </tr> 
              <tr>
                <th scope="row">1</th>
                <td>Adam</td>
                <td>Faes</td>
                <td>50km/h</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Adam</td>
                <td>Faes</td>
                <td>50km/h</td>
              </tr


              
            </tbody>   
          </table>
        </div>
		
 			</div>

 			<div class="row espacebas">
 			</div>


 			<div class="row justify-content-around espace">	
 			</div>

 		</div>
 	</div>
 </body>
 
 </html>