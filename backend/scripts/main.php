<?php
// Створіть змінну $a і присвойте їй значення 3. Виведіть значення цієї змінної на екран.
$a=3;
echo "a=" . $a . "<br>";
// Створіть змінні $a=10 і $b=2. Виведіть на екран їхню суму, різницю, добуток і частку (результат ділення).
$a=10;
$b=2;

echo "+=" . ($a + $b) . "<br>";
echo "-=" . ($a - $b) . "<br>";
echo "*=" . ($a * $b) . "<br>";
echo "/=" . ($a / $b) . "<br>";

// Створіть змінні $c=15 і $d=2. Підсумуйте їх, а результат присвойте змінній $result. Виведіть на екран значення змінної $result.
$c=15;
$d=2;
$result= $c + $d;
echo "result=" . $result . "<br>";


// Створіть змінні $a=10, $b=2 і $c=5. Виведіть на екран їхню суму.
$a=10;
$b=2;
$c=5;
echo "a+b+c=" . ($a + $b + $c) . "<br>";

// Створіть змінні $a=17 і $b=10. Відніміть від $a змінну $b і результат присвойте змінній $c. Потім створіть змінну $d, присвойте їй значення 7. Складіть змінні $c і $d, а результат запишіть у змінну $result. Виведіть на екран значення змінної $result.
$a=17;
$b=10;
$c= $a - $b;
$d=7;
$result= $c +$d;
echo "result=" . $result . "<br>";

// Створіть змінну $text і присвойте їй значення 'Привіт, Світ!'. Виведіть значення цієї змінної на екран.
$text = 'Привіт, Світ!';
echo $text . "<br>";

//  Створіть змінні $text1='Привіт, ' і $text2='Світ!'. За допомогою цих змінних і операції додавання рядків виведіть на екран фразу 'Привіт, Мир!'.
$text1= 'Привіт,';
$text2= 'Світ!';
echo $text1 . 'Мир!' . "<br>";


//  Створіть змінну $name і присвойте їй ваше ім'я. Виведіть на екран фразу 'Привіт, %Ім'я%!'. Замість %Ім'я% має стояти ваше ім'я.
$name = 'Вета';
echo "Привіт, " . $name . "!" . "<br>";

//  Створіть змінну $age і присвойте їй ваш вік. Виведіть на екран 'Мені %Вік% років!'.
$age = 24;
echo "Мені " . $age . " роки!" . "<br>";


//  Створіть змінну $text і присвойте їй значення 'abcde'. Звертаючись до окремих символів цього рядка, виведіть на екран символ 'a', символ 'c', символ 'e'.
$text = "abcde";

echo $text[0] . "<br>";
echo $text[2] . "<br>";
echo $text[4] . "<br>";

//  Дано довільний рядок, наприклад, 'abcde'. Поміняйте першу букву (тобто букву 'a') цього рядка на '!'.
$text = 'abcde';
$text[0] = '!';
echo $text . "<br>";

//  Створіть змінну $num і присвойте їй значення '12345'. Знайдіть суму цифр цього числа.
$num = '12345';
$sum = $num[0] + $num[1] + $num[2] + $num[3] +$num[4];
 echo "sum=" .$sum . "<br>";


//  Напишіть скрипт, який рахує кількість секунд у годині, у добі, у місяці.
$secInHoure = 60*60;
$secInDay = $secInHoure * 24;
$secinMonth = $secInHoure * 30;

echo "секунд в часах= " . $secInHoure . "<br>";
echo "секунд в днях= " . $secInDay . "<br>";
echo "секунд в месяце= " . $secinMonth . "<br>";

//  Створіть три змінні - година, хвилина, секунда. З їхньою допомогою виведіть поточний час у форматі 'година:хвилина:секунда'.
$hour = date("H");
$min = date("i");
$sec = date("s");

echo "Поточний час: " . $hour . ":" . $min . ":" . $sec . "<br>";

//  Створіть змінну, присвойте їй число. Підведіть це число до квадрата (це означає, що потрібно помножити його саме на себе). Виведіть його на екран.
$num = 73;
$square = pow($num, 2);
echo "квадрат числа " . $num . " = " . $square . "<br>";

//  Переробіть цей код так, щоб у ньому використовувалися операції +=, -=, *=, /=. Кількість рядків коду при цьому не повинна змінитися.

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "<br>"; 
//  Переробіть цей код так, щоб у ньому використовувалася операція .=. Кількість рядків коду при цьому не повинна змінитися.

$text = 'Я';
$text .= ' хочу';
$text .= ' знати';
$text .= ' PHP!';
echo $text . "<br>";
//  Переробіть цей код так, щоб у ньому використовувалися операції ++ і --. Кількість рядків коду при цьому не повинна змінитися.

$var = 10;
$var++;
$var++;
$var--;
echo $var . "<br>";

// Переробіть цей код так, щоб у ньому використовувалися операції ++, -- , +=, -=, *=, /=. Кількість рядків коду при цьому не повинна змінитися.

$var = 10;
$var += 7;
$var++;
$var--;
$var+= 12;
$var*= 7;
$var-= 15;
echo $var . "<br>";


//  Створіть масив $arr=['a', 'b', 'c']. Виведіть значення масиву на екран за допомогою функції var_dump().
$arr=['a', 'b', 'c'];
var_dump($arr);


//  За допомогою масиву $arr з попереднього номера виведіть на екран вміст першого, другого і третього елементів.
echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";

//  Створіть масив $arr=['a', 'b', 'c', 'd'] і з його допомогою виведіть на екран рядок 'a+b, c+d'.
$arr=['a', 'b', 'c', 'd'];
echo $arr[0] . "+" . $arr[1] . "," . $arr[2] . "+" . $arr[3] . "<br>";



//  Створіть масив $arr з елементами 2, 5, 3, 9. Помножте перший елемент масиву на другий, а третій елемент на четвертий. Результати складіть, присвойте змінній $result. Виведіть на екран значення цієї змінної.

$arr=[2, 5, 3, 9];
$multi_1= $arr[0] * $arr[1];
$multi_2= $arr[2] * $arr[3];
$result= $multi_1 + $multi_2;
echo $result . "<br>";


//  Заповніть масив $arr числами від 1 до 5. Не оголошуйте масив, а просто заповніть його присвоюванням $arr[] = нове значення.
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;


//  Створіть масив $arr. Виведіть на екран елемент із ключем 'c'.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'] . "<br>";
//  Створіть масив $arr. Знайдіть суму елементів цього масиву.

$sum = $arr['a'] + $arr['b'] + $arr['c'];
echo $sum . "<br>";

//  Створіть масив заробітних плат $arr. Виведіть на екран зарплату Петрика та Колі.

$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Коля'] . ", " . $arr['Петя'] . "<br>";
//  Створіть асоціативний масив днів тижня. Ключами в ньому мають слугувати номери днів від початку тижня (понеділок - повинен мати ключ 1, вівторок - 2 і т.д.). Виведіть на екран поточний день тижня.
$arr = [
  1 => 'понеділок',
  2 => 'вівторок',
  3 => 'середа',
  4 => 'четвер',
  5 => 'п’ятниця',
  6 => 'субота',
  7 => 'неділя'
];
$Day = date('N');
echo "сегодня: " . $arr[$Day] . "<br>";

// Нехай тепер номер дня тижня зберігається у змінній $day, наприклад там лежить число 3. Виведіть день тижня, що відповідає значенню змінної $day.
$day = 3;
echo $arr[$day]. "<br>";

// Багатовимірні масиви
//  Створіть багатовимірний масив $arr. З його допомогою виведіть на екран слова 'joomla', 'drupal', 'зелений', 'червоний'.

// $arr = [
//   'cms'=>['joomla', 'wordpress', 'drupal'],
//   'colors'=>['blue'=>'блакитний', 'red'=>'червоний', 'green'=>'зелений']
// ];
//  Створіть двовимірний масив. Перші два ключі - це 'ua' і 'en'. Нехай перший ключ містить елемент, що є масивом назв днів тижня російською, а другий - англійською. Виведіть за допомогою цього масиву понеділок російською та середу англійською (нехай понеділок - це перший день).

//  Нехай тепер у змінній $lang зберігається мова (вона приймає одне зі значень або 'ua', або 'en' - або те, або те), а у змінній $day - номер дня. Виведіть словом день тижня, що відповідає змінним $lang і $day. Тобто: якщо, наприклад, $lang = 'ru' і $day = 3 - то виведемо 'середу'.



?>