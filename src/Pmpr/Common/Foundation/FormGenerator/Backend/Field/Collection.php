<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\x6f\154\154\x65\143\164\151\157\x6e"); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__("\x49\164\x65\155", PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if (!$uamcoiueqaamsqma) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ["\163\165\142\155\151\164" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\x53\157\162\x72\171\54\x20\x79\157\x75\x20\x63\x61\156\x27\x74\40\x73\x75\x62\155\151\164\x20\x66\157\162\x6d\56\x20\x53\157\155\x65\x20\x66\151\145\x6c\x64\47\163\x20\x76\141\x6c\x75\145\x20\x69\163\x20\x64\x75\160\x6c\151\x63\141\x74\x65\144\x20\151\x6e\x20\147\162\x6f\x75\x70\x2c\40\160\x6c\145\141\x73\x65\40\146\151\170\40\145\162\x72\157\162\x73\40\x61\156\144\x20\x74\x72\x79\40\x61\147\x61\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\x64\x5f\156\145\167" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\x6f\x72\162\x79\54\x20\171\x6f\x75\40\x63\141\156\x27\x74\x20\141\x64\144\40\156\145\x77\40\x25\163\x2e\40\x53\x6f\155\145\x20\146\151\145\x6c\144\x27\x73\x20\166\x61\154\x75\x65\40\151\x73\x20\144\x75\160\x6c\151\143\x61\x74\145\144\54\40\160\x6c\145\x61\x73\145\x20\x66\x69\x78\x20\x65\x72\x72\x6f\x72\x73\40\x61\156\144\40\164\162\171\x20\141\x67\x61\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg("\x63\x6f\x6c\x6c\x61\160\x73\151\x62\154\145"); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\154\x69\155\x69\x74\x65\144", $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__("\123\157\x72\x72\171\x2c\x20\x79\x6f\x75\x20\x63\x61\x6e\x27\x74\40\141\144\x64\x20\156\145\167\40\45\x73\56\40\x53\157\x6d\x65\x20\146\151\x65\154\144\x27\x73\40\x76\141\154\165\x65\40\151\163\40\144\165\160\154\151\x63\x61\164\145\x64\x2c\x20\x70\x6c\145\x61\x73\x65\40\x66\151\x78\40\x65\x72\162\x6f\x72\163\x20\x61\156\144\x20\x74\x72\x79\x20\141\x67\x61\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__("\123\x6f\x72\162\x79\54\x20\171\157\165\40\143\141\x6e\47\x74\40\163\165\142\155\x69\164\40\x66\157\162\155\x2e\40\x53\157\155\145\x20\x66\151\145\154\x64\x27\x73\40\166\x61\154\x75\x65\x20\151\x73\40\144\x75\x70\x6c\151\x63\x61\x74\x65\144\x20\151\x6e\40\x67\162\157\x75\160\x2c\x20\x70\x6c\145\141\163\x65\40\146\x69\170\x20\145\162\x72\x6f\x72\x73\x20\x61\156\144\x20\164\162\x79\40\141\x67\141\151\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; } $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if ($pkyyagewkiyckmwy) { if ($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg)) { $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf("\45\x73\x20\45\163", $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ["\x63\154\141\x73\x73" => "\x69\164\145\155\x2d\151\156\144\x65\170"])), Constants::kcyioiskeyiemoga => sprintf(__("\x41\144\144\40\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); } } return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if ($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\147\x65\x74\120\162\151\157\x72\x69\164\x79"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); } } return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); } $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\151\145\x6c\x64\x2d\x63\157\154\154\x65\x63\164\x69\157\156\55\x66\151\145\154\144"); if ($qqswgiawgeaeoecu) { $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); } $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if ($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()])) { $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); } } } return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); } $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}\133{$momcykaoccoymeig}\x5d\x5b{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\135"); } return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw("\154\x67", 6)->igiywquyccyiaucw("\x78\154", 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw("\x78\154", 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (!is_array($this->default)) { $this->default = []; } $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if (!$this->wccqgiuyaekaaqcw()) { $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}\x5f\141\x64\x64\x5f\x69\x74\x65\x6d")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg("\x61\144\x64\x2d\x69\x74\145\x6d")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); } if ($this->msmiagueogcsucgc()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\162\x65\161\x75\x69\x72\145\x64"); } if ($this->usyiuqmiaiosccca()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\163\157\x72\x74\x61\142\154\145"); } if ($this->mwguoawyyuyccsqs()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\141\144\x64\x61\142\154\x65"); } if ($this->mqiegywegwkawgmk()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\x72\x65\x6d\x6f\166\141\142\x6c\145"); } $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ["\x6d\144", "\x6c\x67", "\170\x6c"]; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= "\x20\x63\157\154\55{$imgcoakmmgqsckkm}\x2d{$uiymkeeaukcyqqik}"; } } if ($wkkweuacukumqmya) { $wkkweuacukumqmya = "\143\x6f\154\x2d\61\62{$wkkweuacukumqmya}"; } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if ($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq()) { $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\160\162\55\146\151\x65\154\144\x2d\143\157\154\154\145\143\164\x69\x6f\x6e\55\x75\156\x69\x71\x75\145")->gmywsauuqwcmakuc("\x75\x6e\x69\x71\165\x65", $oyumuuqqsmuacmak); } } }
