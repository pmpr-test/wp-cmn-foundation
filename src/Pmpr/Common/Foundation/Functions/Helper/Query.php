<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\144\x67\145\164\x73\56\160\x68\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\144\x69\164\x2e\x70\150\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if (!$gcgsqcoqciockquc) { goto ykssueyoewywagwk; } $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; ykssueyoewywagwk: return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\147\145\x74\137\x73\x65\x61\162\143\150\137\x72\145\163\x75\154\164", Constants::oimusiegakqgwosg); if (!(Constants::oimusiegakqgwosg === $sogksuscggsicmac)) { goto iumwukayaosoaois; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); iumwukayaosoaois: return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\x61\162\143\x68\x5f\x72\145\x73\165\x6c\164", $sogksuscggsicmac); } public function mcgoysmkqsqooceq(string $aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { goto kkqkiieookquommo; } if (!("\130\x4d\x4c\x48\164\x74\160\x52\x65\161\165\x65\163\x74" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x48\x54\x54\120\x5f\130\x5f\122\105\121\x55\x45\123\x54\105\104\x5f\127\111\x54\x48"))) { goto smoiwyguceomewwy; } $mcgoysmkqsqooceq = true; smoiwyguceomewwy: goto agiaqmmawekwgsky; kkqkiieookquommo: $mcgoysmkqsqooceq = true; agiaqmmawekwgsky: if (!($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou))) { goto qqsgiayqyskeisua; } $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); $mcgoysmkqsqooceq = $cmsacqumqckqyqas && $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $aiamqeawckcsuaou); qqsgiayqyskeisua: return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\x44\117\x49\116\107\x5f\x41\125\x54\117\123\x41\x56\x45", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if (!$this->mcgoysmkqsqooceq()) { goto cgukcskqwgsmumcy; } $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\167\x70\137\x68\164\x74\160\x5f\162\145\146\145\162\x65\162"])) { goto aiiskmcymwiakkgc; } if (empty($_SERVER["\x48\124\x54\x50\x5f\122\x45\x46\105\122\105\122"])) { goto wugmoiceuaawcoem; } $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\x54\x54\x50\137\122\105\x46\x45\x52\105\x52"]); wugmoiceuaawcoem: goto moueuekwquacwkok; aiiskmcymwiakkgc: $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\x5f\x77\160\137\x68\x74\164\160\x5f\x72\145\146\145\162\x65\x72"]); moueuekwquacwkok: $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); cgukcskqwgsmumcy: return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\x65\x6d\145\x6e\x74\x6f\x72\55\160\162\145\x76\x69\x65\x77", "\x66\154\x5f\x62\x75\151\154\144\145\x72", "\x63\x74\x5f\x62\165\x69\154\x64\x65\162", "\x65\x74\x5f\146\142", "\x74\166\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto kwuiqqycqycswaku; } $ksaameoqigiaoigg = true; goto esmwwomccacsqywi; kwuiqqycqycswaku: eyecumosyciiiooq: } esmwwomccacsqywi: return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!(!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\151\163\x5f\x61\x6d\x70\137\145\x6e\x64\x70\x6f\151\156\x74", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\163\137\x61\x6d\x70", false))) { goto soqkyegaguykmcso; } if ($eeamcawaiqocomwy) { goto eqwqmiawekysseqe; } $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); eqwqmiawekysseqe: $weksiguqgqscsoee = preg_match("\x2f\x28\x5c\57\141\155\160\134\x2f\x70\141\147\x65\134\x2f\x5b\60\x2d\71\x5d\52\51\174\50\134\57\141\155\x70\x5c\x2f\x3f\x29\57", $eeamcawaiqocomwy); soqkyegaguykmcso: return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { goto sciuwmmsmaecigik; } $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); goto umueiqgeckuoywuw; sciuwmmsmaecigik: $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); umueiqgeckuoywuw: return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { goto wsyqaoimygmemgay; } $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); goto guqcykekieeiuyoc; wsyqaoimygmemgay: $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); guqcykekieeiuyoc: $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\x74\155\x6c", "\150\x74\155"]); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqwquwewocyewasw(); if ($uwqkkwmiiumuukoa) { goto qqwiwaamsuyeaymq; } $uwqkkwmiiumuukoa = false !== strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); $uwqkkwmiiumuukoa = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\x73\x5f\x72\x65\x73\x74\x5f\141\160\151\x5f\x72\x65\161\x75\145\x73\x74", $uwqkkwmiiumuukoa); qqwiwaamsuyeaymq: return $uwqkkwmiiumuukoa; } public function eewqyocggsagyuis() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$mumyimcwkaemyyue->cgquaaukmyeomgms() && !$this->aqwquwewocyewasw(); } public function euqowsuwmgokuqqo() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$this->aqwquwewocyewasw() && !$mumyimcwkaemyyue->cgquaaukmyeomgms(); } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if ($gqgemcmoicmgaqie) { goto koicyiceoeymqyee; } $gqgemcmoicmgaqie = $wp_query; koicyiceoeymqyee: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto sawkmwweawsciysi; } $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); sawkmwweawsciysi: return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if (!$yiiiqewsseywemqu) { goto uiceasouwuawugsq; } $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); uiceasouwuawugsq: return $iwewcwusemqaiggk; } }
