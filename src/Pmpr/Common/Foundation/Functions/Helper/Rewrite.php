<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if ($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x72\145\x67\x65\x78", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\x75\145\x72\x79", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x61\x66\x74\x65\162", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\142\x6f\164\164\157\155")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); } if ($uoumwucsgissassi) { $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); } } } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if (!$meyiiwcswqmuggyg) { $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\44\x6d\141\x74\143\150\x65\x73"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; } $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\x3f\50\x5b\60\55\x39\x5d\x7b\x31\54\175\x29\x2f"; $gqgemcmoicmgaqie .= "\46\x70\141\x67\x65\x64\75\44\x6d\141\164\143\150\145\163\133{$meyiiwcswqmuggyg}\135"; } }
