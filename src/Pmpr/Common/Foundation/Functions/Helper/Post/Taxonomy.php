<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto auawcgwsgmocyikg; } if (!$kesssewsiegssiya instanceof WP_Term) { goto wmmymakwgisiiemm; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); wmmymakwgisiiemm: $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (!is_wp_error($kesssewsiegssiya)) { goto sqmgyqqesycegaog; } $kesssewsiegssiya = null; sqmgyqqesycegaog: auawcgwsgmocyikg: return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto csiywiqqacqiooam; } $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; csiywiqqacqiooam: return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto cgmoawqqgooiomam; } if (!is_string($kesssewsiegssiya)) { goto ccuemieucuwkaiug; } $ymqmyyeuycgmigyo = $kesssewsiegssiya; ccuemieucuwkaiug: goto ckyyiokeqmgokkii; cgmoawqqgooiomam: $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; ckyyiokeqmgokkii: return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto igsmwqseogmyegee; } $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; igsmwqseogmyegee: return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($kesssewsiegssiya), "\x6c\x61\142\145\154\x73\x2e{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto gkswmkowgekmoecu; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; gkswmkowgekmoecu: $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { goto qqicgmcqukmywgwu; } foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; cueascwqacykggki: } owmcuewayukusqmo: qqicgmcqukmywgwu: return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if (!($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto mousymoamqcmauki; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; mousymoamqcmauki: return $cekoogweeooasayu; } }
