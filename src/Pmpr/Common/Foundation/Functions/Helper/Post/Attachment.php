<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679775b18836a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Attachment extends Common { public function iooowgsqoyqseyuu($aiooqyausygaasqm = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm); } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { global $_wp_additional_image_sizes; $qaiwqwwemmyyqosy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []); if (!$qaiwqwwemmyyqosy && is_string($ymqmyyeuycgmigyo)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $euciqcqmqamuoqga = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\143\162\x6f\x70"); $qeswwaqqsyymqawg = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x73\x69\172\x65\x5f\x77"); $cswemwoyesycwkuq = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\x73\151\172\x65\x5f\x68"); if ($qeswwaqqsyymqawg && $cswemwoyesycwkuq) { $qaiwqwwemmyyqosy = ["\x63\162\157\x70" => $euciqcqmqamuoqga, Constants::qomookamaskuoswk => $qeswwaqqsyymqawg, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]; } } else { if (is_array($ymqmyyeuycgmigyo)) { $qaiwqwwemmyyqosy = $ymqmyyeuycgmigyo; } } return $qaiwqwwemmyyqosy; } public function ecqkouyiioksggkw(string $eeamcawaiqocomwy) { $aokagokqyuysuksm = 0; $miawkwqioaeasiig = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\x62\x61\163\145\165\162\154"] . "\x2f")) { return false; } $qogsmwakwacwqogk = basename($eeamcawaiqocomwy); $ywmkwiwkosakssii = [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::uouymeyqasaeckso => Constants::cqycgsyykemiygou, Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => "\137\x77\x70\137\141\164\164\x61\x63\150\x6d\x65\156\164\137\155\145\x74\141\144\x61\164\141", Constants::ciyoccqkiamemcmm => $qogsmwakwacwqogk, Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); if ($gqgemcmoicmgaqie->have_posts()) { foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $ccgkuocaoksweawk = isset($ugugimquukqwogge[Constants::hwuckiugumsugwas]) ? $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($ugugimquukqwogge[Constants::hwuckiugumsugwas], Constants::kekgqaemqessuwmq) : []; $wsiwwymgaoqsyagc = isset($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) ? basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) : ''; if ($wsiwwymgaoqsyagc && $wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk, true)) { $aokagokqyuysuksm = $gcqseksiskwueksc; break; } } } return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm; } public function wgogyccwcysggaig(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : array { $wkuikksoimmikkek = []; $ggauoeuaesiymgee = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->aiiaeiaqiayooqyi(); foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) { $qaiwqwwemmyyqosy = $this->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if ($qaiwqwwemmyyqosy) { $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy; } } global $_wp_additional_image_sizes; if (isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes)) { $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes); } if (Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu) { foreach ($wkuikksoimmikkek as $ymqmyyeuycgmigyo => $weaakkwoqiawsiua) { $wkuikksoimmikkek[$ymqmyyeuycgmigyo] = sprintf("\45\163\x20\50\x25\163\170\x25\163\51", $ymqmyyeuycgmigyo, $weaakkwoqiawsiua[Constants::qomookamaskuoswk] ?? 0, $weaakkwoqiawsiua[Constants::sogmkkcwuamuqegw] ?? 0); } } return $wkuikksoimmikkek; } public function ikgomeqwikoawcyu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\160\x64\x66", $aiooqyausygaasqm); } public function mccouuwycwemasea($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x76\151\x64\x65\157", $aiooqyausygaasqm); } public function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\151\x6d\141\147\x65", $aiooqyausygaasqm); } public function aauyuieeeaakygki($aiooqyausygaasqm) : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ccwssmqgyasqqcoc($aiooqyausygaasqm, Constants::cqycgsyykemiygou); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ksmqawcowkmegigw($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $icwicymcioeyeyek); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->smiqaaaecemiwugu($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $qogsmwakwacwqogk); } public function gqawookswqogksky($aiooqyausygaasqm, $uusmaiomayssaecw, $ggauoeuaesiymgee = []) { $ksaameoqigiaoigg = false; if ($this->mccouuwycwemasea($aiooqyausygaasqm)) { $qogsmwakwacwqogk = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($aiooqyausygaasqm); if ($qogsmwakwacwqogk) { $kuguwoaesuqsqysu = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->kyaosugwqwiyocgc($qogsmwakwacwqogk); if ($uusmaiomayssaecw && is_array($kuguwoaesuqsqysu)) { $ksaameoqigiaoigg = $kuguwoaesuqsqysu[$uusmaiomayssaecw] ?? $ggauoeuaesiymgee; } else { if (empty($kuguwoaesuqsqysu)) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; } else { $ksaameoqigiaoigg = $kuguwoaesuqsqysu; } } } } return $ksaameoqigiaoigg; } public function mgaeeqsgeoukeokc($aiooqyausygaasqm, string $oiegiwogmwmawkeo = "\146\165\154\x6c") : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo), 0, ''); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $beuoaqwyyugcgeas); } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : string { $ewgwqamkygiqaawc = ''; if ($qogsmwakwacwqogk = $this->ckoygqywcuqasqea($post)) { $ewgwqamkygiqaawc = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); } return $ewgwqamkygiqaawc; } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\x75\155\x62\x6e\x61\x69\x6c", bool $wkaqekwwgqsqwcoi = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\150\165\x6d\142\x6e\141\x69\x6c", bool $wkaqekwwgqsqwcoi = false) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, 0); } public function wggscwmuogkkkmgq($aiooqyausygaasqm, bool $acsweksygkmmgggk = true, array $siquossayskcwkea = []) { $acqcekoeswseswws = $this->ckoygqywcuqasqea($aiooqyausygaasqm); $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if ($miiyyswuessymmwe->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); if ($acsweksygkmmgggk) { $iwywmkygwewiamwm = $this->yucssysgmisaquki($aiooqyausygaasqm); } else { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($aiooqyausygaasqm); } $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($siquossayskcwkea, ["\x68\162\145\146" => $iwywmkygwewiamwm, "\x74\x69\164\154\145" => $meqocwsecsywiiqs ?: $seumokooiykcomco->aqcogscycyycgkuq($aiooqyausygaasqm), "\164\x61\x72\x67\x65\164" => "\x5f\x62\x6c\x61\x6e\x6b", "\x64\x6f\167\156\x6c\x6f\141\x64" => rawurldecode(basename($acqcekoeswseswws))]); } return $siquossayskcwkea; } public function yucssysgmisaquki($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if ($aiooqyausygaasqm && ($aokagokqyuysuksm = $this->iooowgsqoyqseyuu($aiooqyausygaasqm))) { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->owgcciayoweymuws()->encrypt($aokagokqyuysuksm); $iwywmkygwewiamwm = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()) . "\57\x70\162\x2d\144\x6f\167\x6e\x6c\157\x61\144\x2f{$ymacoouqwcqwwagu}\57"; } return $iwywmkygwewiamwm; } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, ?array $wisgiwskwawciiee = [], bool $wkaqekwwgqsqwcoi = false) : string { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi); } }
