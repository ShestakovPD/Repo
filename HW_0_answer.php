<?php
/* 
PSR-2
2. Основные положения
2.1. Базовый стандарт оформления кода
Код ДОЛЖЕН быть оформлен согласно всем правилам, указанным в стандарте PSR-1.

PSR-1
1. Общие положения
В файлах НЕОБХОДИМО использовать только теги <?php и <?=.

2.1. PHP-теги
PHP-код ОБЯЗАТЕЛЬНО следует заключать в полную версию (<?php ?>) тегов или
 укороченную (сокращённую запись echo) версию (<?= ?>) тегов
 и НЕДОПУСТИМО заключать ни в какие иные разновидности тегов.
*/

const TEST_CONSTANTA = 'asd';
/*
PSR-1
4.1. Константы
Константы классов ДОЛЖНЫ быть объявлены в верхнем регистре с использованием
символа подчёркивания в качестве разделителя слов.
было - "testConstanta", надо "TEST_CONSTANTA"

-00:30 (Видео основы языка - 4 раздел Константы) - "синтаксис написания константы
- в верхнем регистре, разделитель нижнее подчеркивание".
*/

$user_name = "Igor";

/*
В синтаксисе PHP имя переменной записывается латинскими символами, но первым
символом всегда должен быть знак доллара $, а затем идёт имя.
Не допускается начинать имя переменной с цифры,
а также использовать любые значения, кроме букв алфавита и знака подчеркивания.

Согласно сведениям из видео, кавычки обрамляющие строку Igor могут быть
как одинарные так и двойные, в случае использования двойных кавычек можно
передать в строку другую переменную, и ее содержание будет выведено, в
случае применения одинарных кавычек внесенная в строку переменная будет
отображена как набор символов, включая знак $.
*/

function show_something()
{
    return 'SOMETHING';
}

/*
 * Так же как и имена переменных, имена функций должны состоять из букв,
 * цифр и символов подчеркивания и не должны начинаться с цифры.
 * Но в отличие от имен переменных буквы в именах функций
 * преобразуются в строчные перед сохранением функций во
 * внутреннем представлении интерпретатором PHP, поэтому регистр букв
 * в именах функций не учитывается.
 */

/*
PSR-2
- Открывающие скобки `{` для команд ставятся на одной строке с
ключевым словом, а закрывающая `}` на следующей строке после кода
2.2. Файлы
Закрывающий тег ?> ДОЛЖЕН отсутствовать в файлах, содержащих только PHP-код.

Код дополнен комментариями и приведен к стандарту PSR4 путем применения
горячих клавиш IDE - CTRL+ALT+L.
*/