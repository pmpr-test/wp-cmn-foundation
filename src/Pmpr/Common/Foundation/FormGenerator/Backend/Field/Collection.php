<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbcd2165a5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\x6f\x6c\154\x65\143\164\x69\x6f\x6e"); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__("\x49\x74\x65\155", PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if (!$uamcoiueqaamsqma) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ["\163\165\142\x6d\151\164" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\157\162\162\x79\54\x20\171\x6f\165\40\143\x61\x6e\x27\164\x20\x73\165\142\x6d\151\x74\x20\146\x6f\x72\155\x2e\x20\x53\x6f\155\x65\40\146\151\145\154\144\x27\x73\40\166\x61\154\165\145\x20\x69\x73\x20\x64\165\160\154\151\143\x61\164\x65\x64\x20\x69\x6e\40\x67\162\x6f\165\160\54\x20\160\154\x65\141\163\x65\40\146\151\170\40\x65\162\162\x6f\162\163\40\141\156\x64\40\164\162\171\40\141\x67\x61\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\x64\137\x6e\145\x77" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\x6f\162\162\x79\54\40\171\157\x75\x20\x63\x61\x6e\47\x74\x20\x61\144\x64\x20\156\145\167\40\x25\x73\x2e\x20\123\x6f\x6d\x65\40\x66\151\145\x6c\x64\x27\163\40\x76\141\154\x75\x65\x20\151\163\x20\144\165\x70\x6c\x69\x63\x61\164\145\144\54\x20\160\x6c\x65\141\163\145\x20\146\151\170\x20\145\x72\162\x6f\x72\x73\x20\141\x6e\x64\x20\164\162\x79\x20\141\147\141\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\x6f\154\154\141\160\x73\x69\142\x6c\145"); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\154\151\155\151\x74\x65\144", $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__("\x53\157\x72\x72\x79\54\x20\171\x6f\x75\x20\x63\x61\156\47\x74\x20\141\144\x64\40\x6e\x65\x77\x20\45\x73\56\40\x53\x6f\155\x65\x20\146\x69\145\154\x64\47\x73\40\x76\x61\x6c\165\145\40\x69\x73\40\144\165\x70\154\151\x63\x61\164\145\x64\x2c\x20\160\x6c\x65\141\163\x65\40\146\151\170\40\145\162\162\157\162\163\40\x61\156\x64\x20\164\x72\171\x20\x61\x67\x61\x69\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__("\x53\x6f\162\x72\171\54\x20\171\x6f\165\x20\143\141\x6e\47\x74\x20\163\x75\x62\x6d\x69\164\x20\x66\157\162\155\56\x20\x53\157\x6d\145\40\146\x69\145\154\x64\x27\163\40\166\x61\x6c\165\145\x20\x69\x73\40\x64\165\x70\154\151\143\141\x74\x65\x64\40\x69\156\40\x67\x72\157\165\x70\x2c\x20\x70\x6c\145\x61\163\145\x20\146\x69\170\x20\145\162\x72\157\162\x73\x20\141\156\144\x20\164\x72\x79\40\x61\x67\141\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; } $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if ($pkyyagewkiyckmwy) { if ($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg)) { $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf("\45\x73\x20\45\163", $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ["\143\154\x61\163\163" => "\x69\164\x65\155\55\151\x6e\144\145\170"])), Constants::kcyioiskeyiemoga => sprintf(__("\x41\x64\144\x20\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); } } return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if ($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\164\120\x72\151\157\162\x69\164\x79"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); } } return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); } $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\146\x69\x65\154\x64\x2d\x63\x6f\x6c\154\x65\143\164\151\x6f\156\55\x66\151\x65\x6c\x64"); if ($qqswgiawgeaeoecu) { $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); } $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if ($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()])) { $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); } } } return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); } $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}\133{$momcykaoccoymeig}\135\133{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\x5d"); } return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw("\154\147", 6)->igiywquyccyiaucw("\170\x6c", 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw("\x78\x6c", 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (!is_array($this->default)) { $this->default = []; } $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if (!$this->wccqgiuyaekaaqcw()) { $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}\137\141\x64\144\x5f\151\x74\145\x6d")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg("\141\144\x64\x2d\151\x74\x65\155")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); } if ($this->msmiagueogcsucgc()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\162\145\x71\x75\151\x72\x65\144"); } if ($this->usyiuqmiaiosccca()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x73\157\x72\x74\x61\142\x6c\x65"); } if ($this->mwguoawyyuyccsqs()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\141\144\144\x61\142\154\145"); } if ($this->mqiegywegwkawgmk()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x72\x65\155\157\x76\141\x62\x6c\145"); } $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ["\155\x64", "\154\x67", "\x78\x6c"]; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= "\40\143\x6f\x6c\x2d{$imgcoakmmgqsckkm}\x2d{$uiymkeeaukcyqqik}"; } } if ($wkkweuacukumqmya) { $wkkweuacukumqmya = "\x63\x6f\x6c\55\61\x32{$wkkweuacukumqmya}"; } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if ($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq()) { $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\x2d\x66\151\x65\154\x64\55\143\x6f\x6c\x6c\145\143\164\151\x6f\x6e\55\165\x6e\x69\x71\x75\x65")->gmywsauuqwcmakuc("\x75\x6e\151\161\x75\x65", $oyumuuqqsmuacmak); } } }
