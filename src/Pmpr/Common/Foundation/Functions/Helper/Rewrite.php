<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if (!$acqqmqmcquukaqsc) { goto aokcewiioiiyiqeu; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\162\x65\147\145\x78", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\161\165\x65\162\x79", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, "\141\146\x74\145\x72", $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, "\142\x6f\x74\164\x6f\x6d")); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); sqwgcyyoaismwkqs: } gscsssqcacocusua: if (!$uoumwucsgissassi) { goto umeiiiomksmkmoaa; } $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); umeiiiomksmkmoaa: aokcewiioiiyiqeu: } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if ($meyiiwcswqmuggyg) { goto iisykceuumgoicmc; } $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\44\x6d\x61\x74\x63\150\145\x73"); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; iisykceuumgoicmc: $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\77\50\x5b\x30\55\x39\x5d\x7b\61\54\x7d\x29\57"; $gqgemcmoicmgaqie .= "\x26\x70\141\x67\x65\x64\x3d\44\155\x61\x74\143\x68\145\x73\x5b{$meyiiwcswqmuggyg}\x5d"; } }
