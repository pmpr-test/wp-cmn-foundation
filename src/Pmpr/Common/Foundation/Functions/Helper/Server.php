<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3e38c782d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\150\164\164\x70\72\x2f\x2f\151\160\x2d\x61\x70\x69\56\x63\x6f\155\x2f\x6a\163\x6f\x6e\x2f{$kucumcusyyckayas}\77\146\151\x65\154\x64\x73\75\x31\x34\67\64\x35\x38"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\x63\x6f\x75\156\164\162\x79\x43\x6f\144\x65"]) && in_array($sogksuscggsicmac["\x63\x6f\165\x6e\164\x72\x79\103\x6f\144\145"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\163\x65\x72\137\x61\x67\145\x6e\x74"); if (preg_match("\x2f\x28\x28\x68\x74\x74\160\x73\77\51\x3a\134\x2f\134\57\x29\77\x28\133\141\x2d\172\101\x2d\132\60\55\71\134\55\56\x5d\53\x5c\56\133\141\55\172\x41\55\x5a\x5d\173\62\54\65\175\x29\x28\x5c\x2f\x5c\123\x2a\51\x3f\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\57\x5e\50\x3f\x21\55\x29\50\x3f\x3a\50\x3f\x3a\x5b\x61\55\x7a\x41\x2d\x5a\x5c\144\135\133\141\x2d\x7a\101\55\x5a\x5c\x64\x5c\x2d\x5d\173\60\x2c\66\x31\175\x29\77\x5b\141\x2d\172\101\55\x5a\x5c\x64\x5d\x5c\x2e\51\x7b\61\54\61\x32\x36\x7d\50\77\x21\x5c\144\x2b\x29\133\141\x2d\x7a\x41\x2d\x5a\134\144\x5d\x7b\x31\x2c\x36\x33\175\44\x2f", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\x43\x6f\156\164\x65\156\164\55\x54\171\x70\145\72\40" . $seammywuwkueoois->get("\150\x74\x6d\x6c\x5f\164\x79\x70\145") . "\73\x20\x63\150\x61\x72\163\145\x74\75" . $seammywuwkueoois->get("\x62\154\x6f\x67\x5f\143\150\x61\162\163\x65\x74")); header_remove("\103\x6f\156\x74\145\x6e\x74\55\x44\145\163\x63\162\x69\x70\164\x69\157\156\x3b"); header_remove("\103\x6f\x6e\164\x65\x6e\164\x2d\x44\151\163\160\157\x73\x69\x74\x69\x6f\x6e"); header_remove("\x43\157\x6e\x74\x65\156\164\55\124\x72\141\x6e\x73\x66\x65\x72\55\105\x6e\143\x6f\144\x69\156\147"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\x3c\141\40")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\141\x63\153\x20\x74\x6f\x20\110\x6f\x6d\145\160\x61\x67\x65", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\162\x65\x73\160\157\x6e\x73\145" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\x52\x5f\105\x4e\x56\137\x53\x4c\x44", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\x53\x45\x52\126\x45\122\137\x4e\x41\115\x45"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\x77\x77\x77\56", "\x2e", "\x2d"], ['', '', "\x5f"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\x48\124\x54\120\x5f\110\117\123\124"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\110\124\x54\120\x5f")) { $kmmmiumuegqmksky = implode("\55", array_map("\165\143\x66\151\x72\x73\164", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\110\x54\x54\x50\x5f\125\123\105\122\137\x41\x47\x45\x4e\x54", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\125\105\122\131\137\x53\x54\122\x49\116\x47"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\143\157\x6f\153\x69\145\x20\x63\141\x6e\156\x6f\164\40\x62\145\40\x73\x65\164\x20\x2d\40\x68\145\x61\144\145\x72\163\x20\x61\154\x72\x65\141\144\x79\x20\163\x65\156\164\40\142\171\x20{$qogsmwakwacwqogk}\40\157\156\x20\154\x69\156\145\x20{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\40\x79\145\141\162\x73"); } else { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\x73\x65\x63\x6f\156\144\x73"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\145\170\160\x69\x72\145\x73" => $owiuekcekysskaoe, "\150\x74\x74\160\x6f\x6e\154\171" => $oicswcucsocwuiug, "\x73\145\143\x75\162\145" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\x37\56\63\56\x30", "\76\75")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\x78\160\x69\x72\145\163"], $qiouiwasaauyaaue["\x70\x61\x74\x68"], $qiouiwasaauyaaue["\144\x6f\155\x61\x69\x6e"], $qiouiwasaauyaaue["\x73\x65\x63\x75\x72\x65"], $qiouiwasaauyaaue["\x68\x74\x74\x70\157\156\x6c\171"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\103\x6f\156\x74\151\x6e\x75\x65"; break; case 101: $ymacoouqwcqwwagu = "\123\x77\151\164\143\x68\151\156\147\40\x50\162\x6f\x74\x6f\143\x6f\154\x73"; break; case 200: $ymacoouqwcqwwagu = "\x4f\x4b"; break; case 201: $ymacoouqwcqwwagu = "\103\x72\145\x61\x74\145\x64"; break; case 202: $ymacoouqwcqwwagu = "\101\x63\x63\145\x70\x74\x65\144"; break; case 203: $ymacoouqwcqwwagu = "\116\157\x6e\x2d\101\165\164\150\x6f\x72\151\x74\x61\164\x69\x76\145\40\111\156\x66\157\162\x6d\141\x74\151\x6f\x6e"; break; case 204: $ymacoouqwcqwwagu = "\x4e\x6f\40\x43\x6f\x6e\164\x65\156\164"; break; case 205: $ymacoouqwcqwwagu = "\122\x65\163\145\164\40\x43\x6f\156\x74\x65\x6e\164"; break; case 206: $ymacoouqwcqwwagu = "\x50\141\162\164\151\141\x6c\40\103\157\x6e\164\145\x6e\x74"; break; case 300: $ymacoouqwcqwwagu = "\x4d\x75\154\164\x69\160\x6c\145\40\103\150\157\151\x63\x65\163"; break; case 301: $ymacoouqwcqwwagu = "\115\x6f\x76\145\x64\x20\x50\x65\162\x6d\141\x6e\x65\156\x74\154\171"; break; case 302: $ymacoouqwcqwwagu = "\115\157\166\x65\144\x20\124\145\x6d\x70\157\x72\141\162\151\x6c\x79"; break; case 303: $ymacoouqwcqwwagu = "\123\x65\145\40\117\x74\x68\145\162"; break; case 304: $ymacoouqwcqwwagu = "\116\157\x74\x20\115\157\x64\151\x66\151\145\144"; break; case 305: $ymacoouqwcqwwagu = "\125\163\145\40\x50\x72\157\170\171"; break; case 400: $ymacoouqwcqwwagu = "\102\141\144\40\122\145\161\165\145\x73\164"; break; case 401: $ymacoouqwcqwwagu = "\x55\156\x61\x75\x74\x68\157\x72\151\x7a\x65\144"; break; case 402: $ymacoouqwcqwwagu = "\120\x61\171\155\x65\156\164\x20\122\145\161\165\x69\x72\145\144"; break; case 403: $ymacoouqwcqwwagu = "\x46\157\x72\x62\151\x64\144\145\156"; break; case 404: $ymacoouqwcqwwagu = "\x4e\x6f\x74\x20\x46\x6f\165\x6e\x64"; break; case 405: $ymacoouqwcqwwagu = "\115\x65\x74\150\x6f\x64\40\x4e\157\164\x20\101\154\x6c\x6f\167\145\x64"; break; case 406: $ymacoouqwcqwwagu = "\116\157\x74\x20\x41\x63\143\x65\x70\x74\141\x62\154\x65"; break; case 407: $ymacoouqwcqwwagu = "\120\x72\x6f\x78\171\40\101\165\x74\150\145\156\164\151\x63\x61\x74\x69\x6f\156\x20\x52\145\161\x75\151\162\x65\x64"; break; case 408: $ymacoouqwcqwwagu = "\122\145\x71\x75\145\163\x74\x20\x54\151\155\145\x2d\157\x75\164"; break; case 409: $ymacoouqwcqwwagu = "\103\157\x6e\146\x6c\x69\143\x74"; break; case 410: $ymacoouqwcqwwagu = "\x47\157\x6e\145"; break; case 411: $ymacoouqwcqwwagu = "\114\145\x6e\x67\x74\x68\x20\122\145\161\x75\151\162\145\144"; break; case 412: $ymacoouqwcqwwagu = "\120\162\x65\143\x6f\156\x64\151\164\151\x6f\156\x20\x46\141\151\154\145\144"; break; case 413: $ymacoouqwcqwwagu = "\122\x65\161\165\145\x73\164\x20\105\156\x74\151\x74\x79\40\124\157\x6f\40\x4c\x61\162\x67\x65"; break; case 414: $ymacoouqwcqwwagu = "\x52\145\161\165\x65\163\x74\x2d\x55\122\x49\40\x54\x6f\157\40\x4c\x61\x72\x67\145"; break; case 415: $ymacoouqwcqwwagu = "\x55\x6e\163\165\x70\160\157\x72\x74\x65\144\x20\115\145\x64\151\141\x20\x54\171\x70\x65"; break; case 500: $ymacoouqwcqwwagu = "\x49\156\x74\145\162\x6e\x61\154\40\123\x65\x72\166\x65\x72\x20\x45\x72\162\x6f\162"; break; case 501: $ymacoouqwcqwwagu = "\x4e\x6f\x74\40\111\x6d\x70\x6c\145\x6d\145\156\x74\x65\x64"; break; case 502: $ymacoouqwcqwwagu = "\x42\x61\144\40\107\141\164\145\x77\141\171"; break; case 503: $ymacoouqwcqwwagu = "\x53\145\x72\x76\x69\x63\145\x20\125\x6e\141\x76\141\151\x6c\x61\142\x6c\145"; break; case 504: $ymacoouqwcqwwagu = "\x47\141\x74\x65\167\141\x79\40\x54\x69\155\145\55\157\x75\164"; break; case 505: $ymacoouqwcqwwagu = "\110\124\x54\120\40\x56\x65\162\x73\x69\x6f\156\x20\x6e\x6f\x74\40\x73\165\x70\160\x6f\162\x74\145\x64"; break; default: wp_die("\125\x6e\x6b\x6e\157\167\156\x20\150\164\164\x70\x20\163\164\141\x74\x75\163\x20\143\x6f\x64\145\40\x22" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\x52\x45\x51\125\x45\123\124\x5f\125\122\x49"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\124\x54\120\x5f\x48\117\123\x54"); $cgmsicimocaeggqg = stripos($_SERVER["\x53\x45\122\x56\x45\122\137\x50\122\117\124\117\103\x4f\114"], "\150\164\x74\x70\x73") === 0 ? "\150\x74\x74\x70\x73\x3a\x2f\57" : "\x68\164\164\x70\72\57\57"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\125\105\122\x59\x5f\x53\124\122\111\x4e\x47"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\137\x75\162\x6c\137\x62\x79\137\x63\x6f\x6e\x74\x65\170\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\144\155\151\156\x2d\x61\x6a\141\170\x2e\160\150\x70"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\x61\144\155\151\156\x2e\x70\x68\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\x61\144\x6d\x69\156\56\160\150\x70" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\x77\160\x5f\147\145\x74\x5f\141\166\141\x69\154\x61\142\154\x65\137\164\x72\141\156\163\x6c\x61\164\x69\x6f\156\x73")) { include_once ABSPATH . "\167\x70\55\x61\144\155\x69\156\57\x69\156\143\154\165\x64\x65\x73\57\x74\x72\x61\x6e\x73\x6c\141\164\151\157\x6e\55\151\156\x73\164\x61\154\154\56\160\150\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\x67\x6c\151\163\x68\x5f\156\141\155\145"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\x52\x45\121\x55\105\x53\124\x5f\115\x45\x54\x48\117\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\164\x74\160\x73\137\154\x6f\x63\141\154\137\x73\163\154\x5f\x76\145\162\x69\x66\171", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\x34\60\x33", __("\x59\x6f\x75\x20\144\x6f\40\x6e\x6f\x74\40\150\x61\166\x65\40\x61\x63\143\145\x73\163\x20\x74\x6f\x20\160\x65\x72\x66\x6f\x72\155\x20\164\x68\151\163\40\x6f\x70\145\162\141\x74\x69\x6f\x6e\56", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\64\x30\63", __("\x59\157\165\x72\x20\x72\145\161\165\x65\163\x74\x20\151\x73\x20\156\x6f\x74\x20\166\x61\154\151\x64\x20\x6f\x72\40\145\170\160\x69\x72\x65\144\x2e", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\165\x65\x73\164\x20\x69\163\40\156\157\x74\x20\166\141\154\151\144\x2c\40\160\154\145\x61\163\x65\40\x72\x65\x6c\x6f\141\144\40\160\141\x67\x65\x20\141\x6e\x64\x20\164\162\171\x20\x61\x67\141\x69\x6e\x2e", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\x2f") { _doing_it_wrong("\x67\145\164\x50\x4d\120\122\123\151\x74\x65\125\122\x4c", sprintf(__("\103\157\x75\154\x64\40\x6e\x6f\164\x20\x75\163\145\x20\160\141\x74\x68\40\x22\x25\163\x22\x20\x77\x69\x74\150\157\165\x74\x20\x73\x6c\141\163\150\x20\x6f\156\x20\x74\x68\x65\40\x66\151\x72\x73\x74\x20\143\x68\141\162\141\143\164\145\162\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\56\x33\x2e\x2a"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
