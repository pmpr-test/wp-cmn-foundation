<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d8ad41a06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\x68\164\x74\160\x3a\57\57\151\x70\x2d\141\160\x69\x2e\143\x6f\155\x2f\x6a\x73\x6f\x6e\57{$kucumcusyyckayas}\77\146\x69\x65\154\x64\x73\x3d\61\x34\x37\64\65\70"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\x63\157\165\x6e\164\x72\x79\x43\x6f\x64\x65"]) && in_array($sogksuscggsicmac["\x63\x6f\x75\156\x74\162\x79\103\x6f\144\x65"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\163\145\x72\x5f\141\147\x65\156\164"); if (preg_match("\x2f\50\x28\150\164\164\160\x73\77\51\72\134\57\134\x2f\x29\77\50\133\x61\55\x7a\101\55\132\x30\x2d\x39\x5c\55\56\135\53\134\x2e\x5b\x61\55\x7a\101\x2d\x5a\135\173\x32\54\65\175\51\50\x5c\57\x5c\123\x2a\x29\x3f\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\57\x5e\x28\77\41\x2d\51\x28\x3f\72\x28\x3f\72\x5b\141\x2d\x7a\101\x2d\132\134\x64\x5d\x5b\x61\55\172\x41\55\132\134\144\x5c\55\135\173\60\x2c\66\x31\x7d\51\77\133\x61\55\172\101\55\x5a\x5c\x64\x5d\134\56\51\173\61\54\61\x32\66\175\50\77\41\x5c\x64\53\51\133\x61\55\x7a\101\x2d\x5a\x5c\144\135\173\61\x2c\66\x33\x7d\44\57", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\x43\x6f\x6e\x74\145\156\164\x2d\124\x79\x70\x65\72\40" . $seammywuwkueoois->get("\x68\x74\x6d\154\137\x74\x79\160\x65") . "\x3b\40\143\150\141\162\163\145\164\75" . $seammywuwkueoois->get("\x62\154\x6f\147\x5f\143\150\141\x72\163\x65\164")); header_remove("\103\157\156\x74\145\x6e\164\55\x44\x65\x73\143\162\151\160\164\x69\x6f\156\x3b"); header_remove("\103\157\x6e\164\x65\156\x74\55\104\x69\x73\160\157\x73\x69\164\151\x6f\156"); header_remove("\103\157\x6e\x74\x65\156\164\55\x54\x72\x61\156\x73\146\x65\x72\x2d\x45\x6e\x63\x6f\144\x69\x6e\147"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\74\141\x20")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\x61\x63\x6b\x20\x74\157\x20\x48\x6f\x6d\x65\x70\x61\147\x65", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\x72\145\163\160\157\x6e\x73\x65" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\122\x5f\x45\x4e\126\x5f\123\x4c\x44", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\x45\122\126\105\x52\x5f\116\x41\x4d\x45"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\167\x77\167\x2e", "\x2e", "\55"], ['', '', "\137"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\56", $_SERVER["\110\x54\124\120\x5f\x48\x4f\x53\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\110\x54\124\120\x5f")) { $kmmmiumuegqmksky = implode("\55", array_map("\x75\143\x66\x69\162\x73\x74", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\x54\x54\x50\137\125\x53\x45\x52\137\101\107\x45\116\124", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\125\105\x52\x59\x5f\x53\124\x52\x49\x4e\107"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\40\143\157\x6f\153\151\x65\x20\143\141\x6e\156\x6f\x74\40\142\x65\x20\163\x65\x74\x20\55\40\x68\145\x61\x64\x65\x72\x73\x20\x61\x6c\162\x65\141\144\171\40\x73\145\x6e\164\40\x62\171\40{$qogsmwakwacwqogk}\40\157\x6e\40\x6c\151\x6e\145\40{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\x20\171\145\x61\162\163"); } else { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\163\x65\x63\x6f\x6e\x64\163"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\170\x70\151\x72\x65\x73" => $owiuekcekysskaoe, "\x68\x74\x74\160\x6f\156\154\171" => $oicswcucsocwuiug, "\x73\145\143\165\162\x65" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\57", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\x37\56\63\x2e\x30", "\76\75")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\x78\160\x69\162\145\x73"], $qiouiwasaauyaaue["\x70\141\164\x68"], $qiouiwasaauyaaue["\144\157\155\x61\151\156"], $qiouiwasaauyaaue["\163\x65\x63\165\162\x65"], $qiouiwasaauyaaue["\150\164\164\x70\157\x6e\x6c\171"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\x43\x6f\156\x74\151\x6e\x75\x65"; break; case 101: $ymacoouqwcqwwagu = "\123\167\x69\x74\143\150\x69\x6e\x67\x20\x50\x72\157\x74\x6f\x63\157\154\x73"; break; case 200: $ymacoouqwcqwwagu = "\117\113"; break; case 201: $ymacoouqwcqwwagu = "\103\x72\145\x61\164\x65\144"; break; case 202: $ymacoouqwcqwwagu = "\x41\x63\x63\145\160\164\145\x64"; break; case 203: $ymacoouqwcqwwagu = "\x4e\157\156\55\101\165\x74\150\157\x72\151\164\141\164\151\166\145\x20\111\x6e\146\x6f\162\x6d\x61\x74\x69\157\x6e"; break; case 204: $ymacoouqwcqwwagu = "\x4e\157\x20\103\157\x6e\164\145\x6e\x74"; break; case 205: $ymacoouqwcqwwagu = "\x52\145\163\x65\x74\40\x43\157\x6e\x74\x65\156\164"; break; case 206: $ymacoouqwcqwwagu = "\x50\141\162\x74\x69\141\154\x20\103\x6f\x6e\164\x65\156\164"; break; case 300: $ymacoouqwcqwwagu = "\x4d\165\154\164\x69\x70\x6c\145\40\103\x68\157\x69\143\x65\x73"; break; case 301: $ymacoouqwcqwwagu = "\115\157\x76\x65\144\40\120\145\x72\x6d\x61\x6e\x65\x6e\164\x6c\171"; break; case 302: $ymacoouqwcqwwagu = "\x4d\157\166\145\144\x20\124\145\x6d\160\x6f\x72\141\x72\x69\154\171"; break; case 303: $ymacoouqwcqwwagu = "\x53\x65\145\40\117\164\x68\x65\x72"; break; case 304: $ymacoouqwcqwwagu = "\116\x6f\164\40\115\157\x64\151\146\x69\145\144"; break; case 305: $ymacoouqwcqwwagu = "\x55\163\145\x20\x50\162\x6f\170\171"; break; case 400: $ymacoouqwcqwwagu = "\x42\141\x64\40\122\x65\x71\165\145\x73\x74"; break; case 401: $ymacoouqwcqwwagu = "\x55\156\141\165\164\x68\157\x72\x69\172\x65\144"; break; case 402: $ymacoouqwcqwwagu = "\x50\141\171\155\145\x6e\164\40\x52\x65\x71\x75\151\162\145\x64"; break; case 403: $ymacoouqwcqwwagu = "\106\157\x72\142\x69\x64\x64\145\x6e"; break; case 404: $ymacoouqwcqwwagu = "\116\157\164\40\106\157\165\156\144"; break; case 405: $ymacoouqwcqwwagu = "\x4d\x65\x74\150\x6f\x64\x20\x4e\x6f\x74\40\101\154\x6c\x6f\x77\145\x64"; break; case 406: $ymacoouqwcqwwagu = "\116\157\164\x20\x41\x63\143\x65\x70\164\x61\142\x6c\x65"; break; case 407: $ymacoouqwcqwwagu = "\120\x72\157\170\171\40\x41\165\x74\x68\145\156\164\x69\x63\x61\164\x69\x6f\156\x20\122\145\x71\165\151\162\x65\x64"; break; case 408: $ymacoouqwcqwwagu = "\x52\145\x71\165\145\163\164\40\124\151\x6d\x65\x2d\x6f\x75\x74"; break; case 409: $ymacoouqwcqwwagu = "\x43\x6f\156\146\154\151\143\164"; break; case 410: $ymacoouqwcqwwagu = "\x47\157\156\x65"; break; case 411: $ymacoouqwcqwwagu = "\114\145\156\x67\x74\150\x20\x52\x65\161\165\151\162\145\x64"; break; case 412: $ymacoouqwcqwwagu = "\x50\x72\145\x63\157\x6e\144\x69\164\x69\157\x6e\x20\x46\141\151\x6c\x65\144"; break; case 413: $ymacoouqwcqwwagu = "\122\x65\x71\x75\x65\163\x74\x20\x45\x6e\x74\151\164\x79\x20\124\x6f\157\x20\114\141\162\x67\145"; break; case 414: $ymacoouqwcqwwagu = "\122\x65\x71\165\145\x73\x74\x2d\125\122\111\x20\x54\157\x6f\x20\x4c\141\162\x67\145"; break; case 415: $ymacoouqwcqwwagu = "\125\156\163\x75\160\x70\157\162\164\x65\144\x20\115\145\144\x69\x61\x20\x54\x79\x70\145"; break; case 500: $ymacoouqwcqwwagu = "\111\156\164\x65\x72\156\x61\x6c\x20\123\x65\x72\166\x65\x72\40\105\x72\162\157\162"; break; case 501: $ymacoouqwcqwwagu = "\116\x6f\x74\x20\111\x6d\x70\154\x65\155\x65\156\164\145\x64"; break; case 502: $ymacoouqwcqwwagu = "\x42\141\x64\40\107\x61\164\145\x77\141\171"; break; case 503: $ymacoouqwcqwwagu = "\123\145\x72\166\x69\x63\145\x20\125\x6e\141\x76\x61\x69\154\x61\142\x6c\x65"; break; case 504: $ymacoouqwcqwwagu = "\x47\141\164\145\x77\141\171\x20\x54\x69\155\145\55\x6f\165\x74"; break; case 505: $ymacoouqwcqwwagu = "\x48\124\124\x50\40\x56\x65\162\x73\151\157\156\40\156\157\x74\x20\163\165\160\x70\x6f\162\x74\x65\x64"; break; default: wp_die("\125\x6e\153\156\x6f\167\156\x20\x68\164\164\160\x20\163\164\141\164\x75\x73\40\x63\157\144\x65\40\42" . htmlentities($iueymcwwscwqkiyq) . "\42"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\122\105\121\125\x45\123\124\x5f\125\122\111"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\110\124\124\x50\x5f\x48\117\x53\x54"); $cgmsicimocaeggqg = stripos($_SERVER["\x53\x45\x52\126\x45\122\137\120\122\117\124\x4f\x43\x4f\x4c"], "\150\x74\x74\160\163") === 0 ? "\150\x74\164\160\x73\x3a\57\57" : "\x68\164\x74\x70\72\x2f\x2f"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\x55\105\x52\x59\x5f\x53\124\122\111\116\x47"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x67\x65\x74\x5f\x75\162\x6c\x5f\x62\171\137\x63\157\x6e\164\145\x78\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\144\155\151\x6e\x2d\141\x6a\141\x78\x2e\160\150\x70"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\144\155\x69\156\56\x70\x68\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\141\144\x6d\151\x6e\56\x70\150\x70" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\x70\137\x67\145\x74\137\x61\x76\x61\151\154\x61\142\x6c\145\137\x74\162\141\x6e\163\154\x61\x74\x69\157\x6e\163")) { include_once ABSPATH . "\x77\160\x2d\141\144\x6d\151\x6e\x2f\151\x6e\143\x6c\x75\x64\x65\x73\x2f\x74\x72\x61\156\163\x6c\141\x74\151\x6f\156\55\x69\156\163\x74\x61\x6c\154\56\x70\150\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\x67\154\151\163\150\x5f\156\x61\155\145"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\105\121\x55\x45\x53\x54\x5f\115\x45\x54\110\x4f\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\x74\164\x70\x73\137\154\157\x63\141\x6c\x5f\x73\163\154\137\166\x65\162\x69\x66\x79", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\x34\x30\63", __("\131\157\x75\x20\144\x6f\x20\x6e\157\x74\40\x68\141\166\145\x20\x61\143\x63\145\163\x73\40\164\157\x20\x70\145\x72\x66\x6f\162\x6d\40\164\x68\151\163\x20\x6f\160\x65\162\141\164\151\x6f\x6e\56", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\x34\60\63", __("\131\x6f\x75\162\x20\162\145\161\x75\145\x73\164\40\x69\x73\x20\156\157\x74\40\x76\x61\x6c\x69\144\x20\157\162\40\x65\170\x70\151\162\x65\144\x2e", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\145\163\164\40\x69\163\x20\x6e\157\x74\40\x76\x61\x6c\151\x64\54\40\160\x6c\x65\141\163\x65\40\x72\145\x6c\157\x61\144\x20\160\141\147\x65\40\x61\156\144\x20\x74\162\171\x20\x61\x67\x61\151\x6e\56", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\x2f") { _doing_it_wrong("\147\x65\164\120\x4d\x50\x52\x53\151\x74\x65\x55\x52\114", sprintf(__("\103\x6f\165\154\x64\40\x6e\x6f\164\40\x75\163\x65\x20\x70\x61\x74\150\x20\42\x25\163\42\40\x77\x69\x74\150\x6f\165\x74\x20\x73\154\x61\x73\150\x20\157\156\40\164\150\x65\40\x66\x69\162\x73\x74\40\143\x68\141\x72\x61\143\164\x65\162\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\x2e\x33\56\x2a"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
