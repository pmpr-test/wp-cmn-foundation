<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d87febf6a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if ($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\162\x65\x67\145\x78", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\165\x65\x72\171", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x61\146\x74\x65\x72", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\142\x6f\x74\164\x6f\x6d")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); } if ($uoumwucsgissassi) { $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); } } } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if (!$meyiiwcswqmuggyg) { $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\x61\x74\143\150\145\163"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; } $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\x3f\x28\x5b\60\x2d\71\135\173\x31\54\x7d\51\57"; $gqgemcmoicmgaqie .= "\x26\160\141\x67\x65\144\75\44\x6d\141\x74\143\150\x65\163\133{$meyiiwcswqmuggyg}\135"; } }
