<?php

namespace XenditClient\Helper;

class Util {
	/**
	 * [urlEncode description]
	 * @param  [type] $arr    [description]
	 * @param  [type] $prefix [description]
	 * @return [type]         [description]
	 */
	public static function urlEncode($arr, $prefix = null)
    {
        if (!is_array($arr)) {
            return $arr;
        }
        $r = array();
        foreach ($arr as $k => $v) {
            if (is_null($v)) {
                continue;
            }
            if ($prefix) {
                if ($k !== null && (!is_int($k) || is_array($v))) {
                    $k = $prefix."[".$k."]";
                } else {
                    $k = $prefix."[]";
                }
            }
            if (is_array($v)) {
                $enc = self::urlEncode($v, $k);
                if ($enc) {
                    $r[] = $enc;
                }
            } else {
                $r[] = urlencode($k)."=".urlencode($v);
            }
        }
        return implode("&", $r);
    }
}