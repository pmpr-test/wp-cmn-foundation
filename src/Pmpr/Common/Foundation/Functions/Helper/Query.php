<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\167\151\x64\147\145\164\x73\x2e\160\150\x70"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\x65\144\x69\x74\56\160\x68\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if (!$gcgsqcoqciockquc) { goto wogokmgkgkumqcws; } $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; wogokmgkgkumqcws: return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\145\164\x5f\x73\x65\141\x72\143\x68\137\x72\145\163\165\x6c\x74", Constants::oimusiegakqgwosg); if (!(Constants::oimusiegakqgwosg === $sogksuscggsicmac)) { goto koawwmccgquqqmwa; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); koawwmccgquqqmwa: return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\x61\x72\x63\150\137\162\x65\x73\x75\154\x74", $sogksuscggsicmac); } public function mcgoysmkqsqooceq($aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { goto cycyaqqawmwiywwe; } if (!("\130\x4d\x4c\x48\x74\x74\x70\122\145\x71\165\145\163\x74" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x48\x54\x54\x50\x5f\130\137\122\105\121\x55\105\x53\124\105\x44\x5f\127\111\124\110"))) { goto cokacyaayuueyuuu; } $mcgoysmkqsqooceq = true; cokacyaayuueyuuu: goto ckowiuagwmsqmiqc; cycyaqqawmwiywwe: $mcgoysmkqsqooceq = true; ckowiuagwmsqmiqc: if (!($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou))) { goto oyicskieeaewgwce; } $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (!$cmsacqumqckqyqas) { goto eecgougegqassgyq; } if (!is_string($aiamqeawckcsuaou)) { goto eqieeecackceeweg; } $aiamqeawckcsuaou = [$aiamqeawckcsuaou]; eqieeecackceeweg: foreach ($aiamqeawckcsuaou as $yuwymayicwwqiske) { if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $yuwymayicwwqiske)) { goto ikeyoyoigsuouokm; } $mcgoysmkqsqooceq = true; goto ygywkqgioiscmuie; ikeyoyoigsuouokm: $mcgoysmkqsqooceq = false; iuaommmyqoecmuss: } ygywkqgioiscmuie: goto cuwkqgemkmuuegkc; eecgougegqassgyq: $mcgoysmkqsqooceq = false; cuwkqgemkmuuegkc: oyicskieeaewgwce: return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\104\117\x49\x4e\107\x5f\101\125\124\x4f\x53\101\126\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if (!$this->mcgoysmkqsqooceq()) { goto ceeqguaoysyaasey; } $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\x77\160\x5f\150\164\x74\160\137\x72\x65\x66\145\162\x65\x72"])) { goto cceakqgoysacqwmc; } if (empty($_SERVER["\x48\124\x54\x50\x5f\x52\105\106\x45\x52\x45\x52"])) { goto wemmseueskwkcwou; } $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\x48\x54\124\120\137\122\x45\x46\x45\122\x45\122"]); wemmseueskwkcwou: goto scaimkkukmgoeaya; cceakqgoysacqwmc: $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\137\167\160\x5f\x68\164\x74\160\137\162\145\146\145\162\x65\x72"]); scaimkkukmgoeaya: $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); ceeqguaoysyaasey: return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\154\145\x6d\145\x6e\164\157\x72\55\160\x72\x65\166\x69\145\167", "\146\x6c\x5f\142\165\151\x6c\x64\x65\162", "\143\x74\137\x62\x75\151\154\144\x65\162", "\x65\x74\137\x66\142", "\164\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto ewooakeuigcyuemu; } $ksaameoqigiaoigg = true; goto ekmqouqsgsaukeiq; ewooakeuigcyuemu: cugkqmkuyuwwqcec: } ekmqouqsgsaukeiq: return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!(!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\x69\163\137\x61\x6d\x70\x5f\145\x6e\x64\160\157\151\156\x74", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\x73\137\x61\x6d\x70", false))) { goto kacgiqwewyeeyyam; } if ($eeamcawaiqocomwy) { goto wceiuqaeywmgscww; } $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); wceiuqaeywmgscww: $weksiguqgqscsoee = preg_match("\x2f\x28\134\x2f\141\155\x70\134\57\x70\x61\147\x65\134\57\133\60\55\71\135\x2a\51\x7c\50\x5c\x2f\x61\155\x70\134\x2f\x3f\x29\57", $eeamcawaiqocomwy); kacgiqwewyeeyyam: return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { goto qwogeocemuaaasiw; } $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); goto ywmuoigomwwigqea; qwogeocemuaaasiw: $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); ywmuoigomwwigqea: return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { goto cgqkqmiekaageyka; } $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); goto goimywgsweeqsewo; cgqkqmiekaageyka: $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); goimywgsweeqsewo: $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\150\164\x6d\154", "\150\164\x6d"]); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqwquwewocyewasw(); if ($uwqkkwmiiumuukoa) { goto uomwseyiqckeewgo; } $uwqkkwmiiumuukoa = false !== strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); $uwqkkwmiiumuukoa = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\x72\145\x73\164\137\141\160\151\x5f\x72\145\161\165\x65\x73\164", $uwqkkwmiiumuukoa); uomwseyiqckeewgo: return $uwqkkwmiiumuukoa; } public function eewqyocggsagyuis() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$mumyimcwkaemyyue->cgquaaukmyeomgms() && !$this->aqwquwewocyewasw(); } public function euqowsuwmgokuqqo() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$this->aqwquwewocyewasw() && !$mumyimcwkaemyyue->cgquaaukmyeomgms(); } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if ($gqgemcmoicmgaqie) { goto cqyiukmuqceicqwa; } $gqgemcmoicmgaqie = $wp_query; cqyiukmuqceicqwa: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto kmocamaieycogugg; } $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); kmocamaieycogugg: return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if (!$yiiiqewsseywemqu) { goto iuieyqacggsykgus; } $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); iuieyqacggsykgus: return $iwewcwusemqaiggk; } public function gaawugksaskamooe() : bool { return $this->kkessyykwcqgecqc() || $this->mcgoysmkqsqooceq() || $this->eewqyocggsagyuis() || $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yycwkigueqwacmic(); } public function ligksaggegsygqwo() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) || $this->eewqyocggsagyuis(); } }
