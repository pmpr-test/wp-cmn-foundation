<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b4dde2139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Common extends Container { const megukuqmaauosyey = 'pmpr-plg-settings_'; const ocagsumiqggucmmq = 'bkl_page_option'; const sgwukasugogeyicy = 'footer_copyright_text'; const cyaamcawiswqsqwc = 'footer_copyright_background'; const ksawqakayokcckic = 'gray'; const eoeewuoowasgsimc = 'white'; const uggkicsigawkguec = 'black'; const xcmyokycgeigekkm = '#888'; const oykuuwggmycymcki = '#FFF'; const wekmquwykoiqeekq = '#111'; public function gcmiikmmsyooasmq(string $uusmaiomayssaecw = null) { $sogksuscggsicmac = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($qcioqakuekamgwkw = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099512212819, "\61\65\67\61\x39\67\62\61\64\x32\x36\61\x32\65\x31\x31\64\62\61\66\x35\x31\x36\x32\62\66\x31\x32\64\x30\62\x35\x31\x32\65\70\61\70\62\62\x34\60\62\x31\x39"), [])) { $qcioqakuekamgwkw = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($qcioqakuekamgwkw); foreach ($qcioqakuekamgwkw as $ggcusimcgowkewyk) { $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ggcusimcgowkewyk, Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { $wksoawcgagcgoask = explode('-', $wksoawcgagcgoask, 3); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($wksoawcgagcgoask, 2); $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($wksoawcgagcgoask, 1); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk($ymqmyyeuycgmigyo, $sqeykgyoooqysmca)) { $sogksuscggsicmac = $ggcusimcgowkewyk; $sogksuscggsicmac[Constants::ocwsuwyiiasigqaa] = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->cyqqoccgmqkwwyeu($ymqmyyeuycgmigyo, $sqeykgyoooqysmca); break; } } } } if ($uusmaiomayssaecw) { $sogksuscggsicmac = $gkyciwoiiisgywcs->get($sogksuscggsicmac, $uusmaiomayssaecw); } return $sogksuscggsicmac; } public function gwqaimcgacwmmiyq($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->sscegwueamckwmcy(self::megukuqmaauosyey . 'get_option', $ggauoeuaesiymgee, $uusmaiomayssaecw); } public function uqgakoiwwiesysii() { return $this->gwqaimcgacwmmiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099537498612, "\x31\65\x39\x32\62\x31\x32\62\61\62\x35\x38\x31\x35\x32\x32\x34\61\62\x38\x37\x31\x33\x39\x32\62\61\x32\63\60\62\x38\x32\x32\x34\x31\62\60\x34\x31\x38\x30\61\71\71\62\x35\70\62\70\x37\62\x35\70\61\x35\62\x32\67\63\62\x35\x38"), self::uggkicsigawkguec); } public function wyomcacocymyugkm() { return $this->gwqaimcgacwmmiyq(self::iwgqamekocwaigci()->owgcciayoweymuws()->quacgsocsmycocig(1099530167807, "\62\60\62\62\x38\x30\x32\70\60\63\61\63\x31\70\x33\62\71\x38\x33\63\x34\x31\x35\71\x32\70\x30\62\70\71\63\x32\71\x32\71\70\x32\x33\71\x32\61\65\x32\62\x32\63\61\x33\x33\63\64\61\x35\64\61\x33\x35\61\65\x39\x32\64\x38\x32\61\65\62\x39\x38\x32\70\60\63\x32\x32\62\66\65\x31\x36\66"), self::eoeewuoowasgsimc); } public function imsywosuyawwkcws($qoiwmokisgikggia = null) : array { $ukqisiguweqciuei = [self::eoeewuoowasgsimc => [Constants::qescuiwgsyuikume => __('White', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::oykuuwggmycymcki], self::ksawqakayokcckic => [Constants::qescuiwgsyuikume => __('Gray', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::xcmyokycgeigekkm], self::uggkicsigawkguec => [Constants::qescuiwgsyuikume => __('Black', PR__CMN__FOUNDATION), Constants::igssuqwuicwawgam => self::wekmquwykoiqeekq]]; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ukqisiguweqciuei, $qoiwmokisgikggia, $ukqisiguweqciuei); } }
