<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc35b0a9adb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Common extends Container { const megukuqmaauosyey = 'pmpr-plg-settings_'; const ocagsumiqggucmmq = 'bkl_page_option'; const sgwukasugogeyicy = 'footer_copyright_text'; const cyaamcawiswqsqwc = 'footer_copyright_background'; const ksawqakayokcckic = 'gray'; const eoeewuoowasgsimc = 'white'; const uggkicsigawkguec = 'black'; const xcmyokycgeigekkm = '#888'; const oykuuwggmycymcki = '#FFF'; const wekmquwykoiqeekq = '#111'; public function gcmiikmmsyooasmq(string $uusmaiomayssaecw = null) { $sogksuscggsicmac = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($qcioqakuekamgwkw = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099512212819, "\x31\x30\x34\61\x35\66\x31\x36\71\62\62\62\61\x39\60\61\x30\61\61\x32\62\x31\61\x31\x32\62\x32\x31\x38\67\x31\x39\x30\x32\60\71\x31\64\61\61\70\x37\61\70\64"), [])) { $qcioqakuekamgwkw = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($qcioqakuekamgwkw); foreach ($qcioqakuekamgwkw as $ggcusimcgowkewyk) { $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ggcusimcgowkewyk, Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { $wksoawcgagcgoask = explode('-', $wksoawcgagcgoask, 3); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($wksoawcgagcgoask, 2); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($wksoawcgagcgoask, 1); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)) { $sogksuscggsicmac = $ggcusimcgowkewyk; $sogksuscggsicmac[Constants::ocwsuwyiiasigqaa] = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); break; } } } } if ($uusmaiomayssaecw) { $sogksuscggsicmac = $gkyciwoiiisgywcs->get($sogksuscggsicmac, $uusmaiomayssaecw); } return $sogksuscggsicmac; } public function gwqaimcgacwmmiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->sscegwueamckwmcy(self::megukuqmaauosyey . 'get_option', $ggauoeuaesiymgee, $uusmaiomayssaecw); } public function uqgakoiwwiesysii() { return $this->gwqaimcgacwmmiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099537498612, "\61\62\x38\61\x38\62\61\x38\62\x32\62\x31\x31\x32\x31\x32\x31\x34\62\66\62\x31\x30\x36\61\70\62\x31\x39\67\x32\x34\x37\x32\x31\x34\x31\x36\x35\x31\63\71\61\x36\x30\62\x32\x31\62\66\62\62\62\61\x31\62\61\62\63\70\62\x32\61"), self::uggkicsigawkguec); } public function wyomcacocymyugkm() { return $this->gwqaimcgacwmmiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099530167807, "\x31\70\71\x32\x35\63\x32\65\63\x32\71\x38\x31\x37\62\x32\x37\x37\x33\x32\x37\61\x34\x34\x32\65\x33\x32\65\x38\x33\x32\x32\x32\x37\x37\x32\61\x34\x31\x39\x34\62\x30\x31\62\x39\x38\x33\x32\x37\61\x33\67\61\x32\x30\61\64\x34\62\61\71\x31\x39\64\62\x37\67\62\65\x33\63\61\63\62\x33\x36\61\x35\61"), self::eoeewuoowasgsimc); } public function imsywosuyawwkcws($qoiwmokisgikggia = null) : array { $ukqisiguweqciuei = [self::eoeewuoowasgsimc => [Constants::qescuiwgsyuikume => __('White', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::oykuuwggmycymcki], self::ksawqakayokcckic => [Constants::qescuiwgsyuikume => __('Gray', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::xcmyokycgeigekkm], self::uggkicsigawkguec => [Constants::qescuiwgsyuikume => __('Black', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::wekmquwykoiqeekq]]; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ukqisiguweqciuei, $qoiwmokisgikggia, $ukqisiguweqciuei); } }
