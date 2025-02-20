<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b702d5e1cff             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, 'collection'); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__('Item', PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if (!$uamcoiueqaamsqma) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ['submit' => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__('Sorry, you can\'t submit form. Some field\'s value is duplicated in group, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), 'add_new' => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__('Sorry, you can\'t add new %s. Some field\'s value is duplicated, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg('collapsible'); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc('limited', $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__('Sorry, you can\'t add new %s. Some field\'s value is duplicated, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__('Sorry, you can\'t submit form. Some field\'s value is duplicated in group, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; } $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if ($pkyyagewkiyckmwy) { if ($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg)) { $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf('%s %s', $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ['class' => 'item-index'])), Constants::kcyioiskeyiemoga => sprintf(__('Add %s', PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); } } return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if ($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, 'getPriority'); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); } } return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if ($aiowsaccomcoikus instanceof Field) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); } $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-collection-field'); if ($qqswgiawgeaeoecu) { $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); } $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if ($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()])) { $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); } } } return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); } $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); } else { $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}[{$momcykaoccoymeig}][{$aiowsaccomcoikus->aakmagwggmkoiiyu()}]"); } return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw('lg', 6)->igiywquyccyiaucw('xl', 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw('xl', 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (!is_array($this->default)) { $this->default = []; } $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if (!$this->wccqgiuyaekaaqcw()) { $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}_add_item")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg('add-item')->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); } if ($this->msmiagueogcsucgc()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-required'); } if ($this->usyiuqmiaiosccca()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-sortable'); } if ($this->mwguoawyyuyccsqs()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-addable'); } if ($this->mqiegywegwkawgmk()) { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-removable'); } $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ['md', 'lg', 'xl']; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= " col-{$imgcoakmmgqsckkm}-{$uiymkeeaukcyqqik}"; } } if ($wkkweuacukumqmya) { $wkkweuacukumqmya = "col-12{$wkkweuacukumqmya}"; } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if ($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq()) { $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg('pr-field-collection-unique')->gmywsauuqwcmakuc('unique', $oyumuuqqsmuacmak); } } }
