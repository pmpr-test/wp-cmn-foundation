<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto csiywiqqacqiooam; } if (!$kesssewsiegssiya instanceof WP_Term) { goto sqmgyqqesycegaog; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); sqmgyqqesycegaog: $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (!is_wp_error($kesssewsiegssiya)) { goto auawcgwsgmocyikg; } $kesssewsiegssiya = null; auawcgwsgmocyikg: csiywiqqacqiooam: return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto ccuemieucuwkaiug; } $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; ccuemieucuwkaiug: return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto ckyyiokeqmgokkii; } if (!is_string($kesssewsiegssiya)) { goto cgmoawqqgooiomam; } $ymqmyyeuycgmigyo = $kesssewsiegssiya; cgmoawqqgooiomam: goto igsmwqseogmyegee; ckyyiokeqmgokkii: $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; igsmwqseogmyegee: return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto gkswmkowgekmoecu; } $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; gkswmkowgekmoecu: return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($kesssewsiegssiya), "\x6c\x61\x62\x65\154\x73\x2e{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto owmcuewayukusqmo; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; owmcuewayukusqmo: $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { goto mousymoamqcmauki; } foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; qqicgmcqukmywgwu: } cueascwqacykggki: mousymoamqcmauki: return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if (!($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto yyiysucuymcuyycw; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; yyiysucuymcuyycw: return $cekoogweeooasayu; } }
