<html>
<head>
</head>
<body align="center">
  <p>
    Класс "Алхимик", который умеет растворять металлы в кислоте. 
    При этом процесс обратимый, в зависимости от того, кратен ли текущий timestamp десяти. 
    Необходимо описать несколько элементов (металы, газы, кислоты и соли, к примеру). 
    На вход подавать несколько разных элементов, на выходе - статус - удалось ли расстворить, и обратимый ли это процесс был.
  </p>
  <form action="index.php" method="post" name="Forma">
   <select size="1" name="Element_1">
   	<option disabled selected>Select first element</option>
    <option>Acid</option>
    <option>Gase</option>
    <option>Metall</option>
    <option>Salt</option>
   </select>

   <select size="1" name="Element_2">
    <option disabled selected>Select second element</option>
    <option>Acid</option>
    <option>Gase</option>
    <option>Metall</option>
    <option>Salt</option>
   </select>
   <p><input type="submit" value="Отправить"></p>
  </form>  
</body>
</html>

<?php
function __autoload($class_name) {
  require_once $class_name . '.php';
}

  $alchemist = new Alchemy;
  $alchemist->welcome();

if(isset($_POST['Element_1']) && isset($_POST['Element_2']))
{
  $elem_1 = new $_POST['Element_1'];
  $elem_2 = new $_POST['Element_2'];

  if ($_POST['Element_1'] === $_POST['Element_2']) {
    $alchemist->no_reaction();
  }else{
    $final_index = $alchemist->dissolve($elem_1, $elem_2);
    $alchemist->getReaction($final_index);
    echo "Current timestamp: ".time();
    echo "<br>";
  }
  
}else{
  $alchemist->no_element();
}

?>