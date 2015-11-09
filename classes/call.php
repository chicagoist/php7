<?php ## Вызов метода объекта.
  // Подключение директории библиотек в include_path.
  require_once "lib/config.php"; 
  // Загрузка класса.
  require_once "Math/Complex.php";
  // Создаем новый объект класса Math_Complex.
  $obj = new MathComplex;
  // Присваиваем начальное значение свойствам.
  $obj->re = 16.7;
  $obj->im = 101;
  // Вызов метода add() с параметрами (18.09, 303) объекта $obj.
  $obj->add(18.09, 303);
  // Выводим результат:
  echo "({$obj->re}, {$obj->im})";
?>