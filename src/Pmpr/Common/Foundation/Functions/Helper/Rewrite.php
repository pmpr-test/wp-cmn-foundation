<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977684bcc9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if ($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x72\x65\x67\145\170", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\x75\145\162\x79", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x61\146\x74\x65\162", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\142\157\164\x74\x6f\x6d")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); } if ($uoumwucsgissassi) { $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); } } } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if (!$meyiiwcswqmuggyg) { $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\x61\x74\x63\150\x65\x73"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; } $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\x3f\50\133\x30\x2d\x39\x5d\173\61\54\x7d\51\x2f"; $gqgemcmoicmgaqie .= "\46\x70\141\x67\145\x64\x3d\x24\155\141\x74\143\150\x65\163\x5b{$meyiiwcswqmuggyg}\x5d"; } }
