<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705a37ba6a79             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Wrapper\Post\Post; use Pmpr\Common\Foundation\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\x6d\145\x74\141\142\x6f\x78\x5f\156\x6f\x6e\x63\145"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\x6d\x65\164\141\142\x6f\170"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\163\141\x76\x65\137\x70\x6f\163\x74", [$this, "\161\153\x79\x71\167\x73\167\x6d\x73\x6f\151\147\x6b\165\157\151"]); } $this->qcsmikeggeemccuu("\x61\144\144\x5f\155\x65\164\x61\137\142\157\x78\x65\x73", [$this, "\x6f\x6d\141\155\145\x6f\x79\x65\141\x75\163\171\x75\x67\x6d\167"]); } else { if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\145\x64\151\x74\x65\144\137{$kesssewsiegssiya}", [$this, "\x69\x65\151\141\157\163\171\x63\163\157\155\163\x61\x79\x69\x77"])->qcsmikeggeemccuu("\143\x72\x65\x61\164\x65\144\137{$kesssewsiegssiya}", [$this, "\151\x65\151\x61\x6f\163\171\143\163\x6f\x6d\x73\141\x79\x69\167"]); } $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\x61\x64\x64\x5f\146\157\162\155\x5f\x66\151\145\x6c\x64\x73", [$this, "\x6d\147\x75\145\x69\147\x67\x79\x71\x61\151\155\141\153\143\163"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\x65\144\x69\164\x5f\x66\157\162\155\137\146\151\x65\154\x64\x73", [$this, "\145\x69\x6f\163\151\157\x77\165\151\167\x6d\155\155\171\x71\x61"], 10, 2); } } else { if ($this->iyosuismequsewie(Constants::COMMENT)) { if ($this->somkqoqeimmeemuq()) { } } } } } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\x70\x6f\163\x74\142\x6f\x78\x5f\x63\154\x61\163\163\x65\163\137{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\x65\163\147\x6b\x79\x73\x71\161\171\155\153\x67\x71\167\x79\155"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\163\171\x65\151\x69\x79\161\163\x65\x63\x6d\147\x6f\x79\165"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); } if ($eqgoocgaqwqcimie) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x70\162\x2d\x6d\x65\x74\x61\x62\157\170\55\143\157\156\164\x61\x69\x6e\x65\x72"; return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if ($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce)) { $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); } } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if ($this->iqoyuqgssusgimwa()) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); } } } } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if ($moqewomugocaueis && $qcsieyqqegaoocks) { $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if ($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if ($aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); } elseif ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } elseif (!$uwomkgseoiegeume) { $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } } } } } } } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if ($qgeeqyucwycemwmo) { if (is_array($qgeeqyucwycemwmo)) { $wggkkaucmogcyego += $qgeeqyucwycemwmo; } else { if (is_string($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; } else { if (is_bool($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $gcgsqcoqciockquc; } } } } } return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } }
