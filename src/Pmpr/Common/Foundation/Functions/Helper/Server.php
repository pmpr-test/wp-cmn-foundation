<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto yqqueamqmkcwimeq; } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\150\164\164\x70\72\57\57\x69\x70\55\141\160\x69\56\143\x6f\x6d\x2f\152\x73\157\156\57{$kucumcusyyckayas}\x3f\146\x69\x65\x6c\144\163\75\61\64\67\64\65\x38"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (!(isset($sogksuscggsicmac["\x63\x6f\x75\x6e\x74\x72\x79\103\157\x64\x65"]) && in_array($sogksuscggsicmac["\x63\x6f\x75\156\164\162\171\x43\157\x64\145"], $yywmssikcykmsiqi, true))) { goto kckkiuumaegucsqg; } $ksaameoqigiaoigg = true; goto kwigwuwessmseqik; kckkiuumaegucsqg: qqowaeggkimumgei: } kwigwuwessmseqik: yqqueamqmkcwimeq: return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if ($iakkeikwceeomgyq) { goto cwuakumskisqyogc; } $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); cwuakumskisqyogc: if ($iakkeikwceeomgyq) { goto smqiciaewkmmyswu; } $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\165\163\145\162\x5f\x61\147\x65\156\164"); if (!preg_match("\57\50\50\x68\x74\x74\x70\163\x3f\51\72\x5c\x2f\x5c\x2f\x29\77\x28\133\141\x2d\172\101\x2d\x5a\60\55\71\134\x2d\56\135\53\134\56\x5b\x61\55\172\101\x2d\x5a\x5d\173\x32\54\65\175\51\50\134\x2f\x5c\x53\x2a\x29\x3f\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { goto cqeyqcauamscauiq; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if (!($iakkeikwceeomgyq && !preg_match("\x2f\x5e\50\77\41\55\x29\x28\x3f\72\50\x3f\x3a\x5b\x61\55\172\101\55\132\134\144\x5d\x5b\x61\55\172\101\55\x5a\134\x64\x5c\55\x5d\x7b\60\54\66\x31\175\51\77\133\x61\55\172\x41\55\132\134\144\x5d\134\x2e\x29\x7b\61\54\61\x32\x36\x7d\x28\x3f\41\x5c\x64\53\x29\133\x61\55\x7a\x41\55\x5a\134\144\x5d\173\x31\x2c\66\x33\x7d\44\x2f", $iakkeikwceeomgyq))) { goto ymiiquygeeucsgaq; } $iakkeikwceeomgyq = ''; ymiiquygeeucsgaq: if (!($iakkeikwceeomgyq && $quoumsikceouuiee)) { goto ewaqcgwowgogwaqi; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; ewaqcgwowgogwaqi: cqeyqcauamscauiq: smqiciaewkmmyswu: return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (headers_sent()) { goto suwciqqmccskgmkg; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\157\156\x74\145\x6e\164\55\124\x79\160\145\x3a\x20" . $seammywuwkueoois->get("\x68\164\x6d\154\137\164\x79\160\145") . "\x3b\x20\x63\x68\141\x72\x73\145\x74\x3d" . $seammywuwkueoois->get("\x62\154\x6f\x67\137\143\x68\x61\x72\163\145\164")); header_remove("\x43\x6f\x6e\164\x65\x6e\164\x2d\104\x65\163\143\162\151\x70\x74\151\x6f\x6e\x3b"); header_remove("\x43\157\x6e\x74\x65\156\164\x2d\104\151\x73\x70\x6f\x73\x69\164\151\157\x6e"); header_remove("\103\x6f\156\164\x65\156\x74\55\x54\162\141\156\163\146\x65\162\x2d\105\x6e\143\157\144\x69\x6e\x67"); suwciqqmccskgmkg: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\74\x61\x20")) { goto isqiaewwwiusyaoy; } $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\x42\141\x63\153\40\x74\x6f\x20\x48\x6f\155\145\160\x61\147\145", PR__CMN__FOUNDATION)); isqiaewwwiusyaoy: wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\x72\145\163\160\157\x6e\x73\x65" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\x50\x52\137\105\116\x56\x5f\x53\114\x44", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\123\x45\122\x56\105\122\137\x4e\101\x4d\x45"]; if (!$yiiiqewsseywemqu) { goto asgykkakkoeygiwm; } $uuesygwsusyuycqs = str_replace(["\167\167\x77\x2e", "\56", "\x2d"], ['', '', "\x5f"], $uuesygwsusyuycqs); asgykkakkoeygiwm: return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\x2e", $_SERVER["\110\124\x54\x50\137\x48\117\x53\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if (!($soyimggocqaeswge === $this->akoiqeemqgmakecu())) { goto mwqqssomwmsmaaqk; } $soyimggocqaeswge = ''; mwqqssomwmsmaaqk: return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if ($uykgysuswksgmwqy) { goto osiemgqgiycaymio; } $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (!(0 === strpos($uusmaiomayssaecw, "\x48\124\124\x50\137"))) { goto jiiiygsseagcmycw; } $kmmmiumuegqmksky = implode("\55", array_map("\x75\x63\146\151\162\x73\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); jiiiygsseagcmycw: egoyuuqcqmgkswyg: } aguqiwwiooqqgywi: osiemgqgiycaymio: return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\124\124\x50\137\125\x53\105\x52\x5f\101\x47\x45\116\124", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\x55\x45\x52\x59\137\x53\x54\x52\111\x4e\107"); if (!($yiasugywggckywoa && $agoaugssmsiumiym)) { goto magaykaioygmiciq; } $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); magaykaioygmiciq: return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!isset($_SESSION[$uusmaiomayssaecw])) { goto kmkwsqgumkwgemwc; } $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$kekikiwsckuiyuyo) { goto qiokyyweaoysyeci; } unset($_SESSION[$uusmaiomayssaecw]); qiokyyweaoysyeci: kmkwsqgumkwgemwc: return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if ($uusmaiomayssaecw) { goto uiakqoyqmcwokgse; } $ggauoeuaesiymgee = $icwicymcioeyeyek; uiakqoyqmcwokgse: $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!(is_string($sogksuscggsicmac) && $yiiiqewsseywemqu)) { goto oksimyciqsugcami; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); oksimyciqsugcami: return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (session_id()) { goto gquyeowwseuycuoq; } session_start(); gquyeowwseuycuoq: } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$eqgoocgaqwqcimie) { goto wkokasiqoeycyukq; } $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if (!$smecmmgoykqcaieu) { goto uecycmeaoqgqcomm; } $eqgoocgaqwqcimie = $smecmmgoykqcaieu; uecycmeaoqgqcomm: if (!$mggeakwwkaykmkka) { goto siiwoymcomqegmya; } $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); siiwoymcomqegmya: wkokasiqoeycyukq: return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { goto amkeeqecmwsmwqma; } $muocgugcqiewywag = true; if ($owiuekcekysskaoe) { goto qioeuukaqkcsiiwk; } $owiuekcekysskaoe = 1; qioeuukaqkcsiiwk: if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { goto cycwiouaowuswkmk; } $owiuekcekysskaoe = strtotime("\53{$owiuekcekysskaoe}\x20\163\x65\143\157\x6e\x64\163"); goto aoiwocgacociakoy; cycwiouaowuswkmk: $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\171\x65\141\x72\163"); aoiwocgacociakoy: $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\x65\x78\x70\x69\162\145\x73" => $owiuekcekysskaoe, "\x68\164\x74\160\x6f\156\154\171" => $oicswcucsocwuiug, "\163\x65\143\x75\x72\x65" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (!is_array($eqgoocgaqwqcimie)) { goto sguosuigwgwkikgs; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); sguosuigwgwkikgs: if (version_compare(PHP_VERSION, "\67\56\63\56\60", "\76\x3d")) { goto ycyueqmkqyycmaus; } setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\170\x70\x69\x72\145\x73"], $qiouiwasaauyaaue["\160\141\x74\150"], $qiouiwasaauyaaue["\144\x6f\x6d\141\x69\x6e"], $qiouiwasaauyaaue["\163\x65\143\x75\162\x65"], $qiouiwasaauyaaue["\150\164\x74\160\x6f\x6e\154\171"]); goto wgkamcmqescgqcyw; ycyueqmkqyycmaus: setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); wgkamcmqescgqcyw: goto vkmscascaoysaqoc; amkeeqecmwsmwqma: $muocgugcqiewywag = false; if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto cgqmyikikqgmksgg; } headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\40\143\157\x6f\x6b\x69\145\40\x63\x61\156\156\x6f\164\x20\142\145\x20\163\x65\164\40\x2d\40\150\x65\141\x64\145\x72\163\x20\x61\154\162\x65\141\x64\x79\x20\x73\145\x6e\x74\x20\142\x79\x20{$qogsmwakwacwqogk}\40\157\x6e\40\154\151\x6e\145\40{$mwuwcsieauaqecae}", E_USER_NOTICE); cgqmyikikqgmksgg: vkmscascaoysaqoc: return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\x43\x6f\156\164\x69\x6e\x75\145"; goto soskeqqausokwugo; case 101: $ymacoouqwcqwwagu = "\123\x77\x69\x74\x63\x68\151\156\x67\x20\120\162\157\164\x6f\x63\157\x6c\163"; goto soskeqqausokwugo; case 200: $ymacoouqwcqwwagu = "\117\113"; goto soskeqqausokwugo; case 201: $ymacoouqwcqwwagu = "\x43\x72\x65\141\164\145\144"; goto soskeqqausokwugo; case 202: $ymacoouqwcqwwagu = "\x41\143\x63\x65\160\x74\145\x64"; goto soskeqqausokwugo; case 203: $ymacoouqwcqwwagu = "\x4e\x6f\x6e\55\x41\165\x74\150\x6f\162\151\164\x61\164\151\x76\145\40\111\156\146\x6f\x72\155\141\164\151\157\x6e"; goto soskeqqausokwugo; case 204: $ymacoouqwcqwwagu = "\x4e\157\x20\103\157\156\x74\x65\x6e\x74"; goto soskeqqausokwugo; case 205: $ymacoouqwcqwwagu = "\122\x65\x73\145\x74\x20\103\x6f\156\164\145\156\x74"; goto soskeqqausokwugo; case 206: $ymacoouqwcqwwagu = "\x50\141\162\x74\151\x61\154\x20\103\157\x6e\x74\145\x6e\x74"; goto soskeqqausokwugo; case 300: $ymacoouqwcqwwagu = "\115\165\x6c\164\151\x70\154\145\40\x43\150\x6f\151\x63\x65\x73"; goto soskeqqausokwugo; case 301: $ymacoouqwcqwwagu = "\115\157\166\145\144\40\120\x65\x72\x6d\141\x6e\x65\156\164\154\171"; goto soskeqqausokwugo; case 302: $ymacoouqwcqwwagu = "\115\157\166\x65\144\x20\x54\x65\x6d\x70\157\x72\x61\x72\x69\154\x79"; goto soskeqqausokwugo; case 303: $ymacoouqwcqwwagu = "\123\x65\x65\40\117\x74\150\145\162"; goto soskeqqausokwugo; case 304: $ymacoouqwcqwwagu = "\x4e\157\164\40\115\157\144\151\x66\151\145\144"; goto soskeqqausokwugo; case 305: $ymacoouqwcqwwagu = "\125\163\x65\x20\120\162\x6f\x78\171"; goto soskeqqausokwugo; case 400: $ymacoouqwcqwwagu = "\x42\141\x64\40\x52\x65\161\x75\x65\163\164"; goto soskeqqausokwugo; case 401: $ymacoouqwcqwwagu = "\x55\x6e\x61\x75\x74\x68\x6f\162\x69\x7a\145\144"; goto soskeqqausokwugo; case 402: $ymacoouqwcqwwagu = "\120\141\x79\x6d\145\x6e\x74\x20\x52\145\x71\x75\151\x72\x65\144"; goto soskeqqausokwugo; case 403: $ymacoouqwcqwwagu = "\x46\157\x72\x62\151\144\x64\145\x6e"; goto soskeqqausokwugo; case 404: $ymacoouqwcqwwagu = "\x4e\157\x74\40\x46\157\165\x6e\144"; goto soskeqqausokwugo; case 405: $ymacoouqwcqwwagu = "\115\145\x74\150\157\144\40\116\x6f\x74\x20\101\154\x6c\x6f\167\145\x64"; goto soskeqqausokwugo; case 406: $ymacoouqwcqwwagu = "\116\x6f\x74\x20\x41\x63\143\145\160\164\x61\x62\154\145"; goto soskeqqausokwugo; case 407: $ymacoouqwcqwwagu = "\x50\x72\x6f\170\x79\40\101\165\x74\x68\145\x6e\x74\x69\143\x61\x74\151\157\x6e\x20\122\145\x71\165\151\x72\x65\x64"; goto soskeqqausokwugo; case 408: $ymacoouqwcqwwagu = "\122\x65\x71\165\x65\x73\164\x20\124\x69\x6d\x65\x2d\x6f\165\x74"; goto soskeqqausokwugo; case 409: $ymacoouqwcqwwagu = "\103\x6f\156\x66\154\151\x63\164"; goto soskeqqausokwugo; case 410: $ymacoouqwcqwwagu = "\107\x6f\x6e\145"; goto soskeqqausokwugo; case 411: $ymacoouqwcqwwagu = "\114\145\156\x67\x74\150\40\x52\x65\x71\x75\151\x72\x65\x64"; goto soskeqqausokwugo; case 412: $ymacoouqwcqwwagu = "\x50\162\145\x63\157\x6e\144\x69\x74\151\157\156\x20\x46\141\x69\x6c\145\x64"; goto soskeqqausokwugo; case 413: $ymacoouqwcqwwagu = "\122\x65\161\165\x65\163\x74\40\x45\x6e\x74\x69\164\x79\x20\124\x6f\x6f\40\x4c\141\x72\147\145"; goto soskeqqausokwugo; case 414: $ymacoouqwcqwwagu = "\x52\145\161\x75\145\163\164\x2d\125\122\111\x20\124\157\157\x20\x4c\141\162\x67\145"; goto soskeqqausokwugo; case 415: $ymacoouqwcqwwagu = "\x55\x6e\163\165\x70\160\157\162\164\145\144\40\x4d\x65\x64\151\141\40\124\171\x70\145"; goto soskeqqausokwugo; case 500: $ymacoouqwcqwwagu = "\111\x6e\164\x65\x72\x6e\141\x6c\x20\123\x65\162\x76\145\x72\40\x45\x72\x72\157\x72"; goto soskeqqausokwugo; case 501: $ymacoouqwcqwwagu = "\x4e\157\x74\40\x49\155\160\154\x65\x6d\x65\x6e\x74\145\144"; goto soskeqqausokwugo; case 502: $ymacoouqwcqwwagu = "\102\141\144\40\107\141\164\x65\167\141\171"; goto soskeqqausokwugo; case 503: $ymacoouqwcqwwagu = "\123\x65\162\166\x69\143\x65\40\x55\x6e\141\166\141\151\x6c\141\142\x6c\145"; goto soskeqqausokwugo; case 504: $ymacoouqwcqwwagu = "\x47\141\164\x65\x77\x61\171\40\x54\151\155\x65\55\x6f\x75\x74"; goto soskeqqausokwugo; case 505: $ymacoouqwcqwwagu = "\x48\124\x54\x50\40\x56\145\x72\163\x69\x6f\156\40\x6e\157\x74\40\163\165\x70\160\157\162\164\145\x64"; goto soskeqqausokwugo; default: wp_die("\125\156\153\156\x6f\167\156\x20\x68\x74\164\x70\x20\163\164\141\164\x75\163\40\x63\x6f\x64\x65\x20\42" . htmlentities($iueymcwwscwqkiyq) . "\42"); } ioqmgaeuiicymgky: soskeqqausokwugo: return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\122\105\121\x55\x45\123\x54\x5f\x55\122\111"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if (!($mkomwsiykqigmqca = $this->sswiqkmqewcageua())) { goto ycgsmkkioyqqawyk; } if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) { goto ywmcuouqguawueqm; } $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); ywmcuouqguawueqm: $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\124\x54\120\137\110\x4f\123\124"); $cgmsicimocaeggqg = stripos($_SERVER["\123\105\122\x56\x45\122\x5f\120\122\x4f\124\x4f\103\117\x4c"], "\150\x74\164\x70\x73") === 0 ? "\150\164\164\160\x73\72\57\x2f" : "\x68\x74\164\x70\x3a\x2f\x2f"; if ($gwgucoaaqcwwciqq) { goto gkoaywyuyqemyiqw; } $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); goto gcgsyyiismkwoyck; gkoaywyuyqemyiqw: $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; gcgsyyiismkwoyck: $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if (!$kssgyousiceysuaw) { goto aswikmsouwkequca; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\x51\125\105\x52\131\137\123\124\122\x49\116\107"), '', $eeamcawaiqocomwy); aswikmsouwkequca: ycgsmkkioyqqawyk: return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if (!($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw)) { goto qywueycgouwamkso; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); qywueycgouwamkso: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\147\x65\164\x5f\165\162\x6c\137\x62\171\x5f\143\157\156\x74\145\170\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\x64\155\x69\156\x2d\x61\152\x61\x78\56\160\x68\x70"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\x64\155\x69\156\56\160\x68\x70") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if (!$suaemuyiacqyugsm) { goto wecgakiimqymkmiy; } $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; wecgakiimqymkmiy: if (!$uoomaookgsyciacm) { goto uggisigeswwyqmqi; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); uggisigeswwyqmqi: return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\141\144\x6d\151\x6e\x2e\160\x68\x70" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->gkwaaeusmsaywikg($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { goto cuqwswgmwuwmgkwe; } if (!$this->qsqicssyqieuqooy()) { goto qaykqsyoyscaqsce; } $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; qaykqsyoyscaqsce: goto twusqqkmqgswisei; cuqwswgmwuwmgkwe: $syowsmcowosssaos = Constants::skogicecygyyskkq; twusqqkmqgswisei: return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\167\x70\137\147\145\164\137\x61\x76\141\151\154\x61\142\154\145\137\x74\162\141\156\163\154\x61\x74\x69\157\x6e\x73")) { require_once ABSPATH . "\x77\x70\x2d\141\x64\155\x69\x6e\x2f\151\x6e\x63\x6c\x75\144\145\x73\x2f\164\x72\x61\156\x73\154\141\x74\x69\x6f\x6e\x2d\x69\156\163\164\141\154\x6c\x2e\x70\x68\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\x67\154\151\163\x68\137\x6e\x61\155\x65"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; oaimckymswkqoysq: } ysykemiscamquoce: return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\105\x51\125\x45\123\124\x5f\115\x45\124\x48\x4f\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x68\164\164\160\163\137\154\157\143\141\154\x5f\163\x73\x6c\x5f\x76\x65\x72\x69\x66\171", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { goto mwmwmswiueocaeug; } $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); goto ukugqakgsqqmgege; mwmwmswiueocaeug: $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); ukugqakgsqqmgege: return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if ($gwqgmkqcgwwmweom) { goto awcgiyqmoemqumeg; } $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); awcgiyqmoemqumeg: return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if (!$kuukgsmqkagwaciu) { goto cywmgwogisiyymoi; } if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { goto gcgwqksqskumiumq; } $sogksuscggsicmac = $kuukgsmqkagwaciu; goto emiugswuagoacakq; gcgwqksqskumiumq: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); emiugswuagoacakq: cywmgwogisiyymoi: return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if (!($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto qkygewgkycsuawgm; } return new WP_Error("\x34\x30\x33", __("\131\x6f\x75\40\144\157\x20\x6e\x6f\x74\x20\x68\x61\166\x65\40\x61\x63\143\x65\x73\163\x20\x74\x6f\40\x70\x65\162\x66\157\162\155\x20\x74\x68\151\163\x20\x6f\160\x65\162\141\x74\151\157\156\x2e", PR__CMN__FOUNDATION)); qkygewgkycsuawgm: $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (!(empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw))) { goto omagsowousaeaiou; } return new WP_Error("\x34\x30\x33", __("\x59\157\165\162\40\x72\145\161\x75\x65\x73\164\40\151\x73\40\x6e\x6f\164\40\x76\x61\154\151\144\x20\157\x72\40\x65\170\160\x69\162\x65\x64\56", PR__CMN__FOUNDATION)); omagsowousaeaiou: return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { goto ckyamgmuoswcaiak; } $sogksuscggsicmac = true; goto umosyyqqcuqiscco; ckyamgmuoswcaiak: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\x65\x73\164\40\x69\163\40\x6e\x6f\x74\40\166\x61\x6c\x69\144\x2c\40\160\154\x65\x61\163\x65\x20\162\x65\154\x6f\141\144\x20\x70\141\147\x65\40\141\x6e\x64\x20\164\162\171\40\141\147\x61\x69\156\x2e", PR__CMN__FOUNDATION)); if (!$gqgoqaeswmcwagoi) { goto kcesecosoiwocymi; } $this->uaggqsoeugksgooc($sogksuscggsicmac, false); kcesecosoiwocymi: umosyyqqcuqiscco: return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { goto qauuogkoosmuggas; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); goto wwcougcmsuqogqyc; qauuogkoosmuggas: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); wwcougcmsuqogqyc: } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if (!($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\57")) { goto mcguyegywqyasmii; } _doing_it_wrong("\147\145\x74\120\x4d\120\122\123\151\x74\x65\x55\x52\x4c", sprintf(__("\x43\157\x75\x6c\x64\x20\156\x6f\164\40\165\163\145\x20\x70\x61\164\150\x20\42\45\x73\x22\40\x77\x69\x74\x68\157\x75\164\x20\x73\x6c\141\x73\x68\x20\x6f\x6e\40\164\x68\145\40\x66\x69\162\x73\164\40\143\x68\x61\162\141\143\x74\x65\x72\56", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\61\x2e\63\56\52"); mcguyegywqyasmii: $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
