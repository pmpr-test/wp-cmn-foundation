<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e3816e1675             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Post; use WP_Term; abstract class MultistepAware extends Container { const oksogsuoasasycco = "\163\x74\x65\160\57"; const ogsyiwwsayusakmi = "\160\141\x67\x65\x5f\163\164\x65\160\x73"; const uqeymieioywwaeyk = "\x71\x75\x69\143\153\137\164\145\155\x70\154\141\164\x65"; const goisggmigoaueeko = "\x6e\145\x78\164\x5f\163\x74\145\160\x5f\142\x75\x74\x74\x6f\x6e"; protected ?string $name = null; protected array $steps = []; protected ?Multistep $form = null; protected ?int $objectID = null; protected ?string $objectType = null; protected ?Page $page = null; public function __construct(int $moqewomugocaueis = 0, string $mqyaskyaekmkegmg = '') { $this->objectID = $moqewomugocaueis; $this->objectType = $mqyaskyaekmkegmg; parent::__construct(); } public function kyqakacqeumicgag() : ?Page { return $this->page; } public function swqsasqieqqgusew(?Page $suaemuyiacqyugsm) : self { $this->page = $suaemuyiacqyugsm; return $this; } public function aakmagwggmkoiiyu() : ?string { if (empty($this->name) && ($suaemuyiacqyugsm = $this->kyqakacqeumicgag())) { $this->name = $suaemuyiacqyugsm->aqcogscycyycgkuq(); } return $this->name; } public function aaamyckgicycisqq() : ?string { if ($this->kyqakacqeumicgag() instanceof Page) { return Constants::imywcsggckkcywgk; } return $this->objectType; } public function mwyqswsaeeewsosm() : ?int { if ($suaemuyiacqyugsm = $this->kyqakacqeumicgag()) { return $suaemuyiacqyugsm->iooowgsqoyqseyuu(); } return $this->objectID; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\151\x6e\151\164"])->qcsmikeggeemccuu("\167\160", [$this, "\x65\153\147\x65\x65\143\x6f\x61\143\x77\x6d\163\x75\143\x69\145"]); if ($asuggasaseaacmqu = $this->oqcaaiewkewqgoww()) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($asuggasaseaacmqu as $iaakskwmyqceoscy => $wyeyeaaekyoyimqu) { $iaakskwmyqceoscy = str_replace(self::oksogsuoasasycco, '', $iaakskwmyqceoscy); $ekiuyucoiagmscgy = $yyauwyaeewsickwk->qoqowykumameucwa($iaakskwmyqceoscy . "\137\x73\151\144\x65\142\x61\162"); if ($ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($this, $ekiuyucoiagmscgy)) { $this->cecaguuoecmccuse("\x6d\x75\154\164\151\163\164\145\x70\137{$iaakskwmyqceoscy}\x5f\143\x6f\x6e\164\x65\156\164", [$this, $ekiuyucoiagmscgy], 10, 2); } } } parent::wigskegsqequoeks(); } public function yyoqecggyacaseko() : ?Multistep { if (!$this->form) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5); } $eaoumsseceiowgsk = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->igeqoimogscsigco($ymqmyyeuycgmigyo); $eaoumsseceiowgsk->iiqoooqcakkaeyiw(); $eaoumsseceiowgsk->qigsyyqgewgskemg("{$ymqmyyeuycgmigyo}\55\155\x75\x6c\164\151\x73\x74\145\x70"); $this->form = $eaoumsseceiowgsk; } return $this->form; } public function imgymusqgccqsqqq() { $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = $this->aaamyckgicycisqq(); $mksyucucyswaukig = null; if ($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $mksyucucyswaukig = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($aokagokqyuysuksm); } else { if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $mksyucucyswaukig = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($aokagokqyuysuksm); } } return $mksyucucyswaukig; } public function gamumgqaeyigogma() : bool { $kiicsyeqweiekmgc = false; if ($moqewomugocaueis = $this->mwyqswsaeeewsosm()) { $sqeykgyoooqysmca = $this->aaamyckgicycisqq(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku) === Constants::awysmmukegasimmq && (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) === $moqewomugocaueis) { $kiicsyeqweiekmgc = true; } else { if ($eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::uqgcmmosieyimiku) === "\145\x64\x69\x74\x70\x6f\x73\x74" && (int) $eiicaiwgqkgsekce->ayueggmoqeeukqmq("\160\157\x73\164\137\x49\x44") === $moqewomugocaueis) { $kiicsyeqweiekmgc = true; } } } else { if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { } } } return $kiicsyeqweiekmgc; } public function wgqcuigwqaeakogi() : bool { $weksiguqgqscsoee = false; $sqeykgyoooqysmca = $this->aaamyckgicycisqq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { if ($mumyimcwkaemyyue->cukiusasccucgwqc($sqeykgyoooqysmca)) { $weksiguqgqscsoee = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu() === $this->mwyqswsaeeewsosm(); } } else { if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo() && $sqeykgyoooqysmca === Constants::qgciomgukmcwscqw || $mumyimcwkaemyyue->ocwoeosukggumggw() && $sqeykgyoooqysmca === Constants::ocsomysosuqaimuc || $mumyimcwkaemyyue->qmssqeyayicowkgy($sqeykgyoooqysmca)) { $weksiguqgqscsoee = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu() === $this->mwyqswsaeeewsosm(); } } } return $weksiguqgqscsoee; } public function init() { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm->agwomuykuuimiqyk() && ($ykquycoiqesuckco = $suaemuyiacqyugsm->kmuweyayaqoeqiyw())) { if ($ykquycoiqesuckco->qcsgmgoukiouuscw() && ($ikgwqyuyckaewsow = $this->mssmoaokqqimwuus())) { $ykquycoiqesuckco->ogimmkwaymekmoky($ykquycoiqesuckco->mkcwgaeaaweamyyg("\155\x75\x6c\164\151\x73\x74\145\160")->gswweykyogmsyawy(__("\x4d\x75\x6c\x74\151\163\x74\x65\160", PR__CMN__FOUNDATION))->gucwmccyimoagwcm(__("\103\x6f\x6e\146\151\147\165\162\145\40\123\x74\145\x70\163", PR__CMN__FOUNDATION))->saemoowcasogykak(IconInterface::cgyiiemmuiasummk)->kwkugmqouisgkqig($ykquycoiqesuckco->ycgeeoiieoiakgam("\x73\x74\145\160\x73")->gswweykyogmsyawy(__("\x53\x74\x65\160\163", PR__CMN__FOUNDATION))->saemoowcasogykak(IconInterface::ookgeugsiyyesuae)->ewweaossowcqywaw($ikgwqyuyckaewsow))); } } else { if ($this->gamumgqaeyigogma()) { $ikgwqyuyckaewsow = $this->mssmoaokqqimwuus(); $qkweikswegyciaie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->scyscgskcwukckyy(self::ogsyiwwsayusakmi)->gswweykyogmsyawy(__("\x4d\165\154\164\151\x73\164\145\160\40\123\x74\145\x70\x73", PR__CMN__FOUNDATION))->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->ewweaossowcqywaw($ikgwqyuyckaewsow)->iicugouwccwgikag(); $sqeykgyoooqysmca = $this->aaamyckgicycisqq(); if ($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $qkweikswegyciaie->pknsqyeeymygoqqu($sqeykgyoooqysmca); } else { if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $qkweikswegyciaie->auoaeeuwaqswggqg($sqeykgyoooqysmca); } } $qkweikswegyciaie->register(); } } } public function mssmoaokqqimwuus() : array { $ikgwqyuyckaewsow = []; $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $asuggasaseaacmqu = array_values($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->oqcaaiewkewqgoww(), Constants::kekcgssiyagioocg)); $ywsikmeyuckyymkm = $uuyucgkyusckoaeq->yqgagqgesqyuyuqq(Constants::okuwysqsegmimaie); $ywsikmeyuckyymkm->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\142\x2d\60"); $gkuawugqgemcmmse = $uuyucgkyusckoaeq->qqmgmgasauucoago(self::ogsyiwwsayusakmi)->gswweykyogmsyawy(__("\x53\x74\145\x70", PR__CMN__FOUNDATION))->ygscsskuwuuqgace(__("\x53\x74\x65\x70", PR__CMN__FOUNDATION))->omsoosuoikgueyke()->uaqkwowwaokueikg()->qcummmaiqyumsuwo()->mkksewyosgeumwsa($ywsikmeyuckyymkm->oguessuismosauuu(function ($aiowsaccomcoikus) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->oockkqiqsssakuug([Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::qescuiwgsyuikume => $aiowsaccomcoikus->qooeaookuemoqecm()[Constants::qescuiwgsyuikume] ?? '', Constants::ssmskyqgcmeiayco => $aiowsaccomcoikus->qooeaookuemoqecm()[Constants::eqkeooqcsscoggia] ?? '']); }))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\124\151\164\x6c\145", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->qsecygiycssgacqs(3)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x44\145\x73\143\162\x69\x70\x74\151\157\x6e", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\157\x6e", PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::goisggmigoaueeko)->gswweykyogmsyawy(__("\x4e\145\x78\x74\40\123\x74\x65\160\40\102\165\x74\164\157\x6e\40\x54\151\164\154\145", PR__CMN__FOUNDATION))->eyygsasuqmommkua(__("\x4e\145\170\164\x20\123\x74\x65\x70", PR__CMN__FOUNDATION))->mkmssscwmeekwgqo())->ewweaossowcqywaw($this->xsmcweqgsweciymu()); $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm->agwomuykuuimiqyk() && ($ykquycoiqesuckco = $suaemuyiacqyugsm->kmuweyayaqoeqiyw())) { $eqgoocgaqwqcimie = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::ogsyiwwsayusakmi, []); $gkuawugqgemcmmse->eyygsasuqmommkua($asuggasaseaacmqu); if ($eqgoocgaqwqcimie && is_array($eqgoocgaqwqcimie) && count($asuggasaseaacmqu) !== count($eqgoocgaqwqcimie)) { foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { if (!isset($eqgoocgaqwqcimie[$momcykaoccoymeig])) { $eqgoocgaqwqcimie[$momcykaoccoymeig] = $wyeyeaaekyoyimqu; } } $gkuawugqgemcmmse->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } $ikgwqyuyckaewsow[] = $gkuawugqgemcmmse; return $ikgwqyuyckaewsow; } public function xsmcweqgsweciymu() : array { return []; } public function ekgeecoacwmsucie() { if ($this->wgqcuigwqaeakogi()) { $asuggasaseaacmqu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->oqcaaiewkewqgoww(), Constants::kekcgssiyagioocg); if ($asuggasaseaacmqu) { $qoqkuuycmuymgkkq = []; if (($suaemuyiacqyugsm = $this->kyqakacqeumicgag()) !== null && ($ykquycoiqesuckco = $suaemuyiacqyugsm->kmuweyayaqoeqiyw())) { $qoqkuuycmuymgkkq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(self::ogsyiwwsayusakmi, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); } else { $aokagokqyuysuksm = $this->mwyqswsaeeewsosm(); $sqeykgyoooqysmca = $this->aaamyckgicycisqq(); if ($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $qoqkuuycmuymgkkq = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::ogsyiwwsayusakmi, $aokagokqyuysuksm); } else { if ($this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee()->myagqecycsaiyqsk($sqeykgyoooqysmca)) { $qoqkuuycmuymgkkq = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($aokagokqyuysuksm, self::ogsyiwwsayusakmi); } } } $qoqkuuycmuymgkkq = array_values($qoqkuuycmuymgkkq); $momcykaoccoymeig = 0; foreach ($asuggasaseaacmqu as $qqscaoyqikuyeoaw => $wyeyeaaekyoyimqu) { $wyeyeaaekyoyimqu[Constants::qescuiwgsyuikume] = $wyeyeaaekyoyimqu[Constants::okuwysqsegmimaie][Constants::qescuiwgsyuikume] ?? ''; $wyeyeaaekyoyimqu[Constants::uwceyikaaaqgkkee] = $qqscaoyqikuyeoaw; $wyeyeaaekyoyimqu = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($qoqkuuycmuymgkkq[$momcykaoccoymeig] ?? [], $wyeyeaaekyoyimqu); $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); $momcykaoccoymeig++; } $this->enqueue(); } } } public function yqqscekqmcgwkiao() : string { $nsmgceoqaqogqmuw = ''; $this->esoeigiuggwycwiq(); $eaoumsseceiowgsk = $this->yyoqecggyacaseko(); if ($eaoumsseceiowgsk && $eaoumsseceiowgsk->wmoeeiseqeecugmu()) { $nsmgceoqaqogqmuw = $eaoumsseceiowgsk->render(); } return $nsmgceoqaqogqmuw; } public function icyiuusgqsmawqcy() { echo $this->yqqscekqmcgwkiao(); } public function wmoeeiseqeecugmu() : bool { return !empty($this->guiyusikssumecwk()); } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[] = $wyeyeaaekyoyimqu; return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function esoeigiuggwycwiq() { if ($asuggasaseaacmqu = $this->guiyusikssumecwk()) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($asuggasaseaacmqu as $momcykaoccoymeig => $wyeyeaaekyoyimqu) { $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($wyeyeaaekyoyimqu, [Constants::qescuiwgsyuikume, Constants::qgqyauaqwqmqseim, Constants::eqkeooqcsscoggia, Constants::uwceyikaaaqgkkee, self::goisggmigoaueeko]); [$meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $ukwokcuqauuosmoo, $qqscaoyqikuyeoaw, $mkemseqwyqgsgsek] = array_values($qqswgiawgeaeoecu); $oyoqqgcsgigcmqqu = $gusoaiguqeaommcc->yieymusoukkkmsww($yyauwyaeewsickwk->wiecmkiugmyyqiqc(self::oksogsuoasasycco, '', $qqscaoyqikuyeoaw)); $oyoqqgcsgigcmqqu->pwuigqciiuyoaccc($momcykaoccoymeig + 1); $qookweymeqawmcwo = $this->rsysgcucogueguuk($qqscaoyqikuyeoaw); $qookweymeqawmcwo[Constants::ckmqoekmugkggeym] = $this->imgymusqgccqsqqq(); $gkmekucqkkiisiyg = $this->wwgsgkyoskemiowm($qqscaoyqikuyeoaw); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ["\143\x6c\141\163\x73" => $gkmekucqkkiisiyg["\143\154\141\x73\163"] ?? '']); $oyoqqgcsgigcmqqu->saemoowcasogykak($wkaqekwwgqsqwcoi)->gswweykyogmsyawy($meqocwsecsywiiqs)->oguessuismosauuu($ewgwqamkygiqaawc)->gucwmccyimoagwcm($ukwokcuqauuosmoo); if ($mkemseqwyqgsgsek) { $oyoqqgcsgigcmqqu->gwwmcykumqueaosa($mkemseqwyqgsgsek); } $this->yyoqecggyacaseko()->mgqggiyywoageqmo($oyoqqgcsgigcmqqu); } } } public function ykqgmsyiwosmkmss(array $qookweymeqawmcwo = [], array $ikgwqyuyckaewsow = [], ?string $qqscaoyqikuyeoaw = null) : array { $nsmgceoqaqogqmuw = ''; $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\164\x50\x72\x69\x6f\x72\x69\x74\x79"); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); } } $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $nsmgceoqaqogqmuw; return $qookweymeqawmcwo; } public function wwocisaacaeaggak(string $aokagokqyuysuksm, ?string $uamcoiueqaamsqma, string $sqeykgyoooqysmca = Constants::ecioqysekgaasegg) : Field { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $eosogusikmqwywgs = $gusoaiguqeaommcc->oockkqiqsssakuug([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ssmskyqgcmeiayco => $uamcoiueqaamsqma]); return $gusoaiguqeaommcc->yqgagqgesqyuyuqq($aokagokqyuysuksm)->oguessuismosauuu($eosogusikmqwywgs); } public function enqueue() { if ($eaoumsseceiowgsk = $this->yyoqecggyacaseko()) { $eaoumsseceiowgsk->enqueue(); } } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { return []; } public final function wwgsgkyoskemiowm(string $wyeyeaaekyoyimqu) : array { $asuggasaseaacmqu = $this->oqcaaiewkewqgoww(); return $asuggasaseaacmqu[$wyeyeaaekyoyimqu] ?? []; } public abstract function oqcaaiewkewqgoww() : array; }
