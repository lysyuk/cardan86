<?php
$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];
$referer = searchstr($ref, ':');
$refererInfo = explode(":", $referer);

$form['NP'] = array(
	'fields' => array(
		'NPWhichButton'	 => array(
			'title' => 'Кнопка-активатор'
		),
		'name'			 => array(
			'title' => 'Имя'
		),
		'phone'			 => array(
			'title'		 => 'Телефон',
			'validate'	 => array(
				'preg'		 => "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/",
				'minlength'	 => '11',
			),
			'messages'	 => array(
				'preg'		 => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength'	 => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
	),
	'cfg'	 => array(
		'charset'	 => 'utf-8',
		'subject'	 => 'Сообщение с cardan86.ru',
		'title'		 => 'Сообщение с cardan86.ru',
		'ajax'		 => true,
		'validate'	 => true,
		'from_email' => 'info@cardan86.ru',
		'from_name'	 => 'cardan86.ru',
		'to_email'	 => 'info@cardan86.ru, trash@lgroup.biz',
		'to_name'	 => 'cardan86.ru, Liberty Group',
		'geoip'		 => true,
		'referer'	 => true,
		'type'		 => 'plain',
		'tpl'		 => false,
		'antispam'	 => 'email77',
		'antispamjs' => 'address77',
		'okay'		 => 'Сообщение отправлено - OK',
		'fuck'		 => 'Сообщение отправлено - ERROR',
		'spam'		 => 'Cпам робот',
		'notify'	 => 'color-modal',
		'usepresuf'	 => false
	)
);
$form['getPrice'] = array(
	'fields' => array(
		'part'	 => array(
			'title' => 'Деталь'
		),
		'model'	 => array(
			'title' => 'Марка машины'
		),
		'vin'	 => array(
			'title' => 'ВИН'
		),
		'phone'	 => array(
			'title'		 => 'Телефон',
			'validate'	 => array(
				'preg'		 => "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/",
				'minlength'	 => '11',
			),
			'messages'	 => array(
				'preg'		 => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength'	 => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
	),
	'cfg'	 => array(
		'charset'	 => 'utf-8',
		'subject'	 => 'Заявка с главной формы cardan86.ru',
		'title'		 => 'Заявка с главной формы cardan86.ru',
		'ajax'		 => true,
		'validate'	 => true,
		'from_email' => 'info@cardan86.ru',
		'from_name'	 => 'cardan86.ru',
		'to_email'	 => 'info@cardan86.ru, trash@lgroup.biz',
		'to_name'	 => 'cardan86.ru, Liberty Group',
		'geoip'		 => true,
		'referer'	 => true,
		'type'		 => 'plain',
		'tpl'		 => false,
		'antispam'	 => 'email77',
		'antispamjs' => 'address77',
		'okay'		 => 'Сообщение отправлено - OK',
		'fuck'		 => 'Сообщение отправлено - ERROR',
		'spam'		 => 'Cпам робот',
		'notify'	 => 'color-modal',
		'usepresuf'	 => false
	)
);
$form['getPriceList'] = array(
	'fields' => array(
		'part'	 => array(
			'title' => 'Деталь'
		),
		'model'	 => array(
			'title' => 'Марка машины'
		),
		'vin'	 => array(
			'title' => 'ВИН'
		),
		'phone'	 => array(
			'title'		 => 'Телефон',
			'validate'	 => array(
				'preg'		 => "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/",
				'minlength'	 => '11',
			),
			'messages'	 => array(
				'preg'		 => 'Поле [ %1$s ] возможно содержит ошибку',
				'minlength'	 => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
			)
		),
	),
	'cfg'	 => array(
		'charset'	 => 'utf-8',
		'subject'	 => 'Заявка на запчасти с cardan86.ru',
		'title'		 => 'Заявка на запчасти с cardan86.ru',
		'ajax'		 => true,
		'validate'	 => true,
		'from_email' => 'info@cardan86.ru',
		'from_name'	 => 'cardan86.ru',
		'to_email'	 => 'info@cardan86.ru, trash@lgroup.biz',
		'to_name'	 => 'cardan86.ru, Liberty Group',
		'geoip'		 => true,
		'referer'	 => true,
		'type'		 => 'plain',
		'tpl'		 => false,
		'antispam'	 => 'email77',
		'antispamjs' => 'address77',
		'okay'		 => 'Сообщение отправлено - OK',
		'fuck'		 => 'Сообщение отправлено - ERROR',
		'spam'		 => 'Cпам робот',
		'notify'	 => 'color-modal',
		'usepresuf'	 => false
	)
);


if ($act == 'cfg')
{
	$jsonBox['configs'] = ExportConfigs($form);
	die(json_encode($jsonBox));
}

function ExportConfigs($form)
{
	$need = array('antispam', 'antispamjs', 'notify');
	$conf = array();
	foreach ($form as $name => $data)
	{
		foreach ($data['cfg'] as $k => $cfg)
		{
			if (in_array($k, $need))
			{
				$conf[$name]['cfg'][$k] = $cfg;
			}
		}
	}

	return $conf;
}

if (isset($form[$act]))
{

	$form = $form[$act];
	$getdata = array();
	$sb = array(); // subject и body


	foreach ($form['fields'] as $name => $field)
	{

		$title = (isset($field['title'])) ? $field['title'] : $name;
		$getdata[$name]['title'] = $title;
		$rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

		if (isset($field['validate']))
		{

			$def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
			// -0-
			if (isset($field['validate']['required']) && empty($rawdata))
			{
				$error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
						(isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
			}
			// -1-
			if (isset($field['validate']['minlength']) && mb_strlen($rawdata) < $field['validate']['minlength'])
			{
				$error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
			}
			// -2-
			if (isset($field['validate']['maxlength']) && mb_strlen($rawdata) > $field['validate']['maxlength'])
			{
				$error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
			}
			// -3-
			if (isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 && ! preg_match($field['validate']['preg'], $rawdata))
			{
				$error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
			}
			// -4-
			if (isset($field['validate']['substr']) && mb_strlen($rawdata) > $field['validate']['substr'])
			{
				$rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
			}

			$outdata = htmlspecialchars($rawdata);

			$getdata[$name]['value'] = $outdata;
		}
		else
		{
			$getdata[$name]['value'] = htmlspecialchars($rawdata);
		}

		if (empty($getdata[$name]['value']))
		{
			unset($getdata[$name]);
		}
	} //foreach end


	if (isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']]))
	{
		if ( ! empty($_POST[$form['cfg']['antispam']]))
		{
			$error[] = $form['cfg']['spam'];
		}
	}
	if (isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']]))
	{
		if ( ! empty($_POST[$form['cfg']['antispamjs']]))
		{
			$error[] = $form['cfg']['spam'];
		}
	}


	if (count($error) == 0)
	{

		if (function_exists("mb_internal_encoding"))
			mb_internal_encoding($form['cfg']['charset']);
		$get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && ! isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
		$get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);

		$fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
		$sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];

		$toName = trim($form['cfg']['to_name'], " ,");
		$toEmail = trim($form['cfg']['to_email'], " ,");

		if (strpos($toName, ",") !== false)
		{
			$exp_toName = explode(",", $toName);
			$c = count($exp_toName);
			for ($i = 0; $i < $c; $i ++ )
			{
				$exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
			}
		}
		else
		{
			$toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
		}

		if (strpos($toEmail, ",") !== false)
		{
			$exp_toEmail = explode(",", $toEmail);
		}

		$To = '';

		if (isset($exp_toEmail))
		{
			$c = count($exp_toEmail);
			for ($i = 0; $i < $c; $i ++ )
			{
				$To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName)." <".trim($exp_toEmail[$i]).">";
				if ($i < ($c - 1))
					$To .= ", ";
			}
		}
		else
		{
			$To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
		}


		$headers = "From: info@cardan86.ru";
		//$headers = "Return-Path: <".$get_fromEmail.">\r\n";
		//$headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
		//$headers .= "X-Mailer: Feedback, v0.3 (http://artuelle.com)\r\n";
		//$headers .= "X-Priority: 3\r\n";
		//$headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
		//$headers .= "To: ".$To."\r\n";
		//$headers .= "MIME-Version: 1.0\r\n";
		//$headers .= "Content-Type: text/".$form['cfg']['type']."; charset=\"".$form['cfg']['charset']."\"\r\n";
		//$headers .= "Content-Transfer-Encoding: 8bit\r\n";

		$sb['body'] = "";
		// парсим шаблон
		if ($form['cfg']['tpl'])
		{
			$out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
			if (is_string($out))
			{
				$sb['body'] = $out;
			}
		}
		// или отдаем голый текст
		if (mb_strlen(trim($sb['body'])) < 10)
		{
			if (isset($form['cfg']['title']))
				$sb['body'] .= $form['cfg']['title']."\r\n\r\n";
			foreach ($getdata as $name => $data)
			{
				$sb['body'] .= $data['title'].": ".$data['value']."\r\n";
			}
			if ($form['cfg']['referer'])
			{
				$sb['body'] .= "\r\n\r\n";
				$sb['body'] .= "Поисковик: ".$refererInfo[0]."\r\n";
				$sb['body'] .= "Ключевое слово: ".$refererInfo[1]."\r\n";
			}
		}
		// если есть что добавить
		if (isset($form['cfg']['adds']) && is_array($form['cfg']['adds']))
		{
			$sb = adds($sb);
		}

		//отправка письма
		$mail = mail($To, $sb['subject'], $sb['body'], $headers);

		if ($mail)
		{
			$jsonBox['ok'] = 1;
			$info[] = $form['cfg']['okay'];

			//setcookie("limit", "1", time() + $form['cfg']['limit']);
		}
		else
		{
			$info[] = $form['cfg']['fuck'];
		}
	}
}
else
{
	$error[] = 'Нет настроек формы с именем #'.$act;
}

if (count($error) > 0)
{
	$jsonBox['errors'] = $error;
}
if (count($info) > 0)
{
	$jsonBox['infos'] = $info;
}

die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars)
{
	global $form;
	$adds = $form['cfg']['adds'];
	foreach ($adds as $key => $opts)
	{
		if (is_string($key))
		{
			$one = array();
			$two = array();
			foreach ($opts as $i => $val)
			{
				if (isset($_POST[$val]))
				{
					$one[] = '%%'.$val.'%%';
					$two[] = $_POST[$val];
				}
			}
			$vars[$key] = str_replace($one, $two, $vars[$key]);
		}
	}
	return $vars;
}

/*
 * парсер шаблона
 */

function tpl($vars)
{
	$tpl = 'tpl/'.$vars['name'].'.tpl';
	if (file_exists($tpl))
	{
		$template = file_get_contents($tpl);
		foreach ($vars['getdata'] as $name => $data)
		{
			$template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array(
				$data['title'], $data['value']), $template);
		}
		return $template;
	}
	else
	{
		return false;
	}
}

function is_utf8(&$data, $is_strict = true)
{
	if (is_array($data))
	{
		foreach ($data as $k => &$v)
			if ( ! is_utf8($v, $is_strict))
				return false;
		return true;
	}
	elseif (is_string($data))
	{
		/*
		  Рег. выражения имеют внутренние ограничения на длину повторов шаблонов поиска *, +, {x,y}
		  равное 65536, поэтому используем preg_replace() вместо preg_match()
		 */
		$result = $is_strict ?
				preg_replace('/(?>[\x09\x0A\x0D\x20-\x7E]           # ASCII
                                  | [\xC2-\xDF][\x80-\xBF]            # non-overlong 2-byte
                                  |  \xE0[\xA0-\xBF][\x80-\xBF]       # excluding overlongs
                                  | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} # straight 3-byte
                                  |  \xED[\x80-\x9F][\x80-\xBF]       # excluding surrogates
                                  |  \xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3
                                  | [\xF1-\xF3][\x80-\xBF]{3}         # planes 4-15
                                  |  \xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16
                                 )*
                                /sx', '', $data) :
				#это рег. выражение проверяет более широкий диапазон ASCII [\x00-\x7E]
				preg_replace('/.*/su', '', $data);
		if (function_exists('preg_last_error'))
		{
			if (preg_last_error() === PREG_NO_ERROR)
				return strlen($result) === 0;
			if (preg_last_error() === PREG_BAD_UTF8_ERROR)
				return false;
		}
	}
	elseif (is_scalar($data) || is_null($data))
		return true;#~ null, integer, float, boolean
	#~ object or resource
	trigger_error('Scalar, null or array type expected, '.gettype($data).' given ', E_USER_WARNING);
	return false;
}

function searchstr($str, $separator)
{
	$str = str_replace("+", " ", rawurldecode(preg_replace('~^http://(www\.)?(search\.live\.com|google\.(com|ru|com\.ua){1}|rambler\.ru|yandex\.ru|search\.yahoo\.com){1}/(.*)(&|\?)(q|words|text|p)=([^&]+)(.*)$~i', '$2'.$separator.'$7', $str)));
	return is_utf8($str) ? $str : iconv('cp1251', 'UTF-8', $str);
}
