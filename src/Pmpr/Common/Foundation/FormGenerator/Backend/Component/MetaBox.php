<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Wrapper\Post\Post; use Pmpr\Common\Foundation\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\155\145\164\141\x62\x6f\x78\137\156\x6f\156\x63\145"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\x6d\x65\x74\x61\x62\x6f\170"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { goto qewmkgeeuomgomia; } if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { goto comiusqosmykagiq; } if (!$this->iyosuismequsewie(Constants::COMMENT)) { goto uiuekqekiguikuce; } if (!$this->somkqoqeimmeemuq()) { goto cuqeayuiccuwcyua; } cuqeayuiccuwcyua: uiuekqekiguikuce: goto vwyusaemeqkswgee; comiusqosmykagiq: $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$this->somkqoqeimmeemuq()) { goto iiakoqmowuggmkqw; } $this->qcsmikeggeemccuu("\145\144\x69\x74\145\144\x5f{$kesssewsiegssiya}", [$this, "\151\145\151\x61\157\x73\x79\143\163\157\x6d\x73\141\x79\x69\x77"])->qcsmikeggeemccuu("\x63\x72\145\141\x74\145\x64\137{$kesssewsiegssiya}", [$this, "\151\145\151\141\x6f\163\x79\x63\163\x6f\155\x73\x61\171\x69\167"]); iiakoqmowuggmkqw: $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\137\141\144\x64\137\146\x6f\162\x6d\137\x66\151\x65\154\144\163", [$this, "\155\147\165\145\151\147\x67\171\x71\141\151\155\x61\153\x63\x73"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\145\x64\x69\164\x5f\146\157\x72\x6d\137\x66\151\x65\x6c\x64\163", [$this, "\145\x69\x6f\163\151\x6f\x77\x75\151\167\155\155\155\x79\x71\141"], 10, 2); ayggscyaoccukyso: } uyueemusgoakawmc: vwyusaemeqkswgee: goto wmasiggggymwkeqs; qewmkgeeuomgomia: if (!$this->somkqoqeimmeemuq()) { goto ceegwysaccigqqck; } $this->qcsmikeggeemccuu("\x73\141\166\x65\137\160\157\163\x74", [$this, "\161\153\x79\x71\167\163\167\x6d\x73\x6f\151\147\153\165\157\x69"]); ceegwysaccigqqck: $this->qcsmikeggeemccuu("\x61\x64\x64\137\155\x65\x74\141\137\x62\x6f\170\145\x73", [$this, "\x6f\x6d\141\155\x65\157\x79\x65\x61\165\163\171\165\147\155\167"]); wmasiggggymwkeqs: } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\x70\x6f\x73\164\142\x6f\x78\137\143\x6c\141\x73\163\145\163\x5f{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\x65\x73\x67\153\171\163\x71\161\171\155\x6b\147\161\x77\171\x6d"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!(!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto csqwmisikmgeaaky; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\x79\x65\151\x69\171\x71\x73\145\x63\x6d\x67\x6f\x79\x75"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); csqwmisikmgeaaky: } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto scigcaogysowccsk; } if ($aiowsaccomcoikus->qooeaookuemoqecm()) { goto aqmauesokgqoyugm; } $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if ($eqgoocgaqwqcimie) { goto isqemmgcymcqgmyu; } $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); isqemmgcymcqgmyu: if (!$eqgoocgaqwqcimie) { goto muuiwammayaceuue; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); muuiwammayaceuue: aqmauesokgqoyugm: scigcaogysowccsk: ayekogimgycgmgau: } skokkuuieagmuwgm: echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\160\162\x2d\155\x65\x74\141\142\157\170\x2d\x63\x6f\x6e\164\141\x69\x6e\145\162"; return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if (!($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce))) { goto qyoscouawykeimiu; } $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); qyoscouawykeimiu: } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if (!$this->iqoyuqgssusgimwa()) { goto ummgomwmsqygiqcy; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto cgeuosayqssasuou; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); sgiescgmgsowcakk: } wskwmocqgakykmgw: cgeuosayqssasuou: ummgomwmsqygiqcy: } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if (!($moqewomugocaueis && $qcsieyqqegaoocks)) { goto ikgusckaomuoiggs; } $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if (!($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq))) { goto oeoeeqeaokougsec; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto skwuueyuqkueasuu; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if (!$aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { goto gyeqsyqiosmysiio; } if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { goto guyskocigecaisas; } if ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { goto wugmawaqkksguaoa; } if (!$uwomkgseoiegeume) { goto ggwkueqyesouyaya; } goto ugoqkakikayagkmm; guyskocigecaisas: $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); goto ugoqkakikayagkmm; wugmawaqkksguaoa: $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); goto ugoqkakikayagkmm; ggwkueqyesouyaya: $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); ugoqkakikayagkmm: gyeqsyqiosmysiio: skwuueyuqkueasuu: imyoiukqcmewqkkw: } skuykkqcgakewusu: oeoeeqeaokougsec: ikgusckaomuoiggs: } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if (!$qgeeqyucwycemwmo) { goto qawqosgwykeguasw; } if (is_array($qgeeqyucwycemwmo)) { goto qmeskaiqawomuqmk; } if (is_string($qgeeqyucwycemwmo)) { goto sesqsywwesiycmmq; } if (!is_bool($qgeeqyucwycemwmo)) { goto gwyguuaqscsukaqg; } $wggkkaucmogcyego[] = $gcgsqcoqciockquc; gwyguuaqscsukaqg: goto wwyukkoeeeiiuewk; sesqsywwesiycmmq: $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; wwyukkoeeeiiuewk: goto ycekisssayygosaw; qmeskaiqawomuqmk: $wggkkaucmogcyego += $qgeeqyucwycemwmo; ycekisssayygosaw: qawqosgwykeguasw: icausgkyooymuwqq: } oykuimwkwcmuekci: return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } }
