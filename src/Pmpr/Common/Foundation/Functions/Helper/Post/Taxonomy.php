<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto ksiskiqygouakumc; } if (!$kesssewsiegssiya instanceof WP_Term) { goto sqswqiyeaauwaeui; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); sqswqiyeaauwaeui: $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (!is_wp_error($kesssewsiegssiya)) { goto qyemiqcwoyeyeyiw; } $kesssewsiegssiya = null; qyemiqcwoyeyeyiw: ksiskiqygouakumc: return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto gksysyaaaaeasgmg; } $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; gksysyaaaaeasgmg: return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto suycymikusukkyio; } if (!is_string($kesssewsiegssiya)) { goto gwauyogieqaqueyu; } $ymqmyyeuycgmigyo = $kesssewsiegssiya; gwauyogieqaqueyu: goto mkseiiygswgckuyi; suycymikusukkyio: $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; mkseiiygswgckuyi: return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto ogksggygiqgccsgs; } $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; ogksggygiqgccsgs: return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($kesssewsiegssiya), "\x6c\x61\x62\x65\x6c\163\x2e{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto ugwcquomeuagcuma; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; ugwcquomeuagcuma: $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { goto pkueqgmoqweqmssi; } foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; wccqiqisegqowemu: } awysggkgocqkkmaq: pkueqgmoqweqmssi: return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if (!($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto niiosgywwiykokkq; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; niiosgywwiykokkq: return $cekoogweeooasayu; } }
