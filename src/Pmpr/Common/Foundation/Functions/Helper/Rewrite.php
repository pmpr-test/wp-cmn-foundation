<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaf054ce9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Rewrite extends Common { public function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true) { if ($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $homuewekswugqios = $this->uwkmaywceaaaigwo()->kuggecgwaickowwu(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ucccueqywigcukcc = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 'regex', $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 0, '')); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 'query', $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 1, '')); $miisqgccsqqcscia = $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 'after', $gkyciwoiiisgywcs->get($ekuqiqmikiicgoss, 2, 'bottom')); $homuewekswugqios->aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia); } if ($uoumwucsgissassi) { $homuewekswugqios->ggqucmukcaycuckk($wqgoeumkaeyqaiqu); } } } public function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0) { global $wp_rewrite; $ymiyawysimukkoso = $wp_rewrite->pagination_base; if (!$meyiiwcswqmuggyg) { $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, '$matches'); $meyiiwcswqmuggyg = (int) $meyiiwcswqmuggyg + 1; } $ucccueqywigcukcc .= "{$ymiyawysimukkoso}/?([0-9]{1,})/"; $gqgemcmoicmgaqie .= "&paged=\$matches[{$meyiiwcswqmuggyg}]"; } }
