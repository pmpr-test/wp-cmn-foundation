<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791524c10e10             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if ($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk)) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\x68\x74\164\160\72\57\57\x69\x70\x2d\141\x70\x69\56\x63\157\155\x2f\x6a\163\157\156\x2f{$kucumcusyyckayas}\77\146\x69\145\154\144\163\75\61\64\67\64\65\x38"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (isset($sogksuscggsicmac["\143\157\165\156\x74\162\171\x43\157\x64\x65"]) && in_array($sogksuscggsicmac["\x63\x6f\165\x6e\164\162\171\103\x6f\144\145"], $yywmssikcykmsiqi, true)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::ckiaowgkqoewoseo); if (!$iakkeikwceeomgyq) { $iakkeikwceeomgyq = $this->acsaeckawgweswsi($aqmwamyiwgeeymqa, Constants::igecewwoemccgwsq); } if (!$iakkeikwceeomgyq) { $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\x73\x65\x72\x5f\141\147\x65\156\x74"); if (preg_match("\57\50\50\x68\x74\164\x70\163\77\51\72\x5c\57\x5c\x2f\x29\77\50\133\x61\55\x7a\101\55\132\x30\55\71\134\55\x2e\135\x2b\134\56\133\141\x2d\172\x41\x2d\132\x5d\173\62\x2c\x35\175\51\x28\x5c\57\134\123\x2a\51\x3f\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if ($iakkeikwceeomgyq && !preg_match("\x2f\x5e\x28\77\x21\x2d\x29\x28\x3f\x3a\x28\77\x3a\x5b\x61\55\x7a\101\55\x5a\134\144\x5d\x5b\x61\55\x7a\x41\55\132\134\144\x5c\x2d\x5d\x7b\60\x2c\66\61\175\51\77\133\x61\55\172\x41\x2d\x5a\x5c\x64\x5d\x5c\56\51\x7b\x31\54\x31\62\x36\x7d\50\77\x21\x5c\144\x2b\x29\133\141\x2d\x7a\101\55\132\134\144\135\x7b\61\54\66\x33\175\44\x2f", $iakkeikwceeomgyq)) { $iakkeikwceeomgyq = ''; } if ($iakkeikwceeomgyq && $quoumsikceouuiee) { $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; } } } return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function acsaeckawgweswsi(WP_REST_Request $aqmwamyiwgeeymqa, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $aqmsgcggocyugeco = true) { if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw); if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } else { if ($aqmsgcggocyugeco) { $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw) ?? $ggauoeuaesiymgee; } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } } return $eqgoocgaqwqcimie; } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (!headers_sent()) { $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\x6f\156\164\145\x6e\x74\55\124\x79\160\145\x3a\x20" . $seammywuwkueoois->get("\150\x74\x6d\x6c\x5f\x74\171\160\145") . "\x3b\x20\143\x68\x61\162\x73\x65\164\75" . $seammywuwkueoois->get("\142\x6c\157\147\x5f\143\x68\141\162\x73\x65\x74")); header_remove("\x43\x6f\156\x74\145\156\164\55\104\145\163\x63\x72\151\x70\164\x69\157\x6e\x3b"); header_remove("\x43\x6f\x6e\164\x65\156\164\x2d\x44\x69\163\x70\157\x73\151\164\x69\x6f\x6e"); header_remove("\x43\157\156\x74\145\156\x74\x2d\124\162\141\x6e\x73\x66\145\x72\x2d\x45\156\143\157\144\x69\x6e\x67"); } if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\74\141\x20")) { $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\x61\143\x6b\40\164\157\x20\x48\157\x6d\145\160\141\147\x65", PR__CMN__FOUNDATION)); } wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\162\145\163\160\157\x6e\163\145" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\122\x5f\105\116\x56\137\123\114\104", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\105\x52\x56\105\122\137\116\x41\x4d\x45"]; if ($yiiiqewsseywemqu) { $uuesygwsusyuycqs = str_replace(["\x77\167\x77\x2e", "\56", "\55"], ['', '', "\137"], $uuesygwsusyuycqs); } return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\x48\x54\124\120\137\x48\x4f\123\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if ($soyimggocqaeswge === $this->akoiqeemqgmakecu()) { $soyimggocqaeswge = ''; } return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if (!$uykgysuswksgmwqy) { $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (0 === strpos($uusmaiomayssaecw, "\110\x54\x54\x50\137")) { $kmmmiumuegqmksky = implode("\x2d", array_map("\x75\x63\146\x69\x72\163\x74", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); } } } return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\110\x54\124\120\137\x55\x53\x45\x52\x5f\x41\107\105\116\124", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\x51\125\105\x52\x59\x5f\x53\124\122\111\116\107"); if ($yiasugywggckywoa && $agoaugssmsiumiym) { $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); } return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (isset($_SESSION[$uusmaiomayssaecw])) { $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($kekikiwsckuiyuyo) { unset($_SESSION[$uusmaiomayssaecw]); } } return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if (!$uusmaiomayssaecw) { $ggauoeuaesiymgee = $icwicymcioeyeyek; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_string($sogksuscggsicmac) && $yiiiqewsseywemqu) { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); } return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (!session_id()) { session_start(); } } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if ($eqgoocgaqwqcimie) { $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if ($smecmmgoykqcaieu) { $eqgoocgaqwqcimie = $smecmmgoykqcaieu; } if ($mggeakwwkaykmkka) { $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); } } return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { $muocgugcqiewywag = false; if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\x63\157\157\153\151\145\x20\143\x61\156\156\157\164\40\142\145\40\163\145\164\x20\x2d\40\x68\145\x61\144\x65\x72\x73\40\141\154\162\x65\x61\144\171\x20\163\145\x6e\x74\x20\142\x79\40{$qogsmwakwacwqogk}\x20\157\x6e\40\x6c\151\156\x65\x20{$mwuwcsieauaqecae}", E_USER_NOTICE); } } else { $muocgugcqiewywag = true; if (!$owiuekcekysskaoe) { $owiuekcekysskaoe = 1; } if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\40\171\145\141\162\x73"); } else { $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\x20\163\x65\x63\x6f\156\x64\x73"); } $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\145\x78\x70\151\162\145\x73" => $owiuekcekysskaoe, "\150\164\164\x70\x6f\156\154\171" => $oicswcucsocwuiug, "\x73\145\143\165\162\145" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } if (version_compare(PHP_VERSION, "\x37\x2e\63\56\60", "\76\x3d")) { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); } else { setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\x78\x70\x69\x72\x65\x73"], $qiouiwasaauyaaue["\160\141\164\150"], $qiouiwasaauyaaue["\144\157\155\x61\x69\x6e"], $qiouiwasaauyaaue["\x73\145\x63\165\x72\145"], $qiouiwasaauyaaue["\x68\164\x74\160\157\x6e\x6c\171"]); } } return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function weyscqicysskoama($keccaugmemegoimu) : array { $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); return $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\x43\x6f\x6e\x74\x69\156\165\x65"; break; case 101: $ymacoouqwcqwwagu = "\123\167\x69\164\x63\x68\151\156\147\x20\120\162\x6f\164\x6f\x63\157\x6c\163"; break; case 200: $ymacoouqwcqwwagu = "\117\113"; break; case 201: $ymacoouqwcqwwagu = "\x43\x72\x65\141\164\145\144"; break; case 202: $ymacoouqwcqwwagu = "\101\x63\x63\145\160\164\x65\144"; break; case 203: $ymacoouqwcqwwagu = "\x4e\x6f\156\x2d\101\165\164\x68\x6f\x72\x69\x74\x61\164\151\x76\x65\40\111\156\146\157\162\155\x61\x74\151\x6f\156"; break; case 204: $ymacoouqwcqwwagu = "\116\157\40\x43\157\x6e\164\145\x6e\164"; break; case 205: $ymacoouqwcqwwagu = "\x52\x65\163\145\x74\40\103\157\156\x74\145\156\x74"; break; case 206: $ymacoouqwcqwwagu = "\x50\x61\162\x74\151\141\154\40\103\x6f\x6e\164\x65\156\x74"; break; case 300: $ymacoouqwcqwwagu = "\x4d\165\154\x74\151\x70\154\x65\40\x43\x68\x6f\x69\x63\x65\x73"; break; case 301: $ymacoouqwcqwwagu = "\x4d\157\166\x65\x64\x20\x50\145\162\155\141\156\x65\156\x74\154\171"; break; case 302: $ymacoouqwcqwwagu = "\x4d\x6f\166\x65\x64\40\x54\x65\x6d\160\x6f\162\x61\162\x69\x6c\x79"; break; case 303: $ymacoouqwcqwwagu = "\x53\x65\145\40\x4f\x74\x68\145\162"; break; case 304: $ymacoouqwcqwwagu = "\x4e\157\164\40\x4d\x6f\144\x69\146\151\145\x64"; break; case 305: $ymacoouqwcqwwagu = "\125\163\145\x20\120\162\x6f\170\171"; break; case 400: $ymacoouqwcqwwagu = "\x42\141\144\x20\x52\145\x71\x75\145\x73\164"; break; case 401: $ymacoouqwcqwwagu = "\x55\x6e\141\165\x74\x68\x6f\x72\151\x7a\x65\144"; break; case 402: $ymacoouqwcqwwagu = "\x50\x61\x79\x6d\x65\156\x74\x20\x52\145\x71\165\151\x72\x65\144"; break; case 403: $ymacoouqwcqwwagu = "\x46\157\x72\x62\x69\x64\x64\145\x6e"; break; case 404: $ymacoouqwcqwwagu = "\x4e\157\164\40\x46\x6f\x75\x6e\144"; break; case 405: $ymacoouqwcqwwagu = "\x4d\145\x74\150\157\144\x20\116\157\x74\x20\x41\154\x6c\x6f\167\x65\x64"; break; case 406: $ymacoouqwcqwwagu = "\116\x6f\164\x20\101\x63\x63\145\x70\164\x61\142\154\145"; break; case 407: $ymacoouqwcqwwagu = "\x50\162\x6f\170\x79\x20\101\165\x74\150\x65\156\x74\x69\143\x61\x74\x69\157\156\40\122\145\161\165\x69\162\145\144"; break; case 408: $ymacoouqwcqwwagu = "\122\x65\x71\x75\x65\x73\x74\40\124\151\x6d\145\55\157\165\x74"; break; case 409: $ymacoouqwcqwwagu = "\x43\x6f\x6e\x66\154\151\x63\164"; break; case 410: $ymacoouqwcqwwagu = "\107\x6f\156\145"; break; case 411: $ymacoouqwcqwwagu = "\x4c\145\x6e\x67\x74\150\40\122\x65\161\165\x69\x72\145\144"; break; case 412: $ymacoouqwcqwwagu = "\120\x72\145\x63\157\156\144\x69\x74\151\x6f\156\x20\106\x61\x69\x6c\145\x64"; break; case 413: $ymacoouqwcqwwagu = "\x52\x65\x71\x75\145\x73\164\40\105\x6e\x74\151\x74\171\x20\124\x6f\x6f\40\x4c\x61\x72\x67\x65"; break; case 414: $ymacoouqwcqwwagu = "\122\145\161\x75\145\163\x74\x2d\x55\122\x49\x20\x54\157\x6f\x20\114\x61\162\x67\x65"; break; case 415: $ymacoouqwcqwwagu = "\x55\156\x73\165\160\160\157\162\x74\145\x64\40\115\145\144\151\x61\40\x54\171\x70\x65"; break; case 500: $ymacoouqwcqwwagu = "\111\x6e\164\x65\x72\x6e\141\x6c\x20\123\x65\162\x76\x65\x72\x20\x45\162\162\x6f\162"; break; case 501: $ymacoouqwcqwwagu = "\x4e\x6f\x74\40\111\x6d\x70\x6c\145\x6d\145\x6e\164\145\x64"; break; case 502: $ymacoouqwcqwwagu = "\102\141\x64\40\x47\x61\x74\x65\167\141\171"; break; case 503: $ymacoouqwcqwwagu = "\123\x65\x72\166\151\x63\145\40\x55\x6e\x61\x76\141\x69\154\141\142\154\x65"; break; case 504: $ymacoouqwcqwwagu = "\107\x61\164\x65\167\x61\171\x20\124\x69\155\x65\x2d\157\165\164"; break; case 505: $ymacoouqwcqwwagu = "\110\x54\124\120\40\126\145\x72\163\151\157\x6e\x20\x6e\157\164\40\163\165\160\x70\157\162\x74\x65\x64"; break; default: wp_die("\125\156\x6b\156\157\167\x6e\40\x68\x74\x74\160\x20\x73\x74\141\x74\165\163\40\143\x6f\144\145\x20\x22" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq])) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq], $eeamcawaiqocomwy); unset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq]); } return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { if (isset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq])) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq], $eeamcawaiqocomwy); unset($ywmkwiwkosakssii[Constants::mgayauuimqisiyqq]); } return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\x52\105\x51\125\x45\x53\124\137\x55\122\x49"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if ($mkomwsiykqigmqca = $this->sswiqkmqewcageua()) { if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f")) { $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); } $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\x54\124\x50\x5f\110\x4f\123\124"); $cgmsicimocaeggqg = stripos($_SERVER["\123\x45\x52\126\105\122\137\x50\x52\117\x54\117\103\117\114"], "\150\x74\x74\x70\163") === 0 ? "\150\164\x74\160\163\72\x2f\57" : "\150\x74\x74\160\x3a\57\x2f"; if ($gwgucoaaqcwwciqq) { $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; } else { $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if ($kssgyousiceysuaw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\x55\x45\122\131\x5f\123\124\x52\111\116\107"), '', $eeamcawaiqocomwy); } } return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if ($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); } return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\x5f\x75\x72\154\x5f\142\171\137\143\x6f\156\164\145\170\164", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\144\155\151\x6e\x2d\141\152\x61\170\x2e\160\150\160"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\144\155\151\x6e\56\160\x68\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if ($suaemuyiacqyugsm) { $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; } if ($uoomaookgsyciacm) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); } return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\141\144\155\x69\156\56\x70\x68\160" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->yyqgamuwwakgciey($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { $syowsmcowosssaos = Constants::skogicecygyyskkq; } else { if ($this->qsqicssyqieuqooy()) { $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; } } return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\x77\x70\x5f\147\145\164\x5f\141\x76\141\x69\x6c\x61\x62\154\x65\137\x74\x72\141\x6e\163\x6c\x61\164\x69\x6f\x6e\x73")) { include_once ABSPATH . "\x77\160\x2d\x61\x64\x6d\151\x6e\x2f\x69\156\143\x6c\x75\144\x65\x73\x2f\164\x72\141\x6e\163\x6c\141\164\x69\x6f\156\x2d\x69\156\163\164\141\x6c\x6c\56\160\x68\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\147\154\151\x73\150\137\156\x61\155\x65"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; } return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\x52\105\121\125\105\123\124\137\115\105\x54\110\117\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\x74\x74\160\163\x5f\154\157\x63\141\x6c\137\163\x73\154\137\x76\x65\162\x69\146\171", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); } else { $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); } return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if (!$gwqgmkqcgwwmweom) { $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); } return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if ($kuukgsmqkagwaciu) { if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); } else { $sogksuscggsicmac = $kuukgsmqkagwaciu; } } return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if ($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { return new WP_Error("\x34\60\63", __("\x59\x6f\x75\x20\144\x6f\40\156\x6f\164\40\150\141\166\145\x20\141\x63\x63\145\163\163\x20\x74\x6f\40\x70\145\x72\146\157\x72\155\x20\x74\150\151\163\x20\x6f\160\145\162\141\164\151\157\x6e\56", PR__CMN__FOUNDATION)); } $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw)) { return new WP_Error("\x34\60\63", __("\x59\157\x75\x72\x20\x72\x65\161\x75\x65\x73\164\40\x69\163\40\156\x6f\164\40\x76\x61\154\x69\144\x20\157\162\x20\145\x78\x70\151\x72\x65\x64\x2e", PR__CMN__FOUNDATION)); } return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\x75\145\x73\164\40\x69\163\40\156\x6f\164\40\166\141\x6c\151\x64\54\40\160\x6c\x65\x61\x73\x65\x20\162\x65\154\x6f\x61\144\40\x70\141\x67\x65\40\x61\156\x64\x20\x74\x72\171\x20\141\x67\141\x69\x6e\x2e", PR__CMN__FOUNDATION)); if ($gqgoqaeswmcwagoi) { $this->uaggqsoeugksgooc($sogksuscggsicmac, false); } } else { $sogksuscggsicmac = true; } return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); } else { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); } } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if ($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\57") { _doing_it_wrong("\x67\x65\x74\x50\x4d\x50\x52\x53\x69\164\145\125\x52\114", sprintf(__("\103\x6f\x75\154\144\x20\156\157\x74\x20\165\163\x65\40\x70\141\x74\150\x20\42\x25\163\42\40\167\151\x74\x68\157\x75\164\40\163\154\141\163\150\x20\157\156\x20\x74\150\x65\x20\x66\x69\x72\x73\x74\x20\x63\150\141\x72\x61\x63\164\x65\x72\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\x31\x2e\x33\x2e\52"); } $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
