<?php
echo date("Дата: d.m.Y");
echo "<br/>";
$datetime = getdate();
$timeoforder=date(" d.m.Y")."\t\t".$datetime['hours'].":".$datetime['minutes'].":".$datetime['seconds'];
  echo "Время: ".$datetime['hours'].":".$datetime['minutes'].":".$datetime['seconds'];
echo "<br/>";
echo "Ваш заказ принят";
echo "<br/>";
echo "Ждите звонка от нашего оператора";
echo "<br/>";
echo "в самое ближайшее время";
echo "<br/>";
echo "<br/>";
$techdata="Форма:\t". $_POST['formid']."\n"."Источник:\t".$_POST['utm_source']."\n".
            "Канал:\t".$_POST['utm_medium']."\n".
            "Устройство:\t".$_POST['utm_content']."\n"."Кампания:\t"."\n".
            "Код:\t".$_POST['product_id'];
$messofbay=$timeoforder."\n".$_POST['utm_campaign']."\n"."Товар:\t\t\t".$_POST['utm_term']."\n"."Покупатель:\t".$_POST['name']."\n"."Телефон:\t".$_POST['phone'];
mail("ipkungurov@live.ru","Заказ на покупку",$techdata."\n\n".$messofbay);
mail("order@sweetkisses.ru","Заказ на покупку      ".$timeoforder,$techdata."\n\n".$messofbay);
?>
