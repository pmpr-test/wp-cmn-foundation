<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Attachment extends Common { public function iooowgsqoyqseyuu($aiooqyausygaasqm = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm); } public function iuwsgyqakicakuoq($ymqmyyeuycgmigyo) { global $_wp_additional_image_sizes; $qaiwqwwemmyyqosy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_wp_additional_image_sizes, $ymqmyyeuycgmigyo, []); if (!$qaiwqwwemmyyqosy && is_string($ymqmyyeuycgmigyo)) { goto ayaawwiioeysswkm; } if (!is_array($ymqmyyeuycgmigyo)) { goto gqwwymuckywoyimi; } $qaiwqwwemmyyqosy = $ymqmyyeuycgmigyo; gqwwymuckywoyimi: goto eawayoqwuukkgywo; ayaawwiioeysswkm: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $euciqcqmqamuoqga = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\x63\x72\157\160"); $qeswwaqqsyymqawg = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\137\x73\151\172\x65\137\x77"); $cswemwoyesycwkuq = (int) $qkqgcaykemoiecma->get("{$ymqmyyeuycgmigyo}\x5f\163\x69\172\x65\x5f\150"); if (!($qeswwaqqsyymqawg && $cswemwoyesycwkuq)) { goto uqisumgcgcwswuui; } $qaiwqwwemmyyqosy = ["\143\x72\157\160" => $euciqcqmqamuoqga, Constants::qomookamaskuoswk => $qeswwaqqsyymqawg, Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]; uqisumgcgcwswuui: eawayoqwuukkgywo: return $qaiwqwwemmyyqosy; } public function ecqkouyiioksggkw(string $eeamcawaiqocomwy) { $aokagokqyuysuksm = 0; $miawkwqioaeasiig = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (!(false === strpos($eeamcawaiqocomwy, $miawkwqioaeasiig["\142\141\163\145\165\162\x6c"] . "\57"))) { goto awisawmceeigyqqm; } return false; awisawmceeigyqqm: $qogsmwakwacwqogk = basename($eeamcawaiqocomwy); $ywmkwiwkosakssii = [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc, Constants::uouymeyqasaeckso => Constants::cqycgsyykemiygou, Constants::gikuasuikwemyqoq => Constants::yqqwmawaesqquaig, Constants::cuoyscoiacswuauq => [[Constants::ascagqcquwgmygkm => "\x5f\x77\160\x5f\141\x74\164\x61\143\150\x6d\145\x6e\164\137\x6d\145\164\x61\144\x61\x74\141", Constants::ciyoccqkiamemcmm => $qogsmwakwacwqogk, Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui]]]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); if (!$gqgemcmoicmgaqie->have_posts()) { goto kygqqoowekeicswe; } foreach ($gqgemcmoicmgaqie->posts as $gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $ccgkuocaoksweawk = isset($ugugimquukqwogge[Constants::hwuckiugumsugwas]) ? $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->iqwuoaqymgqoskko($ugugimquukqwogge[Constants::hwuckiugumsugwas], Constants::kekgqaemqessuwmq) : []; $wsiwwymgaoqsyagc = isset($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) ? basename($ugugimquukqwogge[Constants::kekgqaemqessuwmq]) : ''; if (!($wsiwwymgaoqsyagc && $wsiwwymgaoqsyagc === $qogsmwakwacwqogk || in_array($qogsmwakwacwqogk, $ccgkuocaoksweawk, true))) { goto yggkaqimymwgeusw; } $aokagokqyuysuksm = $gcqseksiskwueksc; goto muacgquwssyosaae; yggkaqimymwgeusw: ksemeemissoewyig: } muacgquwssyosaae: kygqqoowekeicswe: return 0 === $aokagokqyuysuksm ? false : $aokagokqyuysuksm; } public function wgogyccwcysggaig(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : array { $wkuikksoimmikkek = []; $ggauoeuaesiymgee = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->aiiaeiaqiayooqyi(); foreach ($ggauoeuaesiymgee as $oiegiwogmwmawkeo) { $qaiwqwwemmyyqosy = $this->iuwsgyqakicakuoq($oiegiwogmwmawkeo); if (!$qaiwqwwemmyyqosy) { goto kcswcoeaqiwuukiy; } $wkuikksoimmikkek[$oiegiwogmwmawkeo] = $qaiwqwwemmyyqosy; kcswcoeaqiwuukiy: mcgaeoqcascioikk: } eeicuakiuucqekwq: global $_wp_additional_image_sizes; if (!(isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes))) { goto miqqmoomyyiwcayu; } $wkuikksoimmikkek = array_merge($wkuikksoimmikkek, $_wp_additional_image_sizes); miqqmoomyyiwcayu: if (!(Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu)) { goto qkmuqqwoyoykqwwy; } foreach ($wkuikksoimmikkek as $ymqmyyeuycgmigyo => $weaakkwoqiawsiua) { $wkuikksoimmikkek[$ymqmyyeuycgmigyo] = sprintf("\45\163\x20\x28\x25\163\x78\x25\x73\51", $ymqmyyeuycgmigyo, $weaakkwoqiawsiua[Constants::qomookamaskuoswk] ?? 0, $weaakkwoqiawsiua[Constants::sogmkkcwuamuqegw] ?? 0); gmgacakgauwigcwa: } kseaceiacycsqkoo: qkmuqqwoyoykqwwy: return $wkuikksoimmikkek; } public function ikgomeqwikoawcyu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\160\x64\146", $aiooqyausygaasqm); } public function mccouuwycwemasea($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\x76\x69\144\x65\157", $aiooqyausygaasqm); } public function qecqsmowoqmwgagu($aiooqyausygaasqm) : bool { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->is("\151\155\x61\147\145", $aiooqyausygaasqm); } public function aauyuieeeaakygki($aiooqyausygaasqm) : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ccwssmqgyasqqcoc($aiooqyausygaasqm, Constants::cqycgsyykemiygou); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ksmqawcowkmegigw($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $icwicymcioeyeyek); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->smiqaaaecemiwugu($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $qogsmwakwacwqogk); } public function mgaeeqsgeoukeokc($aiooqyausygaasqm, string $oiegiwogmwmawkeo = "\x66\x75\154\x6c") : string { return (string) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo), 0, ''); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($this->iooowgsqoyqseyuu($aiooqyausygaasqm), $beuoaqwyyugcgeas); } public function souwykwwmyygqyqi($post = null, bool $egkeamycaysqsoma = true) : string { $ewgwqamkygiqaawc = ''; if (!($qogsmwakwacwqogk = $this->ckoygqywcuqasqea($post))) { goto uqeegayckqykygcg; } $ewgwqamkygiqaawc = (string) $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->souwykwwmyygqyqi($qogsmwakwacwqogk); uqeegayckqykygcg: return $ewgwqamkygiqaawc; } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\x75\x6d\x62\x6e\141\x69\154", bool $wkaqekwwgqsqwcoi = false) { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\x75\155\142\x6e\x61\x69\x6c", bool $wkaqekwwgqsqwcoi = false) { $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, 0); } public function wggscwmuogkkkmgq($aiooqyausygaasqm, bool $acsweksygkmmgggk = true, array $siquossayskcwkea = []) { $acqcekoeswseswws = $this->ckoygqywcuqasqea($aiooqyausygaasqm); $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); if (!$miiyyswuessymmwe->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) { goto ocqwquesqkeuaqss; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm); if ($acsweksygkmmgggk) { goto kackciqogeecyokm; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->oiucukewkckkwiqc($aiooqyausygaasqm); goto oouwaqoyakqgqwam; kackciqogeecyokm: $iwywmkygwewiamwm = $this->yucssysgmisaquki($aiooqyausygaasqm); oouwaqoyakqgqwam: $siquossayskcwkea = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($siquossayskcwkea, ["\150\162\145\x66" => $iwywmkygwewiamwm, "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs ?: $seumokooiykcomco->aqcogscycyycgkuq($aiooqyausygaasqm), "\164\141\162\x67\145\x74" => "\x5f\142\154\x61\x6e\153", "\144\157\x77\x6e\154\157\x61\x64" => rawurldecode(basename($acqcekoeswseswws))]); ocqwquesqkeuaqss: return $siquossayskcwkea; } public function yucssysgmisaquki($aiooqyausygaasqm) : string { $iwywmkygwewiamwm = ''; if (!($aiooqyausygaasqm && ($aokagokqyuysuksm = $this->iooowgsqoyqseyuu($aiooqyausygaasqm)))) { goto ieuawqgmecwsukqg; } $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->owgcciayoweymuws()->encrypt($aokagokqyuysuksm); $iwywmkygwewiamwm = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()) . "\57\x70\162\55\x64\x6f\x77\156\154\x6f\x61\144\57{$ymacoouqwcqwwagu}\x2f"; ieuawqgmecwsukqg: return $iwywmkygwewiamwm; } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = Constants::egwoacukmsioosum, ?array $wisgiwskwawciiee = [], bool $wkaqekwwgqsqwcoi = false) : string { return $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($aiooqyausygaasqm), $oiegiwogmwmawkeo, $wisgiwskwawciiee, $wkaqekwwgqsqwcoi); } }
