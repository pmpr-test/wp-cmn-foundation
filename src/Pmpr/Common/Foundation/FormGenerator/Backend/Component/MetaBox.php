<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Wrapper\Post\Post; use Pmpr\Common\Foundation\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\155\145\164\141\142\157\170\x5f\156\157\x6e\x63\145"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\x6d\x65\164\141\x62\157\x78"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { goto sesqsywwesiycmmq; } if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { goto icausgkyooymuwqq; } if (!$this->iyosuismequsewie(Constants::COMMENT)) { goto oykuimwkwcmuekci; } if (!$this->somkqoqeimmeemuq()) { goto ikgusckaomuoiggs; } ikgusckaomuoiggs: oykuimwkwcmuekci: goto gwyguuaqscsukaqg; icausgkyooymuwqq: $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$this->somkqoqeimmeemuq()) { goto oeoeeqeaokougsec; } $this->qcsmikeggeemccuu("\145\x64\x69\164\x65\144\137{$kesssewsiegssiya}", [$this, "\151\145\x69\141\157\163\171\x63\163\x6f\155\163\141\x79\x69\167"])->qcsmikeggeemccuu("\x63\x72\x65\141\x74\x65\x64\137{$kesssewsiegssiya}", [$this, "\151\x65\151\x61\157\163\171\143\163\157\x6d\x73\x61\x79\x69\x77"]); oeoeeqeaokougsec: $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\141\x64\x64\x5f\x66\x6f\162\x6d\x5f\146\x69\145\154\144\x73", [$this, "\x6d\147\x75\145\151\147\x67\x79\161\x61\151\155\x61\153\x63\x73"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\x5f\x65\144\151\164\x5f\146\157\162\155\x5f\x66\151\145\x6c\144\x73", [$this, "\145\151\157\163\x69\x6f\167\x75\151\167\x6d\155\155\x79\161\141"], 10, 2); skwuueyuqkueasuu: } gyeqsyqiosmysiio: gwyguuaqscsukaqg: goto wwyukkoeeeiiuewk; sesqsywwesiycmmq: if (!$this->somkqoqeimmeemuq()) { goto ggwkueqyesouyaya; } $this->qcsmikeggeemccuu("\x73\x61\x76\x65\x5f\x70\157\x73\x74", [$this, "\161\x6b\171\x71\167\x73\167\155\163\157\151\147\x6b\x75\x6f\151"]); ggwkueqyesouyaya: $this->qcsmikeggeemccuu("\x61\144\144\137\x6d\x65\x74\141\137\x62\157\170\145\163", [$this, "\x6f\155\x61\155\145\x6f\171\x65\x61\x75\x73\x79\x75\x67\x6d\x77"]); wwyukkoeeeiiuewk: } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\160\157\x73\x74\x62\x6f\170\137\143\x6c\141\163\163\145\163\x5f{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\145\163\x67\153\171\x73\x71\x71\171\155\x6b\x67\x71\x77\x79\155"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!(!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto qmeskaiqawomuqmk; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\163\x79\145\151\x69\171\x71\163\x65\143\155\147\157\x79\x75"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); qmeskaiqawomuqmk: } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto eacqgkqmwkcsscec; } if ($aiowsaccomcoikus->qooeaookuemoqecm()) { goto kwmkusgsuoqoyses; } $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if ($eqgoocgaqwqcimie) { goto oscukosgcqaqwcmi; } $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); oscukosgcqaqwcmi: if (!$eqgoocgaqwqcimie) { goto myasecwmmmiemgik; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); myasecwmmmiemgik: kwmkusgsuoqoyses: eacqgkqmwkcsscec: qawqosgwykeguasw: } ycekisssayygosaw: echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\x70\x72\55\155\x65\x74\141\x62\157\170\x2d\143\x6f\156\164\x61\151\156\145\x72"; return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if (!($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce))) { goto eucysoaqoumycmso; } $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); eucysoaqoumycmso: } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if (!$this->iqoyuqgssusgimwa()) { goto uksgyweoymomgqos; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto ysswaukcymggikui; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); ieumcesgiqicqima: } kwagmsukmimymmmg: ysswaukcymggikui: uksgyweoymomgqos: } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if (!($moqewomugocaueis && $qcsieyqqegaoocks)) { goto wkqumiwieauokkcy; } $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if (!($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq))) { goto mgeiyeygqcoismqq; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto icegsqiumouewcqo; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if (!$aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { goto iugooscuiysaeqgs; } if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { goto wgiuiaqoekymkwwo; } if ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { goto csiokukquwmccgqc; } if (!$uwomkgseoiegeume) { goto sgaiaqoewagooqoo; } goto giqssgogumimqkeo; wgiuiaqoekymkwwo: $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); goto giqssgogumimqkeo; csiokukquwmccgqc: $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); goto giqssgogumimqkeo; sgaiaqoewagooqoo: $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); giqssgogumimqkeo: iugooscuiysaeqgs: icegsqiumouewcqo: kecgiacuyaumcewe: } ugsomcmgekqayoqc: mgeiyeygqcoismqq: wkqumiwieauokkcy: } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if (!$qgeeqyucwycemwmo) { goto wyioauuuyckygcaq; } if (is_array($qgeeqyucwycemwmo)) { goto wuugmygqgsmkgsmc; } if (is_string($qgeeqyucwycemwmo)) { goto wawwaqicwyyeamqu; } if (!is_bool($qgeeqyucwycemwmo)) { goto miqekiwaouwgqgui; } $wggkkaucmogcyego[] = $gcgsqcoqciockquc; miqekiwaouwgqgui: goto quccsmwoagiquqya; wawwaqicwyyeamqu: $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; quccsmwoagiquqya: goto wcuuwegqcysecoom; wuugmygqgsmkgsmc: $wggkkaucmogcyego += $qgeeqyucwycemwmo; wcuuwegqcysecoom: wyioauuuyckygcaq: kmemegqksaeuqcow: } yseysoymiwmicuoi: return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } }
