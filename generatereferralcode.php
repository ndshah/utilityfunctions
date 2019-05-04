<?php
// combine string with random str and check uniqueness , if not unique, recurse
function generateReferralCode($str = '', $table = 'user', $field = 'referral_code')
{
    if ($str != '') {
        $name = getInitialChars($str);
        $code = $name . generateRandomString(5);
        $code = strtoupper($code);
        $result = mysql_query('select count(*) from ' . $table . ' where `' . $field . '` = "' . $code . '" AND `' . $field . '` IS NOT NULL');
        $rowcount = mysql_num_rows($result);
        if (!empty($arr)) {
            return generateReferralCode($name);
        } else {
            return $code;
        }
    }
}

// get initial chars from user's name, 3 chars and if not, append 0s
function getInitialChars($name)
{
    $name = str_replace(' ', '', $name);
    $len = strlen($name);
    if ($len < 3) {
        $rem = 3 - $len;
        $str = $name . str_repeat('0', $rem);
    } else {
        $str = substr($name, 0, 3);
    }
    return $str;
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// $code = generateReferralCode("Tony Stark");
// echo $code; // TONXYZ1
