<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67802fd4e8b59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Post; use Pmpr\Common\Foundation\Functions\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\x6d\x65\164\x61\142\157\170\137\156\157\x6e\143\x65"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\155\x65\164\141\142\x6f\x78"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\x73\141\x76\x65\x5f\160\x6f\x73\x74", [$this, "\x71\153\x79\x71\167\163\167\x6d\163\157\151\147\x6b\x75\157\151"]); } $this->qcsmikeggeemccuu("\141\144\x64\x5f\x6d\145\164\141\x5f\142\x6f\170\145\x73", [$this, "\157\155\x61\155\145\x6f\171\x65\x61\165\163\x79\x75\x67\x6d\x77"]); } else { if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($this->somkqoqeimmeemuq()) { $this->qcsmikeggeemccuu("\145\144\151\x74\x65\144\137{$kesssewsiegssiya}", [$this, "\151\145\x69\x61\157\x73\171\x63\163\x6f\x6d\163\141\171\151\167"])->qcsmikeggeemccuu("\143\162\145\x61\x74\x65\144\x5f{$kesssewsiegssiya}", [$this, "\x69\x65\151\x61\x6f\163\171\143\163\157\155\163\141\x79\x69\167"]); } $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\137\x61\x64\x64\x5f\x66\157\x72\155\x5f\x66\151\145\154\x64\163", [$this, "\155\x67\x75\145\151\x67\147\171\x71\x61\x69\x6d\x61\x6b\143\163"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\x65\144\x69\x74\137\x66\157\162\x6d\137\146\151\145\154\x64\x73", [$this, "\145\151\157\163\151\157\167\165\151\167\155\155\x6d\x79\161\141"], 10, 2); } } else { if ($this->iyosuismequsewie(Constants::COMMENT)) { if ($this->somkqoqeimmeemuq()) { } } } } } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\x70\x6f\x73\x74\142\x6f\170\137\143\x6c\141\163\x73\x65\163\137{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\x65\163\x67\153\x79\x73\x71\x71\x79\x6d\153\x67\x71\167\x79\x6d"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig)) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\x79\145\x69\151\x79\x71\x73\x65\143\x6d\147\x6f\x79\165"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); } if ($eqgoocgaqwqcimie) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } } } echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x70\162\55\155\x65\164\141\x62\157\x78\x2d\x63\157\156\164\141\151\156\x65\x72"; if ($this->imkyoqyocosuqasu(Constants::emaweackcoyyqosi, false)) { $cmkqisoeyioisqaw[] = "\160\162\x2d\x6d\145\x74\x61\x62\157\x78\x2d\164\x61\x62\163\x2d\x76\145\x72\x74\151\x63\141\x6c"; } return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if ($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce)) { $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); } } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if ($this->iqoyuqgssusgimwa()) { $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); } } } } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if ($moqewomugocaueis && $qcsieyqqegaoocks) { $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if ($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc()) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if ($aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); } elseif ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } elseif (!$uwomkgseoiegeume) { $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); } } } } } } } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if ($qgeeqyucwycemwmo) { if (is_array($qgeeqyucwycemwmo)) { $wggkkaucmogcyego += $qgeeqyucwycemwmo; } else { if (is_string($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; } else { if (is_bool($qgeeqyucwycemwmo)) { $wggkkaucmogcyego[] = $gcgsqcoqciockquc; } } } } } return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } public function kwcoiysqqkqsugqo() : self { $this->igiywquyccyiaucw(Constants::emaweackcoyyqosi, true); return $this; } }
