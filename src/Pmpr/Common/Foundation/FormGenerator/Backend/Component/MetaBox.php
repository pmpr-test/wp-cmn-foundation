<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Wrapper\Post\Post; use Pmpr\Common\Foundation\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\155\x65\164\141\x62\157\170\137\x6e\157\x6e\x63\x65"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\155\145\x74\x61\142\x6f\170"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { goto muqeeocooyiosouk; } if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { goto pscqogmyseiwuqye; } if (!$this->iyosuismequsewie(Constants::COMMENT)) { goto aigeoggkowgwwwqg; } if (!$this->somkqoqeimmeemuq()) { goto ggoyigsoyccmscum; } ggoyigsoyccmscum: aigeoggkowgwwwqg: goto cyyecekuwygaqwcy; pscqogmyseiwuqye: $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$this->somkqoqeimmeemuq()) { goto agokkauammisaqke; } $this->qcsmikeggeemccuu("\x65\144\151\164\145\144\137{$kesssewsiegssiya}", [$this, "\x69\x65\151\x61\x6f\163\x79\x63\163\x6f\x6d\x73\141\171\151\167"])->qcsmikeggeemccuu("\x63\162\x65\x61\164\145\x64\137{$kesssewsiegssiya}", [$this, "\151\x65\x69\x61\157\163\x79\x63\163\x6f\155\x73\x61\171\151\167"]); agokkauammisaqke: $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\141\x64\144\x5f\x66\x6f\162\x6d\x5f\146\x69\145\x6c\x64\163", [$this, "\x6d\x67\165\145\151\x67\x67\x79\161\141\151\155\141\153\x63\x73"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\x65\144\151\164\x5f\146\x6f\162\x6d\x5f\146\x69\x65\154\144\163", [$this, "\145\151\x6f\163\151\x6f\167\165\x69\167\155\x6d\155\171\x71\141"], 10, 2); omeookmiomoieeee: } iiyggeuemwuwqiey: cyyecekuwygaqwcy: goto wcagqkquasswioos; muqeeocooyiosouk: if (!$this->somkqoqeimmeemuq()) { goto iiyamaquicwswcyu; } $this->qcsmikeggeemccuu("\x73\141\166\x65\x5f\160\x6f\163\x74", [$this, "\x71\x6b\171\161\167\x73\x77\155\163\157\x69\x67\x6b\x75\157\151"]); iiyamaquicwswcyu: $this->qcsmikeggeemccuu("\141\x64\x64\137\x6d\x65\x74\141\x5f\x62\157\170\145\163", [$this, "\157\155\x61\155\145\x6f\x79\145\141\x75\x73\171\x75\147\155\167"]); wcagqkquasswioos: } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\x70\157\x73\x74\142\157\x78\137\143\x6c\141\x73\163\145\x73\x5f{$suaemuyiacqyugsm}\137{$this->mwikyscisascoeea()}", [$this, "\145\x73\x67\x6b\x79\163\161\x71\x79\155\x6b\147\161\x77\x79\x6d"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!(!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto ogywsgmqcgioaoqk; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\x79\x65\151\151\171\x71\x73\x65\x63\155\x67\x6f\171\x75"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); ogywsgmqcgioaoqk: } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto iyeswqeqcsmsoueq; } if ($aiowsaccomcoikus->qooeaookuemoqecm()) { goto ggkgseywksemuogc; } $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if ($eqgoocgaqwqcimie) { goto mowauiysyiciqaaa; } $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); mowauiysyiciqaaa: if (!$eqgoocgaqwqcimie) { goto msuyygiskkumokec; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); msuyygiskkumokec: ggkgseywksemuogc: iyeswqeqcsmsoueq: wiiyageyqowkmmko: } ayggiggmcqckqwom: echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x70\162\x2d\155\145\x74\141\142\x6f\170\x2d\143\157\x6e\164\x61\151\156\x65\162"; return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if (!($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce))) { goto eiekcqosmyqmwqag; } $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); eiekcqosmyqmwqag: } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if (!$this->iqoyuqgssusgimwa()) { goto ggoquyyseekiwukq; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto keiciayiyqsemsys; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); sykwygmouoikuyws: } mgscyaiwekksacco: keiciayiyqsemsys: ggoquyyseekiwukq: } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if (!($moqewomugocaueis && $qcsieyqqegaoocks)) { goto iekesyeicomwcuas; } $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if (!($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq))) { goto jgaoqcmiqagoiuko; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto ouuuacyewgmocwsc; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if (!$aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { goto iyakeemwaiqeueme; } if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { goto qooykiaywemimcke; } if ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { goto okceyucmoigyokyy; } if (!$uwomkgseoiegeume) { goto uecmkggsueeiyawk; } goto ysiuiuqawkaaamus; qooykiaywemimcke: $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); goto ysiuiuqawkaaamus; okceyucmoigyokyy: $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); goto ysiuiuqawkaaamus; uecmkggsueeiyawk: $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); ysiuiuqawkaaamus: iyakeemwaiqeueme: ouuuacyewgmocwsc: yoociieskmuucgms: } dwciioycickkwawq: jgaoqcmiqagoiuko: iekesyeicomwcuas: } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if (!$qgeeqyucwycemwmo) { goto aikukgimkamkgwsu; } if (is_array($qgeeqyucwycemwmo)) { goto wiigoqowismumcsm; } if (is_string($qgeeqyucwycemwmo)) { goto iyekgiaayeasoggw; } if (!is_bool($qgeeqyucwycemwmo)) { goto sqokyowsuawgkusy; } $wggkkaucmogcyego[] = $gcgsqcoqciockquc; sqokyowsuawgkusy: goto cwsgieeaugwciiwu; iyekgiaayeasoggw: $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; cwsgieeaugwciiwu: goto mwkcmgksoyycumos; wiigoqowismumcsm: $wggkkaucmogcyego += $qgeeqyucwycemwmo; mwkcmgksoyycumos: aikukgimkamkgwsu: oycikycyewimcaew: } wimggeysyugwwkca: return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } }
