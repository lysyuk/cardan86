<?php
/*
        form.php
        Тестовая форма для демонстрации обработки данных из формы в PHP
        Файл должен быть сохранён в кодировке utf-8
*/
header('Content-Type: text/html; charset=utf-8');
// Куда отправлять сообщения
$emailAddress = 'pochta.avst@gmail.com';
// Адрес сайта, с которого он отправляет сообщения
$siteEmail = 'info@sxpress.ru';
// Тема сообщения
$emailTheme = 'Письмо с моего сайта';
?>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Тестовая форма и её обработка</title>
</head>
<body>
        <h3>Тестовая форма и её обработка</h3>
        <form name="testForm" method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
        <table>
                <tr>
                        <td>Текстовый инпут</td>
                        <td><input type="text" name="first" value="" /></td>
                </tr>
                <tr>
                        <td>Раскрывающийся список</td>
                        <td>
                                <select name="second">
                                        <option value="1">Первое значение</option>
                                        <option value="2">Второе значение</option>
                                        <option value="3">Третье значение</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Чекбоксы</td>
                        <td>
                                <input type="checkbox" name="third" value="On" /> - Первый чекбокс выбран<br />
                                <input type="checkbox" name="fourth" value="On" /> - Второй чекбокс выбран<br />
                                <input type="checkbox" name="fifth" value="On" /> - Третий чекбокс выбран
                        </td>
                </tr>
                <tr>
                        <td>Переключатели</td>
                        <td>
                                <input type="radio" name="sixth" value="1" /> - Первой<br />
                                <input type="radio" name="sixth" value="2" /> - Второй<br />
                                <input type="radio" name="sixth" value="3" /> - Третий
                        </td>
                </tr>
                <tr>
                        <td>Поле для текста</td>
                        <td><textarea name="seventh"></textarea></td>
                </tr>
                <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="sended" value="Отправить форму!" /></td>
                </tr>
        </table>
        <input type="hidden" name="eighth" value="Какое-нибудь значение скрытого поля" />
</form>
<?php
// Проверяем была ли отправлена форма
if(isset($_POST['sended'])) {
        // Переменная, в которую будем собирать текст нашего сообщения
        $message = 'Форма была отправлена!<br />';
        // Текстовый инпут теперь ы переменной $first
        $first = isset($_POST['first']) ? $_POST['first'] : '';
        $message .= 'В текстовый инпут ввели: ' . htmlspecialchars($first) . '<br />';
        // Раскрывающийся список
        $second = isset($_POST['second']) ? $_POST['second'] : '';
        $message .= 'В раскрывающемся списке был выбран элемент, у которого value = ' . htmlspecialchars($second) . '<br />';
        // Чекбоксы
        if(isset($_POST['third']))
                $message .= 'Первый чекбокс был выбран<br />';
        if(isset($_POST['fourth']))
                $message .= 'Второй чекбокс был выбран<br />';
        if(isset($_POST['fifth']))
                $message .= 'Третий чекбокс был выбран<br />';
        // Переключатели
        $sixth = isset($_POST['sixth']) ? $_POST['sixth'] : '';
        if(empty($sixth))
                $message .= 'Никакой переключатель не был выбран<br />';
        else
                $message .= 'Был выбран переключатель, у которого value = ' . htmlspecialchars($sixth) . '<br />';
        // Поле для текста
        $seventh = isset($_POST['seventh']) ? $_POST['seventh'] : '';
        $message .= 'В текстовое поле было введено: ' . nl2br(htmlspecialchars($seventh)) . '<br />';
        // Значение скрытого поля
        $eighth = isset($_POST['eighth']) ? $_POST['eighth'] : '';
        $message .= 'В скрытом поле было: ' . htmlspecialchars($eighth);
        // Отправляем письмо
        $headers = array(
                'MIME-Version: 1.0',
                'From: ' . $siteEmail,
                'Reply-To: ' . $siteEmail,
                'Content-Type: text/html; charset=utf-8'
        );
        if(mail($emailAddress, $emailTheme, $message, implode("\r\n", $headers)))
                $message .= '<br />PHP считает, что письмо отправлено, проверяй ящик! Загляни в спам, если письма не видно';
        else
                $message .= '<br />PHP считает, что письмо отправить не удалось...';
        // А также покажем на странице введённые данные и результат отправки письма
        echo($message);
}
?>
        </body>
</html>