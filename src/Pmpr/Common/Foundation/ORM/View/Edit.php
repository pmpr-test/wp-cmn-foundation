<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Page; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Edit extends ObjectAware { use ObjectTrait; const ymyqskcmicuoqeuo = "\157\162\155\55\146\x69\x65\x6c\144\x73\55\163\164\157\x72\x65"; const coyaigiwumwkscuc = "\157\162\x6d\55\146\151\145\x6c\144\x73\55\x65\162\x72\x6f\x72\163"; protected $message = false; protected bool $editing = false; protected array $store = []; protected array $errors = []; public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $this->amsuqecgqokqqaue(); if (!$this->mwikyscisascoeea()) { goto mqacqosyicuiqwia; } $this->editing = true; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\144\151\164\137\151\164\145\155", $this->mwikyscisascoeea())) { goto guummoewucyeuiek; } wp_die(__("\123\157\162\162\x79\54\x20\171\157\165\40\x61\x72\145\x20\x6e\157\164\40\x61\x6c\x6c\x6f\167\145\144\40\164\157\40\x65\144\151\x74\40\164\150\151\163\40\x69\164\x65\155\56", PR__CMN__FOUNDATION)); guummoewucyeuiek: mqacqosyicuiqwia: } public function oguuceugyqgsqewy() : ?bool { return $this->editing; } public function render() { parent::render(); if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto cwmuqmoeauqcewoy; } $qksucogmsqmawmwi = null; if ($this->oguuceugyqgsqewy()) { goto soqkewsayowwcmco; } $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\x64\144\x5f\x6e\145\x77\137\x69\164\145\155"); goto ukigmkeewuqomooc; soqkewsayowwcmco: $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\x64\151\164\137\151\164\x65\155"); $qksucogmsqmawmwi = $meywaqqsugaoeyys->acsiseaeysswwqkw(); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto ugyawwukegyoqmsq; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto ieoeeyieoskuyiyw; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $this->mwikyscisascoeea()); goto ciiyqsiswkcwsocm; ieoeeyieoskuyiyw: $meywaqqsugaoeyys->iqieagiumucuwmyq($this->mwikyscisascoeea()); ciiyqsiswkcwsocm: kwowggaooiyqawyq: } mcuoyseuwoueyaie: ugyawwukegyoqmsq: ukigmkeewuqomooc: $ikgwqyuyckaewsow = $this->ywoasuyoaicwqqsu(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::NAME => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::ckmqoekmugkggeym => $this->imgymusqgccqsqqq(), Constants::soquiwyuimckgiow => $this->yoqiwysegascakim(), Constants::eoskkkieowogacws => $this->sagusgigmkeysock(), Constants::myikkigscysoykgy => $this->woqqsmayegamygec(), "\141\x64\x64\137\x75\x72\x6c" => $qksucogmsqmawmwi, "\x61\144\x64\x5f\x75\x72\154\137\x74\x69\164\154\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\141\144\144\x5f\x6e\145\x77\x5f\x69\x74\x65\x6d")]; if (is_string($ikgwqyuyckaewsow)) { goto qoaawmmcqyacokws; } if (!$ikgwqyuyckaewsow instanceof Page) { goto ykcmomsiayaymysm; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->iewooiycygmskige($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $ikgwqyuyckaewsow->gswweykyogmsyawy($meqocwsecsywiiqs)->render(false); $cmoicaakukmggosk = $this->oguuceugyqgsqewy() ? Constants::awysmmukegasimmq : Constants::ukwaycqmyyuekwqg; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy($cmoicaakukmggosk); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto seyygcwcaogkmaqe; } echo $eaoumsseceiowgsk; goto uugiuqkesegaamqw; seyygcwcaogkmaqe: $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo($cmoicaakukmggosk, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); uugiuqkesegaamqw: ykcmomsiayaymysm: goto uwyeycaywowwiquu; qoaawmmcqyacokws: $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::awysmmukegasimmq); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto wwgikwuigiiqsswq; } $qqscaoyqikuyeoaw = Constants::awysmmukegasimmq; wwgikwuigiiqsswq: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::awysmmukegasimmq, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); uwyeycaywowwiquu: cwmuqmoeauqcewoy: } public function amsuqecgqokqqaue() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->store = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::ymyqskcmicuoqeuo, [], true); $this->errors = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::coyaigiwumwkscuc, [], true); if (!isset($_POST["\x6f\x72\x6d\55\163\141\x76\145"])) { goto maguoggkqamaiuag; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymwisceuuaiccayq("\x6f\x72\155\x2d\x6e\157\156\x63\145"); if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) { goto swicauyqusmgeccu; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, "\x6f\x72\155\x2d\x73\x61\166\x65"); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $icwicymcioeyeyek = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($meywaqqsugaoeyys->ugmceccgwaaaigiy(), $icwicymcioeyeyek)[1]; if (!($aokagokqyuysuksm = (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg($ceiwsaacewygcsqg))) { goto eiecgqokmuekaesc; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $aokagokqyuysuksm; eiecgqokmuekaesc: $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto kkckyqmcyussauma; } $kigowwqauiumummw = false; if ($aokagokqyuysuksm) { goto kcwgiwimgqesukqu; } $wamcomkuwysqgwgk = __("\45\163\x20\x63\157\x75\154\x64\40\x6e\x6f\164\40\x62\x65\40\141\144\x64\x65\x64\56", PR__CMN__FOUNDATION); goto wicuauokauykwoeu; kcwgiwimgqesukqu: $wamcomkuwysqgwgk = __("\45\x73\x20\x63\x6f\165\154\x64\40\x6e\x6f\x74\40\x62\145\x20\x75\x70\x64\x61\164\x65\x64\x2e", PR__CMN__FOUNDATION); wicuauokauykwoeu: $this->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\162\155\x2d\156\157\164\151\x63\x65"); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::ymyqskcmicuoqeuo, $yyauwyaeewsickwk->wegeuqkaeuusoike(array_filter($icwicymcioeyeyek))); if (!($ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []))) { goto gqeoaceyoiicoaec; } foreach ($ueeagokqmgisgauy as $aiowsaccomcoikus => $iswcokucwmiosiaq) { if (!(is_numeric($aiowsaccomcoikus) || !$meywaqqsugaoeyys->uqeoyqiwywwmsiew($aiowsaccomcoikus))) { goto oksqsucimimsswcg; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\x6f\x72\155\x2d\x6e\157\164\151\x63\x65"); unset($ueeagokqmgisgauy[$aiowsaccomcoikus]); oksqsucimimsswcg: msmmiaumiasmsiog: } gcecieuocqawmgci: $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::coyaigiwumwkscuc, $yyauwyaeewsickwk->wegeuqkaeuusoike($ueeagokqmgisgauy)); gqeoaceyoiicoaec: goto ikukqooiowqywyqo; kkckyqmcyussauma: $kigowwqauiumummw = true; if ($aokagokqyuysuksm) { goto ggsugekocmsukuci; } $wamcomkuwysqgwgk = __("\x25\x73\x20\141\144\x64\x65\144\x20\163\165\143\143\145\163\x73\146\165\154\154\171\x2e", PR__CMN__FOUNDATION); goto ceosmkqgqgwsowwg; ggsugekocmsukuci: $wamcomkuwysqgwgk = __("\x25\163\40\x75\x70\x64\x61\164\x65\x64\40\x73\x75\143\143\x65\x73\163\146\x75\x6c\x6c\171\x2e", PR__CMN__FOUNDATION); ceosmkqgqgwsowwg: $meywaqqsugaoeyys->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\155\x2d\x6e\x6f\164\151\143\145", Constants::ckcawaoawwioqecq); ikukqooiowqywyqo: if ($kigowwqauiumummw) { goto gscyiqmmegqmqcoe; } if ($aokagokqyuysuksm) { goto cciakcwuweqmcose; } $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw(); goto uckusgwkoycmkeam; cciakcwuweqmcose: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); uckusgwkoycmkeam: goto mieoguuqiwqioeqa; gscyiqmmegqmqcoe: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis(); mieoguuqiwqioeqa: if ($igscmsiuisqaqwkk) { goto qosswumywsaeyqus; } $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(); qosswumywsaeyqus: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; swicauyqusmgeccu: wp_die(__("\x53\157\x72\162\171\54\x20\x79\x6f\x75\40\141\x72\x65\x20\156\157\x74\x20\x61\x6c\x6c\x6f\167\145\x64\40\x74\157\x20\145\x64\x69\x74\x20\x69\x74\x65\x6d\163\x20\x6f\146\x20\x74\150\x69\x73\x20\x74\x79\160\x65\x2e", PR__CMN__FOUNDATION)); maguoggkqamaiuag: } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto eussqkkimciywios; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy(); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = $this->iowogwyuueusqsig($aiowsaccomcoikus); kocaieyauyiqmyiy: } icoiqskygugkgmkm: if (!$ikgwqyuyckaewsow) { goto iomwkkieqcswkkaw; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!($iuekmkswcsacoawq = Page::symcgieuakksimmu($meywaqqsugaoeyys->cokoiaeeomgssqgy()))) { goto igmawmwssyskqqag; } $iuekmkswcsacoawq->ewweaossowcqywaw($ikgwqyuyckaewsow); $iuekmkswcsacoawq->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::icwieiwoqeocywss)->mawcogsqogkauasq("\157\x72\x6d\55\156\x6f\156\143\x65", $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc())); $myyqiummwqiokocc = __("\101\144\144", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto gcqssckowmywoesw; } $myyqiummwqiokocc = __("\x55\160\x64\x61\164\145", PR__CMN__FOUNDATION); gcqssckowmywoesw: $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\162\155\x2d\163\141\166\145")->gswweykyogmsyawy($myyqiummwqiokocc)->ooqqgmyocscgmyae()->gmscmskmuissgywk()); if (!$this->oguuceugyqgsqewy()) { goto cuayqmasemsqsume; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig)); if (!$iwywmkygwewiamwm) { goto eekkcooqswqouoei; } $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\x72\155\x2d\x64\145\x6c\145\164\145")->muywawimuacwmkgw()->gswweykyogmsyawy(__("\x44\145\154\145\164\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x73\165\x62\x6d\151\x74\144\145\x6c\x65\x74\145\x20\160\x72\x2d\143\157\156\146\x69\x72\155\x61\x62\154\145\x2d\x61\143\164\x69\157\156")->eskgwaywimqcwcyy("\143\x6f\156\146\151\147", $meywaqqsugaoeyys->ymaommgoigkakyes($iwywmkygwewiamwm))); eekkcooqswqouoei: cuayqmasemsqsume: $nsmgceoqaqogqmuw = $iuekmkswcsacoawq; igmawmwssyskqqag: iomwkkieqcswkkaw: eussqkkimciywios: return $nsmgceoqaqogqmuw; } public function iowogwyuueusqsig($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto oqgymyiwckkwueuw; } if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto wqwmuuicoqigqwyc; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($this->oguuceugyqgsqewy()) { goto gqaqamewqeaqwcia; } $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\155\141\156\x61\x67\x65\137\x61\144\x64\x5f\146\x69\145\x6c\144\137\x73\x68\157\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus); goto okuqsqaiwwiigmyu; gqaqamewqeaqwcia: $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\x6d\x61\156\x61\147\x65\137\145\144\151\x74\137\146\x69\x65\x6c\x64\137\163\x68\x6f\167", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); okuqsqaiwwiigmyu: if (!$wkkcmkuiigsukyik) { goto qiikwossequwiuom; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($this->oguuceugyqgsqewy()) { goto igyesgemqesackws; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($this->store, $aiowsaccomcoikus->mwikyscisascoeea()); goto wiaymoucakyaikii; igyesgemqesackws: $cuaeskmgicgemmqs = $aiowsaccomcoikus->imkyoqyocosuqasu(Constants::cecmeqwgqawkeieq, $aokagokqyuysuksm); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($cuaeskmgicgemmqs); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($mksyucucyswaukig, $cuaeskmgicgemmqs); if (!($ekiuyucoiagmscgy = $aiowsaccomcoikus->ekkwaykokcgqkmoi(Constants::cecmeqwgqawkeieq))) { goto ksiwgckusukisueg; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); ksiwgckusukisueg: if ($aiowsaccomcoikus instanceof Checkbox) { goto ceaamccscgcmqgka; } if ($aaqqkgyougeiueyq instanceof Foreign) { goto qmguoqeawegcoeoa; } if (!$aaqqkgyougeiueyq instanceof Enum) { goto sayqggaieocmskko; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); sayqggaieocmskko: goto ycecaauekkiqacuu; qmguoqeawegcoeoa: if ($aiowsaccomcoikus instanceof Collection) { goto ccgsycueagwegqeu; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto qmqmskywcgiqgygm; } $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); if ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto geyiosucqswaeasw; } $eqgoocgaqwqcimie = $kooyscwkscsogysg->keeuqgyooycqoygw($icwicymcioeyeyek); goto cmsiuimsiycomyay; geyiosucqswaeasw: $eqgoocgaqwqcimie = []; foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $eqgoocgaqwqcimie[] = $kooyscwkscsogysg->keeuqgyooycqoygw($igqsaukqcqscimok); omuemegmkesqgwys: } sgkqgucguyccaaki: cmsiuimsiycomyay: qmqmskywcgiqgygm: goto gmeiuoeewucukque; ccgsycueagwegqeu: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); $aiowsaccomcoikus->mkksewyosgeumwsa($this->cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy())); gmeiuoeewucukque: ycecaauekkiqacuu: goto omumkeywqqogwwue; ceaamccscgcmqgka: $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, ["\x31", Constants::ON], true); omumkeywqqogwwue: $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\156\x61\147\x65\137\145\144\151\x74\x5f\146\x69\145\x6c\144\137\166\141\x6c\x75\x65", $eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\x6e\x61\147\145\137\x65\144\x69\x74\x5f\x66\x69\x65\x6c\x64\x5f{$aokagokqyuysuksm}\x5f\166\141\x6c\x75\145", $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig); wiaymoucakyaikii: if (!$this->errors) { goto ymucaguacemwsgsi; } $iswcokucwmiosiaq = $gkyciwoiiisgywcs->unset($this->errors, $aokagokqyuysuksm); if (!$iswcokucwmiosiaq) { goto ociesuicgmkekcue; } $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq); ociesuicgmkekcue: ymucaguacemwsgsi: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto gaouaiemokqqgssw; qiikwossequwiuom: $aiowsaccomcoikus->wywmmeyauqkeskeq(false); gaouaiemokqqgssw: wqwmuuicoqigqwyc: goto qywkykqkeeuccoui; oqgymyiwckkwueuw: $okcscwesammossuq = $aiowsaccomcoikus->ugmceccgwaaaigiy(); foreach ($okcscwesammossuq as $uusmaiomayssaecw => $wcgsoqmmciswkmiq) { $okcscwesammossuq[$uusmaiomayssaecw] = $this->iowogwyuueusqsig($wcgsoqmmciswkmiq); gaskcgoeywuyukke: } ewsigoeswimiueqe: $aiowsaccomcoikus->acakyumkgoeiskqq($okcscwesammossuq); qywkykqkeeuccoui: return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x6d\141\156\141\x67\145\x5f\146\157\x72\x6d\137\146\x69\x65\154\x64", $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); } public function woqqsmayegamygec() : string { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto sockocsycmkaeosg; } $myyqiummwqiokocc = __("\101\144\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto yqqseqskcqeqkacm; } $myyqiummwqiokocc = __("\125\x70\x64\141\164\x65", PR__CMN__FOUNDATION); yqqseqskcqeqkacm: $kqokimuosyuyyucg = 0; $cwoayyawiauoeokk = ''; $mksyucucyswaukig = $this->imgymusqgccqsqqq(); if (!is_object($mksyucucyswaukig)) { goto ywokggauuiosegog; } $kqokimuosyuyyucg = $meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig); ywokggauuiosegog: if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) { goto uoewiggumomegksg; } $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm); uoewiggumomegksg: $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x61\143\x74\x69\157\156\x73", ["\144\x65\x6c\x65\x74\x69\x6f\x6e" => $cwoayyawiauoeokk, "\x73\x75\142\x6d\x69\164\137\x6c\141\x62\145\x6c" => $this->ocksiywmkyaqseou("{$ymqmyyeuycgmigyo}\137\x73\143\162\145\x65\x6e\x5f\x73\165\142\x6d\151\x74\x5f\154\x61\142\145\154", $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy()), "\x68\x6f\157\x6b\137\160\162\x65\x66\x69\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\163\143\x72\x65\x65\156\137\x73\165\x62\x6d\151\164\137\155\x65\164\141\x5f\142\x6f\170")]); sockocsycmkaeosg: return $nsmgceoqaqogqmuw; } public function sagusgigmkeysock() { return $this->message; } }
