<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c19cd8e5f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Attachment extends Common { public function iooowgsqoyqseyuu($aiooqyausygaasqm = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm); } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { global $_wp_additional_image_sizes; $qaiwqwwemmyyqosy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []); if (!$qaiwqwwemmyyqosy && is_string($ymqmyyeuycgmigyo)) { goto eoyukkkuoiqakwgy; } if (!is_array($ymqmyyeuycgmigyo)) { goto mwcayueuqqcqkseo; } $qaiwqwwemmyyqosy = $ymqmyyeuycgmigyo; mwcayueuqqcqkseo: goto aeicswayaimcoecy; eoyukkkuoiqakwgy: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $euciqcqmqamuoqga = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\143\162\157\x70"); $qeswwaqqsyymqawg = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x73\151\172\x65\137\167"); $cswemwoyesycwkuq = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\x73\151\172\x65\x5f\150"); if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto ckwawmwkggqciguw; } $qaiwqwwemmyyqosy = ["\x63\162\x6f\160" => $euciqcqmqamuoqga, Constants::qomookamaskuoswk => $qeswwaqqsyymqawg, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]; ckwawmwkggqciguw: aeicswayaimcoecy: return $qaiwqwwemmyyqosy; } public function ecqkouyiioksggkw(string $eeamcawaiqocomwy) { $aokagokqyuysuksm = 0; $miawkwqioaeasiig = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\x61\x73\x65\x75\162\154"] . "\57"))) { goto ewewgkiuwacswmmk; } return false; ewewgkiuwacswmmk: $qogsmwakwacwqogk = basename($eeamcawaiqocomwy); $ywmkwiwkosakssii = [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::uouymeyqasaeckso => Constants::cqycgsyykemiygou, Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => "\x5f\x77\x70\x5f\x61\x74\x74\141\143\x68\155\x65\156\164\137\155\145\164\x61\144\x61\164\x61", Constants::ciyoccqkiamemcmm => $qogsmwakwacwqogk, Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); if (!$gqgemcmoicmgaqie->have_posts()) { goto gkiwqegsueqsmweu; } foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $ccgkuocaoksweawk = isset($ugugimquukqwogge[Constants::hwuckiugumsugwas]) ? $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($ugugimquukqwogge[Constants::hwuckiugumsugwas], Constants::kekgqaemqessuwmq) : []; $wsiwwymgaoqsyagc = isset($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) ? basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) : ''; if (!($wsiwwymgaoqsyagc && $wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk, true))) { goto ugsmoyiommwgecww; } $aokagokqyuysuksm = $gcqseksiskwueksc; goto keyyeiogkmkeiciu; ugsmoyiommwgecww: wikicusisykwugay: } keyyeiogkmkeiciu: gkiwqegsueqsmweu: return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm; } public function wgogyccwcysggaig(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : array { $wkuikksoimmikkek = []; $ggauoeuaesiymgee = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->aiiaeiaqiayooqyi(); foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) { $qaiwqwwemmyyqosy = $this->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if (!$qaiwqwwemmyyqosy) { goto gmwkmgkmawygkuuq; } $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy; gmwkmgkmawygkuuq: agmakygyoykkegws: } ykaasokuacwyuoig: global $_wp_additional_image_sizes; if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) { goto oougqkueomqysagg; } $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes); oougqkueomqysagg: if (!(Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu)) { goto ciakokmuycsamoew; } foreach ($wkuikksoimmikkek as $ymqmyyeuycgmigyo => $weaakkwoqiawsiua) { $wkuikksoimmikkek[$ymqmyyeuycgmigyo] = sprintf("\45\x73\40\x28\x25\163\170\x25\163\x29", $ymqmyyeuycgmigyo, $weaakkwoqiawsiua[Constants::qomookamaskuoswk] ?? 0, $weaakkwoqiawsiua[Constants::sogmkkcwuamuqegw] ?? 0); oguamsyoaimwgqos: } eeucaygkomwqoiys: ciakokmuycsamoew: return $wkuikksoimmikkek; } public function ikgomeqwikoawcyu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\160\144\x66", $aiooqyausygaasqm); } public function mccouuwycwemasea($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x76\151\144\x65\x6f", $aiooqyausygaasqm); } public function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x69\x6d\x61\x67\x65", $aiooqyausygaasqm); } public function aauyuieeeaakygki($aiooqyausygaasqm) : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ccwssmqgyasqqcoc($aiooqyausygaasqm, Constants::cqycgsyykemiygou); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ksmqawcowkmegigw($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $icwicymcioeyeyek); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->smiqaaaecemiwugu($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $qogsmwakwacwqogk); } public function mgaeeqsgeoukeokc($aiooqyausygaasqm, string $oiegiwogmwmawkeo = "\146\x75\x6c\154") : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo), 0, ''); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $beuoaqwyyugcgeas); } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : string { $ewgwqamkygiqaawc = ''; if (!($qogsmwakwacwqogk = $this->ckoygqywcuqasqea($post))) { goto oicciogwwqmcoaue; } $ewgwqamkygiqaawc = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); oicciogwwqmcoaue: return $ewgwqamkygiqaawc; } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\x75\x6d\142\156\x61\x69\154", bool $wkaqekwwgqsqwcoi = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\155\x62\156\141\x69\x6c", bool $wkaqekwwgqsqwcoi = false) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, 0); } public function wggscwmuogkkkmgq($aiooqyausygaasqm, bool $acsweksygkmmgggk = true, array $siquossayskcwkea = []) { $acqcekoeswseswws = $this->ckoygqywcuqasqea($aiooqyausygaasqm); $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$miiyyswuessymmwe->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) { goto emmyeiacygokoyqm; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); if ($acsweksygkmmgggk) { goto ceugguwawauqcgqc; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($aiooqyausygaasqm); goto umesgccceskkwcek; ceugguwawauqcgqc: $iwywmkygwewiamwm = $this->yucssysgmisaquki($aiooqyausygaasqm); umesgccceskkwcek: $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($siquossayskcwkea, ["\150\162\145\x66" => $iwywmkygwewiamwm, "\164\x69\164\154\145" => $meqocwsecsywiiqs ?: $seumokooiykcomco->aqcogscycyycgkuq($aiooqyausygaasqm), "\x74\x61\x72\x67\145\x74" => "\x5f\x62\154\141\156\x6b", "\x64\x6f\167\156\154\x6f\141\x64" => rawurldecode(basename($acqcekoeswseswws))]); emmyeiacygokoyqm: return $siquossayskcwkea; } public function yucssysgmisaquki($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if (!($aiooqyausygaasqm && ($aokagokqyuysuksm = $this->iooowgsqoyqseyuu($aiooqyausygaasqm)))) { goto quykkkqkscyeakyc; } $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->owgcciayoweymuws()->encrypt($aokagokqyuysuksm); $iwywmkygwewiamwm = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()) . "\x2f\x70\162\x2d\x64\157\x77\156\154\x6f\x61\144\x2f{$ymacoouqwcqwwagu}\57"; quykkkqkscyeakyc: return $iwywmkygwewiamwm; } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, ?array $wisgiwskwawciiee = [], bool $wkaqekwwgqsqwcoi = false) : string { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi); } }
