<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670598d3a6ee7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\157\x6c\154\145\143\164\151\157\156"); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__("\111\x74\x65\x6d", PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if (!$uamcoiueqaamsqma) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ["\163\165\142\x6d\x69\x74" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\x6f\162\162\171\x2c\x20\171\x6f\x75\40\x63\141\156\47\164\40\163\x75\x62\x6d\x69\x74\40\146\x6f\x72\155\x2e\40\123\157\155\x65\x20\x66\x69\x65\x6c\x64\47\x73\x20\x76\141\154\165\145\x20\x69\x73\x20\x64\x75\x70\154\151\143\x61\164\x65\144\x20\x69\156\40\147\162\x6f\165\x70\54\x20\160\154\x65\141\163\x65\x20\x66\151\170\x20\x65\162\x72\x6f\x72\x73\x20\x61\156\x64\x20\x74\x72\x79\40\141\x67\141\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\144\x5f\156\x65\x77" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\x53\x6f\x72\x72\x79\54\x20\x79\157\x75\x20\x63\x61\156\47\x74\x20\x61\144\x64\40\x6e\x65\167\40\45\163\56\40\x53\x6f\x6d\145\x20\146\x69\x65\x6c\x64\x27\163\40\166\x61\154\x75\x65\x20\151\163\40\x64\x75\160\x6c\151\143\x61\x74\x65\x64\54\40\160\x6c\145\141\163\145\40\x66\151\170\40\145\162\x72\x6f\162\x73\x20\x61\156\144\x20\x74\162\x79\x20\141\147\141\151\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\x6f\x6c\154\x61\x70\x73\x69\x62\x6c\145"); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\154\x69\155\x69\164\145\144", $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__("\x53\x6f\162\162\x79\54\40\171\x6f\165\x20\143\141\x6e\x27\x74\x20\x61\144\144\x20\156\x65\x77\x20\45\x73\x2e\x20\x53\x6f\155\145\40\x66\151\145\x6c\x64\x27\x73\x20\166\141\x6c\x75\145\40\x69\x73\x20\144\165\160\x6c\x69\143\x61\164\145\144\x2c\x20\x70\154\145\141\x73\x65\x20\x66\151\x78\x20\145\162\x72\157\162\x73\x20\x61\156\144\x20\164\162\171\x20\141\x67\141\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__("\123\x6f\162\x72\171\x2c\x20\x79\157\165\40\143\x61\156\47\x74\x20\163\x75\142\155\x69\164\x20\146\x6f\162\x6d\x2e\40\123\157\x6d\145\40\x66\x69\145\154\144\47\x73\40\166\x61\154\x75\145\x20\151\x73\x20\144\x75\160\154\151\x63\x61\x74\145\144\x20\x69\156\40\147\162\x6f\165\x70\54\40\x70\x6c\x65\141\x73\x65\x20\146\151\x78\x20\145\162\162\157\162\x73\x20\141\156\x64\40\164\162\x79\x20\x61\147\x61\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; } $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if ($pkyyagewkiyckmwy) { if ($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg)) { $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf("\x25\x73\x20\45\163", $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ["\x63\154\x61\163\163" => "\x69\164\145\155\55\151\156\x64\145\170"])), Constants::kcyioiskeyiemoga => sprintf(__("\101\x64\x64\40\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); } } return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if ($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\164\120\162\151\x6f\x72\151\x74\x79"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); } } return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); } $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\x69\145\x6c\144\x2d\x63\157\x6c\x6c\145\143\x74\x69\157\x6e\55\146\x69\145\154\144"); if ($qqswgiawgeaeoecu) { $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); } $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if ($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()])) { $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); } } } return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); } $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}\133{$momcykaoccoymeig}\135\x5b{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\x5d"); } return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw("\x6c\147", 6)->igiywquyccyiaucw("\170\154", 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw("\170\154", 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (!is_array($this->default)) { $this->default = []; } $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if (!$this->wccqgiuyaekaaqcw()) { $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}\x5f\x61\x64\144\x5f\x69\164\145\x6d")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg("\141\x64\144\55\x69\x74\145\x6d")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); } if ($this->msmiagueogcsucgc()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\x72\145\x71\165\151\x72\145\144"); } if ($this->usyiuqmiaiosccca()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\x73\157\162\x74\141\142\x6c\145"); } if ($this->mwguoawyyuyccsqs()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\141\144\x64\x61\x62\x6c\145"); } if ($this->mqiegywegwkawgmk()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\x72\145\x6d\x6f\166\x61\x62\154\145"); } $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ["\x6d\x64", "\x6c\147", "\x78\154"]; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= "\40\x63\x6f\154\55{$imgcoakmmgqsckkm}\55{$uiymkeeaukcyqqik}"; } } if ($wkkweuacukumqmya) { $wkkweuacukumqmya = "\x63\x6f\x6c\55\61\62{$wkkweuacukumqmya}"; } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if ($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq()) { $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\160\x72\x2d\x66\151\x65\x6c\x64\x2d\x63\x6f\154\154\145\x63\x74\x69\x6f\156\55\165\x6e\x69\x71\165\x65")->gmywsauuqwcmakuc("\x75\156\x69\161\x75\x65", $oyumuuqqsmuacmak); } } }
