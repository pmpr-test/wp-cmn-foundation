<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Detector; use WP_Error; use WP_REST_Request; class Server extends Common { public function ssamkiocukucqkwg($yywgiquyoymymqwk, array $yywmssikcykmsiqi) : bool { $ksaameoqigiaoigg = false; if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto ekkkweoucuyuqwik; } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { $keccaugmemegoimu = $gqusacuooiagkuom->osiemwwsiacmicwk("\x68\164\x74\x70\x3a\x2f\x2f\x69\x70\55\141\x70\x69\x2e\x63\157\155\57\152\x73\x6f\x6e\57{$kucumcusyyckayas}\x3f\146\x69\145\x6c\x64\163\75\61\64\x37\64\x35\70"); $sogksuscggsicmac = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sgemakymciqkiyio($keccaugmemegoimu); if (!(isset($sogksuscggsicmac["\x63\157\165\x6e\164\x72\171\103\x6f\x64\145"]) && in_array($sogksuscggsicmac["\x63\157\x75\x6e\x74\x72\x79\x43\157\x64\x65"], $yywmssikcykmsiqi, true))) { goto qiiwgkcyqweecqoa; } $ksaameoqigiaoigg = true; goto syokeusmqogkicks; qiiwgkcyqweecqoa: oqkqaggagwswaaqi: } syokeusmqogkicks: ekkkweoucuyuqwik: return $ksaameoqigiaoigg; } public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa, bool $quoumsikceouuiee = false) : ?string { $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_param(Constants::ckiaowgkqoewoseo); if ($iakkeikwceeomgyq) { goto mkosooeggqemyqqy; } $iakkeikwceeomgyq = $aqmwamyiwgeeymqa->get_header(Constants::igecewwoemccgwsq); mkosooeggqemyqqy: if ($iakkeikwceeomgyq) { goto aecamacaoskqmccs; } $yucuiaqgmwimgcoy = $aqmwamyiwgeeymqa->get_header("\x75\x73\145\x72\x5f\141\x67\x65\156\x74"); if (!preg_match("\57\50\x28\x68\164\164\160\x73\x3f\x29\x3a\134\x2f\134\x2f\51\x3f\50\133\x61\x2d\172\x41\x2d\132\60\55\71\x5c\x2d\x2e\135\53\134\x2e\133\x61\x2d\x7a\x41\x2d\x5a\x5d\173\62\54\65\x7d\x29\x28\x5c\57\x5c\x53\x2a\x29\x3f\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) { goto iweickamaucqgysq; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[3] ?? ''; if (!($iakkeikwceeomgyq && !preg_match("\57\136\50\x3f\41\x2d\x29\50\77\72\50\77\72\133\141\x2d\x7a\101\55\x5a\x5c\x64\x5d\133\141\x2d\x7a\x41\55\x5a\x5c\x64\x5c\x2d\x5d\x7b\60\x2c\66\x31\x7d\51\x3f\x5b\x61\x2d\172\x41\x2d\132\x5c\x64\x5d\x5c\x2e\x29\173\61\x2c\x31\62\66\175\50\77\41\x5c\x64\x2b\51\x5b\141\55\172\101\55\x5a\134\144\x5d\x7b\x31\x2c\x36\x33\x7d\x24\57", $iakkeikwceeomgyq))) { goto uyugkucyiqymcuus; } $iakkeikwceeomgyq = ''; uyugkucyiqymcuus: if (!($iakkeikwceeomgyq && $quoumsikceouuiee)) { goto kokkacggmoaagiae; } $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] . $iakkeikwceeomgyq; kokkacggmoaagiae: iweickamaucqgysq: aecamacaoskqmccs: return $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($iakkeikwceeomgyq); } public function die(string $uamcoiueqaamsqma, string $meqocwsecsywiiqs = '', $iueymcwwscwqkiyq = 404) { if (headers_sent()) { goto oekmoqcqwyauiaeg; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); header("\103\x6f\156\x74\x65\156\x74\x2d\124\171\160\x65\72\x20" . $seammywuwkueoois->get("\150\x74\155\154\137\x74\171\x70\145") . "\x3b\40\143\x68\141\x72\x73\x65\x74\75" . $seammywuwkueoois->get("\x62\154\157\147\137\143\x68\141\x72\x73\x65\x74")); header_remove("\x43\x6f\156\x74\145\x6e\164\x2d\104\x65\x73\143\x72\x69\160\x74\x69\157\x6e\73"); header_remove("\103\x6f\x6e\x74\x65\x6e\164\55\104\151\x73\x70\x6f\163\151\x74\x69\157\156"); header_remove("\103\157\156\164\145\156\x74\55\x54\x72\x61\156\163\x66\x65\162\x2d\x45\x6e\x63\x6f\144\151\156\147"); oekmoqcqwyauiaeg: if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($uamcoiueqaamsqma, "\74\x61\40")) { goto uiqaoucyoiwykywa; } $uamcoiueqaamsqma .= $this->caokeucsksukesyo()->kugiyqykwaskawsc()->yuawgssgauywkiia($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), __("\102\141\143\153\x20\x74\x6f\40\x48\x6f\155\145\160\141\x67\x65", PR__CMN__FOUNDATION)); uiqaoucyoiwykywa: wp_die($uamcoiueqaamsqma, $meqocwsecsywiiqs, ["\x72\x65\x73\x70\157\x6e\x73\x65" => $iueymcwwscwqkiyq]); } public function akoiqeemqgmakecu() : string { return (string) $this->cmaecekuqkwmemms("\120\x52\137\x45\x4e\x56\137\123\114\x44", ''); } public function uyygmqqqykyyguky(bool $yiiiqewsseywemqu = false) : string { $uuesygwsusyuycqs = $_SERVER["\x53\105\122\126\105\x52\x5f\x4e\101\x4d\x45"]; if (!$yiiiqewsseywemqu) { goto umawcakyaoykccao; } $uuesygwsusyuycqs = str_replace(["\167\x77\x77\x2e", "\56", "\55"], ['', '', "\x5f"], $uuesygwsusyuycqs); umawcakyaoykccao: return $uuesygwsusyuycqs; } public function euyyuaecekwekuag() : string { $uomewyckeuqoqocu = explode("\56", $_SERVER["\x48\x54\x54\120\x5f\110\x4f\123\x54"]); $soyimggocqaeswge = array_shift($uomewyckeuqoqocu); if (!($soyimggocqaeswge === $this->akoiqeemqgmakecu())) { goto wwmscmqgasawkkwa; } $soyimggocqaeswge = ''; wwmscmqgasawkkwa: return $soyimggocqaeswge; } public function iawueuwikeeeseya() { $uykgysuswksgmwqy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->emwgumwwmcegmusi(); if ($uykgysuswksgmwqy) { goto umasasgawwamkisc; } $ueiegogoeyqoiewa = $this->giiecckwoyiawoyy(); foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) { if (!(0 === strpos($uusmaiomayssaecw, "\x48\124\x54\x50\x5f"))) { goto ooqqyyewioyccuww; } $kmmmiumuegqmksky = implode("\55", array_map("\x75\x63\146\151\x72\x73\x74", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1))); $uykgysuswksgmwqy[$kmmmiumuegqmksky] = $this->giiecckwoyiawoyy($uusmaiomayssaecw); ooqqyyewioyccuww: ugwyeeockousskag: } aksogeackceaeays: umasasgawwamkisc: return $uykgysuswksgmwqy; } public function gmsemuiwicucmcok($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->iawueuwikeeeseya(), $uusmaiomayssaecw); } public function ckaoiscoyuuosace() : string { return (string) $this->giiecckwoyiawoyy("\x48\124\124\x50\137\125\123\x45\122\x5f\101\x47\105\x4e\x54", ''); } public function meucmyuaiwgqiqia(bool $yiasugywggckywoa = false) { $agoaugssmsiumiym = $this->gkwaaeusmsaywikg("\121\x55\x45\x52\x59\x5f\x53\124\122\x49\x4e\x47"); if (!($yiasugywggckywoa && $agoaugssmsiumiym)) { goto iqsoeqgwemgyiimg; } $agoaugssmsiumiym = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($agoaugssmsiumiym); iqsoeqgwemgyiimg: return $agoaugssmsiumiym; } public function gkwaaeusmsaywikg($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null) { return $this->seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function wugwewwmekuaamos($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $kekikiwsckuiyuyo = false) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!isset($_SESSION[$uusmaiomayssaecw])) { goto ckugukmoqamgcwci; } $ksaameoqigiaoigg = $this->seyyiqmgwymyumoq($_SESSION, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$kekikiwsckuiyuyo) { goto qqkqiioqwkekqsoq; } unset($_SESSION[$uusmaiomayssaecw]); qqkqiioqwkekqsoq: ckugukmoqamgcwci: return $ksaameoqigiaoigg; } private function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { if ($uusmaiomayssaecw) { goto omeukkwiesseygwy; } $ggauoeuaesiymgee = $icwicymcioeyeyek; omeukkwiesseygwy: $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!(is_string($sogksuscggsicmac) && $yiiiqewsseywemqu)) { goto gewecumqwgcuwikk; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($sogksuscggsicmac); gewecumqwgcuwikk: return $sogksuscggsicmac; } public function kiwqeoimcasssmwa() { if (session_id()) { goto aewqyqksisqayska; } session_start(); aewqyqksisqayska: } public function wmmssomwekcakwuw() { session_start(); session_unset(); } public function giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kiwqeoimcasssmwa(); $_SESSION[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } public function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $mggeakwwkaykmkka = false) { $eqgoocgaqwqcimie = $this->seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!$eqgoocgaqwqcimie) { goto muooqqykkmuismwk; } $smecmmgoykqcaieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($eqgoocgaqwqcimie)); if (!$smecmmgoykqcaieu) { goto ayegqigqcsuoqess; } $eqgoocgaqwqcimie = $smecmmgoykqcaieu; ayegqigqcsuoqess: if (!$mggeakwwkaykmkka) { goto scqwioawomamygwa; } $this->ycasmmgsmaaumweg($uusmaiomayssaecw, ''); scqwioawomamygwa: muooqqykkmuismwk: return $eqgoocgaqwqcimie; } public function ycasmmgsmaaumweg($ymqmyyeuycgmigyo = null, $eqgoocgaqwqcimie = null, $owiuekcekysskaoe = 0, bool $bwiggowuuukmwoam = false, bool $oicswcucsocwuiug = false) : bool { if (headers_sent()) { goto yaiwoisswowiyski; } $muocgugcqiewywag = true; if ($owiuekcekysskaoe) { goto euiiaygickweagiw; } $owiuekcekysskaoe = 1; euiiaygickweagiw: if (is_numeric($owiuekcekysskaoe) && $owiuekcekysskaoe < 99) { goto qywgscciuywgmaia; } $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\x20\x73\145\x63\157\156\144\x73"); goto wiqmoimycyeesqse; qywgscciuywgmaia: $owiuekcekysskaoe = strtotime("\x2b{$owiuekcekysskaoe}\40\171\145\141\x72\x73"); wiqmoimycyeesqse: $bwiggowuuukmwoam = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim(); $qiouiwasaauyaaue = ["\145\x78\x70\151\162\145\163" => $owiuekcekysskaoe, "\150\164\x74\x70\x6f\156\154\x79" => $oicswcucsocwuiug, "\163\x65\x63\165\162\145" => $bwiggowuuukmwoam, Constants::okmiyqowuqogaiiy => COOKIEPATH ?: "\x2f", Constants::weayyoewessosyko => COOKIE_DOMAIN]; if (!is_array($eqgoocgaqwqcimie)) { goto kaewigguiigmcsoe; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); kaewigguiigmcsoe: if (version_compare(PHP_VERSION, "\x37\56\63\56\x30", "\76\x3d")) { goto wmoqoeyuaikokayu; } setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue["\x65\x78\x70\x69\162\145\163"], $qiouiwasaauyaaue["\x70\x61\x74\x68"], $qiouiwasaauyaaue["\144\x6f\x6d\x61\151\x6e"], $qiouiwasaauyaaue["\163\x65\x63\165\162\x65"], $qiouiwasaauyaaue["\x68\164\164\160\157\156\x6c\171"]); goto ucwwsgoweeagukyq; wmoqoeyuaikokayu: setcookie($ymqmyyeuycgmigyo, (string) $eqgoocgaqwqcimie, $qiouiwasaauyaaue); ucwwsgoweeagukyq: goto gecscumwugkogmyq; yaiwoisswowiyski: $muocgugcqiewywag = false; if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto auucmoqsmsouecag; } headers_sent($qogsmwakwacwqogk, $mwuwcsieauaqecae); trigger_error("{$ymqmyyeuycgmigyo}\x20\x63\x6f\x6f\x6b\151\x65\x20\143\x61\x6e\156\157\x74\40\x62\145\40\163\x65\164\x20\x2d\x20\x68\145\x61\144\x65\x72\x73\40\141\x6c\x72\x65\141\x64\x79\40\163\x65\x6e\x74\40\x62\171\40{$qogsmwakwacwqogk}\x20\157\x6e\x20\x6c\151\156\x65\40{$mwuwcsieauaqecae}", E_USER_NOTICE); auucmoqsmsouecag: gecscumwugkogmyq: return $muocgugcqiewywag; } public function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null, bool $yiiiqewsseywemqu = false) { return $this->seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee, $yiiiqewsseywemqu); } public function aaucwooggikimwgq() : bool { return $this->wwmuamkmmeemaqmy(Constants::isukcamoimieegam); } public function yaqgmueawaiyqgwi() : bool { return $this->wwmuamkmmeemaqmy(Constants::mswoacegomcucaik); } public function gmqckgyqkacaqaug($iueymcwwscwqkiyq) : string { switch ($iueymcwwscwqkiyq) { case 100: $ymacoouqwcqwwagu = "\103\x6f\x6e\x74\x69\156\165\145"; goto euaikwmkiyegwqae; case 101: $ymacoouqwcqwwagu = "\x53\x77\x69\164\x63\x68\151\x6e\x67\x20\x50\x72\x6f\164\x6f\143\157\x6c\x73"; goto euaikwmkiyegwqae; case 200: $ymacoouqwcqwwagu = "\117\x4b"; goto euaikwmkiyegwqae; case 201: $ymacoouqwcqwwagu = "\103\162\x65\141\x74\x65\x64"; goto euaikwmkiyegwqae; case 202: $ymacoouqwcqwwagu = "\x41\x63\143\145\x70\164\145\144"; goto euaikwmkiyegwqae; case 203: $ymacoouqwcqwwagu = "\116\x6f\156\x2d\x41\165\x74\150\157\162\x69\x74\141\164\151\x76\x65\x20\111\156\x66\x6f\162\155\x61\164\151\157\x6e"; goto euaikwmkiyegwqae; case 204: $ymacoouqwcqwwagu = "\116\x6f\x20\103\x6f\156\164\145\x6e\164"; goto euaikwmkiyegwqae; case 205: $ymacoouqwcqwwagu = "\122\145\x73\145\x74\40\x43\x6f\156\x74\145\x6e\164"; goto euaikwmkiyegwqae; case 206: $ymacoouqwcqwwagu = "\x50\x61\162\x74\x69\x61\x6c\x20\x43\x6f\156\x74\x65\x6e\164"; goto euaikwmkiyegwqae; case 300: $ymacoouqwcqwwagu = "\x4d\165\154\x74\x69\160\154\145\40\103\x68\x6f\x69\x63\x65\x73"; goto euaikwmkiyegwqae; case 301: $ymacoouqwcqwwagu = "\x4d\x6f\x76\145\x64\x20\120\145\x72\155\x61\x6e\145\156\x74\154\171"; goto euaikwmkiyegwqae; case 302: $ymacoouqwcqwwagu = "\x4d\157\166\145\x64\40\x54\x65\155\160\157\x72\141\x72\151\x6c\x79"; goto euaikwmkiyegwqae; case 303: $ymacoouqwcqwwagu = "\123\x65\145\x20\117\164\x68\145\162"; goto euaikwmkiyegwqae; case 304: $ymacoouqwcqwwagu = "\116\x6f\164\x20\115\157\144\151\x66\x69\x65\x64"; goto euaikwmkiyegwqae; case 305: $ymacoouqwcqwwagu = "\125\x73\145\40\x50\x72\157\x78\x79"; goto euaikwmkiyegwqae; case 400: $ymacoouqwcqwwagu = "\x42\141\144\x20\122\x65\x71\165\x65\x73\x74"; goto euaikwmkiyegwqae; case 401: $ymacoouqwcqwwagu = "\x55\156\141\x75\x74\150\x6f\x72\x69\x7a\x65\x64"; goto euaikwmkiyegwqae; case 402: $ymacoouqwcqwwagu = "\x50\141\171\155\145\x6e\x74\x20\122\145\x71\x75\x69\x72\145\x64"; goto euaikwmkiyegwqae; case 403: $ymacoouqwcqwwagu = "\106\157\x72\x62\151\x64\x64\x65\156"; goto euaikwmkiyegwqae; case 404: $ymacoouqwcqwwagu = "\116\157\164\40\106\x6f\165\156\144"; goto euaikwmkiyegwqae; case 405: $ymacoouqwcqwwagu = "\115\x65\164\x68\x6f\x64\40\116\x6f\x74\x20\101\x6c\x6c\x6f\167\145\144"; goto euaikwmkiyegwqae; case 406: $ymacoouqwcqwwagu = "\x4e\157\164\x20\x41\x63\x63\x65\x70\164\x61\x62\x6c\x65"; goto euaikwmkiyegwqae; case 407: $ymacoouqwcqwwagu = "\120\162\157\170\171\40\x41\x75\x74\150\145\156\x74\151\x63\x61\x74\x69\x6f\156\40\122\x65\161\x75\x69\x72\145\144"; goto euaikwmkiyegwqae; case 408: $ymacoouqwcqwwagu = "\122\x65\161\x75\145\x73\164\x20\124\x69\155\x65\x2d\x6f\x75\164"; goto euaikwmkiyegwqae; case 409: $ymacoouqwcqwwagu = "\103\x6f\x6e\x66\154\x69\x63\164"; goto euaikwmkiyegwqae; case 410: $ymacoouqwcqwwagu = "\107\x6f\156\x65"; goto euaikwmkiyegwqae; case 411: $ymacoouqwcqwwagu = "\114\x65\156\x67\164\x68\40\122\145\x71\165\x69\162\x65\x64"; goto euaikwmkiyegwqae; case 412: $ymacoouqwcqwwagu = "\x50\162\x65\143\x6f\156\144\151\x74\151\157\156\x20\x46\x61\151\x6c\x65\144"; goto euaikwmkiyegwqae; case 413: $ymacoouqwcqwwagu = "\122\x65\x71\x75\x65\163\164\x20\105\x6e\x74\x69\x74\171\x20\124\x6f\157\x20\x4c\141\162\x67\x65"; goto euaikwmkiyegwqae; case 414: $ymacoouqwcqwwagu = "\122\145\161\x75\145\x73\164\55\125\x52\111\40\124\157\157\40\x4c\141\x72\x67\145"; goto euaikwmkiyegwqae; case 415: $ymacoouqwcqwwagu = "\125\156\163\165\160\160\x6f\162\x74\x65\x64\40\115\x65\x64\151\141\40\124\171\x70\145"; goto euaikwmkiyegwqae; case 500: $ymacoouqwcqwwagu = "\x49\x6e\164\145\162\156\141\154\40\x53\x65\x72\x76\145\162\40\x45\162\x72\157\x72"; goto euaikwmkiyegwqae; case 501: $ymacoouqwcqwwagu = "\116\x6f\164\40\111\155\x70\x6c\145\x6d\x65\x6e\x74\145\144"; goto euaikwmkiyegwqae; case 502: $ymacoouqwcqwwagu = "\102\141\144\x20\107\141\x74\x65\167\141\x79"; goto euaikwmkiyegwqae; case 503: $ymacoouqwcqwwagu = "\x53\x65\x72\x76\x69\143\145\40\x55\156\x61\166\x61\151\154\x61\x62\x6c\145"; goto euaikwmkiyegwqae; case 504: $ymacoouqwcqwwagu = "\x47\x61\x74\x65\x77\141\x79\40\x54\151\155\145\x2d\157\x75\x74"; goto euaikwmkiyegwqae; case 505: $ymacoouqwcqwwagu = "\x48\124\x54\x50\x20\126\x65\162\x73\151\157\156\40\x6e\x6f\x74\x20\x73\165\160\160\157\162\x74\145\144"; goto euaikwmkiyegwqae; default: wp_die("\125\x6e\x6b\156\x6f\167\x6e\x20\150\164\164\x70\40\x73\x74\141\164\165\x73\40\x63\157\x64\145\x20\x22" . htmlentities($iueymcwwscwqkiyq) . "\x22"); } qgiscekgegqwemgs: euaikwmkiyegwqae: return $ymacoouqwcqwwagu; } public function ooeyomkwieykuywo(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->osiemwwsiacmicwk($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function ukemmqiequgsesak(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->awemwqyugsqgcsyu($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } public function uiuekemsiysicysc(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->iyysycaqqccsmysy($this->guimwemasuqkumsg($eeamcawaiqocomwy), $this->oiougmkqigycceqo($ywmkwiwkosakssii)); } private function guimwemasuqkumsg(string $eeamcawaiqocomwy) : string { return esc_url_raw($eeamcawaiqocomwy); } public function sswiqkmqewcageua() { return $this->giiecckwoyiawoyy("\x52\105\x51\x55\x45\123\124\137\x55\122\x49"); } public function ekcymmyqoceukosc(bool $kssgyousiceysuaw = false) : string { $eeamcawaiqocomwy = ''; if (!($mkomwsiykqigmqca = $this->sswiqkmqewcageua())) { goto iaqyisoeeygqwcym; } if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) { goto iiwessuyuisaawek; } $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy); iiwessuyuisaawek: $gwgucoaaqcwwciqq = $this->giiecckwoyiawoyy("\x48\x54\x54\x50\137\110\x4f\123\124"); $cgmsicimocaeggqg = stripos($_SERVER["\123\105\x52\x56\105\122\137\x50\122\x4f\x54\x4f\x43\x4f\114"], "\x68\164\x74\160\163") === 0 ? "\x68\164\164\x70\163\x3a\57\x2f" : "\150\164\x74\160\72\57\57"; if ($gwgucoaaqcwwciqq) { goto yqukoacecemgkkay; } $gmigwwwmwemyaayy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); goto soyqsccuokmyuagk; yqukoacecemgkkay: $gmigwwwmwemyaayy = $cgmsicimocaeggqg . $gwgucoaaqcwwciqq; soyqsccuokmyuagk: $eeamcawaiqocomwy = untrailingslashit($gmigwwwmwemyaayy) . $mkomwsiykqigmqca; if (!$kssgyousiceysuaw) { goto owsgmougoacgokmi; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->giiecckwoyiawoyy("\121\125\105\122\x59\137\x53\x54\x52\111\116\x47"), '', $eeamcawaiqocomwy); owsgmougoacgokmi: iaqyisoeeygqwcym: return $eeamcawaiqocomwy; } public function oiucukewkckkwiqc($mkomwsiykqigmqca, string $mgkceomocowocqyo = Constants::zmmsyimwiiaweocw, string $aaqqkgyougeiueyq = Constants::zmmsyimwiiaweocw) { $eeamcawaiqocomwy = null; if (!($mgkceomocowocqyo === Constants::zmmsyimwiiaweocw)) { goto qokakquaeuigqcwy; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy($mkomwsiykqigmqca, $aaqqkgyougeiueyq); qokakquaeuigqcwy: return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x67\145\164\x5f\x75\162\154\137\142\171\137\143\157\x6e\164\145\x78\x74", $eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo, $aaqqkgyougeiueyq); } public function gsmocsuquwwywuwc() : ?string { return $this->oiucukewkckkwiqc("\x61\144\155\x69\x6e\x2d\141\152\141\170\56\160\x68\160"); } public function msewgimgmcgcomey($suaemuyiacqyugsm = '', $uoomaookgsyciacm = [], $qogsmwakwacwqogk = "\141\144\x6d\151\156\56\x70\150\160") : string { $eeamcawaiqocomwy = $this->oiucukewkckkwiqc($qogsmwakwacwqogk); if (!$suaemuyiacqyugsm) { goto cymigkmkskowwcei; } $uoomaookgsyciacm[Constants::imywcsggckkcywgk] = $suaemuyiacqyugsm; cymigkmkskowwcei: if (!$uoomaookgsyciacm) { goto ukecesmaioggmyoc; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $eeamcawaiqocomwy); ukecesmaioggmyoc: return $eeamcawaiqocomwy; } public function kgmogcyekssmokco(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { global $pagenow; return "\141\144\155\x69\156\x2e\160\150\160" === $pagenow && $this->ggcoyemwouwsqouy($suaemuyiacqyugsm, $gqgemcmoicmgaqie); } public function ggcoyemwouwsqouy(?string $suaemuyiacqyugsm, ?string $gqgemcmoicmgaqie = Constants::imywcsggckkcywgk) : bool { return $this->gkwaaeusmsaywikg($gqgemcmoicmgaqie) === $suaemuyiacqyugsm; } public function aocumcqkiuaecsoc() : string { $syowsmcowosssaos = Constants::mcaucuyeeiwsmmuy; if ($this->amkiaqeamgywsygm()) { goto yseoucmemeekwkig; } if (!$this->qsqicssyqieuqooy()) { goto wcyawmskokoagwqq; } $syowsmcowosssaos = Constants::ugsuecoyuqcamsac; wcyawmskokoagwqq: goto suggiaqykiwgkkey; yseoucmemeekwkig: $syowsmcowosssaos = Constants::skogicecygyyskkq; suggiaqykiwgkkey: return $syowsmcowosssaos; } public function amkiaqeamgywsygm() : bool { return Detector::symcgieuakksimmu()->qawecuimqqcqwgsw() || Constants::skogicecygyyskkq === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function qsqicssyqieuqooy() : bool { return Detector::symcgieuakksimmu()->gsuucswsiuggysyw() || Constants::ugsuecoyuqcamsac === $this->gkwaaeusmsaywikg(Constants::eymuouiwgqkyaksy); } public function swgywqyswmcgguwi() : bool { return !$this->amkiaqeamgywsygm() && !$this->qsqicssyqieuqooy(); } public function oyekugiwykcqismq() : bool { return Detector::symcgieuakksimmu()->uggoocigiyiqkmww(); } public static function ueiiieygmgawesgq() : array { $ymkomcgesksuuysk = []; if (!function_exists("\x77\x70\137\x67\145\x74\137\x61\x76\141\x69\x6c\141\142\x6c\x65\137\164\162\141\x6e\163\154\141\164\x69\x6f\156\163")) { require_once ABSPATH . "\x77\160\55\141\x64\155\x69\156\x2f\x69\156\x63\x6c\165\144\145\x73\x2f\164\162\x61\156\x73\154\x61\164\x69\x6f\156\55\x69\x6e\163\x74\x61\154\154\56\160\150\x70"; } $qsmicgaymwwckcsa = wp_get_available_translations(); foreach (get_available_languages() as $swaukaagekiououo) { $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\x67\154\151\x73\x68\137\156\141\x6d\x65"] ?? $swaukaagekiououo; $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo; uogakawoeucgocym: } igoseisickgqeaog: return $ymkomcgesksuuysk; } private function wwmuamkmmeemaqmy(string $qgciuiagkkguykgs) : bool { return strtolower($this->giiecckwoyiawoyy("\122\105\x51\125\x45\x53\124\x5f\115\x45\x54\110\x4f\x44", '')) === strtolower($qgciuiagkkguykgs); } private function oiougmkqigycceqo(array $ywmkwiwkosakssii = []) : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::aqgsqqkgmigcsaau => true, Constants::kuisysmymgakemym => $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\150\164\x74\x70\163\x5f\154\x6f\143\x61\x6c\x5f\x73\x73\154\137\166\x65\x72\151\146\171", false)]); } public function qguymyqewgeawsce(?string $iwywmkygwewiamwm = null) : string { if (!$iwywmkygwewiamwm) { goto cyukykwcccsawesg; } $yiasugywggckywoa = parse_url($iwywmkygwewiamwm); $gwqgmkqcgwwmweom = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($yiasugywggckywoa, Constants::qsykmkmscqqawyaw, ''); goto soywogweqoqmymqw; cyukykwcccsawesg: $gwqgmkqcgwwmweom = $this->gkwaaeusmsaywikg(Constants::qsykmkmscqqawyaw, ''); soywogweqoqmymqw: return urldecode($gwqgmkqcgwwmweom); } public function uogsaoywmawqwmcc(string $iwywmkygwewiamwm, ?string $gwqgmkqcgwwmweom = null) : string { if ($gwqgmkqcgwwmweom) { goto gscsssqcacocusua; } $gwqgmkqcgwwmweom = $this->ekcymmyqoceukosc(true); gscsssqcacocusua: return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::qsykmkmscqqawyaw => urlencode($gwqgmkqcgwwmweom)], $iwywmkygwewiamwm); } public function sgemakymciqkiyio($keccaugmemegoimu, string $aqykuigiuwmmcieu = Constants::qmwqkaeamecekiso) { $sogksuscggsicmac = false; $kuukgsmqkagwaciu = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ykmyiouokskyomii($keccaugmemegoimu); if (!$kuukgsmqkagwaciu) { goto aokcewiioiiyiqeu; } if ($aqykuigiuwmmcieu === Constants::qmwqkaeamecekiso) { goto sqwgcyyoaismwkqs; } $sogksuscggsicmac = $kuukgsmqkagwaciu; goto umeiiiomksmkmoaa; sqwgcyyoaismwkqs: $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); umeiiiomksmkmoaa: aokcewiioiiyiqeu: return $sogksuscggsicmac; } public function ccmqswoueyeqkoeq($wgqoggqqyegioeuw, string $awagmaokwmkwuceg = Constants::icwieiwoqeocywss, string $eogowigeyucaauig = '') { if (!($eogowigeyucaauig && !$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto iisykceuumgoicmc; } return new WP_Error("\x34\60\63", __("\x59\157\x75\x20\144\157\40\156\157\x74\x20\x68\141\x76\x65\x20\141\143\x63\x65\163\x73\x20\x74\157\40\160\x65\162\146\157\162\x6d\40\x74\150\x69\163\40\x6f\160\145\162\x61\x74\x69\x6f\x6e\56", PR__CMN__FOUNDATION)); iisykceuumgoicmc: $gwgqcsmomamyqsmy = $this->gkwaaeusmsaywikg($awagmaokwmkwuceg); if (!(empty($gwgqcsmomamyqsmy) || !$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, $wgqoggqqyegioeuw))) { goto womgsyqqiwokqyiw; } return new WP_Error("\x34\60\x33", __("\x59\x6f\x75\x72\x20\x72\x65\161\165\x65\163\164\x20\x69\163\40\156\157\164\40\x76\x61\154\x69\x64\40\157\162\x20\145\170\x70\151\162\x65\x64\x2e", PR__CMN__FOUNDATION)); womgsyqqiwokqyiw: return true; } public function aoyemeikggcigigu(bool $gqgoqaeswmcwagoi = false, string $aiowsaccomcoikus = Constants::xwwaeweqegiqeqkm, string $aiamqeawckcsuaou = Constants::waoywqksqecymesy) { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk($aiamqeawckcsuaou, $aiowsaccomcoikus)) { goto mkikakaaaqwygquu; } $sogksuscggsicmac = true; goto cgmukwicwgikewei; mkikakaaaqwygquu: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\145\163\164\x20\x69\163\x20\156\157\164\x20\x76\141\154\x69\x64\x2c\x20\160\154\145\x61\x73\x65\x20\162\145\x6c\157\x61\144\x20\x70\x61\147\x65\x20\141\156\144\40\164\x72\171\40\x61\x67\x61\151\156\56", PR__CMN__FOUNDATION)); if (!$gqgoqaeswmcwagoi) { goto ayoyuasegggqqosu; } $this->uaggqsoeugksgooc($sogksuscggsicmac, false); ayoyuasegggqqosu: cgmukwicwgikewei: return $sogksuscggsicmac; } public function uaggqsoeugksgooc($keccaugmemegoimu, bool $kigowwqauiumummw = true) { ob_start(); ob_get_clean(); ob_clean(); if ($kigowwqauiumummw && !is_wp_error($keccaugmemegoimu)) { goto iuasemkmccmcauoc; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsmogeawssggkqcg($keccaugmemegoimu); goto sscqwggcsoumagsw; iuasemkmccmcauoc: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ycwuiqwgoquwcioq($keccaugmemegoimu); sscqwggcsoumagsw: } public function guaucoeeuseuqamo(string $mkomwsiykqigmqca = '') : string { if (!($mkomwsiykqigmqca && $mkomwsiykqigmqca[0] !== "\57")) { goto iasuykaqammykyuc; } _doing_it_wrong("\x67\145\x74\x50\x4d\x50\x52\123\151\x74\145\x55\122\x4c", sprintf(__("\103\157\165\x6c\144\x20\x6e\x6f\164\40\x75\163\145\40\160\x61\164\x68\40\x22\x25\163\42\x20\167\151\x74\150\x6f\x75\164\x20\163\x6c\141\x73\150\40\x6f\156\40\164\150\145\40\x66\x69\162\163\164\x20\143\x68\x61\x72\x61\x63\164\x65\x72\x2e", PR__CMN__FOUNDATION), $mkomwsiykqigmqca), "\61\56\63\56\52"); iasuykaqammykyuc: $ieokeoyugcmwuumq = Constants::gmiwyqkuocagkuie; return untrailingslashit($ieokeoyugcmwuumq) . trailingslashit($mkomwsiykqigmqca); } }
