<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d47a28db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\154\x6f\x61\x64\x5f\157\x6e\137\146\157\x63\165\163"; const oaeocgcgwaoyyowi = "\x72\x65\x6d\157\x74\145\137\x73\145\154\x65\143\164"; const cauemowokyokswsw = "\154\x6f\x61\144\137\157\x6e\137\x72\145\156\x64\x65\162"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\x64\141\x74\141\x2d\143\x6f\x6e\x74\145\x6e\164" => $ewgwqamkygiqaawc]; return $this; } public function kegqkaysmmqquysc(array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->quoywwosoycywesm($uusmaiomayssaecw, $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? '', $omkysikckkcieckq[Constants::ssmskyqgcmeiayco] ?? ''); } return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if ($giqggecqqikcysgq) { $this->gmywsauuqwcmakuc("\155\141\170\55\157\x70\x74\151\157\x6e\163", (string) $giqggecqqikcysgq); } if ($gaeqamemwmwsyukm) { $this->gmywsauuqwcmakuc("\x73\x65\154\x65\143\x74\x65\x64\55\164\x65\170\x74\55\146\157\x72\155\141\x74", "\143\157\165\x6e\x74\40\76\x20{$gaeqamemwmwsyukm}"); } $this->qcgocuceocquqcuw("\155\165\154\164\x69\x70\154\x65", "\155\165\x6c\164\x69\x70\154\x65"); return $this->igiywquyccyiaucw("\x6d\x75\154\x74\151\160\154\145", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\x75\154\x74\151\x70\x6c\145", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\163\x74\141\164\x69\143\x5f\151\155\x61\x67\145"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if ($oammesyieqmwuwyi) { if (!is_array($oammesyieqmwuwyi)) { $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; } $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); } return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if (!$ukqisiguweqciuei) { $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\143\x6f\154\157\x72\x5f\144\x72\157\x70\x64\157\x77\x6e\137\x69\164\x65\x6d\163", []); } $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); } $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\x25\x73" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\45\163"), ["\143\x6c\141\163\163" => "\144\x2d\146\x6c\x65\170"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; } else { $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; } $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\163\163" => "\x69\143\x6f\x6e\x2d\x73\x6d\x20\x6d\x72\55\x31"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\151\x6d\147"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw))) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); break; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); break; } if ($qiouiwasaauyaaue) { $this->acauweqyyugwisqc($qiouiwasaauyaaue); } } $this->gmywsauuqwcmakuc("\154\151\166\145\x2d\163\x65\x61\162\x63\x68", "\164\x72\165\145"); if ($this->zosqeeykkcqmmkqs()) { $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\x5b\x5d"); } if (!$this->msmiagueogcsucgc()) { $iwiewowoqmoekyqi = __("\x43\x68\x6f\157\x73\x65\x20\x61\x6e\x20\x6f\x70\164\151\157\x6e\56\x2e\x2e", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\144\x65\x73\x65\x6c\145\143\x74\x2d\141\x6c\x6c\55\164\145\x78\164", __("\x44\145\x73\145\x6c\145\143\x74", PR__CMN__FOUNDATION)); if (!$this->zosqeeykkcqmmkqs()) { $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
