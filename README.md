# Пакет, который позволяет проверить строку на корректность закрытах и открытах скобок

Исполняемый файл принимает путь до файла, в котором
хранится строка, которую пакет будет обрабатывать. По переданному пути,
исполняемый файл читает строку. Путь передается с помощью параметра -path. 
Необходимо передавать абсолютный путь.

Строка может включать символы “(“, “)”, “ ” (пробел), “\n” (перенос строки), 
“\t” (символ табуляции), “\r” (перенос каретки). Если же строка содержит 
что-то кроме перечисленных символов, то пакет будет выбрасывать исключение 
InvalidArgumentException.
Ограничения на длину строки нетц