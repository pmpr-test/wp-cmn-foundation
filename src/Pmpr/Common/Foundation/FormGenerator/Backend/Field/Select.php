<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\x6c\x6f\x61\144\137\157\156\137\x66\x6f\143\165\163"; const oaeocgcgwaoyyowi = "\x72\145\x6d\157\164\145\137\x73\145\154\145\x63\x74"; const cauemowokyokswsw = "\154\157\x61\144\x5f\157\156\x5f\x72\x65\156\x64\145\162"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\x64\x61\x74\x61\55\x63\157\x6e\164\x65\x6e\x74" => $ewgwqamkygiqaawc]; return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if (!$giqggecqqikcysgq) { goto ckscysysmayieagk; } $this->gmywsauuqwcmakuc("\155\141\x78\x2d\157\x70\x74\151\157\x6e\x73", (string) $giqggecqqikcysgq); ckscysysmayieagk: if (!$gaeqamemwmwsyukm) { goto aimaqcomigwccomu; } $this->gmywsauuqwcmakuc("\163\145\154\145\143\x74\145\x64\x2d\x74\x65\170\x74\x2d\x66\157\162\x6d\x61\x74", "\143\x6f\165\x6e\x74\x20\x3e\40{$gaeqamemwmwsyukm}"); aimaqcomigwccomu: $this->qcgocuceocquqcuw("\x6d\165\x6c\164\x69\x70\x6c\x65", "\155\165\x6c\x74\151\160\x6c\145"); return $this->igiywquyccyiaucw("\x6d\x75\x6c\x74\x69\160\154\145", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\165\x6c\x74\x69\x70\154\145", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\x73\164\x61\164\x69\x63\x5f\x69\x6d\x61\x67\145"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if (!$oammesyieqmwuwyi) { goto cgoqqicyaiwasqme; } if (is_array($oammesyieqmwuwyi)) { goto osawsyawkikquqya; } $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; osawsyawkikquqya: $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); cgoqqicyaiwasqme: return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if ($ukqisiguweqciuei) { goto ckagywkumgkaswyy; } $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x63\157\x6c\157\162\137\x64\162\x6f\x70\x64\157\x77\156\137\151\164\x65\x6d\163", []); ckagywkumgkaswyy: $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); yoeaiskyyqgqiwga: } oswgoyqaacoyqegu: $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!is_array($eqgoocgaqwqcimie)) { goto ioaeiakqkiuqymoq; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); ioaeiakqkiuqymoq: $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\45\x73" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\45\163"), ["\x63\x6c\141\163\x73" => "\144\x2d\x66\154\145\170"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { goto igewmkyikyaiamsq; } $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; goto guosgucaaeueacgu; igewmkyikyaiamsq: $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; guosgucaaeueacgu: $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\x73\163" => "\151\x63\x6f\156\55\163\x6d\40\x6d\162\x2d\x31"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\x69\155\147"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); aesgakksmyecsusi: } cssysqmcgcuwyyuu: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!(!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw)))) { goto cuqusekekewuseio; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); goto wowakayqsywcaogm; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); goto wowakayqsywcaogm; } ogwosuisocqykoma: wowakayqsywcaogm: if (!$qiouiwasaauyaaue) { goto rwaeioueucocosgu; } $this->acauweqyyugwisqc($qiouiwasaauyaaue); rwaeioueucocosgu: cuqusekekewuseio: $this->gmywsauuqwcmakuc("\154\x69\166\145\55\x73\x65\141\162\x63\x68", "\164\x72\x75\x65"); if (!$this->zosqeeykkcqmmkqs()) { goto qqowguycmsmuauyu; } $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\133\135"); qqowguycmsmuauyu: if ($this->msmiagueogcsucgc()) { goto xkgykmoskoqykakc; } $iwiewowoqmoekyqi = __("\103\150\157\x6f\x73\145\x20\x61\156\40\157\160\164\x69\157\156\56\56\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\145\163\x65\x6c\x65\x63\x74\55\141\x6c\154\55\164\145\x78\164", __("\x44\145\163\145\154\145\x63\x74", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto yseacqgykcseamce; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; yseacqgykcseamce: xkgykmoskoqykakc: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
