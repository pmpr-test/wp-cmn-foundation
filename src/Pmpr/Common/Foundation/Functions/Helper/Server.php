<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574c05515f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\x68\164\x74\160\x3a\57\x2f\151\x70\55\x61\x70\151\56\143\157\x6d\57\152\163\x6f\x6e\57{$kucumcusyyckayas}\77\x66\151\x65\154\x64\163\75\x31\x34\x37\x34\x35\x38"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\x63\157\x75\x6e\x74\x72\171\x43\x6f\x64\145"]) && in_array($sogksuscggsicmac["\143\x6f\x75\x6e\x74\162\171\x43\157\144\145"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\x73\145\162\137\x61\x67\x65\x6e\164"); if (preg_match("\x2f\50\50\150\164\164\x70\x73\x3f\x29\72\x5c\x2f\x5c\x2f\51\77\x28\x5b\x61\x2d\172\101\x2d\132\60\x2d\71\x5c\x2d\56\x5d\x2b\134\x2e\133\141\55\x7a\x41\55\x5a\135\x7b\x32\x2c\65\x7d\x29\x28\134\x2f\134\123\52\x29\77\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\57\x5e\50\77\x21\x2d\51\50\77\72\x28\77\x3a\133\141\x2d\172\x41\x2d\132\x5c\x64\x5d\x5b\141\x2d\172\101\55\x5a\134\x64\x5c\55\x5d\173\x30\x2c\x36\x31\x7d\51\77\133\x61\x2d\172\x41\55\x5a\x5c\x64\135\134\x2e\x29\x7b\x31\x2c\61\62\66\x7d\50\x3f\x21\x5c\x64\53\51\x5b\x61\55\172\101\x2d\132\x5c\x64\135\x7b\x31\x2c\66\x33\x7d\44\x2f", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function acsaeckawgweswsi(WP_REST_Request $aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { if ($aqmsgcggocyugeco) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } return $eqgoocgaqwqcimie; } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\x6f\156\x74\145\x6e\164\x2d\x54\x79\x70\145\x3a\x20" . $seammywuwkueoois->get("\150\x74\x6d\x6c\x5f\x74\x79\160\145") . "\x3b\x20\143\150\141\162\163\145\164\75" . $seammywuwkueoois->get("\x62\x6c\x6f\147\137\x63\x68\x61\x72\163\145\164")); header_remove("\x43\x6f\x6e\x74\145\156\164\x2d\x44\145\163\x63\x72\x69\160\164\151\x6f\156\73"); header_remove("\x43\x6f\x6e\x74\x65\x6e\164\x2d\x44\x69\163\x70\157\x73\151\164\x69\157\x6e"); header_remove("\x43\x6f\x6e\x74\x65\156\x74\55\124\162\141\156\163\146\145\162\55\x45\x6e\143\x6f\x64\x69\x6e\147"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\x3c\x61\x20")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\x42\141\x63\153\x20\164\157\40\110\x6f\x6d\145\160\141\x67\145", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\162\x65\x73\x70\x6f\156\x73\x65" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\x52\x5f\105\116\126\x5f\x53\x4c\104", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\x53\105\122\x56\105\122\137\x4e\101\115\105"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\x77\167\x77\56", "\56", "\55"], ['', '', "\x5f"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\110\124\x54\x50\137\110\x4f\123\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\x48\124\124\120\x5f")) { $kmmmiumuegqmksky = implode("\55", array_map("\165\x63\x66\151\x72\163\x74", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\x54\124\x50\x5f\x55\x53\105\x52\x5f\101\107\105\116\x54", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\125\105\x52\x59\x5f\x53\124\122\x49\116\x47"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\143\x6f\157\x6b\151\145\x20\x63\x61\x6e\x6e\x6f\x74\x20\x62\145\x20\163\145\x74\40\x2d\40\x68\145\141\x64\x65\x72\163\x20\x61\154\x72\x65\x61\144\171\x20\163\145\156\x74\40\x62\171\40{$qogsmwakwacwqogk}\x20\x6f\x6e\x20\154\x69\156\x65\40{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\x20\x79\x65\x61\162\x73"); } else { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\163\145\143\157\156\x64\x73"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\x78\160\151\162\145\x73" => $owiuekcekysskaoe, "\x68\x74\x74\160\x6f\156\x6c\x79" => $oicswcucsocwuiug, "\163\x65\143\x75\162\145" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\x37\x2e\x33\56\60", "\x3e\75")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\145\x78\160\151\x72\145\163"], $qiouiwasaauyaaue["\x70\x61\x74\x68"], $qiouiwasaauyaaue["\x64\x6f\x6d\141\151\156"], $qiouiwasaauyaaue["\163\x65\x63\x75\x72\145"], $qiouiwasaauyaaue["\x68\164\x74\x70\157\156\x6c\x79"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function weyscqicysskoama($keccaugmemegoimu) : array { $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); return $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\103\x6f\156\x74\x69\156\165\145"; break; case 101: $ymacoouqwcqwwagu = "\x53\167\151\x74\143\x68\x69\156\147\x20\x50\x72\x6f\x74\157\143\x6f\154\x73"; break; case 200: $ymacoouqwcqwwagu = "\117\113"; break; case 201: $ymacoouqwcqwwagu = "\103\162\x65\x61\x74\145\x64"; break; case 202: $ymacoouqwcqwwagu = "\101\x63\x63\x65\x70\164\x65\144"; break; case 203: $ymacoouqwcqwwagu = "\116\157\x6e\55\101\x75\x74\x68\x6f\162\x69\164\x61\164\x69\x76\145\x20\111\x6e\x66\x6f\x72\155\141\x74\x69\x6f\x6e"; break; case 204: $ymacoouqwcqwwagu = "\116\157\40\x43\x6f\156\x74\x65\x6e\164"; break; case 205: $ymacoouqwcqwwagu = "\x52\145\163\x65\164\40\103\x6f\x6e\x74\x65\x6e\x74"; break; case 206: $ymacoouqwcqwwagu = "\x50\x61\162\x74\151\x61\x6c\x20\103\157\x6e\164\145\156\164"; break; case 300: $ymacoouqwcqwwagu = "\x4d\165\154\164\x69\160\x6c\145\40\103\150\157\151\x63\145\x73"; break; case 301: $ymacoouqwcqwwagu = "\x4d\x6f\166\x65\x64\40\x50\x65\162\x6d\141\x6e\x65\156\x74\x6c\171"; break; case 302: $ymacoouqwcqwwagu = "\x4d\157\x76\x65\x64\40\x54\x65\155\160\x6f\x72\141\162\151\154\171"; break; case 303: $ymacoouqwcqwwagu = "\x53\145\x65\x20\x4f\x74\150\x65\x72"; break; case 304: $ymacoouqwcqwwagu = "\116\157\x74\40\115\x6f\x64\151\x66\x69\x65\x64"; break; case 305: $ymacoouqwcqwwagu = "\x55\163\x65\40\120\162\157\x78\x79"; break; case 400: $ymacoouqwcqwwagu = "\x42\x61\x64\x20\122\x65\161\165\x65\163\x74"; break; case 401: $ymacoouqwcqwwagu = "\x55\156\x61\x75\x74\150\157\x72\151\x7a\145\144"; break; case 402: $ymacoouqwcqwwagu = "\120\141\171\155\x65\156\x74\x20\122\x65\x71\165\151\162\x65\144"; break; case 403: $ymacoouqwcqwwagu = "\x46\x6f\x72\x62\x69\144\x64\145\156"; break; case 404: $ymacoouqwcqwwagu = "\116\157\164\40\x46\x6f\165\x6e\x64"; break; case 405: $ymacoouqwcqwwagu = "\115\x65\164\150\157\144\x20\116\x6f\164\40\x41\x6c\x6c\x6f\x77\x65\x64"; break; case 406: $ymacoouqwcqwwagu = "\116\x6f\164\x20\101\143\x63\145\160\x74\141\x62\154\145"; break; case 407: $ymacoouqwcqwwagu = "\120\162\x6f\x78\171\x20\x41\165\164\150\x65\156\x74\151\x63\x61\164\151\157\156\40\122\145\x71\165\151\x72\x65\x64"; break; case 408: $ymacoouqwcqwwagu = "\122\145\x71\165\x65\x73\x74\40\124\151\x6d\x65\55\157\165\164"; break; case 409: $ymacoouqwcqwwagu = "\103\x6f\156\x66\154\151\143\164"; break; case 410: $ymacoouqwcqwwagu = "\107\157\156\x65"; break; case 411: $ymacoouqwcqwwagu = "\x4c\x65\x6e\x67\164\150\x20\x52\145\161\x75\x69\162\x65\x64"; break; case 412: $ymacoouqwcqwwagu = "\x50\x72\x65\x63\157\156\144\151\164\x69\x6f\x6e\40\106\x61\151\154\145\x64"; break; case 413: $ymacoouqwcqwwagu = "\122\x65\161\x75\145\163\x74\40\105\x6e\x74\151\164\171\40\x54\157\157\40\x4c\141\x72\x67\145"; break; case 414: $ymacoouqwcqwwagu = "\122\145\161\x75\x65\163\164\x2d\125\122\111\40\124\157\x6f\40\114\x61\x72\x67\145"; break; case 415: $ymacoouqwcqwwagu = "\125\156\163\x75\x70\x70\157\x72\164\145\x64\x20\x4d\x65\144\x69\x61\x20\124\x79\x70\145"; break; case 500: $ymacoouqwcqwwagu = "\x49\156\x74\145\162\x6e\141\x6c\40\123\x65\162\166\x65\x72\40\x45\162\162\x6f\162"; break; case 501: $ymacoouqwcqwwagu = "\116\x6f\x74\40\111\155\160\154\x65\155\145\156\x74\145\144"; break; case 502: $ymacoouqwcqwwagu = "\x42\141\x64\x20\107\141\164\x65\x77\x61\171"; break; case 503: $ymacoouqwcqwwagu = "\x53\x65\x72\x76\x69\143\145\40\125\156\141\166\x61\151\154\141\x62\x6c\145"; break; case 504: $ymacoouqwcqwwagu = "\x47\x61\x74\145\x77\x61\x79\x20\124\151\x6d\x65\55\157\x75\164"; break; case 505: $ymacoouqwcqwwagu = "\x48\x54\124\120\40\126\145\x72\163\x69\x6f\x6e\40\156\x6f\164\40\163\165\160\160\157\162\164\145\x64"; break; default: wp_die("\125\x6e\x6b\156\x6f\x77\156\40\x68\164\164\x70\x20\x73\x74\x61\164\x75\x73\x20\143\x6f\144\145\40\42" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq])) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq], $eeamcawaiqocomwy); unset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq]); } return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq])) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq], $eeamcawaiqocomwy); unset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq]); } return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\x52\105\x51\125\105\x53\124\x5f\125\122\x49"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\110\x54\124\x50\x5f\x48\117\x53\124"); $cgmsicimocaeggqg = stripos($_SERVER["\x53\105\122\126\x45\x52\137\x50\122\x4f\124\117\x43\117\x4c"], "\150\164\x74\x70\163") === 0 ? "\x68\164\x74\160\x73\x3a\57\x2f" : "\x68\164\164\x70\x3a\x2f\x2f"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\125\105\x52\131\x5f\123\124\122\111\x4e\x47"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x67\x65\x74\137\165\162\154\137\142\x79\x5f\143\x6f\156\164\145\x78\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\141\144\x6d\x69\156\x2d\141\x6a\141\170\x2e\x70\150\x70"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\x64\x6d\x69\x6e\56\x70\150\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\x61\144\x6d\151\156\56\160\x68\x70" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\x70\137\147\145\164\137\x61\166\141\x69\x6c\141\142\x6c\145\137\x74\162\141\x6e\163\154\x61\164\151\157\156\163")) { include_once ABSPATH . "\x77\x70\55\x61\144\x6d\151\156\x2f\151\x6e\x63\x6c\x75\x64\x65\x73\x2f\164\x72\141\156\x73\154\141\x74\x69\157\156\x2d\x69\x6e\x73\x74\x61\x6c\154\x2e\160\150\160"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\156\x67\154\x69\163\150\137\156\x61\x6d\x65"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\x45\121\125\105\x53\124\x5f\x4d\105\124\x48\x4f\104", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\164\164\160\x73\137\x6c\157\x63\141\154\137\163\163\154\x5f\166\x65\x72\x69\146\x79", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\64\60\63", __("\x59\157\x75\40\x64\x6f\40\x6e\157\x74\40\150\141\166\145\40\x61\143\x63\145\x73\163\40\x74\157\40\160\145\162\x66\x6f\162\155\40\x74\150\x69\163\40\x6f\160\145\162\x61\164\x69\157\x6e\56", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\x34\x30\63", __("\x59\x6f\x75\162\40\162\x65\x71\x75\x65\163\x74\40\151\163\x20\x6e\x6f\x74\40\x76\x61\154\151\144\x20\x6f\x72\x20\145\x78\160\x69\162\x65\144\x2e", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x71\165\x65\163\164\x20\151\163\40\156\157\x74\x20\166\141\154\151\144\54\x20\160\154\145\x61\163\145\40\x72\145\154\157\x61\x64\x20\160\141\147\145\x20\141\156\x64\x20\x74\162\171\40\x61\x67\x61\x69\156\56", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\x2f") { _doing_it_wrong("\x67\145\x74\120\x4d\x50\122\x53\x69\164\x65\125\x52\114", sprintf(__("\x43\157\165\154\x64\40\156\157\x74\x20\x75\163\x65\x20\160\x61\164\150\40\42\45\x73\x22\40\167\x69\x74\150\157\x75\x74\x20\163\x6c\141\x73\150\40\x6f\156\x20\x74\150\145\x20\146\x69\x72\x73\164\40\143\x68\x61\162\x61\143\x74\145\x72\56", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\x2e\63\x2e\52"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
