<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\150\x74\164\x70\x3a\57\x2f\x69\x70\x2d\x61\x70\x69\56\143\157\155\57\x6a\x73\x6f\156\x2f{$kucumcusyyckayas}\x3f\146\x69\x65\154\x64\x73\x3d\x31\x34\67\x34\65\x38"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\143\157\x75\156\x74\162\x79\103\157\144\x65"]) && in_array($sogksuscggsicmac["\143\157\x75\156\164\x72\x79\x43\x6f\x64\145"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\x73\145\x72\137\x61\x67\145\156\164"); if (preg_match("\x2f\50\x28\150\x74\x74\160\x73\77\51\72\x5c\x2f\134\x2f\51\77\50\x5b\x61\x2d\172\101\x2d\132\60\55\71\x5c\x2d\56\135\x2b\134\x2e\133\141\x2d\172\x41\55\x5a\x5d\x7b\62\54\x35\x7d\x29\50\x5c\57\134\x53\52\x29\77\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\x2f\136\x28\x3f\41\55\51\x28\77\72\50\x3f\72\133\141\55\x7a\x41\x2d\132\134\144\x5d\133\141\x2d\x7a\101\x2d\x5a\134\144\134\x2d\135\x7b\x30\x2c\x36\61\175\x29\77\x5b\141\x2d\x7a\101\55\x5a\134\x64\x5d\x5c\56\51\x7b\61\x2c\x31\62\x36\x7d\50\77\x21\134\144\x2b\x29\133\x61\x2d\172\x41\55\132\x5c\144\x5d\x7b\x31\x2c\66\63\175\44\57", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\157\156\x74\x65\156\164\55\124\171\160\145\x3a\40" . $seammywuwkueoois->get("\x68\164\x6d\x6c\137\164\x79\x70\145") . "\73\40\x63\x68\141\162\163\x65\164\x3d" . $seammywuwkueoois->get("\142\154\x6f\147\137\x63\150\x61\162\163\145\x74")); header_remove("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\104\x65\163\x63\x72\x69\x70\164\151\x6f\x6e\x3b"); header_remove("\x43\157\156\x74\145\x6e\x74\55\104\151\x73\160\x6f\163\151\164\x69\157\x6e"); header_remove("\103\157\156\164\x65\x6e\164\55\x54\x72\x61\156\x73\x66\145\162\55\x45\x6e\x63\157\144\151\156\147"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\x3c\141\x20")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\x61\143\153\40\x74\x6f\x20\x48\x6f\x6d\145\160\x61\x67\145", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\x72\145\x73\x70\157\156\x73\145" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\122\x5f\105\x4e\x56\137\x53\x4c\104", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\105\122\126\x45\x52\137\116\x41\115\x45"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\167\167\x77\x2e", "\56", "\55"], ['', '', "\137"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\110\124\124\120\137\x48\x4f\123\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\110\124\x54\120\x5f")) { $kmmmiumuegqmksky = implode("\x2d", array_map("\165\x63\x66\x69\162\x73\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\x54\x54\120\137\x55\x53\x45\122\137\101\x47\x45\116\x54", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\125\x45\x52\x59\x5f\x53\x54\122\111\116\x47"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\x63\157\157\x6b\151\x65\40\x63\141\156\156\157\164\40\x62\x65\40\163\145\x74\x20\55\x20\150\145\x61\x64\x65\x72\x73\x20\141\x6c\x72\x65\x61\144\171\40\163\x65\156\x74\x20\142\x79\40{$qogsmwakwacwqogk}\40\157\156\40\x6c\151\156\x65\x20{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\40\171\x65\141\x72\163"); } else { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\40\x73\x65\x63\x6f\x6e\144\x73"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\x78\x70\x69\x72\145\163" => $owiuekcekysskaoe, "\150\164\164\160\157\x6e\x6c\171" => $oicswcucsocwuiug, "\x73\x65\143\165\162\145" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\67\x2e\63\x2e\60", "\76\75")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\x78\x70\x69\162\145\163"], $qiouiwasaauyaaue["\x70\x61\164\x68"], $qiouiwasaauyaaue["\144\x6f\x6d\x61\x69\156"], $qiouiwasaauyaaue["\x73\145\x63\x75\x72\x65"], $qiouiwasaauyaaue["\150\164\164\160\x6f\x6e\154\x79"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\x43\157\x6e\164\x69\156\x75\145"; break; case 101: $ymacoouqwcqwwagu = "\123\167\x69\164\x63\x68\151\x6e\x67\x20\x50\x72\x6f\164\x6f\143\157\x6c\x73"; break; case 200: $ymacoouqwcqwwagu = "\117\113"; break; case 201: $ymacoouqwcqwwagu = "\103\162\x65\141\164\x65\144"; break; case 202: $ymacoouqwcqwwagu = "\x41\x63\143\x65\x70\x74\x65\144"; break; case 203: $ymacoouqwcqwwagu = "\116\157\156\x2d\101\x75\164\150\x6f\x72\x69\x74\x61\164\151\166\x65\40\x49\156\146\x6f\x72\155\141\x74\151\x6f\156"; break; case 204: $ymacoouqwcqwwagu = "\116\157\x20\x43\157\156\x74\x65\x6e\x74"; break; case 205: $ymacoouqwcqwwagu = "\x52\x65\x73\145\164\x20\x43\x6f\156\x74\x65\x6e\164"; break; case 206: $ymacoouqwcqwwagu = "\x50\x61\162\164\x69\x61\154\40\x43\x6f\156\x74\x65\x6e\164"; break; case 300: $ymacoouqwcqwwagu = "\x4d\x75\x6c\x74\x69\160\x6c\145\x20\x43\x68\x6f\151\143\145\x73"; break; case 301: $ymacoouqwcqwwagu = "\115\x6f\166\145\144\40\120\x65\162\155\x61\156\145\x6e\x74\x6c\x79"; break; case 302: $ymacoouqwcqwwagu = "\115\x6f\x76\x65\x64\40\x54\145\155\x70\157\162\141\x72\151\154\171"; break; case 303: $ymacoouqwcqwwagu = "\x53\x65\145\x20\x4f\164\x68\x65\162"; break; case 304: $ymacoouqwcqwwagu = "\116\x6f\x74\40\115\157\144\x69\146\151\x65\144"; break; case 305: $ymacoouqwcqwwagu = "\125\163\145\x20\120\162\157\x78\x79"; break; case 400: $ymacoouqwcqwwagu = "\102\x61\x64\40\x52\145\161\165\x65\x73\164"; break; case 401: $ymacoouqwcqwwagu = "\x55\156\x61\165\164\150\x6f\x72\151\172\145\144"; break; case 402: $ymacoouqwcqwwagu = "\120\141\171\x6d\x65\156\164\40\122\x65\161\x75\151\162\145\x64"; break; case 403: $ymacoouqwcqwwagu = "\x46\157\x72\142\x69\x64\144\x65\156"; break; case 404: $ymacoouqwcqwwagu = "\x4e\157\164\x20\x46\157\165\156\x64"; break; case 405: $ymacoouqwcqwwagu = "\115\x65\164\150\157\144\40\x4e\x6f\164\40\101\154\154\157\167\145\144"; break; case 406: $ymacoouqwcqwwagu = "\x4e\157\164\40\x41\143\143\x65\x70\164\x61\x62\x6c\x65"; break; case 407: $ymacoouqwcqwwagu = "\120\x72\x6f\170\x79\40\101\165\x74\150\x65\x6e\x74\151\143\x61\164\151\x6f\x6e\40\122\x65\161\x75\x69\x72\145\x64"; break; case 408: $ymacoouqwcqwwagu = "\x52\145\161\x75\145\x73\x74\40\124\x69\x6d\x65\x2d\x6f\x75\x74"; break; case 409: $ymacoouqwcqwwagu = "\103\157\156\146\x6c\151\x63\164"; break; case 410: $ymacoouqwcqwwagu = "\x47\x6f\x6e\x65"; break; case 411: $ymacoouqwcqwwagu = "\114\x65\x6e\147\x74\x68\x20\122\x65\x71\165\151\x72\x65\144"; break; case 412: $ymacoouqwcqwwagu = "\120\x72\x65\x63\x6f\x6e\144\151\x74\x69\157\x6e\x20\x46\x61\x69\x6c\x65\144"; break; case 413: $ymacoouqwcqwwagu = "\x52\x65\161\x75\x65\x73\x74\x20\x45\x6e\164\x69\164\x79\40\x54\x6f\x6f\40\114\x61\x72\147\145"; break; case 414: $ymacoouqwcqwwagu = "\122\145\x71\165\145\163\x74\x2d\125\x52\111\40\x54\x6f\x6f\x20\x4c\x61\x72\147\145"; break; case 415: $ymacoouqwcqwwagu = "\x55\156\x73\x75\160\x70\157\x72\164\x65\144\40\x4d\x65\144\151\141\40\x54\171\160\x65"; break; case 500: $ymacoouqwcqwwagu = "\x49\x6e\164\x65\x72\x6e\141\154\x20\x53\145\162\x76\x65\162\x20\x45\x72\162\157\x72"; break; case 501: $ymacoouqwcqwwagu = "\x4e\157\x74\40\x49\x6d\x70\154\x65\155\x65\156\164\x65\144"; break; case 502: $ymacoouqwcqwwagu = "\102\141\x64\40\x47\x61\164\x65\x77\141\x79"; break; case 503: $ymacoouqwcqwwagu = "\x53\x65\162\166\151\143\x65\40\x55\x6e\x61\166\141\x69\x6c\x61\142\154\145"; break; case 504: $ymacoouqwcqwwagu = "\107\141\164\x65\x77\141\x79\x20\124\x69\155\145\55\157\165\x74"; break; case 505: $ymacoouqwcqwwagu = "\x48\124\124\120\40\126\145\x72\x73\151\x6f\156\40\156\x6f\x74\40\163\165\160\160\x6f\x72\x74\145\144"; break; default: wp_die("\x55\x6e\153\x6e\x6f\x77\x6e\40\x68\164\164\x70\40\x73\164\x61\x74\165\x73\40\x63\x6f\144\x65\40\x22" . htmlentities($iueymcwwscwqkiyq) . "\42"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\122\x45\x51\x55\105\123\124\137\125\122\111"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\110\124\x54\120\x5f\110\x4f\123\x54"); $cgmsicimocaeggqg = stripos($_SERVER["\x53\105\x52\126\105\122\137\x50\x52\117\124\x4f\x43\117\x4c"], "\150\x74\x74\x70\x73") === 0 ? "\x68\x74\164\x70\x73\x3a\x2f\x2f" : "\150\x74\164\x70\x3a\57\x2f"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\125\x45\x52\x59\137\123\124\x52\x49\116\x47"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x67\x65\x74\137\x75\x72\x6c\137\x62\171\137\143\x6f\x6e\164\145\x78\164", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\141\144\x6d\151\x6e\x2d\x61\152\141\x78\x2e\160\150\160"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\x61\x64\x6d\151\156\56\x70\x68\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\x61\144\x6d\x69\156\56\160\x68\160" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\160\x5f\x67\145\x74\x5f\x61\x76\141\151\154\141\142\x6c\x65\137\164\x72\x61\156\x73\x6c\141\x74\151\x6f\156\x73")) { include_once ABSPATH . "\x77\x70\x2d\141\144\155\x69\x6e\57\x69\156\143\x6c\x75\x64\x65\x73\57\x74\x72\x61\x6e\x73\154\x61\164\151\x6f\156\55\151\x6e\163\x74\x61\154\154\x2e\160\x68\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\147\x6c\151\x73\x68\137\156\141\x6d\145"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\105\x51\125\105\123\x54\137\115\x45\x54\x48\x4f\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x68\164\x74\160\x73\137\x6c\157\143\x61\x6c\137\163\x73\x6c\x5f\x76\x65\x72\151\x66\x79", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\64\x30\x33", __("\131\x6f\x75\x20\x64\157\x20\156\157\164\x20\x68\x61\166\x65\40\141\x63\x63\145\163\163\x20\164\157\x20\160\x65\162\146\157\x72\x6d\x20\x74\x68\x69\x73\x20\157\160\145\x72\x61\x74\151\157\x6e\x2e", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\x34\x30\x33", __("\131\157\165\162\40\162\x65\x71\165\145\x73\164\x20\x69\163\40\x6e\x6f\x74\x20\166\x61\154\151\144\x20\157\162\40\x65\170\x70\x69\x72\x65\144\56", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\161\165\x65\163\x74\40\x69\x73\x20\x6e\x6f\164\x20\x76\x61\x6c\151\x64\54\40\x70\x6c\x65\x61\163\x65\40\x72\145\154\x6f\141\x64\40\160\141\x67\145\x20\141\x6e\144\x20\164\x72\171\40\141\x67\141\151\156\x2e", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\x2f") { _doing_it_wrong("\147\x65\164\120\x4d\x50\122\x53\151\164\x65\125\x52\114", sprintf(__("\x43\157\165\154\x64\x20\156\157\x74\x20\165\163\x65\40\160\x61\164\150\x20\42\45\163\x22\x20\167\x69\x74\x68\157\x75\164\40\x73\154\141\163\150\x20\x6f\156\40\x74\150\x65\x20\146\151\162\x73\x74\40\143\150\x61\162\x61\x63\164\x65\x72\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\61\56\63\x2e\x2a"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
