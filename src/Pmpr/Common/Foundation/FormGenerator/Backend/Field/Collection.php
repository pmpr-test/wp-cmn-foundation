<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6714d8c9bc679             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\157\154\x6c\145\143\164\x69\x6f\x6e"); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__("\111\x74\145\x6d", PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if (!$uamcoiueqaamsqma) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ["\163\x75\142\x6d\151\x74" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\x53\x6f\162\162\x79\54\x20\171\157\x75\40\x63\x61\x6e\47\164\40\x73\165\142\155\x69\x74\x20\x66\157\162\x6d\x2e\x20\x53\x6f\x6d\145\40\x66\151\x65\154\144\47\x73\40\x76\141\x6c\165\145\x20\x69\x73\x20\144\165\160\154\x69\x63\141\164\145\144\40\151\156\x20\x67\162\157\x75\x70\54\x20\x70\154\x65\141\163\145\x20\x66\151\x78\40\x65\162\162\x6f\162\x73\x20\x61\x6e\x64\x20\164\x72\171\40\x61\x67\x61\151\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\x64\x64\137\156\x65\167" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\x6f\x72\162\x79\54\x20\x79\x6f\165\40\143\141\156\x27\x74\x20\141\144\144\x20\156\145\x77\40\x25\163\x2e\x20\x53\x6f\x6d\145\x20\x66\151\145\154\144\x27\x73\40\166\141\x6c\165\x65\x20\151\163\40\144\x75\x70\x6c\x69\x63\x61\164\x65\x64\x2c\40\160\154\145\141\x73\145\x20\146\151\170\x20\x65\162\162\157\x72\x73\40\x61\156\144\40\x74\162\x79\x20\x61\x67\x61\x69\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg("\x63\x6f\x6c\154\x61\160\163\x69\142\154\145"); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\x6c\x69\155\x69\164\145\x64", $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__("\123\x6f\162\162\x79\x2c\40\x79\x6f\x75\40\143\x61\x6e\47\164\x20\141\144\x64\x20\x6e\145\x77\40\x25\163\x2e\x20\123\157\155\x65\x20\x66\x69\145\154\x64\47\163\40\x76\x61\x6c\x75\145\40\x69\163\40\144\165\x70\x6c\x69\x63\141\164\x65\144\x2c\x20\x70\x6c\x65\x61\163\145\40\146\151\170\x20\x65\x72\x72\x6f\x72\x73\40\x61\x6e\144\40\164\x72\171\40\141\147\x61\x69\156\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__("\x53\x6f\162\162\171\54\x20\171\x6f\x75\x20\143\141\x6e\x27\164\x20\163\x75\x62\x6d\x69\164\x20\x66\157\x72\155\56\x20\123\157\x6d\145\40\x66\151\x65\x6c\x64\x27\163\40\166\x61\x6c\x75\x65\x20\x69\163\x20\x64\165\160\x6c\151\x63\x61\x74\145\144\40\151\156\x20\x67\162\157\x75\x70\54\x20\x70\x6c\x65\141\163\145\x20\x66\151\x78\x20\x65\162\x72\157\x72\163\x20\x61\156\x64\x20\164\162\171\40\x61\147\141\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; } $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if ($pkyyagewkiyckmwy) { if ($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg)) { $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf("\x25\163\x20\45\x73", $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ["\143\154\x61\x73\163" => "\151\x74\x65\155\x2d\x69\156\144\145\170"])), Constants::kcyioiskeyiemoga => sprintf(__("\101\144\144\x20\x25\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); } } return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if ($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\x74\x50\162\x69\157\162\x69\x74\171"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); } } return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); } $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\151\145\x6c\144\55\143\x6f\154\x6c\x65\143\164\151\x6f\x6e\55\146\151\x65\x6c\144"); if ($qqswgiawgeaeoecu) { $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); } $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if ($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()])) { $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); } } } return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); } $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}\133{$momcykaoccoymeig}\135\x5b{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\x5d"); } return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw("\154\x67", 6)->igiywquyccyiaucw("\x78\x6c", 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw("\x78\x6c", 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (!is_array($this->default)) { $this->default = []; } $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if (!$this->wccqgiuyaekaaqcw()) { $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}\137\141\144\144\x5f\151\x74\145\155")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg("\x61\144\144\x2d\x69\164\145\x6d")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); } if ($this->msmiagueogcsucgc()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\162\x65\x71\x75\x69\162\x65\144"); } if ($this->usyiuqmiaiosccca()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\163\157\x72\x74\141\142\x6c\145"); } if ($this->mwguoawyyuyccsqs()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\141\144\144\x61\x62\154\x65"); } if ($this->mqiegywegwkawgmk()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\162\x65\x6d\157\x76\141\142\154\x65"); } $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ["\155\x64", "\154\x67", "\170\x6c"]; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= "\40\x63\157\x6c\x2d{$imgcoakmmgqsckkm}\55{$uiymkeeaukcyqqik}"; } } if ($wkkweuacukumqmya) { $wkkweuacukumqmya = "\143\x6f\x6c\55\x31\62{$wkkweuacukumqmya}"; } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if ($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq()) { $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\x72\55\x66\151\x65\154\144\55\x63\157\x6c\154\x65\x63\x74\x69\x6f\x6e\x2d\165\156\151\x71\x75\145")->gmywsauuqwcmakuc("\165\156\151\161\165\145", $oyumuuqqsmuacmak); } } }
