<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Attachment extends Common { public function iooowgsqoyqseyuu($aiooqyausygaasqm = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm); } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { global $_wp_additional_image_sizes; $qaiwqwwemmyyqosy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []); if (!$qaiwqwwemmyyqosy && is_string($ymqmyyeuycgmigyo)) { goto oqikuaaakmwakkwi; } if (!is_array($ymqmyyeuycgmigyo)) { goto aeumaioaccqqsuog; } $qaiwqwwemmyyqosy = $ymqmyyeuycgmigyo; aeumaioaccqqsuog: goto mgkogwayioiuqgcm; oqikuaaakmwakkwi: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $euciqcqmqamuoqga = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x63\x72\157\160"); $qeswwaqqsyymqawg = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\163\151\x7a\145\x5f\x77"); $cswemwoyesycwkuq = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x73\x69\172\145\x5f\x68"); if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto yguywoyayoeuakim; } $qaiwqwwemmyyqosy = ["\143\162\157\160" => $euciqcqmqamuoqga, Constants::qomookamaskuoswk => $qeswwaqqsyymqawg, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]; yguywoyayoeuakim: mgkogwayioiuqgcm: return $qaiwqwwemmyyqosy; } public function ecqkouyiioksggkw(string $eeamcawaiqocomwy) { $aokagokqyuysuksm = 0; $miawkwqioaeasiig = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\x62\141\x73\145\x75\162\x6c"] . "\57"))) { goto yykoqaegsqocwkuo; } return false; yykoqaegsqocwkuo: $qogsmwakwacwqogk = basename($eeamcawaiqocomwy); $ywmkwiwkosakssii = [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::uouymeyqasaeckso => Constants::cqycgsyykemiygou, Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => "\x5f\x77\x70\x5f\x61\164\164\x61\x63\150\155\x65\x6e\164\x5f\155\x65\164\x61\x64\141\164\x61", Constants::ciyoccqkiamemcmm => $qogsmwakwacwqogk, Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); if (!$gqgemcmoicmgaqie->have_posts()) { goto magceccaecooikmi; } foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $ccgkuocaoksweawk = isset($ugugimquukqwogge[Constants::hwuckiugumsugwas]) ? $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($ugugimquukqwogge[Constants::hwuckiugumsugwas], Constants::kekgqaemqessuwmq) : []; $wsiwwymgaoqsyagc = isset($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) ? basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) : ''; if (!($wsiwwymgaoqsyagc && $wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk, true))) { goto skwewwiigkwyigwe; } $aokagokqyuysuksm = $gcqseksiskwueksc; goto iqiigaoyqmcsiyqu; skwewwiigkwyigwe: ukumogccwqyimwyc: } iqiigaoyqmcsiyqu: magceccaecooikmi: return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm; } public function wgogyccwcysggaig(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : array { $wkuikksoimmikkek = []; $ggauoeuaesiymgee = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->aiiaeiaqiayooqyi(); foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) { $qaiwqwwemmyyqosy = $this->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if (!$qaiwqwwemmyyqosy) { goto wyaigkaacmyogusc; } $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy; wyaigkaacmyogusc: igqqmukoqiuewgam: } qsgwasmoumcwkekq: global $_wp_additional_image_sizes; if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) { goto mickaeggaoagsocg; } $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes); mickaeggaoagsocg: if (!(Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu)) { goto kqqqeieaswiuykys; } foreach ($wkuikksoimmikkek as $ymqmyyeuycgmigyo => $weaakkwoqiawsiua) { $wkuikksoimmikkek[$ymqmyyeuycgmigyo] = sprintf("\45\x73\40\x28\x25\x73\170\x25\x73\51", $ymqmyyeuycgmigyo, $weaakkwoqiawsiua[Constants::qomookamaskuoswk] ?? 0, $weaakkwoqiawsiua[Constants::sogmkkcwuamuqegw] ?? 0); aaeggsysesayskwc: } rookcyisouekusai: kqqqeieaswiuykys: return $wkuikksoimmikkek; } public function ikgomeqwikoawcyu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x70\x64\146", $aiooqyausygaasqm); } public function mccouuwycwemasea($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x76\151\x64\x65\157", $aiooqyausygaasqm); } public function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\151\x6d\141\147\145", $aiooqyausygaasqm); } public function aauyuieeeaakygki($aiooqyausygaasqm) : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ccwssmqgyasqqcoc($aiooqyausygaasqm, Constants::cqycgsyykemiygou); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ksmqawcowkmegigw($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $icwicymcioeyeyek); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->smiqaaaecemiwugu($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $qogsmwakwacwqogk); } public function mgaeeqsgeoukeokc($aiooqyausygaasqm, string $oiegiwogmwmawkeo = "\146\165\154\154") : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo), 0, ''); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $beuoaqwyyugcgeas); } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : string { $ewgwqamkygiqaawc = ''; if (!($qogsmwakwacwqogk = $this->ckoygqywcuqasqea($post))) { goto ucmqwkqykgagwyim; } $ewgwqamkygiqaawc = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); ucmqwkqykgagwyim: return $ewgwqamkygiqaawc; } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\x68\165\155\142\156\141\151\154", bool $wkaqekwwgqsqwcoi = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\x75\155\x62\156\x61\151\x6c", bool $wkaqekwwgqsqwcoi = false) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, 0); } public function wggscwmuogkkkmgq($aiooqyausygaasqm, bool $acsweksygkmmgggk = true, array $siquossayskcwkea = []) { $acqcekoeswseswws = $this->ckoygqywcuqasqea($aiooqyausygaasqm); $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$miiyyswuessymmwe->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) { goto weiswmsaqamyisoo; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); if ($acsweksygkmmgggk) { goto qsogsookkesyksee; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($aiooqyausygaasqm); goto wcyikusayywiuiia; qsogsookkesyksee: $iwywmkygwewiamwm = $this->yucssysgmisaquki($aiooqyausygaasqm); wcyikusayywiuiia: $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($siquossayskcwkea, ["\x68\x72\x65\146" => $iwywmkygwewiamwm, "\x74\151\x74\154\145" => $meqocwsecsywiiqs ?: $seumokooiykcomco->aqcogscycyycgkuq($aiooqyausygaasqm), "\164\x61\x72\x67\x65\x74" => "\137\142\x6c\x61\x6e\x6b", "\144\157\x77\x6e\x6c\x6f\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]); weiswmsaqamyisoo: return $siquossayskcwkea; } public function yucssysgmisaquki($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if (!($aiooqyausygaasqm && ($aokagokqyuysuksm = $this->iooowgsqoyqseyuu($aiooqyausygaasqm)))) { goto iggysouawgiwywau; } $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->owgcciayoweymuws()->encrypt($aokagokqyuysuksm); $iwywmkygwewiamwm = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()) . "\57\160\162\55\144\157\x77\x6e\154\157\x61\x64\57{$ymacoouqwcqwwagu}\x2f"; iggysouawgiwywau: return $iwywmkygwewiamwm; } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, ?array $wisgiwskwawciiee = [], bool $wkaqekwwgqsqwcoi = false) : string { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi); } }
