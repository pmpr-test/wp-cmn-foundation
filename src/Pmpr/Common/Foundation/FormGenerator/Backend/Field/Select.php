<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\x6c\x6f\141\x64\137\157\x6e\137\146\157\x63\x75\x73"; const oaeocgcgwaoyyowi = "\x72\145\155\x6f\x74\x65\x5f\x73\x65\x6c\x65\143\164"; const cauemowokyokswsw = "\x6c\157\141\144\137\157\x6e\x5f\x72\x65\156\x64\x65\162"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\144\x61\164\x61\55\143\x6f\x6e\164\x65\156\x74" => $ewgwqamkygiqaawc]; return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if (!$giqggecqqikcysgq) { goto ssoooeigmwugyycm; } $this->gmywsauuqwcmakuc("\155\141\x78\x2d\x6f\160\x74\151\x6f\156\x73", (string) $giqggecqqikcysgq); ssoooeigmwugyycm: if (!$gaeqamemwmwsyukm) { goto uyisqeuweamsqwgg; } $this->gmywsauuqwcmakuc("\x73\145\x6c\x65\143\164\145\144\x2d\x74\145\x78\x74\55\146\x6f\162\155\141\164", "\143\157\165\x6e\x74\40\x3e\x20{$gaeqamemwmwsyukm}"); uyisqeuweamsqwgg: $this->qcgocuceocquqcuw("\x6d\x75\154\x74\x69\x70\x6c\x65", "\x6d\x75\x6c\x74\151\160\x6c\x65"); return $this->igiywquyccyiaucw("\155\x75\154\x74\151\x70\x6c\145", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\x75\154\x74\x69\x70\154\x65", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\x73\164\x61\x74\x69\x63\137\151\x6d\x61\147\145"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if (!$oammesyieqmwuwyi) { goto aeywmsqkisycgqce; } if (is_array($oammesyieqmwuwyi)) { goto icasgckmuawkaksg; } $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; icasgckmuawkaksg: $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); aeywmsqkisycgqce: return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if ($ukqisiguweqciuei) { goto mawsaauyquacosus; } $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\143\x6f\x6c\x6f\x72\x5f\144\162\157\160\x64\x6f\167\x6e\137\151\x74\145\155\163", []); mawsaauyquacosus: $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); makqqsaegsesgquq: } cwkwkgkqasguwscg: $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!is_array($eqgoocgaqwqcimie)) { goto symwoekuwqcmowwo; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); symwoekuwqcmowwo: $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\45\163" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\45\163"), ["\x63\x6c\141\163\x73" => "\144\55\x66\x6c\145\x78"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { goto ikwamukqumiokwkk; } $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; goto uueyawewomkuiiwc; ikwamukqumiokwkk: $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; uueyawewomkuiiwc: $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\163\163" => "\151\x63\157\156\55\163\x6d\40\x6d\162\x2d\x31"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\151\155\147"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); koaeayomowaiywam: } emsuycioaeoeeeqo: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!(!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw)))) { goto syggoyqwycmmcuck; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); goto wqcquwuiqkqaoamo; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); goto wqcquwuiqkqaoamo; } csueasskicaaoaii: wqcquwuiqkqaoamo: if (!$qiouiwasaauyaaue) { goto yyousguikogqkecs; } $this->acauweqyyugwisqc($qiouiwasaauyaaue); yyousguikogqkecs: syggoyqwycmmcuck: $this->gmywsauuqwcmakuc("\154\x69\x76\145\x2d\x73\145\141\x72\x63\x68", "\164\x72\165\x65"); if (!$this->zosqeeykkcqmmkqs()) { goto owwwikwqsyakweeq; } $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\133\135"); owwwikwqsyakweeq: if ($this->msmiagueogcsucgc()) { goto eicuoesagiuykmos; } $iwiewowoqmoekyqi = __("\x43\x68\x6f\x6f\x73\145\40\x61\156\x20\157\160\164\151\157\156\x2e\56\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\145\x73\145\x6c\145\x63\164\x2d\x61\x6c\154\55\164\x65\x78\x74", __("\104\145\x73\145\x6c\x65\143\164", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto awmyoukmqymausgu; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; awmyoukmqymausgu: eicuoesagiuykmos: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
