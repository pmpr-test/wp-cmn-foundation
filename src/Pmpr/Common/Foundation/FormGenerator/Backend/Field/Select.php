<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791545e8b23b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\x6c\157\x61\x64\137\157\x6e\137\x66\x6f\143\165\x73"; const oaeocgcgwaoyyowi = "\162\145\x6d\x6f\164\145\137\x73\145\x6c\145\143\x74"; const cauemowokyokswsw = "\x6c\157\141\x64\x5f\157\x6e\137\162\145\156\144\x65\162"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\144\x61\x74\141\x2d\143\157\x6e\x74\x65\x6e\164" => $ewgwqamkygiqaawc]; return $this; } public function kegqkaysmmqquysc(array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->quoywwosoycywesm($uusmaiomayssaecw, $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? '', $omkysikckkcieckq[Constants::ssmskyqgcmeiayco] ?? ''); } return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if ($giqggecqqikcysgq) { $this->gmywsauuqwcmakuc("\155\x61\x78\x2d\x6f\160\x74\151\x6f\x6e\x73", (string) $giqggecqqikcysgq); } if ($gaeqamemwmwsyukm) { $this->gmywsauuqwcmakuc("\163\145\154\145\x63\164\145\144\x2d\164\145\170\164\x2d\146\157\162\155\141\164", "\x63\x6f\165\156\x74\x20\x3e\40{$gaeqamemwmwsyukm}"); } $this->qcgocuceocquqcuw("\155\165\x6c\164\x69\x70\x6c\145", "\x6d\165\x6c\x74\x69\x70\154\145"); return $this->igiywquyccyiaucw("\155\x75\154\164\x69\160\154\x65", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\x75\154\164\x69\x70\154\145", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\163\x74\x61\164\151\143\x5f\151\x6d\141\x67\x65"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if ($oammesyieqmwuwyi) { if (!is_array($oammesyieqmwuwyi)) { $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; } $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); } return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if (!$ukqisiguweqciuei) { $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x63\157\x6c\157\x72\x5f\x64\x72\x6f\x70\144\x6f\167\x6e\x5f\x69\164\145\x6d\x73", []); } $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); } $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); } $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\45\163" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\x25\x73"), ["\x63\x6c\x61\163\163" => "\x64\55\146\x6c\x65\x78"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; } else { $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; } $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\163\x73" => "\x69\143\157\156\55\163\155\x20\155\x72\x2d\x31"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\151\155\x67"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw))) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); break; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); break; } if ($qiouiwasaauyaaue) { $this->acauweqyyugwisqc($qiouiwasaauyaaue); } } $this->gmywsauuqwcmakuc("\154\x69\x76\145\x2d\x73\145\x61\162\143\x68", "\x74\x72\165\145"); if ($this->zosqeeykkcqmmkqs()) { $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\133\135"); } if (!$this->msmiagueogcsucgc()) { $iwiewowoqmoekyqi = __("\x43\x68\157\157\x73\x65\40\x61\156\40\157\x70\x74\151\157\156\56\56\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\145\x73\x65\x6c\145\143\164\55\x61\x6c\x6c\55\x74\x65\x78\164", __("\x44\x65\163\145\154\x65\143\x74", PR__CMN__FOUNDATION)); if (!$this->zosqeeykkcqmmkqs()) { $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
