<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Query; class Query extends Common { public function kkessyykwcqgecqc() : bool { return $this->qiosugokwogykyes("\x77\x69\x64\147\145\x74\163\56\x70\x68\160"); } public function eoyueosccuoeqkee() : bool { return $this->qiosugokwogykyes("\145\x64\x69\164\x2e\160\150\160"); } private function qiosugokwogykyes(string $suaemuyiacqyugsm) : bool { global $pagenow; return $suaemuyiacqyugsm === $pagenow; } public function uumoasaecaigsyys($gqgemcmoicmgaqie, $gygawogosumsgmme, $uiuykcweuosgmwki) : bool { return $gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->get($gygawogosumsgmme) == $uiuykcweuosgmwki; } public function ymgosckqqmeowaoo(string $aokagokqyuysuksm) : bool { $ksaameoqigiaoigg = false; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if (!$gcgsqcoqciockquc) { goto sgmqgegycguwamuc; } $ksaameoqigiaoigg = $gcgsqcoqciockquc->id === $aokagokqyuysuksm; sgmqgegycguwamuc: return $ksaameoqigiaoigg; } public function ysqksgcoyccgsuam() : array { $gsyaugcyoggmiuwy = $this->caokeucsksukesyo()->mmsykuomogaqoaye(); $sogksuscggsicmac = $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x67\145\164\137\163\x65\x61\x72\143\150\137\162\145\x73\165\154\164", Constants::oimusiegakqgwosg); if (!(Constants::oimusiegakqgwosg === $sogksuscggsicmac)) { goto quuukywosagemmai; } $sogksuscggsicmac = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ekwkywuguceaogsk(); quuukywosagemmai: return (array) $gsyaugcyoggmiuwy->ocksiywmkyaqseou("\x73\x65\x61\162\x63\150\137\x72\x65\x73\x75\154\164", $sogksuscggsicmac); } public function mcgoysmkqsqooceq(string $aiamqeawckcsuaou = '') : bool { $mcgoysmkqsqooceq = false; $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($mumyimcwkaemyyue->mcgoysmkqsqooceq() || $mumyimcwkaemyyue->wiawmgagsakmamyc()) { goto kaeguyeyckamaqum; } if (!("\130\115\x4c\x48\164\x74\160\x52\145\x71\165\x65\163\164" === $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\120\x5f\130\x5f\122\105\x51\x55\x45\x53\x54\105\x44\x5f\x57\111\124\110"))) { goto kusweouquycaokkg; } $mcgoysmkqsqooceq = true; kusweouquycaokkg: goto ukyucsogqyemmeck; kaeguyeyckamaqum: $mcgoysmkqsqooceq = true; ukyucsogqyemmeck: if (!($mcgoysmkqsqooceq && !empty($aiamqeawckcsuaou))) { goto cokamkuguggscwgk; } $cmsacqumqckqyqas = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); $mcgoysmkqsqooceq = $cmsacqumqckqyqas && $this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($cmsacqumqckqyqas, $aiamqeawckcsuaou); cokamkuguggscwgk: return $mcgoysmkqsqooceq; } public function somkqoqeimmeemuq() : bool { return (bool) $this->cmaecekuqkwmemms("\x44\117\x49\x4e\107\137\x41\x55\124\117\x53\x41\x56\105", false); } public function uywcakyieooyscis() : bool { $weksiguqgqscsoee = false; if (!$this->mcgoysmkqsqooceq()) { goto yiuwkccqkwyicwsi; } $ickogqyacygcosgi = ''; if (!empty($_REQUEST["\x5f\167\160\137\x68\x74\x74\x70\x5f\x72\x65\x66\x65\162\x65\162"])) { goto iciwsoyouucqaqss; } if (empty($_SERVER["\x48\124\x54\x50\x5f\x52\x45\x46\x45\122\x45\x52"])) { goto euygyqmakaqocgey; } $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_SERVER["\110\x54\x54\x50\137\122\x45\106\105\122\105\122"]); euygyqmakaqocgey: goto ugoaowieykmsgyym; iciwsoyouucqaqss: $ickogqyacygcosgi = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($_REQUEST["\x5f\x77\160\x5f\150\164\164\x70\137\162\x65\146\x65\162\145\162"]); ugoaowieykmsgyym: $weksiguqgqscsoee = !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($ickogqyacygcosgi, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy()); yiuwkccqkwyicwsi: return $weksiguqgqscsoee; } public function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\x6d\x65\x6e\x74\x6f\x72\x2d\160\162\x65\x76\151\145\167", "\x66\x6c\137\x62\165\x69\x6c\x64\x65\x72", "\143\x74\137\x62\165\x69\154\x64\145\162", "\145\164\x5f\146\x62", "\164\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto cggigywqsqoeyaeq; } $ksaameoqigiaoigg = true; goto mggukkeoaaisgyye; cggigywqsqoeyaeq: soayoeqageqoqyyg: } mggukkeoaaisgyye: return $ksaameoqigiaoigg; } public function goumkccmgysgqueu($eeamcawaiqocomwy = null) : bool { $weksiguqgqscsoee = true; if (!(!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->call("\151\x73\x5f\x61\x6d\x70\137\x65\x6e\144\x70\157\151\156\164", false) && !$this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x69\x73\137\x61\155\160", false))) { goto ssoukiueqkwsyeqs; } if ($eeamcawaiqocomwy) { goto kmqiosiucmeisgmm; } $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); kmqiosiucmeisgmm: $weksiguqgqscsoee = preg_match("\x2f\x28\134\x2f\x61\x6d\x70\134\57\160\141\x67\145\x5c\57\x5b\60\55\71\135\x2a\51\x7c\x28\x5c\57\x61\155\x70\x5c\x2f\77\51\57", $eeamcawaiqocomwy); ssoukiueqkwsyeqs: return $weksiguqgqscsoee; } public function kgkwyuuwwyoskcsq($gqgemcmoicmgaqie = null) : bool { if ($gqgemcmoicmgaqie instanceof WP_Query) { goto eaeqmmyocycmmesu; } $isokeuqaswaugqsc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq(); goto bsqiksqiqiooqeik; eaeqmmyocycmmesu: $isokeuqaswaugqsc = $gqgemcmoicmgaqie->is_main_query(); bsqiksqiqiooqeik: return $isokeuqaswaugqsc; } public function miccagckiqwseasi(?string $eeamcawaiqocomwy = null) : bool { if (!$eeamcawaiqocomwy) { goto kmoskscsgqgsywsy; } $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); goto wewoyqywmiuawquq; kmoskscsgqgsywsy: $ciqkyqauuymqcksa = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->sswiqkmqewcageua(); wewoyqywmiuawquq: $uwumuuykwookaauo = pathinfo($ciqkyqauuymqcksa, PATHINFO_EXTENSION); return $uwumuuykwookaauo && !in_array($uwumuuykwookaauo, ["\x68\164\x6d\154", "\150\x74\x6d"]); } public function aqwquwewocyewasw() : bool { $uwqkkwmiiumuukoa = $this->caokeucsksukesyo()->wikusamwomuogoau()->aqwquwewocyewasw(); if ($uwqkkwmiiumuukoa) { goto ogqqumwguoeiwsks; } $uwqkkwmiiumuukoa = false !== strpos($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(), trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk())); $uwqkkwmiiumuukoa = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\151\163\x5f\x72\145\163\164\x5f\141\160\151\x5f\162\145\161\165\145\163\164", $uwqkkwmiiumuukoa); ogqqumwguoeiwsks: return $uwqkkwmiiumuukoa; } public function eewqyocggsagyuis() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return !$mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$mumyimcwkaemyyue->cgquaaukmyeomgms() && !$this->aqwquwewocyewasw(); } public function euqowsuwmgokuqqo() : bool { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); return $mumyimcwkaemyyue->goecwaaykqoaaagg() && !$this->mcgoysmkqsqooceq() && !$this->aqwquwewocyewasw() && !$mumyimcwkaemyyue->cgquaaukmyeomgms(); } public function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null) { global $wp_query; return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee); } public function get($uusmaiomayssaecw, $gqgemcmoicmgaqie = null) { global $wp_query; $eqgoocgaqwqcimie = null; if ($gqgemcmoicmgaqie) { goto giaiosokigwkciok; } $gqgemcmoicmgaqie = $wp_query; giaiosokigwkciok: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto yksceugwkyaiuwym; } $eqgoocgaqwqcimie = $gqgemcmoicmgaqie->get($uusmaiomayssaecw); yksceugwkyaiuwym: return $eqgoocgaqwqcimie; } public function aeakcoksauwcayom(bool $yiiiqewsseywemqu = true) : ?string { $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->siiwuwaswckkuoya(); if (!$yiiiqewsseywemqu) { goto qyqqqsoggykumeuu; } $iwewcwusemqaiggk = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($iwewcwusemqaiggk); qyqqqsoggykumeuu: return $iwewcwusemqaiggk; } }
