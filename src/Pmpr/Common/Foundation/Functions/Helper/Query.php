<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\x64\x67\145\164\x73\x2e\160\x68\x70"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\x64\151\x74\56\x70\150\x70"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if (!$gcgsqcoqciockquc) { goto iumwukayaosoaois; } $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; iumwukayaosoaois: return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\x65\x74\137\163\x65\141\162\143\x68\137\162\145\163\165\x6c\164", Constants::oimusiegakqgwosg); if (!(Constants::oimusiegakqgwosg === $sogksuscggsicmac)) { goto smoiwyguceomewwy; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); smoiwyguceomewwy: return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\163\145\141\162\143\x68\137\x72\x65\x73\165\154\164", $sogksuscggsicmac); } public function mcgoysmkqsqooceq(string $aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { goto agiaqmmawekwgsky; } if (!("\x58\x4d\x4c\110\164\x74\x70\x52\x65\x71\165\145\x73\164" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\x54\x50\x5f\x58\x5f\122\105\x51\x55\105\123\x54\x45\x44\x5f\127\x49\x54\x48"))) { goto kkqkiieookquommo; } $mcgoysmkqsqooceq = true; kkqkiieookquommo: goto qqsgiayqyskeisua; agiaqmmawekwgsky: $mcgoysmkqsqooceq = true; qqsgiayqyskeisua: if (!($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou))) { goto wugmoiceuaawcoem; } $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); $mcgoysmkqsqooceq = $cmsacqumqckqyqas && $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $aiamqeawckcsuaou); wugmoiceuaawcoem: return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\104\x4f\111\116\x47\137\x41\x55\124\117\123\101\126\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if (!$this->mcgoysmkqsqooceq()) { goto esmwwomccacsqywi; } $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\167\x70\137\150\164\x74\x70\x5f\x72\145\x66\145\162\x65\162"])) { goto moueuekwquacwkok; } if (empty($_SERVER["\110\124\x54\120\137\x52\105\106\x45\x52\x45\122"])) { goto aiiskmcymwiakkgc; } $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\x54\124\x50\x5f\122\x45\106\x45\x52\105\122"]); aiiskmcymwiakkgc: goto cgukcskqwgsmumcy; moueuekwquacwkok: $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\x77\x70\137\x68\x74\x74\x70\137\x72\145\x66\x65\x72\x65\162"]); cgukcskqwgsmumcy: $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); esmwwomccacsqywi: return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\x65\x6d\145\x6e\164\x6f\162\x2d\160\x72\145\x76\x69\145\167", "\x66\x6c\x5f\142\x75\x69\154\144\145\x72", "\x63\x74\x5f\x62\165\151\x6c\x64\145\162", "\x65\x74\x5f\146\x62", "\164\166\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto eqwqmiawekysseqe; } $ksaameoqigiaoigg = true; goto eyecumosyciiiooq; eqwqmiawekysseqe: kwuiqqycqycswaku: } eyecumosyciiiooq: return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!(!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\x69\163\137\141\155\x70\x5f\x65\156\144\x70\x6f\151\156\x74", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\x73\137\141\155\160", false))) { goto sciuwmmsmaecigik; } if ($eeamcawaiqocomwy) { goto soqkyegaguykmcso; } $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); soqkyegaguykmcso: $weksiguqgqscsoee = preg_match("\x2f\50\134\x2f\x61\155\160\x5c\57\x70\141\x67\145\134\x2f\133\60\x2d\x39\x5d\x2a\x29\174\x28\x5c\57\141\x6d\160\134\57\x3f\x29\x2f", $eeamcawaiqocomwy); sciuwmmsmaecigik: return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { goto umueiqgeckuoywuw; } $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); goto wsyqaoimygmemgay; umueiqgeckuoywuw: $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); wsyqaoimygmemgay: return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { goto guqcykekieeiuyoc; } $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); goto qqwiwaamsuyeaymq; guqcykekieeiuyoc: $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); qqwiwaamsuyeaymq: $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\164\155\154", "\x68\x74\155"]); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqwquwewocyewasw(); if ($uwqkkwmiiumuukoa) { goto koicyiceoeymqyee; } $uwqkkwmiiumuukoa = false !== strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); $uwqkkwmiiumuukoa = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\x73\x5f\162\x65\163\164\137\x61\x70\151\137\162\145\x71\165\x65\x73\x74", $uwqkkwmiiumuukoa); koicyiceoeymqyee: return $uwqkkwmiiumuukoa; } public function eewqyocggsagyuis() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$mumyimcwkaemyyue->cgquaaukmyeomgms() && !$this->aqwquwewocyewasw(); } public function euqowsuwmgokuqqo() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$this->aqwquwewocyewasw() && !$mumyimcwkaemyyue->cgquaaukmyeomgms(); } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if ($gqgemcmoicmgaqie) { goto sawkmwweawsciysi; } $gqgemcmoicmgaqie = $wp_query; sawkmwweawsciysi: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto uiceasouwuawugsq; } $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); uiceasouwuawugsq: return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if (!$yiiiqewsseywemqu) { goto oagiismqgcciokqw; } $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); oagiismqgcciokqw: return $iwewcwusemqaiggk; } }
