<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9903c56c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\x68\164\164\160\x3a\x2f\57\151\160\55\141\160\x69\56\x63\x6f\155\x2f\x6a\x73\x6f\x6e\57{$kucumcusyyckayas}\77\146\x69\x65\x6c\x64\163\x3d\x31\x34\x37\x34\x35\70"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\143\157\165\x6e\164\x72\x79\x43\x6f\144\145"]) && in_array($sogksuscggsicmac["\143\x6f\x75\156\x74\162\x79\x43\157\x64\145"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\163\x65\x72\x5f\x61\147\x65\x6e\164"); if (preg_match("\x2f\x28\x28\x68\x74\x74\160\163\x3f\51\x3a\x5c\57\134\57\x29\77\x28\x5b\141\x2d\x7a\101\x2d\x5a\60\x2d\71\x5c\55\x2e\x5d\53\134\56\x5b\x61\x2d\172\x41\x2d\132\135\x7b\x32\x2c\x35\175\51\50\x5c\x2f\x5c\123\x2a\51\x3f\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\57\136\50\x3f\41\x2d\x29\x28\77\x3a\x28\77\x3a\x5b\x61\x2d\x7a\101\55\x5a\134\x64\x5d\x5b\141\55\172\x41\55\x5a\x5c\x64\x5c\55\x5d\x7b\x30\x2c\66\61\x7d\x29\77\133\x61\x2d\x7a\101\x2d\x5a\134\144\135\134\x2e\51\x7b\x31\54\61\x32\66\x7d\50\77\x21\x5c\x64\53\x29\x5b\x61\55\x7a\x41\x2d\132\134\x64\x5d\x7b\61\x2c\66\x33\x7d\44\57", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function acsaeckawgweswsi(WP_REST_Request $aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { if ($aqmsgcggocyugeco) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } return $eqgoocgaqwqcimie; } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\x43\x6f\156\164\145\x6e\x74\x2d\124\x79\x70\145\x3a\40" . $seammywuwkueoois->get("\150\164\155\154\x5f\x74\171\160\x65") . "\73\40\143\x68\141\x72\163\x65\164\x3d" . $seammywuwkueoois->get("\142\x6c\x6f\147\x5f\143\150\141\x72\163\x65\x74")); header_remove("\x43\157\156\x74\145\x6e\x74\x2d\x44\x65\x73\x63\x72\x69\x70\164\x69\x6f\x6e\73"); header_remove("\103\157\156\164\x65\x6e\x74\55\104\151\163\x70\x6f\163\x69\x74\151\x6f\156"); header_remove("\x43\157\156\164\145\156\164\x2d\x54\162\x61\x6e\163\146\x65\162\x2d\x45\156\143\x6f\144\151\156\147"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\x3c\x61\40")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\141\143\153\40\164\157\40\x48\x6f\x6d\x65\x70\x61\147\145", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\162\145\163\160\157\x6e\163\145" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\x52\x5f\105\x4e\x56\137\123\114\104", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\x45\122\126\105\122\137\x4e\x41\x4d\105"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\167\167\167\56", "\x2e", "\55"], ['', '', "\x5f"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\x48\124\124\120\137\x48\117\123\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\x48\124\124\x50\137")) { $kmmmiumuegqmksky = implode("\x2d", array_map("\165\143\146\151\162\x73\x74", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\x54\x54\x50\137\125\x53\105\x52\x5f\x41\107\x45\x4e\124", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\x51\125\x45\x52\x59\137\123\x54\x52\x49\116\x47"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\40\x63\157\157\153\x69\145\x20\x63\x61\x6e\156\157\164\x20\x62\x65\x20\x73\145\164\40\55\x20\x68\x65\x61\144\145\162\x73\40\x61\x6c\162\x65\x61\x64\171\x20\x73\x65\x6e\x74\40\142\x79\x20{$qogsmwakwacwqogk}\40\157\156\40\154\151\x6e\145\40{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\x20\x79\x65\141\x72\x73"); } else { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\163\145\143\x6f\156\144\163"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\170\160\151\162\x65\x73" => $owiuekcekysskaoe, "\x68\164\164\x70\x6f\156\154\x79" => $oicswcucsocwuiug, "\x73\145\143\x75\162\x65" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\67\x2e\63\56\x30", "\x3e\x3d")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\145\x78\x70\151\162\x65\163"], $qiouiwasaauyaaue["\160\x61\164\x68"], $qiouiwasaauyaaue["\144\x6f\x6d\x61\151\156"], $qiouiwasaauyaaue["\x73\x65\143\x75\162\145"], $qiouiwasaauyaaue["\150\164\x74\x70\157\156\x6c\171"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\103\x6f\x6e\x74\x69\156\x75\x65"; break; case 101: $ymacoouqwcqwwagu = "\123\x77\x69\164\x63\x68\151\156\x67\x20\120\162\x6f\x74\x6f\x63\157\x6c\x73"; break; case 200: $ymacoouqwcqwwagu = "\117\x4b"; break; case 201: $ymacoouqwcqwwagu = "\x43\x72\145\141\x74\145\x64"; break; case 202: $ymacoouqwcqwwagu = "\101\x63\143\145\160\164\x65\144"; break; case 203: $ymacoouqwcqwwagu = "\116\157\x6e\55\101\x75\164\150\x6f\162\151\x74\x61\x74\x69\166\145\40\111\156\146\x6f\x72\x6d\141\x74\151\x6f\x6e"; break; case 204: $ymacoouqwcqwwagu = "\116\157\x20\103\157\156\x74\x65\x6e\164"; break; case 205: $ymacoouqwcqwwagu = "\122\145\163\145\x74\40\x43\x6f\156\x74\145\156\x74"; break; case 206: $ymacoouqwcqwwagu = "\120\141\162\x74\151\x61\x6c\40\x43\157\x6e\164\145\x6e\164"; break; case 300: $ymacoouqwcqwwagu = "\x4d\165\154\x74\x69\160\154\x65\x20\103\150\x6f\151\143\145\x73"; break; case 301: $ymacoouqwcqwwagu = "\x4d\157\166\x65\x64\40\x50\145\162\155\x61\x6e\x65\156\164\154\x79"; break; case 302: $ymacoouqwcqwwagu = "\115\x6f\x76\x65\x64\40\x54\145\155\x70\x6f\162\x61\x72\x69\154\171"; break; case 303: $ymacoouqwcqwwagu = "\x53\x65\x65\40\x4f\x74\150\x65\162"; break; case 304: $ymacoouqwcqwwagu = "\x4e\x6f\164\40\115\x6f\x64\151\x66\151\x65\x64"; break; case 305: $ymacoouqwcqwwagu = "\x55\163\145\x20\x50\x72\x6f\x78\171"; break; case 400: $ymacoouqwcqwwagu = "\102\x61\144\x20\x52\x65\161\165\x65\x73\x74"; break; case 401: $ymacoouqwcqwwagu = "\x55\x6e\x61\x75\x74\150\157\x72\x69\172\145\x64"; break; case 402: $ymacoouqwcqwwagu = "\120\x61\x79\155\x65\x6e\164\x20\x52\x65\161\x75\151\162\145\144"; break; case 403: $ymacoouqwcqwwagu = "\106\157\x72\142\x69\144\144\145\x6e"; break; case 404: $ymacoouqwcqwwagu = "\x4e\x6f\164\x20\106\x6f\165\156\144"; break; case 405: $ymacoouqwcqwwagu = "\x4d\x65\x74\x68\157\144\x20\x4e\x6f\x74\x20\101\x6c\154\157\x77\x65\144"; break; case 406: $ymacoouqwcqwwagu = "\116\157\x74\x20\x41\x63\x63\x65\160\x74\141\x62\154\145"; break; case 407: $ymacoouqwcqwwagu = "\120\x72\157\170\171\40\x41\x75\x74\x68\145\x6e\164\x69\143\x61\164\151\157\x6e\x20\122\x65\161\165\x69\x72\x65\x64"; break; case 408: $ymacoouqwcqwwagu = "\122\x65\x71\x75\x65\x73\164\x20\x54\151\x6d\x65\55\x6f\x75\x74"; break; case 409: $ymacoouqwcqwwagu = "\x43\x6f\156\146\x6c\151\143\x74"; break; case 410: $ymacoouqwcqwwagu = "\x47\157\x6e\x65"; break; case 411: $ymacoouqwcqwwagu = "\x4c\x65\156\147\x74\150\40\122\145\161\165\151\162\x65\144"; break; case 412: $ymacoouqwcqwwagu = "\x50\x72\145\x63\157\156\x64\151\164\x69\x6f\156\40\x46\141\151\x6c\x65\144"; break; case 413: $ymacoouqwcqwwagu = "\122\x65\161\x75\x65\x73\164\x20\105\x6e\x74\151\164\x79\40\x54\157\157\x20\x4c\141\x72\147\x65"; break; case 414: $ymacoouqwcqwwagu = "\122\145\x71\x75\145\x73\x74\55\x55\x52\111\40\124\157\x6f\40\114\141\x72\x67\145"; break; case 415: $ymacoouqwcqwwagu = "\x55\x6e\163\x75\160\x70\157\162\x74\145\x64\x20\115\x65\144\x69\141\x20\124\x79\160\145"; break; case 500: $ymacoouqwcqwwagu = "\x49\156\x74\x65\162\x6e\141\154\40\x53\x65\162\x76\x65\x72\40\105\162\162\x6f\162"; break; case 501: $ymacoouqwcqwwagu = "\116\157\164\x20\111\155\160\154\145\155\x65\156\x74\x65\144"; break; case 502: $ymacoouqwcqwwagu = "\102\141\x64\x20\x47\141\164\145\x77\141\171"; break; case 503: $ymacoouqwcqwwagu = "\x53\x65\162\166\151\143\x65\40\125\x6e\141\x76\x61\151\x6c\141\x62\154\145"; break; case 504: $ymacoouqwcqwwagu = "\x47\141\164\x65\x77\141\x79\40\124\151\155\x65\55\x6f\x75\164"; break; case 505: $ymacoouqwcqwwagu = "\x48\124\124\x50\x20\126\x65\162\163\151\x6f\156\40\156\157\x74\x20\x73\165\x70\x70\x6f\x72\x74\x65\x64"; break; default: wp_die("\125\x6e\x6b\x6e\x6f\167\156\40\x68\164\164\160\x20\163\164\x61\x74\x75\x73\x20\x63\157\x64\145\x20\42" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\122\105\121\125\105\x53\124\137\x55\122\111"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\77")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\124\124\120\x5f\x48\x4f\x53\x54"); $cgmsicimocaeggqg = stripos($_SERVER["\x53\x45\122\x56\x45\122\x5f\x50\122\x4f\124\x4f\103\117\x4c"], "\150\164\164\160\x73") === 0 ? "\x68\x74\x74\x70\163\72\57\57" : "\150\164\164\x70\72\x2f\x2f"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\125\105\122\131\x5f\x53\124\122\111\116\x47"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\145\x74\x5f\x75\162\154\137\x62\x79\x5f\x63\x6f\x6e\164\x65\x78\164", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\x64\x6d\151\156\55\x61\152\x61\170\x2e\160\150\160"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\x61\x64\155\151\x6e\56\160\150\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\x61\144\x6d\151\x6e\56\x70\x68\x70" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\x70\137\147\x65\164\137\x61\166\x61\151\154\141\142\154\x65\137\164\x72\x61\156\x73\154\x61\x74\x69\x6f\156\x73")) { include_once ABSPATH . "\x77\x70\x2d\141\144\x6d\151\x6e\x2f\x69\x6e\x63\154\165\144\x65\163\57\164\x72\x61\156\x73\x6c\x61\x74\x69\157\x6e\55\x69\156\x73\164\x61\x6c\x6c\x2e\x70\150\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\147\154\x69\163\x68\137\x6e\141\x6d\145"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\105\x51\125\105\123\x54\137\115\x45\x54\110\117\104", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\x74\x74\160\163\x5f\x6c\x6f\x63\141\154\137\163\163\154\x5f\x76\x65\x72\x69\x66\x79", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\x34\x30\63", __("\x59\157\x75\x20\x64\157\x20\156\x6f\164\40\150\141\x76\145\40\x61\x63\143\145\163\x73\40\x74\157\40\x70\x65\162\x66\157\x72\x6d\40\x74\x68\x69\x73\40\157\160\145\x72\x61\x74\151\x6f\156\x2e", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\x34\x30\63", __("\131\157\165\x72\40\x72\x65\161\165\x65\x73\x74\40\151\x73\x20\156\157\164\40\166\141\x6c\151\144\x20\x6f\162\40\145\x78\x70\151\162\145\x64\56", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\165\145\x73\164\40\x69\x73\x20\x6e\x6f\x74\x20\x76\141\154\151\144\x2c\x20\160\x6c\x65\141\163\145\40\x72\x65\154\x6f\x61\144\40\160\141\x67\145\x20\x61\156\x64\40\x74\162\x79\40\141\147\141\x69\x6e\56", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\x2f") { _doing_it_wrong("\147\x65\164\120\115\x50\x52\x53\x69\164\145\x55\x52\x4c", sprintf(__("\103\x6f\165\x6c\144\40\x6e\x6f\164\x20\165\x73\x65\40\160\141\164\150\40\x22\x25\163\42\40\167\151\164\x68\x6f\x75\x74\x20\x73\154\x61\x73\x68\x20\x6f\156\x20\164\x68\145\40\146\151\x72\163\164\x20\143\150\141\162\x61\x63\164\x65\162\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\x2e\x33\56\52"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
