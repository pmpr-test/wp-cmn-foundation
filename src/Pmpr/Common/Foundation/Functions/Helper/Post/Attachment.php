<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Attachment extends Common { public function iooowgsqoyqseyuu($aiooqyausygaasqm = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm); } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { global $_wp_additional_image_sizes; $qaiwqwwemmyyqosy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []); if (!$qaiwqwwemmyyqosy && is_string($ymqmyyeuycgmigyo)) { goto ugoaowieykmsgyym; } if (!is_array($ymqmyyeuycgmigyo)) { goto iciwsoyouucqaqss; } $qaiwqwwemmyyqosy = $ymqmyyeuycgmigyo; iciwsoyouucqaqss: goto yiuwkccqkwyicwsi; ugoaowieykmsgyym: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $euciqcqmqamuoqga = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\143\162\x6f\x70"); $qeswwaqqsyymqawg = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\163\x69\172\x65\x5f\x77"); $cswemwoyesycwkuq = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x73\151\172\145\x5f\150"); if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto euygyqmakaqocgey; } $qaiwqwwemmyyqosy = ["\x63\162\157\160" => $euciqcqmqamuoqga, Constants::qomookamaskuoswk => $qeswwaqqsyymqawg, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]; euygyqmakaqocgey: yiuwkccqkwyicwsi: return $qaiwqwwemmyyqosy; } public function ecqkouyiioksggkw(string $eeamcawaiqocomwy) { $aokagokqyuysuksm = 0; $miawkwqioaeasiig = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\x61\163\x65\165\x72\x6c"] . "\x2f"))) { goto mggukkeoaaisgyye; } return false; mggukkeoaaisgyye: $qogsmwakwacwqogk = basename($eeamcawaiqocomwy); $ywmkwiwkosakssii = [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::uouymeyqasaeckso => Constants::cqycgsyykemiygou, Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => "\x5f\167\160\x5f\141\x74\164\x61\143\x68\x6d\145\156\x74\137\x6d\145\164\x61\144\141\164\x61", Constants::ciyoccqkiamemcmm => $qogsmwakwacwqogk, Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); if (!$gqgemcmoicmgaqie->have_posts()) { goto ssoukiueqkwsyeqs; } foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $ccgkuocaoksweawk = isset($ugugimquukqwogge[Constants::hwuckiugumsugwas]) ? $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($ugugimquukqwogge[Constants::hwuckiugumsugwas], Constants::kekgqaemqessuwmq) : []; $wsiwwymgaoqsyagc = isset($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) ? basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) : ''; if (!($wsiwwymgaoqsyagc && $wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk, true))) { goto kmqiosiucmeisgmm; } $aokagokqyuysuksm = $gcqseksiskwueksc; goto soayoeqageqoqyyg; kmqiosiucmeisgmm: cggigywqsqoeyaeq: } soayoeqageqoqyyg: ssoukiueqkwsyeqs: return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm; } public function wgogyccwcysggaig(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : array { $wkuikksoimmikkek = []; $ggauoeuaesiymgee = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->aiiaeiaqiayooqyi(); foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) { $qaiwqwwemmyyqosy = $this->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if (!$qaiwqwwemmyyqosy) { goto kmoskscsgqgsywsy; } $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy; kmoskscsgqgsywsy: bsqiksqiqiooqeik: } eaeqmmyocycmmesu: global $_wp_additional_image_sizes; if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) { goto wewoyqywmiuawquq; } $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes); wewoyqywmiuawquq: if (!(Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu)) { goto yksceugwkyaiuwym; } foreach ($wkuikksoimmikkek as $ymqmyyeuycgmigyo => $weaakkwoqiawsiua) { $wkuikksoimmikkek[$ymqmyyeuycgmigyo] = sprintf("\45\x73\x20\x28\x25\163\x78\45\x73\x29", $ymqmyyeuycgmigyo, $weaakkwoqiawsiua[Constants::qomookamaskuoswk] ?? 0, $weaakkwoqiawsiua[Constants::sogmkkcwuamuqegw] ?? 0); giaiosokigwkciok: } ogqqumwguoeiwsks: yksceugwkyaiuwym: return $wkuikksoimmikkek; } public function ikgomeqwikoawcyu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\160\144\146", $aiooqyausygaasqm); } public function mccouuwycwemasea($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\166\151\144\145\157", $aiooqyausygaasqm); } public function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x69\x6d\141\x67\145", $aiooqyausygaasqm); } public function aauyuieeeaakygki($aiooqyausygaasqm) : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ccwssmqgyasqqcoc($aiooqyausygaasqm, Constants::cqycgsyykemiygou); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ksmqawcowkmegigw($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $icwicymcioeyeyek); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->smiqaaaecemiwugu($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $qogsmwakwacwqogk); } public function mgaeeqsgeoukeokc($aiooqyausygaasqm, string $oiegiwogmwmawkeo = "\x66\165\x6c\x6c") : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo), 0, ''); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $beuoaqwyyugcgeas); } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : string { $ewgwqamkygiqaawc = ''; if (!($qogsmwakwacwqogk = $this->ckoygqywcuqasqea($post))) { goto qyqqqsoggykumeuu; } $ewgwqamkygiqaawc = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); qyqqqsoggykumeuu: return $ewgwqamkygiqaawc; } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\150\x75\155\142\156\x61\x69\x6c", bool $wkaqekwwgqsqwcoi = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\x68\165\x6d\142\x6e\x61\x69\154", bool $wkaqekwwgqsqwcoi = false) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, 0); } public function wggscwmuogkkkmgq($aiooqyausygaasqm, bool $acsweksygkmmgggk = true, array $siquossayskcwkea = []) { $acqcekoeswseswws = $this->ckoygqywcuqasqea($aiooqyausygaasqm); $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$miiyyswuessymmwe->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) { goto uqisumgcgcwswuui; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); if ($acsweksygkmmgggk) { goto ocoykqeawcqmyiak; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($aiooqyausygaasqm); goto mcmemeyicaoaqeag; ocoykqeawcqmyiak: $iwywmkygwewiamwm = $this->yucssysgmisaquki($aiooqyausygaasqm); mcmemeyicaoaqeag: $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($siquossayskcwkea, ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\164\151\164\x6c\145" => $meqocwsecsywiiqs ?: $seumokooiykcomco->aqcogscycyycgkuq($aiooqyausygaasqm), "\164\141\162\x67\x65\x74" => "\137\x62\x6c\x61\156\x6b", "\x64\157\x77\x6e\x6c\x6f\x61\144" => rawurldecode(basename($acqcekoeswseswws))]); uqisumgcgcwswuui: return $siquossayskcwkea; } public function yucssysgmisaquki($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if (!($aiooqyausygaasqm && ($aokagokqyuysuksm = $this->iooowgsqoyqseyuu($aiooqyausygaasqm)))) { goto gqwwymuckywoyimi; } $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->owgcciayoweymuws()->encrypt($aokagokqyuysuksm); $iwywmkygwewiamwm = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()) . "\x2f\x70\x72\55\144\157\x77\156\x6c\x6f\141\144\57{$ymacoouqwcqwwagu}\57"; gqwwymuckywoyimi: return $iwywmkygwewiamwm; } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, ?array $wisgiwskwawciiee = [], bool $wkaqekwwgqsqwcoi = false) : string { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi); } }
