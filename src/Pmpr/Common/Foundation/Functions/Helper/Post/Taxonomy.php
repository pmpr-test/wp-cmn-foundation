<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto eoeoaoomoeayemks; } if (!$kesssewsiegssiya instanceof WP_Term) { goto gqugaamwqqookmyc; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); gqugaamwqqookmyc: $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (!is_wp_error($kesssewsiegssiya)) { goto ayemyskkicqyskos; } $kesssewsiegssiya = null; ayemyskkicqyskos: eoeoaoomoeayemks: return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto aucqswuoeqocuiqk; } $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; aucqswuoeqocuiqk: return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto wqmkwsgmeceakwaw; } if (!is_string($kesssewsiegssiya)) { goto kaccuycsyukugwao; } $ymqmyyeuycgmigyo = $kesssewsiegssiya; kaccuycsyukugwao: goto ygsiuoyewwecoemg; wqmkwsgmeceakwaw: $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; ygsiuoyewwecoemg: return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto ywuegkmgqmweogqq; } $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; ywuegkmgqmweogqq: return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($kesssewsiegssiya), "\154\x61\142\145\154\163\56{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto ceasygsiuksuwwoc; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; ceasygsiuksuwwoc: $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { goto mimogmagkwkiyskc; } foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; sgaaocqwgeqismmo: } smwkgmymskokcoek: mimogmagkwkiyskc: return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if (!($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto oimegeaimoymkmsc; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; oimegeaimoymkmsc: return $cekoogweeooasayu; } }
