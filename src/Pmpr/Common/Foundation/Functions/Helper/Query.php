<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67143a37bcbb1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\x64\147\145\164\163\56\160\150\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\x65\x64\x69\x74\56\x70\x68\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow || str_ends_with(untrailingslashit($this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua()), $suaemuyiacqyugsm); } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc) { $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; } return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\145\164\137\x73\145\141\162\x63\150\x5f\x72\x65\163\x75\x6c\x74", Constants::oimusiegakqgwosg); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); } return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\163\145\x61\x72\x63\x68\137\162\x65\163\165\154\164", $sogksuscggsicmac); } public function auqoeckqueqiiike() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cgquaaukmyeomgms(); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { $mcgoysmkqsqooceq = true; } else { if ("\130\115\x4c\x48\x74\164\160\x52\x65\161\165\145\163\x74" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\x50\137\x58\x5f\x52\x45\x51\125\105\x53\124\x45\104\x5f\x57\x49\x54\x48")) { $mcgoysmkqsqooceq = true; } } if ($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou)) { $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { $mcgoysmkqsqooceq = false; } else { if (is_string($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; } foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { $mcgoysmkqsqooceq = true; break; } $mcgoysmkqsqooceq = false; } } } return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\x44\x4f\111\116\x47\137\101\x55\x54\117\x53\101\x56\x45", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if ($this->mcgoysmkqsqooceq()) { $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\167\160\x5f\150\164\x74\160\x5f\162\x65\x66\145\x72\x65\162"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\x77\x70\x5f\150\x74\x74\x70\137\162\x65\146\x65\162\145\x72"]); } else { if (!empty($_SERVER["\110\124\124\x50\x5f\x52\105\x46\x45\122\105\x52"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\124\x54\x50\137\122\105\x46\x45\x52\105\x52"]); } } $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); } return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\x65\155\145\156\164\157\x72\x2d\160\x72\145\166\x69\145\167", "\x66\x6c\137\142\x75\x69\x6c\x64\x65\162", "\143\164\x5f\142\165\151\154\x64\x65\162", "\x65\164\x5f\x66\142", "\164\166\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (isset($_GET[$siykeiywomwwuoiw])) { $ksaameoqigiaoigg = true; break; } } return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\151\163\137\141\155\160\x5f\145\156\x64\x70\x6f\x69\x6e\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\141\x6d\x70", false)) { if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $weksiguqgqscsoee = preg_match("\57\50\x5c\57\141\155\x70\134\x2f\x70\x61\147\x65\134\x2f\x5b\60\x2d\71\135\x2a\x29\174\50\134\x2f\141\x6d\160\134\x2f\x3f\x29\57", $eeamcawaiqocomwy); } return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); } else { $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); } return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); } else { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\x74\x6d\x6c", "\150\x74\x6d"]); } public function gimisysaiasieees() : bool { static $uwqkkwmiiumuukoa = null; if (is_bool($uwqkkwmiiumuukoa)) { return $uwqkkwmiiumuukoa; } $uwqkkwmiiumuukoa = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); if (!$uwqkkwmiiumuukoa) { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->gimisysaiasieees(); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\x73\x5f\162\145\x73\164\x5f\x61\160\x69\x5f\x72\145\x71\165\145\x73\164", $uwqkkwmiiumuukoa); } public function eswkscyckkgkiswy() : bool { static $iacmokioqyosocms = null; if (is_bool($iacmokioqyosocms)) { return $iacmokioqyosocms; } $iacmokioqyosocms = !$this->mcgoysmkqsqooceq() && !$this->auqoeckqueqiiike() && !$this->gimisysaiasieees(); return $iacmokioqyosocms; } public function syukqeyowauuucwi() : bool { static $mmeqsiuwykwqeqag = null; if (is_bool($mmeqsiuwykwqeqag)) { return $mmeqsiuwykwqeqag; } $mmeqsiuwykwqeqag = !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $mmeqsiuwykwqeqag; } public function awumyiewiaosiyyy() : bool { static $ggkwuuqqmgamcqwq = null; if (is_bool($ggkwuuqqmgamcqwq)) { return $ggkwuuqqmgamcqwq; } $ggkwuuqqmgamcqwq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $ggkwuuqqmgamcqwq; } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if (!$gqgemcmoicmgaqie) { $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); } return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if ($yiiiqewsseywemqu) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); } return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq("\x77\x69\144\147\x65\164") || $this->syukqeyowauuucwi() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->syukqeyowauuucwi(); } }
