<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Wrapper\Post\Comment; use Pmpr\Common\Foundation\Wrapper\Post\Post; use Pmpr\Common\Foundation\Wrapper\Post\Term; class MetaBox extends Section { use ObjectTrait; const yoqikyuqqecmeomq = "\x6d\145\x74\x61\142\x6f\170\137\156\x6f\156\x63\145"; protected array $showOn = [Constants::COMMENT => false, Constants::gmmygyiecgmggaam => false, Constants::uouymeyqasaeckso => false]; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->template = "\155\x65\164\141\x62\157\x78"; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::cykkiqiuwkwokiay, true); $this->qqqycgoaysysgiqm(); } public function register() { if ($this->iyosuismequsewie(Constants::uouymeyqasaeckso)) { goto icausgkyooymuwqq; } if ($this->iyosuismequsewie(Constants::gmmygyiecgmggaam)) { goto ikgusckaomuoiggs; } if (!$this->iyosuismequsewie(Constants::COMMENT)) { goto oeoeeqeaokougsec; } if (!$this->somkqoqeimmeemuq()) { goto skwuueyuqkueasuu; } skwuueyuqkueasuu: oeoeeqeaokougsec: goto oykuimwkwcmuekci; ikgusckaomuoiggs: $seyqqsmuaiegkeeq = $this->oskgscssqkeuiqcw(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$this->somkqoqeimmeemuq()) { goto gyeqsyqiosmysiio; } $this->qcsmikeggeemccuu("\145\x64\151\x74\145\x64\x5f{$kesssewsiegssiya}", [$this, "\151\145\151\141\x6f\x73\171\x63\163\157\155\163\x61\171\x69\x77"])->qcsmikeggeemccuu("\143\x72\x65\x61\164\145\x64\137{$kesssewsiegssiya}", [$this, "\x69\145\151\x61\x6f\163\171\x63\163\157\x6d\x73\141\171\151\167"]); gyeqsyqiosmysiio: $this->qcsmikeggeemccuu("{$kesssewsiegssiya}\137\141\x64\144\x5f\146\x6f\162\155\x5f\146\151\x65\154\144\x73", [$this, "\x6d\147\x75\145\x69\x67\x67\171\161\141\151\155\141\153\143\163"])->qcsmikeggeemccuu("{$kesssewsiegssiya}\137\x65\x64\x69\164\x5f\146\157\162\155\137\146\151\x65\x6c\144\x73", [$this, "\x65\x69\157\163\151\157\167\165\x69\x77\x6d\155\155\171\x71\141"], 10, 2); ggwkueqyesouyaya: } wugmawaqkksguaoa: oykuimwkwcmuekci: goto gwyguuaqscsukaqg; icausgkyooymuwqq: if (!$this->somkqoqeimmeemuq()) { goto guyskocigecaisas; } $this->qcsmikeggeemccuu("\163\x61\166\x65\137\x70\x6f\163\x74", [$this, "\x71\153\x79\161\x77\163\167\x6d\x73\157\151\147\153\x75\x6f\x69"]); guyskocigecaisas: $this->qcsmikeggeemccuu("\x61\144\x64\x5f\x6d\145\164\x61\x5f\142\x6f\170\145\x73", [$this, "\x6f\x6d\141\155\x65\x6f\171\x65\x61\x75\163\x79\x75\147\155\167"]); gwyguuaqscsukaqg: } public function omameoyeausyugmw() { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->oequuauskyumwyau(Constants::gouqcwikiiygyasc); $this->cecaguuoecmccuse("\x70\x6f\163\x74\142\157\170\x5f\x63\154\x61\163\x73\145\163\x5f{$suaemuyiacqyugsm}\x5f{$this->mwikyscisascoeea()}", [$this, "\x65\163\x67\x6b\x79\x73\x71\161\x79\x6d\x6b\x67\x71\167\x79\155"]); $eogowigeyucaauig = $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig, false); if (!(!$eogowigeyucaauig || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eogowigeyucaauig))) { goto sesqsywwesiycmmq; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), Constants::cacismqswgaewkuu => $this->oskgscssqkeuiqcw(), Constants::osiogououyayqyck => $this->imkyoqyocosuqasu(Constants::osiogououyayqyck), Constants::wwgusigoaksqmwsm => [$this, "\x79\x73\171\145\x69\151\x79\x71\163\145\143\x6d\x67\x6f\x79\165"], Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); sesqsywwesiycmmq: } public function ysyeiiyqsecmgoyu($post) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk())[0]; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto myasecwmmmiemgik; } if ($aiowsaccomcoikus->qooeaookuemoqecm()) { goto oscukosgcqaqwcmi; } $eqgoocgaqwqcimie = $seumokooiykcomco->ygwimyogyaqgumam($aiowsaccomcoikus->mwikyscisascoeea(), $post, ''); if ($eqgoocgaqwqcimie) { goto ycekisssayygosaw; } $eqgoocgaqwqcimie = $seumokooiykcomco->igawqaomowicuayw($aiowsaccomcoikus->mwikyscisascoeea(), $post); ycekisssayygosaw: if (!$eqgoocgaqwqcimie) { goto qawqosgwykeguasw; } $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); qawqosgwykeguasw: oscukosgcqaqwcmi: myasecwmmmiemgik: qmeskaiqawomuqmk: } wwyukkoeeeiiuewk: echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi(); $this->render(true, [Constants::qescuiwgsyuikume => null]); } public function esgkysqqymkgqwym($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\160\x72\55\155\x65\164\141\142\x6f\x78\x2d\x63\157\x6e\x74\141\151\156\145\162"; return $cmkqisoeyioisqaw; } public function qkyqwswmsoigkuoi($gcqseksiskwueksc) { $aaikegqyiyeoygce = $this->oskgscssqkeuiqcw(); if (!($aaikegqyiyeoygce && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($gcqseksiskwueksc), $aaikegqyiyeoygce))) { goto kwmkusgsuoqoyses; } $this->yyoqqegssekeswwg($gcqseksiskwueksc, $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()); kwmkusgsuoqoyses: } public function eiosiowuiwmmmyqa($iwewcwusemqaiggk, $kesssewsiegssiya) { $this->mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk); } public function mgueiggyqaimakcs($kesssewsiegssiya, $iwewcwusemqaiggk = null) { if (!$this->iqoyuqgssusgimwa()) { goto ieumcesgiqicqima; } $this->mkksewyosgeumwsa($this->cwiuiiakukcsaakw(self::yoqikyuqqecmeomq)->mawcogsqogkauasq()->jyumyyugiwwiqomk(0)); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto kwagmsukmimymmmg; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qkauysqeioauswys($aiowsaccomcoikus, $iwewcwusemqaiggk); eucysoaqoumycmso: } eacqgkqmwkcsscec: kwagmsukmimymmmg: ieumcesgiqicqima: } public function ikimoeygsicwokui($qcwmmkiuqycwkkec) { $this->yyoqqegssekeswwg($qcwmmkiuqycwkkec, $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()); } public function ieiaosycsomsayiw($ucicuwcaawugkseg) { $this->yyoqqegssekeswwg($ucicuwcaawugkseg, $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()); } private function yyoqqegssekeswwg($moqewomugocaueis, $qcsieyqqegaoocks) { if (!($moqewomugocaueis && $qcsieyqqegaoocks)) { goto icegsqiumouewcqo; } $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(self::yoqikyuqqecmeomq); if (!($gwgqcsmomamyqsmy && $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, self::yoqikyuqqecmeomq))) { goto iugooscuiysaeqgs; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->uyaeumskacgcyskk(), $_POST); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && $aiowsaccomcoikus->agmmqsowmyywagcm() && $aiowsaccomcoikus->ayseokmqycoqaigc())) { goto sgaiaqoewagooqoo; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $uwomkgseoiegeume = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, ''); $msqkueqksqwmskak = $qcsieyqqegaoocks->igawqaomowicuayw($moqewomugocaueis, $aokagokqyuysuksm, false); if (!$aiowsaccomcoikus->validate($uwomkgseoiegeume, $msqkueqksqwmskak)) { goto csiokukquwmccgqc; } if ($uwomkgseoiegeume && !$msqkueqksqwmskak) { goto kecgiacuyaumcewe; } if ($uwomkgseoiegeume && $uwomkgseoiegeume != $msqkueqksqwmskak) { goto giqssgogumimqkeo; } if (!$uwomkgseoiegeume) { goto wgiuiaqoekymkwwo; } goto ugsomcmgekqayoqc; kecgiacuyaumcewe: $qcsieyqqegaoocks->giwmekimakcaawsq($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume, true); goto ugsomcmgekqayoqc; giqssgogumimqkeo: $qcsieyqqegaoocks->ksmqawcowkmegigw($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); goto ugsomcmgekqayoqc; wgiuiaqoekymkwwo: $qcsieyqqegaoocks->smqukgcyacswysqa($moqewomugocaueis, $aokagokqyuysuksm, $uwomkgseoiegeume); ugsomcmgekqayoqc: csiokukquwmccgqc: sgaiaqoewagooqoo: uksgyweoymomgqos: } ysswaukcymggikui: iugooscuiysaeqgs: icegsqiumouewcqo: } public function womysscuckiacoua($eogowigeyucaauig) : self { $this->igiywquyccyiaucw(Constants::ucmueuwwcmocgmig, $eogowigeyucaauig); return $this; } public function meskiqimkaimwksw() : MetaBox { $this->igiywquyccyiaucw(Constants::cykkiqiuwkwokiay, false); return $this; } private function somkqoqeimmeemuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::cykkiqiuwkwokiay); } private function iyosuismequsewie(string $wysiyucgsuiucegi) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->showOn, $wysiyucgsuiucegi, false)); } public function oskgscssqkeuiqcw() : array { $wggkkaucmogcyego = []; foreach ($this->showOn as $gcgsqcoqciockquc => $qgeeqyucwycemwmo) { if (!$qgeeqyucwycemwmo) { goto wuugmygqgsmkgsmc; } if (is_array($qgeeqyucwycemwmo)) { goto wawwaqicwyyeamqu; } if (is_string($qgeeqyucwycemwmo)) { goto kmemegqksaeuqcow; } if (!is_bool($qgeeqyucwycemwmo)) { goto yseysoymiwmicuoi; } $wggkkaucmogcyego[] = $gcgsqcoqciockquc; yseysoymiwmicuoi: goto miqekiwaouwgqgui; kmemegqksaeuqcow: $wggkkaucmogcyego[] = $qgeeqyucwycemwmo; miqekiwaouwgqgui: goto quccsmwoagiquqya; wawwaqicwyyeamqu: $wggkkaucmogcyego += $qgeeqyucwycemwmo; quccsmwoagiquqya: wuugmygqgsmkgsmc: wkqumiwieauokkcy: } mgeiyeygqcoismqq: return $wggkkaucmogcyego; } public function pknsqyeeymygoqqu($useksmwkuswkwcqg) : self { return $this->aaikegqyiyeoygce(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg); } public function auoaeeuwaqswggqg($kesssewsiegssiya) : self { return $this->aaikegqyiyeoygce(Constants::gmmygyiecgmggaam, $kesssewsiegssiya); } public function agqcocmiycoykaws() : self { return $this->aaikegqyiyeoygce(Constants::COMMENT, true); } public function qqqycgoaysysgiqm() : self { return $this->sucsaaaeiecgqcem(Constants::qayiiikwusguoask); } public function qewcwaikmqqqseem() : self { return $this->sucsaaaeiecgqcem(Constants::mcwaoqwywimcegca); } public function iicugouwccwgikag() : self { return $this->sucsaaaeiecgqcem(Constants::ycusscwsoggmuweq); } private function aaikegqyiyeoygce(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->showOn[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } private function sucsaaaeiecgqcem(string $mgkceomocowocqyo) : self { $this->igiywquyccyiaucw(Constants::osiogououyayqyck, $mgkceomocowocqyo); return $this; } }
