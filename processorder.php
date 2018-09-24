<?php
require('header.inc');
?>
<html>
<head>
<title>Автозапчасти от Боба - Результаты заказа</title>
</head>
<body>
<h1>Лабораторная работа №1 по теме передача данных из формы в основную программу и их последущая обработка</h1>
<h2>Автозапчасти от Боба</h2>
<h3>Результаты заказа</h3>
<?php
echo '<p>Заказ обработан в ';
echo date('H:i, jS F');
echo '</p>';

//создать короткие имена переменных
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$battery = $_POST['battery'];
$find = $_POST['find'];

echo '<p>Список вашего заказа: </p>';
echo $tireqty . ' автопокрышек</br>';
echo $oilqty . ' бутылок с маслом</br>';
echo $sparkqty . ' свечей зажигания</br>';
echo $battery . ' аккумулятор</br>';
 

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty + $battery;
echo 'Заказано товаров: '.$totalqty. '</br>';

$totalamount = 0.00;

define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
define('BATPRICE',50);

$totalamount = $tireqty * TIREPRICE
+ $oilqty * OILPRICE
+ $sparkqty * SPARKPRICE
+ $battery * BATPRICE;
echo 'итого: $'.number_format($totalamount,3).'</br>';

$taxrate = 0.10;  //Местный налог с продаж состаляет 10%
$totalamount = $totalamount * (1 + $taxrate);
echo 'всего, включая налог с продаж: $'. number_format($totalamount,2).'<br>';

?>
На вопрос как вы нашли нашу компанию был получен ответ: <? echo $find; ?>
</body>
</html>
<?php
require('footer.inc');
?>