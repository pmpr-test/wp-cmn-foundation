<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3200825a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\144\x67\145\164\x73\56\160\150\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\x65\144\151\164\x2e\160\150\x70"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc) { $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; } return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\147\x65\x74\137\x73\145\141\x72\x63\x68\x5f\162\x65\163\x75\154\x74", Constants::oimusiegakqgwosg); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); } return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\163\145\141\162\143\x68\137\162\145\x73\165\154\x74", $sogksuscggsicmac); } public function auqoeckqueqiiike() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cgquaaukmyeomgms(); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { $mcgoysmkqsqooceq = true; } else { if ("\130\115\x4c\x48\164\164\160\x52\x65\x71\165\x65\163\164" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\x50\x5f\x58\137\x52\105\121\x55\x45\x53\124\x45\104\x5f\127\x49\x54\x48")) { $mcgoysmkqsqooceq = true; } } if ($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou)) { $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { $mcgoysmkqsqooceq = false; } else { if (is_string($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; } foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { $mcgoysmkqsqooceq = true; break; } $mcgoysmkqsqooceq = false; } } } return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\104\x4f\x49\x4e\x47\x5f\x41\125\124\x4f\x53\x41\x56\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if ($this->mcgoysmkqsqooceq()) { $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\167\160\x5f\150\x74\164\x70\137\x72\x65\x66\x65\x72\145\x72"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\x77\x70\x5f\x68\164\x74\x70\x5f\x72\145\x66\145\x72\x65\162"]); } else { if (!empty($_SERVER["\x48\x54\124\x50\137\122\105\106\105\x52\x45\x52"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\110\124\x54\120\137\x52\105\106\105\122\x45\x52"]); } } $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); } return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\145\x6c\x65\x6d\x65\156\164\157\162\x2d\x70\x72\145\x76\x69\145\x77", "\146\154\137\x62\x75\151\154\x64\x65\x72", "\143\x74\137\142\x75\151\154\x64\145\x72", "\x65\x74\x5f\x66\x62", "\x74\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (isset($_GET[$siykeiywomwwuoiw])) { $ksaameoqigiaoigg = true; break; } } return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\x69\x73\x5f\141\x6d\x70\137\145\x6e\x64\160\157\x69\x6e\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\163\x5f\141\155\160", false)) { if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $weksiguqgqscsoee = preg_match("\x2f\50\x5c\57\x61\155\x70\x5c\x2f\x70\x61\147\145\x5c\x2f\x5b\x30\55\71\x5d\x2a\51\174\50\134\x2f\141\x6d\160\x5c\57\77\x29\x2f", $eeamcawaiqocomwy); } return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); } else { $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); } return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); } else { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\150\164\x6d\x6c", "\150\164\155"]); } public function gimisysaiasieees() : bool { static $uwqkkwmiiumuukoa = null; if (is_bool($uwqkkwmiiumuukoa)) { return $uwqkkwmiiumuukoa; } $uwqkkwmiiumuukoa = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); if (!$uwqkkwmiiumuukoa) { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->gimisysaiasieees(); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\x72\145\x73\x74\137\141\x70\151\x5f\x72\145\161\165\x65\x73\164", $uwqkkwmiiumuukoa); } public function eswkscyckkgkiswy() : bool { static $iacmokioqyosocms = null; if (is_bool($iacmokioqyosocms)) { return $iacmokioqyosocms; } $iacmokioqyosocms = !$this->mcgoysmkqsqooceq() && !$this->auqoeckqueqiiike() && !$this->gimisysaiasieees(); return $iacmokioqyosocms; } public function syukqeyowauuucwi() : bool { static $mmeqsiuwykwqeqag = null; if (is_bool($mmeqsiuwykwqeqag)) { return $mmeqsiuwykwqeqag; } $mmeqsiuwykwqeqag = !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $mmeqsiuwykwqeqag; } public function awumyiewiaosiyyy() : bool { static $ggkwuuqqmgamcqwq = null; if (is_bool($ggkwuuqqmgamcqwq)) { return $ggkwuuqqmgamcqwq; } $ggkwuuqqmgamcqwq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $ggkwuuqqmgamcqwq; } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if (!$gqgemcmoicmgaqie) { $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); } return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if ($yiiiqewsseywemqu) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); } return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq("\x77\x69\x64\x67\x65\x74") || $this->syukqeyowauuucwi() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->syukqeyowauuucwi(); } }
