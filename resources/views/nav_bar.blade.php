
<!DOCTYPE html>
<html>
<head >
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/stilo1.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{asset('css/stilo1.css')}}">
<script src="{{ asset('js/scripts.js') }}"></script>

</head>
<!-- Cabezera 



<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:160px;">
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  

  <div class="w3-dropdown-click">
    <button class="w3-button" onclick="myDropFunc()">
      Dropdown <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
-->

<style>
.active{
color:red;
font-size: 12px;
} 
</style>
<?php
function activeMenu($url){
  return request()->is($url) ? 'active' : '';
}
?>


<body>

<div class=" w3-sidebar w3-bar-block w3-animate-left" style="display:none;width:250px; z-index:5 " id="mySidebar">

  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>

  <a href="#"  class="waves-effect waves-light w3-bar-item w3-button  w3-border "><i class="fa fa-fw fa-home"></i> Inicio</a>


<button class="waves-effect waves-light w3-button w3-block w3-left-align w3-border" onclick="myAccFunc()">
  Curso <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAcc" class=" w3-hide w3-white w3-card">
    <a href="{{route('curso.index')}}" class="w3-bar-item  waves-effect waves-light w3-button">Administrar</a>
    <a href="#" class="w3-bar-item waves-effect waves-light w3-button">Asignar Instructor a Curso</a>
  </div>
  <a href="#" class="w3-bar-item w3-button  w3-border waves-effect waves-light">Docente</a>
  <a href="#" class="w3-bar-item w3-button  w3-border waves-effect waves-light">Instructor</a>
    <a href="#" class="w3-bar-item w3-button  w3-border waves-effect waves-light">Inscripciones</a>
      <a href="#" class="w3-bar-item w3-button  w3-border waves-effect waves-light">Asistencias</a>
        <a href="#" class="w3-bar-item w3-button  w3-border waves-effect waves-light">Ajustes</a>
</div>

<!-- Page Content -->
<div class="waves-effect waves-light w3-overlay w3-animate-opacity " onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-indigo div">

  <button style="float: left;"  class="w3-button w3-indigo w3-xxlarge " onclick="w3_open()">&#9776;</button>
  <h1 style="float: left; ">Sistema</h1>

  

  <div class="w3-container">
    
    
  </div>
</div>
@yield('contenido')
     <footer>
      
     </footer>

	</header>
</body>

</html>