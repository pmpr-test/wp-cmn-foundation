<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b58eab716             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\154\x6f\141\x64\x5f\157\x6e\137\x66\x6f\x63\165\163"; const oaeocgcgwaoyyowi = "\x72\145\155\157\x74\145\137\x73\145\x6c\x65\143\x74"; const cauemowokyokswsw = "\x6c\x6f\x61\x64\x5f\x6f\x6e\x5f\x72\145\x6e\144\x65\x72"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\144\x61\x74\x61\55\x63\x6f\x6e\164\x65\x6e\x74" => $ewgwqamkygiqaawc]; return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if ($giqggecqqikcysgq) { $this->gmywsauuqwcmakuc("\155\141\170\55\157\x70\x74\151\x6f\x6e\x73", (string) $giqggecqqikcysgq); } if ($gaeqamemwmwsyukm) { $this->gmywsauuqwcmakuc("\x73\x65\x6c\x65\x63\164\145\144\x2d\164\145\x78\x74\55\x66\157\x72\155\141\164", "\x63\157\165\156\x74\x20\76\40{$gaeqamemwmwsyukm}"); } $this->qcgocuceocquqcuw("\x6d\x75\x6c\164\151\160\x6c\x65", "\x6d\x75\x6c\x74\x69\160\154\x65"); return $this->igiywquyccyiaucw("\x6d\x75\x6c\164\151\x70\x6c\145", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\x75\x6c\164\151\x70\154\x65", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\163\164\141\x74\x69\x63\x5f\x69\155\x61\147\x65"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if ($oammesyieqmwuwyi) { if (!is_array($oammesyieqmwuwyi)) { $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; } $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); } return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if (!$ukqisiguweqciuei) { $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\143\x6f\x6c\157\x72\x5f\x64\162\157\x70\144\x6f\x77\156\137\x69\164\145\x6d\x73", []); } $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); } $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\x25\163" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\45\163"), ["\x63\x6c\141\x73\163" => "\144\x2d\x66\154\x65\170"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; } else { $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; } $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\x73\163" => "\x69\x63\157\156\x2d\163\155\40\155\x72\x2d\61"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\x69\x6d\x67"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw))) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); break; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); break; } if ($qiouiwasaauyaaue) { $this->acauweqyyugwisqc($qiouiwasaauyaaue); } } $this->gmywsauuqwcmakuc("\x6c\x69\x76\145\x2d\x73\x65\x61\162\x63\150", "\x74\162\x75\145"); if ($this->zosqeeykkcqmmkqs()) { $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\133\135"); } if (!$this->msmiagueogcsucgc()) { $iwiewowoqmoekyqi = __("\x43\x68\x6f\x6f\x73\x65\x20\141\156\40\x6f\x70\x74\151\x6f\x6e\x2e\56\x2e", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\x65\x73\145\x6c\145\143\164\x2d\141\154\154\55\x74\145\170\164", __("\104\145\163\x65\154\145\x63\164", PR__CMN__FOUNDATION)); if (!$this->zosqeeykkcqmmkqs()) { $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
