<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a9fe543e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Post; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\155\145\x74\141\142\x6f\170\x5f\x6e\157\156\x63\145"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\x6d\x65\x74\141\x62\157\x78"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\x73\141\166\145\x5f\x70\157\x73\x74", [$this, "\x71\x6b\171\161\167\163\x77\x6d\163\x6f\151\x67\x6b\165\157\x69"]); } $this->qcsmikeggeemccuu("\141\x64\x64\x5f\x6d\145\x74\141\x5f\142\157\170\x65\x73", [$this, "\157\155\141\x6d\145\157\x79\x65\141\x75\x73\x79\x75\147\155\167"]); } else { if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\145\x64\151\164\145\144\x5f{$kesssewsiegssiya}", [$this, "\x69\x65\x69\x61\x6f\x73\x79\143\x73\157\155\163\141\171\151\167"])->qcsmikeggeemccuu("\x63\162\145\141\x74\x65\144\x5f{$kesssewsiegssiya}", [$this, "\151\145\151\141\x6f\x73\171\x63\163\157\x6d\x73\141\x79\151\167"]); } $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\137\141\144\x64\x5f\x66\x6f\x72\x6d\x5f\x66\x69\145\154\144\163", [$this, "\x6d\x67\165\145\x69\147\147\171\x71\141\x69\155\141\153\x63\163"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\145\x64\151\x74\137\146\157\162\155\x5f\146\151\145\154\x64\x73", [$this, "\x65\151\x6f\163\x69\x6f\167\x75\x69\x77\155\155\155\x79\161\x61"], 10, 2); } } else { if ($this->iyosuismequsewie(Constants::COMMENT)) { if ($this->somkqoqeimmeemuq()) { } } } } } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\160\157\x73\x74\142\157\x78\x5f\143\x6c\141\x73\163\145\x73\x5f{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\x65\163\147\x6b\x79\x73\161\161\171\155\x6b\147\x71\x77\x79\x6d"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\x79\x65\151\151\x79\161\x73\x65\x63\155\x67\x6f\171\x75"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); } if ($eqgoocgaqwqcimie) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x70\162\x2d\x6d\x65\164\x61\x62\157\x78\x2d\143\x6f\x6e\x74\141\151\x6e\145\x72"; if ($this->imkyoqyocosuqasu(Constants::emaweackcoyyqosi, false)) { $cmkqisoeyioisqaw[] = "\x70\x72\x2d\155\x65\164\141\x62\157\x78\x2d\164\x61\142\163\55\x76\x65\x72\164\151\143\141\154"; } return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if ($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce)) { $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); } } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if ($this->iqoyuqgssusgimwa()) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); } } } } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if ($moqewomugocaueis && $qcsieyqqegaoocks) { $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if ($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if ($aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); } elseif ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } elseif (!$uwomkgseoiegeume) { $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } } } } } } } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if ($qgeeqyucwycemwmo) { if (is_array($qgeeqyucwycemwmo)) { $wggkkaucmogcyego += $qgeeqyucwycemwmo; } else { if (is_string($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; } else { if (is_bool($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $gcgsqcoqciockquc; } } } } } return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } public function kwcoiysqqkqsugqo() : self { $this->igiywquyccyiaucw(Constants::emaweackcoyyqosi, true); return $this; } }
