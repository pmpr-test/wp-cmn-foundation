<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\x77\151\x64\147\145\164\x73\56\x70\150\x70"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\144\151\x74\x2e\x70\150\x70"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if (!$gcgsqcoqciockquc) { goto amaiiayeosswqwmm; } $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; amaiiayeosswqwmm: return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\147\x65\164\137\163\x65\x61\162\x63\150\137\162\x65\163\165\x6c\x74", Constants::oimusiegakqgwosg); if (!(Constants::oimusiegakqgwosg === $sogksuscggsicmac)) { goto sgmqgegycguwamuc; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); sgmqgegycguwamuc: return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\x61\x72\143\150\x5f\162\145\x73\165\x6c\x74", $sogksuscggsicmac); } public function mcgoysmkqsqooceq(string $aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { goto kusweouquycaokkg; } if (!("\130\x4d\114\110\x74\164\160\122\145\x71\x75\145\163\x74" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\x50\x5f\x58\137\122\x45\x51\125\105\123\124\105\x44\x5f\x57\x49\x54\110"))) { goto quuukywosagemmai; } $mcgoysmkqsqooceq = true; quuukywosagemmai: goto kaeguyeyckamaqum; kusweouquycaokkg: $mcgoysmkqsqooceq = true; kaeguyeyckamaqum: if (!($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou))) { goto ukyucsogqyemmeck; } $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); $mcgoysmkqsqooceq = $cmsacqumqckqyqas && $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $aiamqeawckcsuaou); ukyucsogqyemmeck: return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\104\x4f\x49\116\107\137\101\x55\124\x4f\123\x41\x56\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if (!$this->mcgoysmkqsqooceq()) { goto ugoaowieykmsgyym; } $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\137\x77\160\137\x68\x74\x74\x70\137\x72\145\146\145\162\145\162"])) { goto euygyqmakaqocgey; } if (empty($_SERVER["\110\124\124\x50\x5f\122\105\106\x45\x52\x45\122"])) { goto cokamkuguggscwgk; } $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\110\124\x54\120\x5f\122\x45\106\x45\x52\x45\x52"]); cokamkuguggscwgk: goto iciwsoyouucqaqss; euygyqmakaqocgey: $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\x5f\167\x70\137\x68\x74\x74\x70\137\x72\x65\x66\145\162\x65\x72"]); iciwsoyouucqaqss: $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); ugoaowieykmsgyym: return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\145\x6c\x65\155\145\x6e\x74\x6f\x72\x2d\160\x72\145\x76\151\x65\167", "\x66\x6c\x5f\142\165\151\x6c\x64\x65\x72", "\143\x74\137\x62\165\x69\154\x64\145\162", "\x65\x74\x5f\146\142", "\164\x76\x65", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto soayoeqageqoqyyg; } $ksaameoqigiaoigg = true; goto yiuwkccqkwyicwsi; soayoeqageqoqyyg: mggukkeoaaisgyye: } yiuwkccqkwyicwsi: return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!(!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\x69\163\137\x61\x6d\x70\137\145\156\144\x70\x6f\151\x6e\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\163\x5f\141\x6d\x70", false))) { goto kmqiosiucmeisgmm; } if ($eeamcawaiqocomwy) { goto cggigywqsqoeyaeq; } $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); cggigywqsqoeyaeq: $weksiguqgqscsoee = preg_match("\x2f\50\134\57\141\x6d\x70\134\x2f\160\x61\147\x65\x5c\57\x5b\x30\x2d\x39\135\52\x29\174\50\134\57\x61\155\160\x5c\x2f\77\51\57", $eeamcawaiqocomwy); kmqiosiucmeisgmm: return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { goto ssoukiueqkwsyeqs; } $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); goto eaeqmmyocycmmesu; ssoukiueqkwsyeqs: $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); eaeqmmyocycmmesu: return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { goto bsqiksqiqiooqeik; } $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); goto kmoskscsgqgsywsy; bsqiksqiqiooqeik: $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); kmoskscsgqgsywsy: $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\150\x74\x6d\154", "\x68\x74\x6d"]); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqwquwewocyewasw(); if ($uwqkkwmiiumuukoa) { goto wewoyqywmiuawquq; } $uwqkkwmiiumuukoa = false !== strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); $uwqkkwmiiumuukoa = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\163\137\x72\x65\x73\164\x5f\141\160\151\x5f\x72\145\x71\x75\x65\163\x74", $uwqkkwmiiumuukoa); wewoyqywmiuawquq: return $uwqkkwmiiumuukoa; } public function eewqyocggsagyuis() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$mumyimcwkaemyyue->cgquaaukmyeomgms() && !$this->aqwquwewocyewasw(); } public function euqowsuwmgokuqqo() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$this->aqwquwewocyewasw() && !$mumyimcwkaemyyue->cgquaaukmyeomgms(); } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if ($gqgemcmoicmgaqie) { goto ogqqumwguoeiwsks; } $gqgemcmoicmgaqie = $wp_query; ogqqumwguoeiwsks: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto giaiosokigwkciok; } $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); giaiosokigwkciok: return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if (!$yiiiqewsseywemqu) { goto yksceugwkyaiuwym; } $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); yksceugwkyaiuwym: return $iwewcwusemqaiggk; } }
