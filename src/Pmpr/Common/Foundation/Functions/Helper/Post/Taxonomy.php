<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356231cfee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { if ($kesssewsiegssiya instanceof WP_Term) { $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); } $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (is_wp_error($kesssewsiegssiya)) { $kesssewsiegssiya = null; } } return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if ($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya)) { $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; } return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; } else { if (is_string($kesssewsiegssiya)) { $ymqmyyeuycgmigyo = $kesssewsiegssiya; } } return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if ($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya)) { $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; } return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { $qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya); if ($qyiciauwscqywwgq && $uusmaiomayssaecw === Constants::uissasisiuymwsmu) { return $qyiciauwscqywwgq->label; } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($qyiciauwscqywwgq, "\154\x61\x62\145\154\x73\56{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (!in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; } $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; } } return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if ($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya)) { $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; } return $cekoogweeooasayu; } }
