<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580c648b6e4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if ($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x72\x65\x67\x65\x78", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\x75\145\x72\171", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x61\146\x74\145\162", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\142\157\164\x74\x6f\x6d")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); } if ($uoumwucsgissassi) { $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); } } } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if (!$meyiiwcswqmuggyg) { $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\x61\x74\x63\150\x65\163"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; } $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\77\50\133\x30\55\x39\135\173\x31\54\175\51\57"; $gqgemcmoicmgaqie .= "\46\x70\x61\147\x65\144\75\x24\155\141\x74\143\x68\145\163\133{$meyiiwcswqmuggyg}\x5d"; } }
