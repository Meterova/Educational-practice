<?php

include ('db.php');
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];
      {
$result2 = mysqli_query ($db, "INSERT INTO data (name, surname, email, message) VALUES ('$name','$surname','$email','$message')");  
          if ($result2=='TRUE')
          {
    exit("Ваше сообщение было успешно отправлено! Спасибо за ваши отзывы.<a href='home.php'>Главная страница</a>");
          }
          else {
          echo "Ошибка! Ваше сообщение не было отправлено! Пожалуйста, отправьте еще раз.";
          }

      }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>BMI CALCULATOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
</head>
<style>
body {
  background-image: url('images/fon.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<body>
<ul> <li><a href="#Индекс массы тела (ИМТ)">Информация</a></li>
 <li><a href="#Калькулятор индекса массы тела">Калькулятор(ИМТ)</a></li>
 <li><a href="php/home.php">Обратная связь</a></li>


<h1 align="center"> <a name="Индекс массы тела (ИМТ)">Индекс массы тела (ИМТ)</A></h1>
<h2><i>Индекс массы тела является показателем отношения веса и роста человека. Данный параметр помогает определить отклонения от нормальной массы тела в ту или иную сторону. Лишний вес опасен для человеческого здоровья, поскольку часто приводят к сердечным заболеваниям. Онлайн калькулятор индекса массы тела позволяет быстро и точно узнать, насколько ваш показатель веса соответствует норме. Чтобы рассчитать индекс массы тела необходимо выбрать в представленном сервисе свой рост и вес.

Индекс массы тела для женщин считается нормальным, если показатель входит в диапазон от 20 до 22. Для мужчин этот показатель должен быть от 23 до 25. Статистика показывает, что люди, у которых данный показатель остается в пределах 18-22, живут в среднем дольше, чем те, у кого есть проблемы с весом.

Если показатель ИМТ превышает 25, то это сигнал, что вам нужно менять свой образ жизни. Важно отметить, что используемая формула для расчета индекса массы тела может переоценить показатель ожирения для людей атлетического сложения, поскольку вычисления не учитывают мышечную массу.

Индекс массы тела стал особенно актуален в западных странах, где проблема с ожирением встала достаточно остро. В самом начале расчет имт разрабатывался для социологических исследования, поэтому ставить медицинский диагноз с помощью этих расчетов не совсем правильно. 
Однако доступность и простота расчета сделала данный калькулятор очень популярным среди населения. Если индекс превышает число 30, то это с большой долей вероятности говорит об ожирении. 
Нужно понимать, что индекс массы тела не годится для постановления диагноза, но он может помочь в качестве контроля в процессе опробования новой фитнес-программы или диеты. 
Калькулятор ИМТ определит точку отсчета и позволит прослеживать изменения веса тела.<i></h2>
 
<h2><p align="center"><i>ИМТ = ВЕС / РОСТ<sup> 2</sup></i></p></h2>

        <h1 align="center"> <a name="Калькулятор индекса массы тела">Калькулятор индекса массы тела</a></h1>
<h2><p>Калькулятор определит индекс массы тела (обычный и уточненный), границы зон веса, покажет разницу в килограммах до каждой ступени индекса.
Также результаты представлены на графике индекса массы тела и в таблице роста и веса.</p>
<p>Расчет основан на росте и весе. После нажатия на кнопку "Рассчитать" будут показаны результаты анализа введенных данных и рекомендации по <b>Вашему индексу массы тела</b>.</p></h2> </div>

<div class="space"></div>     
<div class="social">
  <div class="ya-share2" data-copy="first" data-limit="8" data-size="m" data-url=""
    data-services=""></div>

<div id="calculator">
    <div class="longsecg z35 pad0 ">
        <div class="container">
            <div class="space"></div>
                <div class="fldsetDiv form">
                    <span class="sprite bmi"></span>
                    <div class="space"></div>
<form action="" id="calcFormId" method="post"> 
 <input type="hidden" name="calcStep" value="Results" />
                            <table id="fieldsetForm" class="defaultButtonCont">
                                <tr><td><label>Пол</label><span>*</span></td><td>
<div class="radioContainer" id="radioSex">
<input Checked="checked" checked="checked" data-val="true" data-val-number="The field Пол must be a number." id="chf" name="Sex" type="radio" value="1" /><label for="chf"><span></span>женский</label>
<input id="chm" name="Sex" type="radio" value="2" /><label for="chm"><span></span>мужской</label></div>
                                    </td></tr>
                                <tr><td>
                                    <label for="Weight">Вес</label><span class="required">*</span></td>
                                    <td><input class="required" data-bind="" data-rule-max="500" data-val="true" data-val-number="The field Вес must be a number." id="Weight" maxlength="6" name="Weight" type="text" value="" /> кг</td></tr>
                                <tr><td>
                                    <label for="Height">Рост</label><span class="required">*</span> </td>
                                    <td><input class="required" data-bind="" data-rule-max="300" data-val="true" data-val-number="The field Рост must be a number." id="Height" maxlength="6" name="Height" type="text" value="" /> см</td> </tr>
                              

<tr><th colspan="2">
<input Value="18.11.2020" data-val="true" data-val-date="The field LocalDate must be a date." data-val-required="The LocalDate field is required." id="LocalDate" name="LocalDate" type="hidden" value="18.11.2020 1:19:07" />
<button type="submit" class="defaultButton xx-button sf-calculator-1-l">Рассчитать</button></th></tr></table>
<span class="mandat">* Обязательные поля для заполнения</span></form>
</div></div></div></div>

<h3><p align="center">Для интерпретации значений рассчитанных ИМТ воспользуйтесь таблицей, приведенной ниже.</p></h3>
<table class="article-table" style="border-collapse:collapse; margin:0 auto; max-width:500px;"><tbody>
<tr ><td class="td_h" align="center" width="50%"></td><td class="td_h" align="center"></td></tr>
<tr><td class="td_h" align="center" width="50%">Индекс массы тела ИМТ:</td><td class="td_h" align="center">Классификация:</td></tr>
<tr><td class="td_c" align="center">Меньше 16</td><td class="td_c">Выраженный дефицит массы тела</td> </tr>
<tr><td class="td_c" align="center">16&nbsp;&#8211;&nbsp;18,5 </td><td class="td_c"> Недостаточная масса тела</td></tr>
<tr><td class="td_c" align="center">18,5&nbsp;&#8211;&nbsp;25</td><td class="td_c"> Нормальная масса тела</td ></tr>  
<tr><td class="td_c" align="center">25&nbsp;&#8211;&nbsp;30</td><td class="td_c">Избыточная масса тела (предожирение)</td></tr>
<tr><td class="td_c" align="center">30&nbsp;&#8211;&nbsp;35</td><td class="td_c">Ожирение 1-ой степени</td></tr>
<tr><td class="td_c" align="center">35&nbsp;&#8211;&nbsp;40</td><td class="td_c">Ожирение 2-ой степени</td></tr>
<tr><td class="td_f" align="center">Больше 40</td><td class="td_f">Ожирение 3-ой степени</td></tr>
</tbody></table>



<h1 align="center"> <a name="Обратная связь">Обратная связь</A></h1>
<form action="" style="border:1px solid #ccc">
  <div class="container">
   
    <p>Please fill this form.</p>
    <hr>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="Surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
  
   <label>
    <div class="form-group">
    <label for="message">Message</label>
    <textarea cols="30" rows="10" class="form-control p-3 rounded-0" id="message" name="message"required></textarea>
    </div>
    <td align="right-center"> <a href="#">Terms & Privacy.</a></td>
    <td> <label>
        <input type="checkbox" checked="checked" name="remember" >Agree
      </label></td>
    </tr> 
<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Send message</button>
    </div>
  </div>
</form>


<footer class="footer">
<FONT SIZE="4" FACE="COURIER">
<p align="center"><b>Контакты</b></p>
<p align="center">Адрес: Aктау<br>
Telephone: +7 7789586252<br>
Fax: +7 7789586252<br>
E-mail: meterovaa0216@gmail.com<br>
Author: Meterova Akpanay Maxetovna </p>
</footer>

</body>
</html>