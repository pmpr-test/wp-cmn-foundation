<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\SelectTrait; class Select extends OptionAware { const mggwmoqiommgwcwy = "\x6c\x6f\x61\x64\137\x6f\156\x5f\x66\157\143\x75\x73"; const oaeocgcgwaoyyowi = "\x72\x65\155\157\x74\x65\x5f\163\x65\x6c\145\143\x74"; const cauemowokyokswsw = "\154\157\x61\x64\x5f\x6f\156\137\162\145\x6e\x64\x65\x72"; use SelectTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::SELECT); } public function ysysimiygkuwymca() : self { return $this->igiywquyccyiaucw(self::mggwmoqiommgwcwy, true); } public function yqoayqwisqmuomom(string $ccamueccusigaaio, $oammesyieqmwuwyi = [], array $gqgemcmoicmgaqie = []) : self { return $this->igiywquyccyiaucw(self::cauemowokyokswsw, [Constants::mgsccwumkcawaqcy => $ccamueccusigaaio, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::meieskyuuegwwcsy => $gqgemcmoicmgaqie]); } public function quoywwosoycywesm($uusmaiomayssaecw, string $pkyyagewkiyckmwy, string $ewgwqamkygiqaawc) : self { $this->options[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, "\144\x61\164\141\x2d\143\x6f\156\x74\x65\x6e\x74" => $ewgwqamkygiqaawc]; return $this; } public function oiwakqeuemsksykq(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $qiouiwasaauyaaue = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qeiauywscugcaqkq => true, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $qiouiwasaauyaaue]); } public function agwqskymakoaauis(string $uusmaiomayssaecw, string $meqocwsecsywiiqs, array $okcscwesammossuq = []) : self { return $this->kesomeowemmyygey($uusmaiomayssaecw, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::aeweusomuikewuis => $okcscwesammossuq]); } public function oikgogcweiiaocka(int $giqggecqqikcysgq = 0, int $gaeqamemwmwsyukm = 1) : self { if (!$giqggecqqikcysgq) { goto aagewueuesckuqke; } $this->gmywsauuqwcmakuc("\x6d\141\x78\x2d\157\x70\x74\x69\x6f\156\x73", (string) $giqggecqqikcysgq); aagewueuesckuqke: if (!$gaeqamemwmwsyukm) { goto mkauomqacwwmyigy; } $this->gmywsauuqwcmakuc("\x73\145\x6c\145\x63\164\145\x64\x2d\x74\145\x78\x74\55\146\157\162\x6d\141\164", "\143\x6f\165\x6e\x74\x20\x3e\x20{$gaeqamemwmwsyukm}"); mkauomqacwwmyigy: $this->qcgocuceocquqcuw("\155\165\154\164\151\x70\x6c\145", "\x6d\165\x6c\164\x69\160\154\x65"); return $this->igiywquyccyiaucw("\x6d\x75\x6c\x74\x69\160\x6c\145", true); } public function zosqeeykkcqmmkqs() : bool { return $this->imkyoqyocosuqasu("\x6d\x75\x6c\164\x69\x70\x6c\145", false); } public function umokgsqqogccoouo($oeucsuyqysaciasy = []) : self { return $this->mgaaqwqisicewwaa(Constants::meksegaoamowuwoq, $oeucsuyqysaciasy); } public function ukqywcsoogkyoaoa($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::mswoacegomcucaik, $useksmwkuswkwcqg); } public function ikimooaieasgmeak($kesssewsiegssiya = []) : self { return $this->mgaaqwqisicewwaa(Constants::yoayaissyomokiui, $kesssewsiegssiya); } public function mmwqwkuqkqccuqye($oouysqigwayiqgkk = []) : self { return $this->mgaaqwqisicewwaa(Constants::qgqyauaqwqmqseim, $oouysqigwayiqgkk); } public function yywmgmseeoamauce() : self { return $this->mgaaqwqisicewwaa(Constants::akoscweoqiuiiooo); } public function ugicmkwcuywcwceg() : self { return $this->mgaaqwqisicewwaa(Constants::memoaagcmqqowsoy); } public function goswmyssgkyegago($useksmwkuswkwcqg = []) : self { return $this->mgaaqwqisicewwaa(Constants::COMMENT, $useksmwkuswkwcqg); } public function ugquamoakekwyiqg($koucimuqgwamoycq = []) : self { return $this->mgaaqwqisicewwaa(Constants::emkkgysokckswycs, $koucimuqgwamoycq); } public function skuuouqswgicaqiq() : self { return $this->mgaaqwqisicewwaa("\x73\x74\141\164\x69\143\x5f\x69\155\141\147\145"); } public function mgaaqwqisicewwaa(string $ccamueccusigaaio, $oammesyieqmwuwyi = []) : self { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $ccamueccusigaaio)->igiywquyccyiaucw(self::oaeocgcgwaoyyowi, true); if (!$oammesyieqmwuwyi) { goto ckscysysmayieagk; } if (is_array($oammesyieqmwuwyi)) { goto cmsgssaekakgcqmg; } $oammesyieqmwuwyi = [$oammesyieqmwuwyi]; cmsgssaekakgcqmg: $this->gmywsauuqwcmakuc(Constants::squoamkioomemiyi, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($oammesyieqmwuwyi)); ckscysysmayieagk: return $this; } public function siggowsuuqsquecu(array $ukqisiguweqciuei = []) : Select { if ($ukqisiguweqciuei) { goto aimaqcomigwccomu; } $ukqisiguweqciuei = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x63\157\x6c\x6f\x72\137\x64\162\x6f\x70\x64\157\x77\x6e\137\x69\x74\145\x6d\163", []); aimaqcomigwccomu: $qiouiwasaauyaaue = []; foreach ($ukqisiguweqciuei as $qoiwmokisgikggia) { $qiouiwasaauyaaue[$qoiwmokisgikggia] = ucfirst($qoiwmokisgikggia); cgoqqicyaiwasqme: } osawsyawkikquqya: $this->acauweqyyugwisqc($qiouiwasaauyaaue); return $this; } public function ccwowuakmqoemoem(array $gqgemcmoicmgaqie) : self { return $this->gmywsauuqwcmakuc(Constants::meieskyuuegwwcsy, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($gqgemcmoicmgaqie)); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!is_array($eqgoocgaqwqcimie)) { goto ckagywkumgkaswyy; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($eqgoocgaqwqcimie); ckagywkumgkaswyy: $this->gmywsauuqwcmakuc(Constants::ykqyicwaggyuuuwo, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function masciqikccuysaem($ykiyyumywksqcisg, array $iwkyyocymeukcceu = []) : self { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wamcomkuwysqgwgk = $swqimwqeweekeusq->iaaacsuskiakkwui("\45\163" . $swqimwqeweekeusq->gmqyuaqwgiayskei("\45\163"), ["\x63\x6c\x61\163\163" => "\144\55\146\154\x65\x78"]); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { if ($iwkyyocymeukcceu) { goto ioaeiakqkiuqymoq; } $pkyyagewkiyckmwy = $wkaqekwwgqsqwcoi; $wkaqekwwgqsqwcoi = $uusmaiomayssaecw; goto cssysqmcgcuwyyuu; ioaeiakqkiuqymoq: $pkyyagewkiyckmwy = $iwkyyocymeukcceu[$uusmaiomayssaecw]; cssysqmcgcuwyyuu: $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\163\x73" => "\x69\x63\x6f\156\55\x73\x6d\40\x6d\162\x2d\x31"], [Constants::kicoscymgmgqeqgy => 1, Constants::ELEMENT => "\151\155\147"]); $this->quoywwosoycywesm($uusmaiomayssaecw, $pkyyagewkiyckmwy, sprintf($wamcomkuwysqgwgk, $wkaqekwwgqsqwcoi, $pkyyagewkiyckmwy)); yoeaiskyyqgqiwga: } oswgoyqaacoyqegu: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!(!$this->imkyoqyocosuqasu(self::oaeocgcgwaoyyowi) && ($uiewakwqscemywuo = $this->imkyoqyocosuqasu(self::cauemowokyokswsw)))) { goto wowakayqsywcaogm; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::meieskyuuegwwcsy, []); $oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::qwumqqyuasyskkkc, []); $ywmkwiwkosakssii[Constants::coigmswsskyoeaci] = true; $qiouiwasaauyaaue = []; switch ($gkyciwoiiisgywcs->get($uiewakwqscemywuo, Constants::mgsccwumkcawaqcy)) { case Constants::yoayaissyomokiui: $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $qiouiwasaauyaaue = $aoskwucuugeuaeus->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii); goto aesgakksmyecsusi; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qiouiwasaauyaaue = $seumokooiykcomco->ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii, Constants::eoaiagsgqsmskugs); goto aesgakksmyecsusi; } igewmkyikyaiamsq: aesgakksmyecsusi: if (!$qiouiwasaauyaaue) { goto guosgucaaeueacgu; } $this->acauweqyyugwisqc($qiouiwasaauyaaue); guosgucaaeueacgu: wowakayqsywcaogm: $this->gmywsauuqwcmakuc("\x6c\x69\166\145\55\x73\145\x61\x72\x63\150", "\x74\x72\165\145"); if (!$this->zosqeeykkcqmmkqs()) { goto ogwosuisocqykoma; } $this->qcgocuceocquqcuw(Constants::NAME, $this->waecsyqmwascmqoa(Constants::NAME) . "\x5b\x5d"); ogwosuisocqykoma: if ($this->msmiagueogcsucgc()) { goto cuqusekekewuseio; } $iwiewowoqmoekyqi = __("\x43\x68\157\x6f\x73\145\40\x61\x6e\40\157\x70\x74\151\157\x6e\x2e\56\56", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\145\x73\145\x6c\145\143\164\55\x61\x6c\154\55\164\x65\x78\164", __("\x44\x65\163\145\x6c\x65\143\164", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto rwaeioueucocosgu; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; rwaeioueucocosgu: cuqusekekewuseio: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
