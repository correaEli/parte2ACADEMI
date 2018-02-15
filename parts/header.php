<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Academic Home</title>
<link href="Components/css/Contenido.css" rel="stylesheet" type="text/css">
<script src="Components/JQ/1.js"></script>
<script src="Components/JQ/2.js"></script>
<script src="Components/JQ/Main.js"></script>
</head>

<body>
<div class="header">
  <div class="logo">
    <img src="Components/pictures/Logo Academia.png" width="100" height="80" alt=""/>
    <h1 class="LogoInfo">ACADEMIA</h1>
  </div>
    <div class="barStatus">
        <form class="form-inline my-2 my-lg-0">
<?php
  if (!isset($loggedUser)) {
?>
        <a type="button" class="botones_log" href="index.php?a=goRegister">Register</a>
         
        <a type="button" class="botones_log" href="index.php?a=login">Login</a>
        <input id="search" type="text" placeholder="Search">
<?php
} else {
?>
        <a class="BAR_Info" >
<?php
  echo '<span style="color: white; font-weight: bold;">Hi ' . $loggedUser->username . '&nbsp;';
?>
        </a>
        <a class="botones_log" href="index.php?a=logout">Logout</a>
        <input id="search" type="text" placeholder="Search">
<?php
}
?>
        </form>
    </div>

  </div>
</div>
    <div class="panel">
      <ul class="boton">
      <a href="index.php?"><button type="button"  class="botones">Home</button></a>
      <a href="index.php?a=goProfile"><button type="button"  class="botones">Profile</button></a>
      <a href="index.php?a=goExplorer"><button type="button" class="botones">Explorer</button></a>
      <a href="index.php?a=goAcademia"><button type="button" class="botones">Academia</button></a>
      <a href="index.php?a=goMessage"><button type="button" class="botones">Messages</button></a>
      </ul>
    </div>


<div class="contenido">

