<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Page; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Edit extends ObjectAware { use ObjectTrait; const ymyqskcmicuoqeuo = "\x6f\162\155\55\x66\151\145\x6c\x64\x73\x2d\x73\164\x6f\162\145"; const coyaigiwumwkscuc = "\157\162\x6d\55\x66\151\145\154\144\163\55\x65\162\x72\157\x72\163"; protected $message = false; protected bool $editing = false; protected array $store = []; protected array $errors = []; public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $this->amsuqecgqokqqaue(); if (!$this->mwikyscisascoeea()) { goto mieoguuqiwqioeqa; } $this->editing = true; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\x64\151\164\x5f\x69\x74\x65\155", $this->mwikyscisascoeea())) { goto gscyiqmmegqmqcoe; } wp_die(__("\x53\x6f\162\x72\171\54\x20\171\157\x75\x20\x61\162\145\40\156\x6f\164\40\x61\x6c\x6c\157\167\145\x64\40\164\x6f\40\145\x64\x69\x74\40\164\150\151\163\x20\x69\164\x65\155\56", PR__CMN__FOUNDATION)); gscyiqmmegqmqcoe: mieoguuqiwqioeqa: } public function oguuceugyqgsqewy() : ?bool { return $this->editing; } public function render() { parent::render(); if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto gqaqamewqeaqwcia; } $qksucogmsqmawmwi = null; if ($this->oguuceugyqgsqewy()) { goto gcqssckowmywoesw; } $meqocwsecsywiiqs = $this->mmqossqsksemasay("\141\144\144\x5f\x6e\145\x77\x5f\x69\164\145\155"); goto eekkcooqswqouoei; gcqssckowmywoesw: $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\x64\x69\164\137\151\x74\145\x6d"); $qksucogmsqmawmwi = $meywaqqsugaoeyys->acsiseaeysswwqkw(); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto kocaieyauyiqmyiy; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto maguoggkqamaiuag; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $this->mwikyscisascoeea()); goto icoiqskygugkgmkm; maguoggkqamaiuag: $meywaqqsugaoeyys->iqieagiumucuwmyq($this->mwikyscisascoeea()); icoiqskygugkgmkm: swicauyqusmgeccu: } qosswumywsaeyqus: kocaieyauyiqmyiy: eekkcooqswqouoei: $ikgwqyuyckaewsow = $this->ywoasuyoaicwqqsu(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::NAME => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::ckmqoekmugkggeym => $this->imgymusqgccqsqqq(), Constants::soquiwyuimckgiow => $this->yoqiwysegascakim(), Constants::eoskkkieowogacws => $this->sagusgigmkeysock(), Constants::myikkigscysoykgy => $this->woqqsmayegamygec(), "\141\144\144\x5f\165\162\154" => $qksucogmsqmawmwi, "\141\144\x64\x5f\165\162\154\x5f\164\151\x74\x6c\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x61\x64\144\137\156\x65\x77\x5f\x69\164\x65\155")]; if (is_string($ikgwqyuyckaewsow)) { goto ewsigoeswimiueqe; } if (!$ikgwqyuyckaewsow instanceof Page) { goto eussqkkimciywios; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->iewooiycygmskige($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $ikgwqyuyckaewsow->gswweykyogmsyawy($meqocwsecsywiiqs)->render(false); $cmoicaakukmggosk = $this->oguuceugyqgsqewy() ? Constants::awysmmukegasimmq : Constants::ukwaycqmyyuekwqg; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy($cmoicaakukmggosk); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto igmawmwssyskqqag; } echo $eaoumsseceiowgsk; goto iomwkkieqcswkkaw; igmawmwssyskqqag: $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo($cmoicaakukmggosk, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); iomwkkieqcswkkaw: eussqkkimciywios: goto gaskcgoeywuyukke; ewsigoeswimiueqe: $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::awysmmukegasimmq); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto cuayqmasemsqsume; } $qqscaoyqikuyeoaw = Constants::awysmmukegasimmq; cuayqmasemsqsume: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::awysmmukegasimmq, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); gaskcgoeywuyukke: gqaqamewqeaqwcia: } public function amsuqecgqokqqaue() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->store = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::ymyqskcmicuoqeuo, [], true); $this->errors = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::coyaigiwumwkscuc, [], true); if (!isset($_POST["\x6f\162\x6d\55\x73\141\x76\145"])) { goto ymucaguacemwsgsi; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymwisceuuaiccayq("\157\x72\155\x2d\x6e\x6f\156\x63\x65"); if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) { goto ociesuicgmkekcue; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, "\x6f\x72\x6d\x2d\x73\141\166\145"); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $icwicymcioeyeyek = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($meywaqqsugaoeyys->ugmceccgwaaaigiy(), $icwicymcioeyeyek)[1]; if (!($aokagokqyuysuksm = (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg($ceiwsaacewygcsqg))) { goto okuqsqaiwwiigmyu; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $aokagokqyuysuksm; okuqsqaiwwiigmyu: $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto sayqggaieocmskko; } $kigowwqauiumummw = false; if ($aokagokqyuysuksm) { goto omuemegmkesqgwys; } $wamcomkuwysqgwgk = __("\x25\163\x20\x63\x6f\x75\x6c\144\x20\x6e\x6f\164\40\142\x65\x20\141\144\x64\145\x64\x2e", PR__CMN__FOUNDATION); goto geyiosucqswaeasw; omuemegmkesqgwys: $wamcomkuwysqgwgk = __("\45\x73\x20\x63\157\x75\154\x64\x20\x6e\x6f\x74\40\x62\x65\40\x75\x70\x64\141\x74\x65\144\x2e", PR__CMN__FOUNDATION); geyiosucqswaeasw: $this->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\162\x6d\x2d\156\x6f\164\151\x63\x65"); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::ymyqskcmicuoqeuo, $yyauwyaeewsickwk->wegeuqkaeuusoike(array_filter($icwicymcioeyeyek))); if (!($ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []))) { goto gmeiuoeewucukque; } foreach ($ueeagokqmgisgauy as $aiowsaccomcoikus => $iswcokucwmiosiaq) { if (!(is_numeric($aiowsaccomcoikus) || !$meywaqqsugaoeyys->uqeoyqiwywwmsiew($aiowsaccomcoikus))) { goto ccgsycueagwegqeu; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\x6f\x72\x6d\x2d\x6e\157\x74\x69\x63\145"); unset($ueeagokqmgisgauy[$aiowsaccomcoikus]); ccgsycueagwegqeu: qmqmskywcgiqgygm: } cmsiuimsiycomyay: $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::coyaigiwumwkscuc, $yyauwyaeewsickwk->wegeuqkaeuusoike($ueeagokqmgisgauy)); gmeiuoeewucukque: goto qmguoqeawegcoeoa; sayqggaieocmskko: $kigowwqauiumummw = true; if ($aokagokqyuysuksm) { goto ksiwgckusukisueg; } $wamcomkuwysqgwgk = __("\45\163\40\x61\x64\x64\145\x64\40\163\165\x63\x63\x65\163\163\x66\165\154\x6c\x79\56", PR__CMN__FOUNDATION); goto sgkqgucguyccaaki; ksiwgckusukisueg: $wamcomkuwysqgwgk = __("\x25\x73\40\x75\160\144\141\x74\x65\x64\x20\x73\x75\143\x63\145\x73\163\x66\165\x6c\x6c\171\56", PR__CMN__FOUNDATION); sgkqgucguyccaaki: $meywaqqsugaoeyys->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\x6d\x2d\x6e\x6f\x74\151\x63\145", Constants::ckcawaoawwioqecq); qmguoqeawegcoeoa: if ($kigowwqauiumummw) { goto omumkeywqqogwwue; } if ($aokagokqyuysuksm) { goto ycecaauekkiqacuu; } $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw(); goto ceaamccscgcmqgka; ycecaauekkiqacuu: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); ceaamccscgcmqgka: goto igyesgemqesackws; omumkeywqqogwwue: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis(); igyesgemqesackws: if ($igscmsiuisqaqwkk) { goto wiaymoucakyaikii; } $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(); wiaymoucakyaikii: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; ociesuicgmkekcue: wp_die(__("\x53\x6f\162\162\171\54\40\171\157\x75\x20\141\x72\145\40\x6e\x6f\x74\x20\141\154\154\157\167\x65\144\x20\x74\x6f\x20\145\x64\x69\164\x20\151\x74\145\x6d\x73\40\x6f\x66\x20\x74\x68\x69\163\x20\164\x79\x70\145\x2e", PR__CMN__FOUNDATION)); ymucaguacemwsgsi: } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto uoewiggumomegksg; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy(); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = $this->iowogwyuueusqsig($aiowsaccomcoikus); gaouaiemokqqgssw: } qiikwossequwiuom: if (!$ikgwqyuyckaewsow) { goto ywokggauuiosegog; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!($iuekmkswcsacoawq = Page::symcgieuakksimmu($meywaqqsugaoeyys->cokoiaeeomgssqgy()))) { goto yqqseqskcqeqkacm; } $iuekmkswcsacoawq->ewweaossowcqywaw($ikgwqyuyckaewsow); $iuekmkswcsacoawq->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::icwieiwoqeocywss)->mawcogsqogkauasq("\x6f\x72\155\55\x6e\157\x6e\x63\145", $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc())); $myyqiummwqiokocc = __("\x41\x64\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto wqwmuuicoqigqwyc; } $myyqiummwqiokocc = __("\125\x70\x64\141\164\145", PR__CMN__FOUNDATION); wqwmuuicoqigqwyc: $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\162\155\55\163\141\x76\x65")->gswweykyogmsyawy($myyqiummwqiokocc)->ooqqgmyocscgmyae()->gmscmskmuissgywk()); if (!$this->oguuceugyqgsqewy()) { goto qywkykqkeeuccoui; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig)); if (!$iwywmkygwewiamwm) { goto oqgymyiwckkwueuw; } $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\x72\x6d\x2d\x64\145\x6c\145\164\x65")->muywawimuacwmkgw()->gswweykyogmsyawy(__("\x44\x65\x6c\x65\x74\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x73\165\142\155\151\164\144\145\x6c\145\164\x65\x20\160\x72\x2d\143\x6f\156\x66\x69\x72\x6d\x61\142\154\x65\55\141\143\x74\151\157\x6e")->eskgwaywimqcwcyy("\143\157\156\146\x69\x67", $meywaqqsugaoeyys->ymaommgoigkakyes($iwywmkygwewiamwm))); oqgymyiwckkwueuw: qywkykqkeeuccoui: $nsmgceoqaqogqmuw = $iuekmkswcsacoawq; yqqseqskcqeqkacm: ywokggauuiosegog: uoewiggumomegksg: return $nsmgceoqaqogqmuw; } public function iowogwyuueusqsig($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto kuuawiosmkgqsscy; } if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto saiuoomgskwgyeya; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($this->oguuceugyqgsqewy()) { goto syisomgawcsqeemk; } $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\155\x61\156\141\x67\145\137\141\144\x64\137\x66\151\145\154\144\x5f\163\150\157\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus); goto asoecuscmsyusmkg; syisomgawcsqeemk: $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x6d\x61\x6e\141\147\145\137\145\x64\151\x74\x5f\146\x69\145\x6c\x64\137\x73\150\157\167", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); asoecuscmsyusmkg: if (!$wkkcmkuiigsukyik) { goto cimascmiesomqgqs; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($this->oguuceugyqgsqewy()) { goto gyskcwykkyakeims; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($this->store, $aiowsaccomcoikus->mwikyscisascoeea()); goto ossakckwskyqusmm; gyskcwykkyakeims: $cuaeskmgicgemmqs = $aiowsaccomcoikus->imkyoqyocosuqasu(Constants::cecmeqwgqawkeieq, $aokagokqyuysuksm); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($cuaeskmgicgemmqs); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($mksyucucyswaukig, $cuaeskmgicgemmqs); if (!($ekiuyucoiagmscgy = $aiowsaccomcoikus->ekkwaykokcgqkmoi(Constants::cecmeqwgqawkeieq))) { goto kwasqmcyiswoaiuu; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); kwasqmcyiswoaiuu: if ($aiowsaccomcoikus instanceof Checkbox) { goto ecgwgamiseokmise; } if ($aaqqkgyougeiueyq instanceof Foreign) { goto maggecymmmesqmqs; } if (!$aaqqkgyougeiueyq instanceof Enum) { goto emeeocqaisksyioq; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); emeeocqaisksyioq: goto csaksaisgawusswg; maggecymmmesqmqs: if ($aiowsaccomcoikus instanceof Collection) { goto aqekkeqmmewoyawu; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto miugmimciywcgswm; } $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); if ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto kkmuuoscccmokkiw; } $eqgoocgaqwqcimie = $kooyscwkscsogysg->keeuqgyooycqoygw($icwicymcioeyeyek); goto awuwuuuagqysukku; kkmuuoscccmokkiw: $eqgoocgaqwqcimie = []; foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $eqgoocgaqwqcimie[] = $kooyscwkscsogysg->keeuqgyooycqoygw($igqsaukqcqscimok); oaqeoqsksuyyggmg: } kiskwawumeiiieuk: awuwuuuagqysukku: miugmimciywcgswm: goto mcqwuawosciucemq; aqekkeqmmewoyawu: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); $aiowsaccomcoikus->mkksewyosgeumwsa($this->cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy())); mcqwuawosciucemq: csaksaisgawusswg: goto qkiyyywwuiuackao; ecgwgamiseokmise: $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, ["\61", Constants::ON], true); qkiyyywwuiuackao: $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\141\x6e\141\x67\x65\137\145\144\151\x74\x5f\146\x69\145\x6c\x64\137\166\x61\x6c\165\x65", $eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\141\x6e\141\x67\145\137\x65\x64\151\x74\137\x66\151\145\x6c\144\x5f{$aokagokqyuysuksm}\137\x76\141\154\165\x65", $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig); ossakckwskyqusmm: if (!$this->errors) { goto aamgqoqyyooimqkm; } $iswcokucwmiosiaq = $gkyciwoiiisgywcs->unset($this->errors, $aokagokqyuysuksm); if (!$iswcokucwmiosiaq) { goto mcagemacuqyskogs; } $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq); mcagemacuqyskogs: aamgqoqyyooimqkm: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto easuiqiooiwgswmm; cimascmiesomqgqs: $aiowsaccomcoikus->wywmmeyauqkeskeq(false); easuiqiooiwgswmm: saiuoomgskwgyeya: goto kwocaqggwcksesce; kuuawiosmkgqsscy: $okcscwesammossuq = $aiowsaccomcoikus->ugmceccgwaaaigiy(); foreach ($okcscwesammossuq as $uusmaiomayssaecw => $wcgsoqmmciswkmiq) { $okcscwesammossuq[$uusmaiomayssaecw] = $this->iowogwyuueusqsig($wcgsoqmmciswkmiq); ugkwqaywmwqucoeo: } sockocsycmkaeosg: $aiowsaccomcoikus->acakyumkgoeiskqq($okcscwesammossuq); kwocaqggwcksesce: return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\x6d\141\156\x61\147\x65\137\x66\x6f\x72\155\x5f\146\151\x65\154\x64", $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); } public function woqqsmayegamygec() : string { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto aucwccaiqwsmyuaq; } $myyqiummwqiokocc = __("\x41\x64\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto momuweiasiwskekw; } $myyqiummwqiokocc = __("\125\x70\144\141\164\x65", PR__CMN__FOUNDATION); momuweiasiwskekw: $kqokimuosyuyyucg = 0; $cwoayyawiauoeokk = ''; $mksyucucyswaukig = $this->imgymusqgccqsqqq(); if (!is_object($mksyucucyswaukig)) { goto qaewauyekqucciyc; } $kqokimuosyuyyucg = $meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig); qaewauyekqucciyc: if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) { goto bgakaasgwwygosyi; } $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm); bgakaasgwwygosyi: $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\141\143\x74\x69\x6f\x6e\163", ["\144\145\x6c\x65\x74\x69\157\156" => $cwoayyawiauoeokk, "\x73\165\142\155\151\164\x5f\x6c\x61\142\x65\154" => $this->ocksiywmkyaqseou("{$ymqmyyeuycgmigyo}\x5f\x73\143\x72\145\145\156\137\163\165\142\x6d\x69\x74\x5f\x6c\141\142\x65\154", $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy()), "\150\157\x6f\153\137\160\162\145\146\151\x78" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\x73\x63\162\145\x65\156\137\x73\x75\142\x6d\x69\164\x5f\155\x65\x74\141\x5f\x62\x6f\x78")]); aucwccaiqwsmyuaq: return $nsmgceoqaqogqmuw; } public function sagusgigmkeysock() { return $this->message; } }
