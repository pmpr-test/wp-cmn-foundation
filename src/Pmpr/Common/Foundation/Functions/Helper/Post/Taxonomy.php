<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Taxonomy; use WP_Term; class Taxonomy extends Common { public function imgymusqgccqsqqq($kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto akusqieqmgiqoyio; } if (!$kesssewsiegssiya instanceof WP_Term) { goto kscwqewukwiwsyqc; } $kesssewsiegssiya = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($kesssewsiegssiya); kscwqewukwiwsyqc: $kesssewsiegssiya = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->get($kesssewsiegssiya); if (!is_wp_error($kesssewsiegssiya)) { goto cokkyaiqeeeecuqi; } $kesssewsiegssiya = null; cokkyaiqeeeecuqi: akusqieqmgiqoyio: return $kesssewsiegssiya; } public function aaamyckgicycisqq($kesssewsiegssiya) { $sqeykgyoooqysmca = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto aqwgmgywcwigwows; } $sqeykgyoooqysmca = $qyiciauwscqywwgq->object_type; aqwgmgywcwigwows: return $sqeykgyoooqysmca; } public function aakmagwggmkoiiyu($kesssewsiegssiya) : string { $ymqmyyeuycgmigyo = ''; if ($kesssewsiegssiya instanceof WP_Taxonomy) { goto icumymgsimikeayo; } if (!is_string($kesssewsiegssiya)) { goto mooigscaaqwuikos; } $ymqmyyeuycgmigyo = $kesssewsiegssiya; mooigscaaqwuikos: goto eyesqscgaacqewus; icumymgsimikeayo: $ymqmyyeuycgmigyo = $kesssewsiegssiya->name; eyesqscgaacqewus: return $ymqmyyeuycgmigyo; } public function qcgakseyaikigqco($kesssewsiegssiya) : string { $pkyyagewkiyckmwy = ''; if (!($qyiciauwscqywwgq = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto kcqwswsyeosyiqsa; } $pkyyagewkiyckmwy = $qyiciauwscqywwgq->label; kcqwswsyeosyiqsa: return $pkyyagewkiyckmwy; } public function uikgwcuascgeissw($kesssewsiegssiya, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($kesssewsiegssiya), "\154\141\142\x65\x6c\x73\x2e{$uusmaiomayssaecw}"); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::wuccaoymmygisoku => true, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $sogksuscggsicmac = $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($ywmkwiwkosakssii, Constants::aisguagukaewucii); if (in_array($aqykuigiuwmmcieu, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto ekeeiceksommsomi; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; ekeeiceksommsomi: $seyqqsmuaiegkeeq = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu); if (!in_array($sogksuscggsicmac, [Constants::uissasisiuymwsmu, Constants::eoaiagsgqsmskugs], true)) { goto oyuwoucekcqqaeca; } foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) { $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label; gogcokmkciecweag: } qmickcoaaqioicsy: oyuwoucekcqqaeca: return $seyqqsmuaiegkeeq; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function cekoogweeooasayu($kesssewsiegssiya) : bool { $cekoogweeooasayu = false; if (!($kesssewsiegssiya = $this->imgymusqgccqsqqq($kesssewsiegssiya))) { goto iyeiaaacusqewyuc; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; iyeiaaacusqewyuc: return $cekoogweeooasayu; } }
