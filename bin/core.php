<?php
function is_utf8(&$data, $is_strict = true) {
    if (is_array($data)) {
        foreach ($data as $k => &$v)
            if (!is_utf8($v, $is_strict))
                return false;
        return true;
    }
    elseif (is_string($data)) {
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
        if (function_exists('preg_last_error')) {
            if (preg_last_error() === PREG_NO_ERROR)
                return strlen($result) === 0;
            if (preg_last_error() === PREG_BAD_UTF8_ERROR)
                return false;
        }
    }
    elseif (is_scalar($data) || is_null($data))
        return true;#~ null, integer, float, boolean
    #~ object or resource
    trigger_error('Scalar, null or array type expected, ' . gettype($data) . ' given ', E_USER_WARNING);
    return false;
}

function searchstr($str, $separator) {
    $str = str_replace("+", " ", rawurldecode(preg_replace('~^http://(www\.)?(search\.live\.com|google\.(com|ru|com\.ua){1}|rambler\.ru|yandex\.ru|search\.yahoo\.com){1}/(.*)(&|\?)(q|words|text|p)=([^&]+)(.*)$~i', '$2' . $separator . '$7', $str)));
    return is_utf8($str) ? $str : iconv('cp1251', 'UTF-8', $str);
}
?>
