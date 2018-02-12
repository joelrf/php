<html> 
<head> 
</head>     
<body> 
 
<form method="get">
<div>
        <select name="numero">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select> 
</div>
<div> 
<select name="tipomoneda" size="1">
  <option value="dolar">Dolar</option> 
  <option value="euro"> Euro</option> 
  </select>
  </div>
  <div> 
  <input type="submit" value="Enviar"
  </div>
</form>

<?php
$numero=$_GET["numero"];
$moneda=$_GET["tipomoneda"];

for($i = 0; $i < $numero; $i++){
  $monedas[$i] = rand (0 ,1);
}

$monedas = array();
$images["dolar"]["cara"]= 'images/dolarcara.jpeg';
$images["dolar"]["cruz"]= 'images/dolarcruz.jpeg';
$images["euro"]["cara"]= 'images/eurocara.jpeg';
$images["euro"]["cruz"]= 'images/eurocruz.jpeg';

for($i = 0; $i < $numero; $i++){
  if ($monedas[$i] == 0){
    echo "<img src=\"".$images[$moneda]["cara"]."\">";
  }else {
    echo "<img src=\"".$images[$moneda]["cruz"]."\">";
  
  }
}
?>
</body> 
</html> 





