# Пакет, который позволяет проверить строку на корректность закрытах и открытах скобок

##Установка
```
composer require kuleshov/check-correct-parenthesis
```
<br/>

###Информация

В метод checkParenthesis класса StringCorrect неообходимо передать строку, 
которую метод будет обрабатывать.

Строка может включать символы “(“, “)”, “ ” (пробел), “\n” (перенос строки), 
“\t” (символ табуляции), “\r” (перенос каретки). Если же строка содержит 
что-то кроме перечисленных символов, то пакет будет выбрасывать исключение 
InvalidArgumentException.
Ограничения на длину строки нетц