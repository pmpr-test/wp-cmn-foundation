<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Page; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Edit extends ObjectAware { use ObjectTrait; const ymyqskcmicuoqeuo = "\157\x72\155\55\146\151\x65\154\144\x73\55\163\164\157\x72\145"; const coyaigiwumwkscuc = "\157\162\x6d\55\146\x69\145\x6c\144\x73\x2d\x65\x72\162\x6f\162\x73"; protected $message = false; protected bool $editing = false; protected array $store = []; protected array $errors = []; public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $this->amsuqecgqokqqaue(); if (!$this->mwikyscisascoeea()) { goto ykcmomsiayaymysm; } $this->editing = true; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\144\x69\164\137\x69\x74\145\155", $this->mwikyscisascoeea())) { goto uugiuqkesegaamqw; } wp_die(__("\123\x6f\162\x72\171\x2c\x20\171\157\165\40\141\162\x65\x20\x6e\157\x74\x20\x61\154\x6c\157\167\x65\144\40\x74\x6f\x20\145\144\x69\164\40\x74\150\151\163\x20\x69\x74\145\155\56", PR__CMN__FOUNDATION)); uugiuqkesegaamqw: ykcmomsiayaymysm: } public function oguuceugyqgsqewy() : ?bool { return $this->editing; } public function render() { parent::render(); if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ikukqooiowqywyqo; } $qksucogmsqmawmwi = null; if ($this->oguuceugyqgsqewy()) { goto ceosmkqgqgwsowwg; } $meqocwsecsywiiqs = $this->mmqossqsksemasay("\141\x64\144\x5f\x6e\145\x77\137\x69\x74\145\x6d"); goto kcwgiwimgqesukqu; ceosmkqgqgwsowwg: $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x65\144\151\x74\x5f\151\x74\x65\x6d"); $qksucogmsqmawmwi = $meywaqqsugaoeyys->acsiseaeysswwqkw(); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto ggsugekocmsukuci; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto cwmuqmoeauqcewoy; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $this->mwikyscisascoeea()); goto eiecgqokmuekaesc; cwmuqmoeauqcewoy: $meywaqqsugaoeyys->iqieagiumucuwmyq($this->mwikyscisascoeea()); eiecgqokmuekaesc: uwyeycaywowwiquu: } qoaawmmcqyacokws: ggsugekocmsukuci: kcwgiwimgqesukqu: $ikgwqyuyckaewsow = $this->ywoasuyoaicwqqsu(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::NAME => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::ckmqoekmugkggeym => $this->imgymusqgccqsqqq(), Constants::soquiwyuimckgiow => $this->yoqiwysegascakim(), Constants::eoskkkieowogacws => $this->sagusgigmkeysock(), Constants::myikkigscysoykgy => $this->woqqsmayegamygec(), "\x61\144\144\x5f\x75\162\154" => $qksucogmsqmawmwi, "\141\x64\144\137\165\x72\x6c\137\x74\x69\x74\x6c\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x61\144\x64\x5f\x6e\145\x77\x5f\151\x74\145\x6d")]; if (is_string($ikgwqyuyckaewsow)) { goto gqeoaceyoiicoaec; } if (!$ikgwqyuyckaewsow instanceof Page) { goto oksqsucimimsswcg; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->iewooiycygmskige($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $ikgwqyuyckaewsow->gswweykyogmsyawy($meqocwsecsywiiqs)->render(false); $cmoicaakukmggosk = $this->oguuceugyqgsqewy() ? Constants::awysmmukegasimmq : Constants::ukwaycqmyyuekwqg; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy($cmoicaakukmggosk); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto gcecieuocqawmgci; } echo $eaoumsseceiowgsk; goto msmmiaumiasmsiog; gcecieuocqawmgci: $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo($cmoicaakukmggosk, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); msmmiaumiasmsiog: oksqsucimimsswcg: goto kkckyqmcyussauma; gqeoaceyoiicoaec: $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::awysmmukegasimmq); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto wicuauokauykwoeu; } $qqscaoyqikuyeoaw = Constants::awysmmukegasimmq; wicuauokauykwoeu: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::awysmmukegasimmq, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); kkckyqmcyussauma: ikukqooiowqywyqo: } public function amsuqecgqokqqaue() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->store = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::ymyqskcmicuoqeuo, [], true); $this->errors = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::coyaigiwumwkscuc, [], true); if (!isset($_POST["\x6f\x72\x6d\55\163\141\x76\145"])) { goto gqaqamewqeaqwcia; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymwisceuuaiccayq("\157\x72\x6d\55\x6e\x6f\x6e\x63\x65"); if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) { goto gaskcgoeywuyukke; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, "\x6f\162\x6d\x2d\x73\141\166\145"); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $icwicymcioeyeyek = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($meywaqqsugaoeyys->ugmceccgwaaaigiy(), $icwicymcioeyeyek)[1]; if (!($aokagokqyuysuksm = (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg($ceiwsaacewygcsqg))) { goto cciakcwuweqmcose; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $aokagokqyuysuksm; cciakcwuweqmcose: $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto gcqssckowmywoesw; } $kigowwqauiumummw = false; if ($aokagokqyuysuksm) { goto mieoguuqiwqioeqa; } $wamcomkuwysqgwgk = __("\45\x73\40\x63\157\165\x6c\x64\40\156\x6f\164\40\142\145\40\x61\x64\144\145\144\56", PR__CMN__FOUNDATION); goto qosswumywsaeyqus; mieoguuqiwqioeqa: $wamcomkuwysqgwgk = __("\45\x73\x20\x63\x6f\x75\x6c\144\x20\x6e\x6f\x74\40\x62\x65\x20\x75\x70\x64\141\164\145\144\56", PR__CMN__FOUNDATION); qosswumywsaeyqus: $this->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\x6d\55\156\157\x74\x69\143\145"); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::ymyqskcmicuoqeuo, $yyauwyaeewsickwk->wegeuqkaeuusoike(array_filter($icwicymcioeyeyek))); if (!($ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []))) { goto kocaieyauyiqmyiy; } foreach ($ueeagokqmgisgauy as $aiowsaccomcoikus => $iswcokucwmiosiaq) { if (!(is_numeric($aiowsaccomcoikus) || !$meywaqqsugaoeyys->uqeoyqiwywwmsiew($aiowsaccomcoikus))) { goto icoiqskygugkgmkm; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\157\162\155\55\x6e\x6f\x74\151\x63\x65"); unset($ueeagokqmgisgauy[$aiowsaccomcoikus]); icoiqskygugkgmkm: maguoggkqamaiuag: } swicauyqusmgeccu: $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::coyaigiwumwkscuc, $yyauwyaeewsickwk->wegeuqkaeuusoike($ueeagokqmgisgauy)); kocaieyauyiqmyiy: goto eekkcooqswqouoei; gcqssckowmywoesw: $kigowwqauiumummw = true; if ($aokagokqyuysuksm) { goto uckusgwkoycmkeam; } $wamcomkuwysqgwgk = __("\x25\163\x20\141\144\144\145\144\40\163\x75\143\143\x65\x73\x73\146\x75\154\154\x79\56", PR__CMN__FOUNDATION); goto gscyiqmmegqmqcoe; uckusgwkoycmkeam: $wamcomkuwysqgwgk = __("\x25\163\40\165\x70\144\x61\x74\x65\x64\40\163\165\x63\x63\x65\163\163\146\x75\x6c\154\x79\x2e", PR__CMN__FOUNDATION); gscyiqmmegqmqcoe: $meywaqqsugaoeyys->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\x6d\x2d\x6e\157\x74\151\x63\x65", Constants::ckcawaoawwioqecq); eekkcooqswqouoei: if ($kigowwqauiumummw) { goto iomwkkieqcswkkaw; } if ($aokagokqyuysuksm) { goto cuayqmasemsqsume; } $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw(); goto igmawmwssyskqqag; cuayqmasemsqsume: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); igmawmwssyskqqag: goto eussqkkimciywios; iomwkkieqcswkkaw: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis(); eussqkkimciywios: if ($igscmsiuisqaqwkk) { goto ewsigoeswimiueqe; } $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(); ewsigoeswimiueqe: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; gaskcgoeywuyukke: wp_die(__("\x53\157\x72\162\x79\x2c\x20\171\157\165\x20\x61\162\x65\40\x6e\157\x74\40\141\154\154\x6f\x77\145\x64\40\164\x6f\40\x65\x64\151\x74\x20\151\x74\145\x6d\163\x20\x6f\x66\40\x74\x68\151\x73\40\164\171\x70\145\x2e", PR__CMN__FOUNDATION)); gqaqamewqeaqwcia: } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ccgsycueagwegqeu; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy(); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = $this->iowogwyuueusqsig($aiowsaccomcoikus); ksiwgckusukisueg: } okuqsqaiwwiigmyu: if (!$ikgwqyuyckaewsow) { goto qmqmskywcgiqgygm; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!($iuekmkswcsacoawq = Page::symcgieuakksimmu($meywaqqsugaoeyys->cokoiaeeomgssqgy()))) { goto cmsiuimsiycomyay; } $iuekmkswcsacoawq->ewweaossowcqywaw($ikgwqyuyckaewsow); $iuekmkswcsacoawq->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::icwieiwoqeocywss)->mawcogsqogkauasq("\x6f\x72\155\x2d\156\157\156\x63\x65", $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc())); $myyqiummwqiokocc = __("\101\144\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto sgkqgucguyccaaki; } $myyqiummwqiokocc = __("\125\160\x64\x61\164\x65", PR__CMN__FOUNDATION); sgkqgucguyccaaki: $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\162\x6d\55\163\x61\166\x65")->gswweykyogmsyawy($myyqiummwqiokocc)->ooqqgmyocscgmyae()->gmscmskmuissgywk()); if (!$this->oguuceugyqgsqewy()) { goto geyiosucqswaeasw; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig)); if (!$iwywmkygwewiamwm) { goto omuemegmkesqgwys; } $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\157\162\x6d\55\144\x65\x6c\145\164\x65")->muywawimuacwmkgw()->gswweykyogmsyawy(__("\x44\x65\154\x65\x74\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\163\165\x62\155\151\164\x64\x65\154\x65\164\x65\x20\x70\x72\55\143\157\x6e\146\x69\x72\x6d\141\142\154\x65\55\x61\x63\164\151\x6f\156")->eskgwaywimqcwcyy("\x63\x6f\156\146\x69\x67", $meywaqqsugaoeyys->ymaommgoigkakyes($iwywmkygwewiamwm))); omuemegmkesqgwys: geyiosucqswaeasw: $nsmgceoqaqogqmuw = $iuekmkswcsacoawq; cmsiuimsiycomyay: qmqmskywcgiqgygm: ccgsycueagwegqeu: return $nsmgceoqaqogqmuw; } public function iowogwyuueusqsig($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto oaqeoqsksuyyggmg; } if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kiskwawumeiiieuk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($this->oguuceugyqgsqewy()) { goto qmguoqeawegcoeoa; } $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x6d\141\x6e\x61\147\x65\x5f\x61\144\x64\137\146\151\145\154\x64\137\163\x68\157\167", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus); goto ycecaauekkiqacuu; qmguoqeawegcoeoa: $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\155\x61\156\141\147\x65\x5f\x65\x64\151\x74\x5f\x66\x69\x65\x6c\x64\x5f\x73\150\x6f\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); ycecaauekkiqacuu: if (!$wkkcmkuiigsukyik) { goto asoecuscmsyusmkg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($this->oguuceugyqgsqewy()) { goto uoewiggumomegksg; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($this->store, $aiowsaccomcoikus->mwikyscisascoeea()); goto sockocsycmkaeosg; uoewiggumomegksg: $cuaeskmgicgemmqs = $aiowsaccomcoikus->imkyoqyocosuqasu(Constants::cecmeqwgqawkeieq, $aokagokqyuysuksm); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($cuaeskmgicgemmqs); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($mksyucucyswaukig, $cuaeskmgicgemmqs); if (!($ekiuyucoiagmscgy = $aiowsaccomcoikus->ekkwaykokcgqkmoi(Constants::cecmeqwgqawkeieq))) { goto ceaamccscgcmqgka; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); ceaamccscgcmqgka: if ($aiowsaccomcoikus instanceof Checkbox) { goto yqqseqskcqeqkacm; } if ($aaqqkgyougeiueyq instanceof Foreign) { goto oqgymyiwckkwueuw; } if (!$aaqqkgyougeiueyq instanceof Enum) { goto wqwmuuicoqigqwyc; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); wqwmuuicoqigqwyc: goto qywkykqkeeuccoui; oqgymyiwckkwueuw: if ($aiowsaccomcoikus instanceof Collection) { goto qiikwossequwiuom; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto ymucaguacemwsgsi; } $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); if ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto wiaymoucakyaikii; } $eqgoocgaqwqcimie = $kooyscwkscsogysg->keeuqgyooycqoygw($icwicymcioeyeyek); goto ociesuicgmkekcue; wiaymoucakyaikii: $eqgoocgaqwqcimie = []; foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $eqgoocgaqwqcimie[] = $kooyscwkscsogysg->keeuqgyooycqoygw($igqsaukqcqscimok); igyesgemqesackws: } omumkeywqqogwwue: ociesuicgmkekcue: ymucaguacemwsgsi: goto gaouaiemokqqgssw; qiikwossequwiuom: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); $aiowsaccomcoikus->mkksewyosgeumwsa($this->cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy())); gaouaiemokqqgssw: qywkykqkeeuccoui: goto ywokggauuiosegog; yqqseqskcqeqkacm: $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, ["\x31", Constants::ON], true); ywokggauuiosegog: $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\155\x61\156\141\x67\145\x5f\145\144\151\x74\137\146\x69\x65\x6c\144\x5f\x76\141\x6c\165\x65", $eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\x61\156\x61\x67\145\x5f\x65\x64\151\164\x5f\146\x69\x65\154\144\x5f{$aokagokqyuysuksm}\137\166\x61\154\165\145", $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig); sockocsycmkaeosg: if (!$this->errors) { goto syisomgawcsqeemk; } $iswcokucwmiosiaq = $gkyciwoiiisgywcs->unset($this->errors, $aokagokqyuysuksm); if (!$iswcokucwmiosiaq) { goto ugkwqaywmwqucoeo; } $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq); ugkwqaywmwqucoeo: syisomgawcsqeemk: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto kwasqmcyiswoaiuu; asoecuscmsyusmkg: $aiowsaccomcoikus->wywmmeyauqkeskeq(false); kwasqmcyiswoaiuu: kiskwawumeiiieuk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: $okcscwesammossuq = $aiowsaccomcoikus->ugmceccgwaaaigiy(); foreach ($okcscwesammossuq as $uusmaiomayssaecw => $wcgsoqmmciswkmiq) { $okcscwesammossuq[$uusmaiomayssaecw] = $this->iowogwyuueusqsig($wcgsoqmmciswkmiq); sayqggaieocmskko: } gmeiuoeewucukque: $aiowsaccomcoikus->acakyumkgoeiskqq($okcscwesammossuq); kkmuuoscccmokkiw: return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x6d\141\156\141\x67\x65\x5f\146\x6f\x72\155\137\146\x69\x65\x6c\144", $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); } public function woqqsmayegamygec() : string { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto mcqwuawosciucemq; } $myyqiummwqiokocc = __("\101\x64\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto awuwuuuagqysukku; } $myyqiummwqiokocc = __("\125\x70\144\141\x74\145", PR__CMN__FOUNDATION); awuwuuuagqysukku: $kqokimuosyuyyucg = 0; $cwoayyawiauoeokk = ''; $mksyucucyswaukig = $this->imgymusqgccqsqqq(); if (!is_object($mksyucucyswaukig)) { goto miugmimciywcgswm; } $kqokimuosyuyyucg = $meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig); miugmimciywcgswm: if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) { goto aqekkeqmmewoyawu; } $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm); aqekkeqmmewoyawu: $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\141\143\164\151\157\x6e\163", ["\x64\x65\154\145\164\151\x6f\x6e" => $cwoayyawiauoeokk, "\163\x75\142\155\x69\x74\137\154\x61\142\145\x6c" => $this->ocksiywmkyaqseou("{$ymqmyyeuycgmigyo}\137\163\143\x72\145\145\x6e\137\163\165\x62\155\x69\x74\x5f\154\x61\142\145\154", $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy()), "\150\x6f\x6f\153\137\x70\162\145\146\x69\x78" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x73\143\x72\x65\145\156\137\x73\x75\142\155\151\164\x5f\x6d\x65\164\x61\137\142\157\x78")]); mcqwuawosciucemq: return $nsmgceoqaqogqmuw; } public function sagusgigmkeysock() { return $this->message; } }
