<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if (!$acqqmqmcquukaqsc) { goto iisykceuumgoicmc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x72\x65\x67\145\x78", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\x75\x65\x72\x79", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\x61\x66\x74\x65\x72", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\x62\x6f\x74\x74\x6f\x6d")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); umeiiiomksmkmoaa: } sqwgcyyoaismwkqs: if (!$uoumwucsgissassi) { goto aokcewiioiiyiqeu; } $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); aokcewiioiiyiqeu: iisykceuumgoicmc: } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if ($meyiiwcswqmuggyg) { goto womgsyqqiwokqyiw; } $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\x61\164\143\150\x65\163"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; womgsyqqiwokqyiw: $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\x3f\50\133\x30\x2d\71\x5d\173\61\54\x7d\x29\57"; $gqgemcmoicmgaqie .= "\x26\160\x61\x67\x65\144\75\44\155\x61\x74\x63\150\x65\163\x5b{$meyiiwcswqmuggyg}\x5d"; } }
