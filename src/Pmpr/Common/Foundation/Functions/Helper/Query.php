<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d172c3f1f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\x69\144\x67\145\164\163\x2e\160\x68\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\144\151\x74\56\160\x68\x70"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc) { $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; } return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\x65\164\137\x73\145\141\x72\143\150\x5f\x72\145\x73\165\154\164", Constants::oimusiegakqgwosg); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); } return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\x61\162\x63\150\x5f\162\145\163\x75\x6c\164", $sogksuscggsicmac); } public function auqoeckqueqiiike() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cgquaaukmyeomgms(); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { $mcgoysmkqsqooceq = true; } else { if ("\130\115\114\x48\164\164\x70\122\x65\161\165\x65\x73\164" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\120\137\x58\x5f\x52\105\121\125\105\123\x54\x45\x44\137\x57\111\x54\x48")) { $mcgoysmkqsqooceq = true; } } if ($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou)) { $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { $mcgoysmkqsqooceq = false; } else { if (is_string($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; } foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { $mcgoysmkqsqooceq = true; break; } $mcgoysmkqsqooceq = false; } } } return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\x44\x4f\x49\116\107\x5f\101\125\124\x4f\123\x41\126\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if ($this->mcgoysmkqsqooceq()) { $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\x77\x70\x5f\150\164\x74\160\137\x72\145\146\x65\162\x65\162"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\x77\160\137\150\x74\x74\x70\x5f\x72\x65\146\x65\x72\145\162"]); } else { if (!empty($_SERVER["\110\124\x54\120\x5f\x52\x45\106\x45\122\x45\x52"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\124\x54\x50\137\122\105\106\105\x52\105\x52"]); } } $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); } return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\155\145\x6e\x74\157\162\55\x70\x72\x65\166\151\x65\167", "\146\x6c\x5f\x62\165\151\x6c\144\145\x72", "\143\164\x5f\x62\x75\151\154\144\x65\x72", "\145\164\x5f\146\x62", "\x74\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (isset($_GET[$siykeiywomwwuoiw])) { $ksaameoqigiaoigg = true; break; } } return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\151\163\x5f\x61\155\160\137\145\156\144\160\x6f\151\156\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\163\x5f\x61\155\x70", false)) { if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $weksiguqgqscsoee = preg_match("\x2f\50\134\x2f\141\155\x70\x5c\57\x70\x61\x67\x65\x5c\x2f\133\x30\55\71\x5d\52\x29\174\50\x5c\57\x61\x6d\160\x5c\57\x3f\51\x2f", $eeamcawaiqocomwy); } return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); } else { $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); } return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); } else { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\164\155\154", "\150\x74\x6d"]); } public function gimisysaiasieees() : bool { static $uwqkkwmiiumuukoa = null; if (is_bool($uwqkkwmiiumuukoa)) { return $uwqkkwmiiumuukoa; } $uwqkkwmiiumuukoa = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); if (!$uwqkkwmiiumuukoa) { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->gimisysaiasieees(); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\x72\145\x73\164\x5f\x61\160\151\137\162\145\x71\x75\x65\163\164", $uwqkkwmiiumuukoa); } public function eswkscyckkgkiswy() : bool { static $iacmokioqyosocms = null; if (is_bool($iacmokioqyosocms)) { return $iacmokioqyosocms; } $iacmokioqyosocms = !$this->mcgoysmkqsqooceq() && !$this->auqoeckqueqiiike() && !$this->gimisysaiasieees(); return $iacmokioqyosocms; } public function syukqeyowauuucwi() : bool { static $mmeqsiuwykwqeqag = null; if (is_bool($mmeqsiuwykwqeqag)) { return $mmeqsiuwykwqeqag; } $mmeqsiuwykwqeqag = !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $mmeqsiuwykwqeqag; } public function awumyiewiaosiyyy() : bool { static $ggkwuuqqmgamcqwq = null; if (is_bool($ggkwuuqqmgamcqwq)) { return $ggkwuuqqmgamcqwq; } $ggkwuuqqmgamcqwq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $ggkwuuqqmgamcqwq; } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if (!$gqgemcmoicmgaqie) { $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); } return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if ($yiiiqewsseywemqu) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); } return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq("\x77\x69\x64\147\x65\x74") || $this->syukqeyowauuucwi() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->syukqeyowauuucwi(); } }
