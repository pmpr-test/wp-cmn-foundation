<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto sscqwggcsoumagsw; } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\150\x74\x74\160\x3a\x2f\57\151\160\x2d\x61\x70\x69\x2e\143\157\x6d\57\152\163\x6f\156\x2f{$kucumcusyyckayas}\x3f\x66\151\145\154\144\x73\75\x31\64\x37\64\65\70"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (!(isset($sogksuscggsicmac["\143\157\165\156\x74\162\171\103\157\144\145"]) && in_array($sogksuscggsicmac["\x63\x6f\165\156\164\162\x79\103\x6f\x64\145"], $yywmssikcykmsiqi, true))) { goto iuasemkmccmcauoc; } $ksaameoqigiaoigg = true; goto mkikakaaaqwygquu; iuasemkmccmcauoc: cgmukwicwgikewei: } mkikakaaaqwygquu: sscqwggcsoumagsw: return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if ($iakkeikwceeomgyq) { goto iasuykaqammykyuc; } $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); iasuykaqammykyuc: if ($iakkeikwceeomgyq) { goto sawkcaueekoqcaoq; } $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\x73\145\162\x5f\141\147\145\x6e\x74"); if (!preg_match("\x2f\x28\x28\x68\164\164\x70\x73\x3f\x29\x3a\134\57\x5c\x2f\x29\x3f\50\x5b\x61\x2d\x7a\101\x2d\x5a\60\55\x39\134\55\x2e\x5d\53\134\56\133\x61\x2d\x7a\x41\x2d\x5a\x5d\x7b\x32\54\65\175\51\50\x5c\57\134\x53\x2a\51\x3f\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { goto sycysmgqeucmisiw; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if (!($iakkeikwceeomgyq && !preg_match("\x2f\136\x28\77\x21\x2d\x29\x28\77\72\50\x3f\x3a\133\141\55\172\x41\x2d\132\x5c\144\x5d\x5b\141\55\x7a\101\x2d\x5a\134\x64\134\55\135\173\x30\54\x36\61\x7d\x29\77\133\141\x2d\172\x41\x2d\132\134\x64\135\134\56\51\173\x31\x2c\x31\x32\66\175\x28\77\41\x5c\x64\x2b\x29\133\141\x2d\172\101\x2d\132\134\x64\135\x7b\x31\54\x36\63\175\44\57", $iakkeikwceeomgyq))) { goto ykmceyuggseogcgm; } $iakkeikwceeomgyq = ''; ykmceyuggseogcgm: if (!($iakkeikwceeomgyq && $quoumsikceouuiee)) { goto oiakiumycyquagqu; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; oiakiumycyquagqu: sycysmgqeucmisiw: sawkcaueekoqcaoq: return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (headers_sent()) { goto omcskkiwcgiysuis; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\157\156\x74\x65\x6e\x74\55\x54\171\x70\145\x3a\40" . $seammywuwkueoois->get("\150\164\x6d\154\137\164\171\160\145") . "\x3b\x20\x63\x68\x61\x72\163\x65\x74\x3d" . $seammywuwkueoois->get("\x62\x6c\x6f\x67\x5f\143\150\141\x72\163\x65\x74")); header_remove("\x43\x6f\x6e\x74\145\156\x74\x2d\104\145\163\x63\162\x69\x70\164\151\157\x6e\x3b"); header_remove("\x43\x6f\156\x74\145\x6e\164\x2d\104\x69\x73\x70\x6f\x73\151\164\x69\x6f\x6e"); header_remove("\x43\157\156\164\145\x6e\164\55\x54\x72\x61\156\163\146\x65\x72\55\x45\156\143\157\144\x69\x6e\147"); omcskkiwcgiysuis: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\74\x61\x20")) { goto wywuimckaigaukkg; } $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\x61\x63\x6b\40\x74\157\40\110\157\155\x65\x70\141\147\x65", PR__CMN__FOUNDATION)); wywuimckaigaukkg: wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\162\x65\x73\x70\157\156\163\x65" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\x50\x52\137\105\x4e\x56\137\x53\114\104", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\105\122\126\105\x52\x5f\116\101\115\x45"]; if (!$yiiiqewsseywemqu) { goto ykeuwugswmeukgii; } $uuesygwsusyuycqs = str_replace(["\x77\167\167\x2e", "\56", "\x2d"], ['', '', "\137"], $uuesygwsusyuycqs); ykeuwugswmeukgii: return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\110\124\124\x50\137\110\x4f\123\124"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if (!($soyimggocqaeswge === $this->akoiqeemqgmakecu())) { goto gaucesmmweqmemkg; } $soyimggocqaeswge = ''; gaucesmmweqmemkg: return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if ($uykgysuswksgmwqy) { goto csuyaisqcmkkyqiw; } $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (!(0 === strpos($uusmaiomayssaecw, "\110\124\124\x50\137"))) { goto kecaqcyccioyaoaa; } $kmmmiumuegqmksky = implode("\x2d", array_map("\165\x63\x66\x69\162\x73\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); kecaqcyccioyaoaa: osgaygqiwagaowsq: } uuooygauoaumkemu: csuyaisqcmkkyqiw: return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\124\x54\120\x5f\x55\123\105\122\x5f\101\x47\x45\x4e\124", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\x51\x55\105\x52\131\137\x53\x54\122\111\116\x47"); if (!($yiasugywggckywoa && $agoaugssmsiumiym)) { goto qsmmausewiocaesg; } $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); qsmmausewiocaesg: return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!isset($_SESSION[$uusmaiomayssaecw])) { goto cwuqamaiywoeieyw; } $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$kekikiwsckuiyuyo) { goto caseeeggigkaoswu; } unset($_SESSION[$uusmaiomayssaecw]); caseeeggigkaoswu: cwuqamaiywoeieyw: return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if ($uusmaiomayssaecw) { goto giemwgcqeogmauao; } $ggauoeuaesiymgee = $icwicymcioeyeyek; giemwgcqeogmauao: $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!(is_string($sogksuscggsicmac) && $yiiiqewsseywemqu)) { goto siawaquisuoeysqa; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); siawaquisuoeysqa: return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (session_id()) { goto mgqqigauyucewouk; } session_start(); mgqqigauyucewouk: } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$eqgoocgaqwqcimie) { goto kckkiuumaegucsqg; } $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if (!$smecmmgoykqcaieu) { goto kwigwuwessmseqik; } $eqgoocgaqwqcimie = $smecmmgoykqcaieu; kwigwuwessmseqik: if (!$mggeakwwkaykmkka) { goto qqowaeggkimumgei; } $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); qqowaeggkimumgei: kckkiuumaegucsqg: return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { goto isqiaewwwiusyaoy; } $muocgugcqiewywag = true; if ($owiuekcekysskaoe) { goto cwuakumskisqyogc; } $owiuekcekysskaoe = 1; cwuakumskisqyogc: if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { goto ymiiquygeeucsgaq; } $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\40\163\x65\x63\x6f\156\x64\163"); goto ewaqcgwowgogwaqi; ymiiquygeeucsgaq: $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\40\171\145\x61\x72\163"); ewaqcgwowgogwaqi: $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\x78\160\151\x72\x65\x73" => $owiuekcekysskaoe, "\150\164\164\x70\x6f\x6e\154\171" => $oicswcucsocwuiug, "\x73\x65\143\x75\x72\x65" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (!is_array($eqgoocgaqwqcimie)) { goto cqeyqcauamscauiq; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); cqeyqcauamscauiq: if (version_compare(PHP_VERSION, "\x37\x2e\63\56\60", "\x3e\x3d")) { goto smqiciaewkmmyswu; } setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\170\160\151\162\145\163"], $qiouiwasaauyaaue["\x70\x61\164\x68"], $qiouiwasaauyaaue["\x64\x6f\155\141\x69\156"], $qiouiwasaauyaaue["\163\x65\x63\x75\x72\x65"], $qiouiwasaauyaaue["\150\164\x74\160\x6f\156\154\171"]); goto suwciqqmccskgmkg; smqiciaewkmmyswu: setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); suwciqqmccskgmkg: goto asgykkakkoeygiwm; isqiaewwwiusyaoy: $muocgugcqiewywag = false; if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto yqqueamqmkcwimeq; } headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\x63\157\157\x6b\151\145\40\x63\x61\x6e\156\x6f\164\x20\x62\145\x20\163\145\164\x20\x2d\40\x68\x65\x61\x64\x65\x72\163\40\x61\x6c\162\145\141\x64\x79\40\163\x65\x6e\164\40\x62\x79\x20{$qogsmwakwacwqogk}\x20\157\x6e\x20\x6c\x69\156\x65\x20{$mwuwcsieauaqecae}", E_USER_NOTICE); yqqueamqmkcwimeq: asgykkakkoeygiwm: return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\x43\157\x6e\164\151\156\x75\x65"; goto mwqqssomwmsmaaqk; case 101: $ymacoouqwcqwwagu = "\x53\167\x69\x74\x63\150\151\156\147\40\x50\162\x6f\164\x6f\x63\x6f\x6c\163"; goto mwqqssomwmsmaaqk; case 200: $ymacoouqwcqwwagu = "\117\113"; goto mwqqssomwmsmaaqk; case 201: $ymacoouqwcqwwagu = "\x43\x72\145\x61\x74\145\x64"; goto mwqqssomwmsmaaqk; case 202: $ymacoouqwcqwwagu = "\101\x63\143\145\x70\164\x65\x64"; goto mwqqssomwmsmaaqk; case 203: $ymacoouqwcqwwagu = "\x4e\x6f\156\55\101\x75\164\150\x6f\162\x69\x74\x61\x74\151\x76\145\40\111\x6e\146\157\x72\x6d\x61\x74\151\x6f\156"; goto mwqqssomwmsmaaqk; case 204: $ymacoouqwcqwwagu = "\x4e\x6f\x20\x43\157\156\164\x65\156\164"; goto mwqqssomwmsmaaqk; case 205: $ymacoouqwcqwwagu = "\122\145\163\145\x74\x20\x43\x6f\156\x74\145\156\164"; goto mwqqssomwmsmaaqk; case 206: $ymacoouqwcqwwagu = "\120\141\162\x74\151\x61\154\40\103\x6f\156\x74\145\156\x74"; goto mwqqssomwmsmaaqk; case 300: $ymacoouqwcqwwagu = "\115\x75\x6c\x74\x69\x70\154\145\40\103\x68\x6f\151\x63\145\163"; goto mwqqssomwmsmaaqk; case 301: $ymacoouqwcqwwagu = "\115\x6f\166\145\144\x20\120\145\162\x6d\x61\x6e\x65\x6e\x74\x6c\x79"; goto mwqqssomwmsmaaqk; case 302: $ymacoouqwcqwwagu = "\x4d\x6f\x76\145\x64\x20\x54\145\x6d\160\x6f\x72\141\x72\151\154\x79"; goto mwqqssomwmsmaaqk; case 303: $ymacoouqwcqwwagu = "\x53\x65\145\40\x4f\x74\150\x65\x72"; goto mwqqssomwmsmaaqk; case 304: $ymacoouqwcqwwagu = "\x4e\157\164\x20\x4d\157\x64\151\146\x69\145\x64"; goto mwqqssomwmsmaaqk; case 305: $ymacoouqwcqwwagu = "\125\x73\x65\40\120\162\x6f\170\x79"; goto mwqqssomwmsmaaqk; case 400: $ymacoouqwcqwwagu = "\102\141\144\x20\x52\x65\161\165\145\x73\x74"; goto mwqqssomwmsmaaqk; case 401: $ymacoouqwcqwwagu = "\x55\x6e\x61\165\164\150\157\162\x69\172\x65\x64"; goto mwqqssomwmsmaaqk; case 402: $ymacoouqwcqwwagu = "\120\x61\171\155\x65\156\164\40\x52\x65\x71\165\x69\162\145\x64"; goto mwqqssomwmsmaaqk; case 403: $ymacoouqwcqwwagu = "\106\157\x72\x62\x69\x64\x64\x65\x6e"; goto mwqqssomwmsmaaqk; case 404: $ymacoouqwcqwwagu = "\x4e\x6f\164\x20\x46\157\x75\156\x64"; goto mwqqssomwmsmaaqk; case 405: $ymacoouqwcqwwagu = "\115\145\164\x68\x6f\x64\x20\116\x6f\164\40\x41\x6c\154\x6f\167\145\x64"; goto mwqqssomwmsmaaqk; case 406: $ymacoouqwcqwwagu = "\116\x6f\164\40\101\143\143\145\x70\x74\x61\x62\154\145"; goto mwqqssomwmsmaaqk; case 407: $ymacoouqwcqwwagu = "\x50\162\157\170\171\40\x41\x75\164\x68\x65\156\x74\x69\143\x61\164\151\157\x6e\x20\122\145\161\165\x69\x72\145\x64"; goto mwqqssomwmsmaaqk; case 408: $ymacoouqwcqwwagu = "\122\x65\161\x75\145\163\x74\x20\x54\151\x6d\145\x2d\x6f\x75\164"; goto mwqqssomwmsmaaqk; case 409: $ymacoouqwcqwwagu = "\103\157\x6e\146\154\x69\x63\164"; goto mwqqssomwmsmaaqk; case 410: $ymacoouqwcqwwagu = "\x47\157\x6e\145"; goto mwqqssomwmsmaaqk; case 411: $ymacoouqwcqwwagu = "\x4c\x65\156\x67\x74\x68\40\x52\145\x71\165\x69\x72\145\144"; goto mwqqssomwmsmaaqk; case 412: $ymacoouqwcqwwagu = "\120\x72\145\x63\157\156\x64\x69\x74\x69\157\156\x20\x46\x61\151\x6c\145\144"; goto mwqqssomwmsmaaqk; case 413: $ymacoouqwcqwwagu = "\122\145\x71\165\145\x73\164\40\105\x6e\164\x69\x74\171\x20\124\x6f\157\40\114\141\x72\x67\145"; goto mwqqssomwmsmaaqk; case 414: $ymacoouqwcqwwagu = "\122\145\x71\165\x65\163\164\55\x55\x52\111\x20\x54\x6f\x6f\40\114\x61\162\x67\145"; goto mwqqssomwmsmaaqk; case 415: $ymacoouqwcqwwagu = "\125\156\x73\165\x70\x70\x6f\162\x74\x65\144\40\115\145\144\x69\x61\x20\x54\x79\x70\145"; goto mwqqssomwmsmaaqk; case 500: $ymacoouqwcqwwagu = "\111\x6e\x74\145\162\x6e\x61\x6c\x20\x53\x65\x72\x76\x65\x72\40\x45\162\162\157\x72"; goto mwqqssomwmsmaaqk; case 501: $ymacoouqwcqwwagu = "\x4e\x6f\164\40\111\x6d\x70\x6c\x65\x6d\145\x6e\x74\145\x64"; goto mwqqssomwmsmaaqk; case 502: $ymacoouqwcqwwagu = "\x42\141\x64\40\107\x61\x74\x65\x77\x61\x79"; goto mwqqssomwmsmaaqk; case 503: $ymacoouqwcqwwagu = "\x53\x65\x72\x76\x69\143\x65\40\125\x6e\141\166\141\151\x6c\141\x62\154\145"; goto mwqqssomwmsmaaqk; case 504: $ymacoouqwcqwwagu = "\x47\141\x74\145\167\141\171\40\x54\x69\x6d\x65\55\x6f\165\x74"; goto mwqqssomwmsmaaqk; case 505: $ymacoouqwcqwwagu = "\x48\x54\x54\x50\x20\126\145\162\x73\x69\157\x6e\40\x6e\x6f\164\40\163\165\160\x70\157\162\164\145\144"; goto mwqqssomwmsmaaqk; default: wp_die("\125\156\153\156\x6f\167\156\x20\x68\x74\164\x70\40\x73\x74\x61\164\x75\163\x20\x63\157\x64\145\x20\42" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } aguqiwwiooqqgywi: mwqqssomwmsmaaqk: return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\x52\x45\121\x55\105\123\124\137\x55\x52\x49"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if (!($mkomwsiykqigmqca = $this->sswiqkmqewcageua())) { goto qiokyyweaoysyeci; } if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) { goto egoyuuqcqmgkswyg; } $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); egoyuuqcqmgkswyg: $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\x54\x54\120\137\x48\117\x53\124"); $cgmsicimocaeggqg = stripos($_SERVER["\123\x45\122\126\x45\x52\x5f\x50\122\117\124\x4f\103\x4f\x4c"], "\x68\164\164\x70\x73") === 0 ? "\150\x74\x74\x70\x73\72\57\x2f" : "\x68\164\164\160\x3a\57\x2f"; if ($gwgucoaaqcwwciqq) { goto jiiiygsseagcmycw; } $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); goto osiemgqgiycaymio; jiiiygsseagcmycw: $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; osiemgqgiycaymio: $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if (!$kssgyousiceysuaw) { goto magaykaioygmiciq; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\x51\125\105\x52\x59\137\x53\124\x52\111\116\x47"), '', $eeamcawaiqocomwy); magaykaioygmiciq: qiokyyweaoysyeci: return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if (!($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw)) { goto kmkwsqgumkwgemwc; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); kmkwsqgumkwgemwc: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x67\145\x74\137\x75\x72\x6c\137\142\171\137\143\x6f\156\164\145\170\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\144\x6d\x69\156\55\141\152\x61\x78\56\x70\150\160"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\x64\155\151\x6e\x2e\160\x68\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if (!$suaemuyiacqyugsm) { goto uiakqoyqmcwokgse; } $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; uiakqoyqmcwokgse: if (!$uoomaookgsyciacm) { goto oksimyciqsugcami; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); oksimyciqsugcami: return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\141\144\155\x69\x6e\x2e\x70\x68\160" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->gkwaaeusmsaywikg($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { goto uecycmeaoqgqcomm; } if (!$this->qsqicssyqieuqooy()) { goto gquyeowwseuycuoq; } $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; gquyeowwseuycuoq: goto siiwoymcomqegmya; uecycmeaoqgqcomm: $syowsmcowosssaos = Constants::skogicecygyyskkq; siiwoymcomqegmya: return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\x70\x5f\x67\145\x74\x5f\x61\x76\141\151\154\141\142\154\x65\x5f\164\x72\141\156\163\154\x61\164\x69\x6f\156\163")) { require_once ABSPATH . "\x77\x70\55\x61\144\155\x69\x6e\x2f\x69\156\x63\x6c\x75\144\145\163\x2f\x74\162\x61\x6e\x73\154\141\x74\x69\157\156\55\x69\156\163\164\141\154\154\56\x70\150\160"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\x67\154\x69\x73\x68\x5f\x6e\x61\155\x65"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; cgqmyikikqgmksgg: } wkokasiqoeycyukq: return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\x52\x45\121\125\x45\x53\124\137\x4d\105\124\x48\x4f\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x68\x74\164\x70\163\x5f\x6c\x6f\x63\x61\x6c\137\163\x73\x6c\x5f\x76\145\162\x69\146\171", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { goto qioeuukaqkcsiiwk; } $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); goto cycwiouaowuswkmk; qioeuukaqkcsiiwk: $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); cycwiouaowuswkmk: return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if ($gwqgmkqcgwwmweom) { goto aoiwocgacociakoy; } $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); aoiwocgacociakoy: return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if (!$kuukgsmqkagwaciu) { goto wgkamcmqescgqcyw; } if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { goto sguosuigwgwkikgs; } $sogksuscggsicmac = $kuukgsmqkagwaciu; goto ycyueqmkqyycmaus; sguosuigwgwkikgs: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); ycyueqmkqyycmaus: wgkamcmqescgqcyw: return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if (!($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto amkeeqecmwsmwqma; } return new WP_Error("\64\60\63", __("\x59\157\x75\40\144\x6f\x20\x6e\157\x74\x20\x68\x61\166\145\x20\141\143\x63\145\x73\x73\x20\x74\x6f\40\160\x65\162\x66\157\162\x6d\40\164\150\151\x73\40\157\x70\145\162\x61\x74\x69\157\156\56", PR__CMN__FOUNDATION)); amkeeqecmwsmwqma: $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (!(empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw))) { goto vkmscascaoysaqoc; } return new WP_Error("\64\60\63", __("\131\157\165\x72\x20\162\x65\161\x75\145\x73\x74\x20\151\163\x20\x6e\157\164\x20\166\x61\154\x69\x64\40\157\x72\40\x65\170\x70\x69\162\x65\144\x2e", PR__CMN__FOUNDATION)); vkmscascaoysaqoc: return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { goto ioqmgaeuiicymgky; } $sogksuscggsicmac = true; goto ywmcuouqguawueqm; ioqmgaeuiicymgky: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x71\x75\x65\x73\164\x20\x69\x73\x20\x6e\x6f\164\x20\166\141\154\x69\144\x2c\40\x70\154\x65\141\x73\x65\x20\x72\x65\154\x6f\141\144\x20\160\141\147\x65\40\141\156\x64\40\164\x72\x79\40\141\147\141\151\x6e\56", PR__CMN__FOUNDATION)); if (!$gqgoqaeswmcwagoi) { goto soskeqqausokwugo; } $this->uaggqsoeugksgooc($sogksuscggsicmac, false); soskeqqausokwugo: ywmcuouqguawueqm: return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { goto gkoaywyuyqemyiqw; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); goto gcgsyyiismkwoyck; gkoaywyuyqemyiqw: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); gcgsyyiismkwoyck: } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if (!($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\57")) { goto aswikmsouwkequca; } _doing_it_wrong("\147\145\x74\120\115\x50\122\123\151\x74\x65\125\122\x4c", sprintf(__("\x43\157\165\x6c\144\x20\156\157\x74\40\165\x73\145\40\160\x61\x74\x68\x20\42\45\163\x22\40\x77\x69\x74\x68\x6f\165\164\x20\163\x6c\x61\163\x68\x20\157\156\40\164\x68\145\x20\146\x69\x72\x73\164\x20\143\150\141\x72\x61\143\x74\145\x72\56", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\56\63\x2e\x2a"); aswikmsouwkequca: $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
