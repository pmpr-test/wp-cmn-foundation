<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\x64\147\145\x74\163\56\160\150\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\144\x69\164\x2e\x70\x68\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow || str_ends_with(untrailingslashit($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc()), $suaemuyiacqyugsm); } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc) { $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; } return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\x65\164\x5f\x73\145\141\x72\143\150\x5f\x72\145\163\165\x6c\x74", Constants::oimusiegakqgwosg); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); } return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\141\162\x63\x68\137\162\x65\x73\165\x6c\164", $sogksuscggsicmac); } public function auqoeckqueqiiike() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cgquaaukmyeomgms(); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { $mcgoysmkqsqooceq = true; } else { if ("\130\115\x4c\110\x74\x74\x70\122\x65\x71\165\x65\x73\x74" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x48\124\x54\x50\137\x58\137\x52\x45\x51\125\105\x53\124\105\x44\137\x57\111\124\110")) { $mcgoysmkqsqooceq = true; } } if ($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou)) { $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { $mcgoysmkqsqooceq = false; } else { if (is_string($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; } foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { $mcgoysmkqsqooceq = true; break; } $mcgoysmkqsqooceq = false; } } } return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\104\117\x49\x4e\x47\137\101\x55\x54\117\123\x41\x56\x45", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if ($this->mcgoysmkqsqooceq()) { $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\x5f\167\x70\x5f\x68\x74\x74\x70\x5f\x72\145\x66\x65\x72\145\162"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\167\160\x5f\x68\164\164\160\x5f\162\x65\x66\145\x72\145\162"]); } else { if (!empty($_SERVER["\x48\124\124\120\137\x52\105\x46\105\x52\105\x52"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\110\x54\x54\x50\137\122\105\x46\x45\122\x45\x52"]); } } $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); } return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\x6d\145\x6e\164\157\x72\55\160\162\145\x76\151\x65\x77", "\146\154\137\x62\165\151\x6c\144\x65\162", "\143\x74\x5f\x62\165\x69\154\x64\x65\162", "\145\x74\137\146\142", "\164\166\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (isset($_GET[$siykeiywomwwuoiw])) { $ksaameoqigiaoigg = true; break; } } return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\x69\x73\x5f\141\x6d\x70\137\x65\x6e\x64\x70\157\151\x6e\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\141\155\x70", false)) { if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $weksiguqgqscsoee = preg_match("\x2f\50\134\x2f\141\155\160\134\x2f\x70\x61\147\x65\x5c\57\133\60\55\x39\x5d\52\x29\174\50\x5c\x2f\141\x6d\x70\134\57\77\x29\x2f", $eeamcawaiqocomwy); } return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); } else { $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); } return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); } else { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\150\x74\155\x6c", "\150\164\x6d"]); } public function gimisysaiasieees() : bool { static $uwqkkwmiiumuukoa = null; if (is_bool($uwqkkwmiiumuukoa)) { return $uwqkkwmiiumuukoa; } $uwqkkwmiiumuukoa = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); if (!$uwqkkwmiiumuukoa) { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->gimisysaiasieees(); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\163\x5f\162\x65\163\164\x5f\141\x70\x69\137\x72\x65\161\165\x65\163\x74", $uwqkkwmiiumuukoa); } public function eswkscyckkgkiswy() : bool { static $iacmokioqyosocms = null; if (is_bool($iacmokioqyosocms)) { return $iacmokioqyosocms; } $iacmokioqyosocms = !$this->mcgoysmkqsqooceq() && !$this->auqoeckqueqiiike() && !$this->gimisysaiasieees(); return $iacmokioqyosocms; } public function syukqeyowauuucwi() : bool { static $mmeqsiuwykwqeqag = null; if (is_bool($mmeqsiuwykwqeqag)) { return $mmeqsiuwykwqeqag; } $mmeqsiuwykwqeqag = !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $mmeqsiuwykwqeqag; } public function awumyiewiaosiyyy() : bool { static $ggkwuuqqmgamcqwq = null; if (is_bool($ggkwuuqqmgamcqwq)) { return $ggkwuuqqmgamcqwq; } $ggkwuuqqmgamcqwq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $ggkwuuqqmgamcqwq; } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if (!$gqgemcmoicmgaqie) { $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); } return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if ($yiiiqewsseywemqu) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); } return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq("\x77\x69\x64\147\x65\x74") || $this->syukqeyowauuucwi() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk) || $this->syukqeyowauuucwi(); } }
