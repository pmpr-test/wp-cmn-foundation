<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\x77\151\144\x67\145\x74\163\56\x70\x68\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\144\x69\164\56\x70\150\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow || str_ends_with(untrailingslashit($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc()), $suaemuyiacqyugsm); } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc) { $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; } return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\x65\x74\137\x73\x65\x61\162\x63\150\x5f\x72\x65\163\165\154\164", Constants::oimusiegakqgwosg); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); } return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\163\x65\141\162\143\x68\x5f\162\x65\163\165\154\x74", $sogksuscggsicmac); } public function auqoeckqueqiiike() : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cgquaaukmyeomgms(); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { $mcgoysmkqsqooceq = true; } else { if ("\130\x4d\114\110\164\164\160\122\x65\161\165\145\x73\164" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\x50\x5f\130\137\x52\x45\121\125\x45\x53\x54\105\x44\137\127\111\124\x48")) { $mcgoysmkqsqooceq = true; } } if ($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou)) { $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { $mcgoysmkqsqooceq = false; } else { if (is_string($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; } foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { $mcgoysmkqsqooceq = true; break; } $mcgoysmkqsqooceq = false; } } } return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\x44\117\x49\116\x47\x5f\x41\125\x54\117\x53\101\x56\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if ($this->mcgoysmkqsqooceq()) { $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\x77\x70\x5f\x68\x74\x74\x70\x5f\162\x65\x66\145\x72\145\162"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\x77\x70\137\150\x74\164\160\137\162\x65\146\145\162\145\162"]); } else { if (!empty($_SERVER["\x48\x54\x54\x50\x5f\122\x45\x46\105\x52\105\122"])) { $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\x54\x54\x50\x5f\x52\105\x46\x45\122\x45\x52"]); } } $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); } return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\x6d\145\x6e\x74\x6f\162\55\x70\162\x65\166\x69\x65\167", "\x66\154\137\x62\x75\x69\x6c\x64\145\162", "\x63\x74\137\x62\x75\x69\x6c\144\145\162", "\145\164\137\146\142", "\164\166\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (isset($_GET[$siykeiywomwwuoiw])) { $ksaameoqigiaoigg = true; break; } } return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $goumkccmgysgqueu = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\151\x73\x5f\x61\x6d\x70\137\145\156\x64\x70\157\x69\156\x74", false, $eeamcawaiqocomwy); if (!$goumkccmgysgqueu) { $goumkccmgysgqueu = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\163\x5f\x61\x6d\x70", false, $eeamcawaiqocomwy); if ($goumkccmgysgqueu) { if (!$eeamcawaiqocomwy) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $goumkccmgysgqueu = preg_match("\x2f\50\x5c\57\141\x6d\160\134\57\160\x61\x67\x65\x5c\57\x5b\x30\x2d\x39\135\x2a\51\174\x28\x5c\57\141\155\x70\134\x2f\77\x29\57", $eeamcawaiqocomwy); } } return $goumkccmgysgqueu; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); } else { $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); } return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); } else { $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\164\155\154", "\x68\x74\x6d"]); } public function gimisysaiasieees() : bool { static $uwqkkwmiiumuukoa = null; if (is_bool($uwqkkwmiiumuukoa)) { return $uwqkkwmiiumuukoa; } $uwqkkwmiiumuukoa = str_contains($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); if (!$uwqkkwmiiumuukoa) { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->gimisysaiasieees(); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\163\137\x72\145\163\x74\x5f\x61\x70\151\137\162\145\x71\165\145\163\x74", $uwqkkwmiiumuukoa); } public function eswkscyckkgkiswy() : bool { static $iacmokioqyosocms = null; if (is_bool($iacmokioqyosocms)) { return $iacmokioqyosocms; } $iacmokioqyosocms = !$this->mcgoysmkqsqooceq() && !$this->auqoeckqueqiiike() && !$this->gimisysaiasieees(); return $iacmokioqyosocms; } public function syukqeyowauuucwi() : bool { static $mmeqsiuwykwqeqag = null; if (is_bool($mmeqsiuwykwqeqag)) { return $mmeqsiuwykwqeqag; } $mmeqsiuwykwqeqag = !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $mmeqsiuwykwqeqag; } public function awumyiewiaosiyyy() : bool { static $ggkwuuqqmgamcqwq = null; if (is_bool($ggkwuuqqmgamcqwq)) { return $ggkwuuqqmgamcqwq; } $ggkwuuqqmgamcqwq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $this->eswkscyckkgkiswy(); return $ggkwuuqqmgamcqwq; } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if (!$gqgemcmoicmgaqie) { $gqgemcmoicmgaqie = $wp_query; } if ($gqgemcmoicmgaqie instanceof WP_Query) { $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); } return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if ($yiiiqewsseywemqu) { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); } return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq("\x77\151\x64\x67\x65\164") || $this->syukqeyowauuucwi() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo($egkyssmuqcwaciya = null, $yioasaqckaccmmsi = null) : bool { return $this->syukqeyowauuucwi() || $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk) || $egkyssmuqcwaciya && $yioasaqckaccmmsi && $this->qiosugokwogykyes("{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($egkyssmuqcwaciya)}\137{$yioasaqckaccmmsi}\137\163\145\164\x74\151\x6e\147\x73"); } }
