<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Collection extends Field { use FieldsTrait; protected array $unique = []; protected ?Button $addButton = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\x6f\154\x6c\x65\143\x74\151\157\x6e"); $this->qcqeqimisiisswky()->gkaeswysogsummui()->gekquuicukmowssy()->emcamkaesyeaaqgm([Constants::yaeeqsosiaimuqma => IconInterface::ucomcyskmkiqysee, Constants::mqkoyssswuikaueg => false, Constants::ayscagukkeoucmoe => false]); $this->ygscsskuwuuqgace(__("\x49\164\x65\x6d", PR__CMN__FOUNDATION), false)->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->cwiuiiakukcsaakw(Constants::ascagqcquwgmygkm)->jyumyyugiwwiqomk(PHP_INT_MAX)); } public function ysgmmmoecswoigyq(array $ikgwqyuyckaewsow, string $ayegqaqygsqsmews = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { if ($uamcoiueqaamsqma) { goto ismoiisskiwmmmiu; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $uamcoiueqaamsqma = ["\x73\x75\142\155\151\x74" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\x6f\162\x72\x79\x2c\x20\171\157\165\x20\x63\141\x6e\x27\164\40\163\x75\142\x6d\x69\164\40\146\157\162\x6d\56\40\x53\x6f\155\x65\x20\x66\x69\145\x6c\x64\47\163\40\166\x61\154\x75\x65\x20\151\x73\x20\144\x75\160\x6c\x69\x63\141\x74\x65\144\40\x69\156\40\147\x72\157\165\x70\54\40\160\x6c\x65\141\163\x65\x20\x66\x69\170\40\145\162\162\x6f\162\163\40\141\x6e\144\x20\x74\x72\171\x20\x61\147\x61\151\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\x61\144\144\137\156\145\167" => $swqimwqeweekeusq->ciuuiyckmsygceis(sprintf(__("\123\157\162\162\171\54\40\x79\x6f\165\x20\143\x61\156\x27\164\x20\141\144\x64\40\x6e\x65\x77\x20\45\x73\x2e\x20\123\x6f\x6d\145\x20\146\151\145\x6c\144\47\x73\x20\166\x61\154\165\145\x20\151\163\40\144\165\x70\154\x69\x63\141\164\145\x64\x2c\x20\160\x6c\x65\x61\163\145\40\x66\x69\170\x20\x65\162\x72\x6f\162\x73\40\141\x6e\144\x20\x74\x72\x79\x20\141\147\141\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; ismoiisskiwmmmiu: $this->unique[] = [Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ygyiacciqgemekwc => $ayegqaqygsqsmews]; return $this; } public function kmkkesgmcayyesqq() : array { return $this->unique; } public function yoouesigykyekkag() : self { $this->igiywquyccyiaucw(Constants::ayscagukkeoucmoe, true)->kakecegieeqyyayu()->qigsyyqgewgskemg("\143\x6f\154\154\141\x70\163\151\142\154\x65"); return $this; } public function usyiuqmiaiosccca() : bool { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function mwguoawyyuyccsqs() : bool { return $this->imkyoqyocosuqasu(Constants::wgqiykuoeykksoee, false); } public function mqiegywegwkawgmk() : bool { return $this->imkyoqyocosuqasu(Constants::ceaweqoiqqkukoue, false); } public function qcqeqimisiisswky() : self { $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, true); return $this; } public function qcummmaiqyumsuwo() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, false); return $this; } public function gekquuicukmowssy() : self { $this->igiywquyccyiaucw(Constants::ceaweqoiqqkukoue, true); return $this; } public function uaqkwowwaokueikg() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, false); return $this; } public function gkaeswysogsummui() : self { $this->igiywquyccyiaucw(Constants::wgqiykuoeykksoee, true); return $this; } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\x6c\x69\155\151\x74\x65\144", $uuyoeicyoayimaoa); return $this; } public function cyceoowgwqqwugce($ikgwqyuyckaewsow, string $qsycuegoicqcqkmo = Constants::weaykmmocuacwekg, array $uamcoiueqaamsqma = []) : self { $aussmmkwiakayocq = $this->imkyoqyocosuqasu(Constants::ukcwqyakgmascwis, []); if ($uamcoiueqaamsqma) { goto oikomikqcwikimkw; } $uamcoiueqaamsqma = [Constants::ukwaycqmyyuekwqg => sprintf(__("\x53\x6f\162\162\x79\54\40\x79\x6f\165\x20\143\x61\156\47\x74\40\141\144\x64\x20\x6e\x65\167\x20\45\x73\x2e\x20\x53\157\155\x65\40\x66\151\145\x6c\x64\47\163\40\166\x61\x6c\165\145\40\151\163\40\144\x75\x70\x6c\151\143\141\x74\x65\x64\54\x20\160\154\x65\x61\x73\x65\x20\146\151\x78\40\x65\162\x72\157\162\x73\x20\x61\x6e\x64\40\164\162\x79\x20\x61\147\x61\151\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()), Constants::iueeekcmggceyscu => sprintf(__("\x53\157\162\162\171\x2c\40\171\157\x75\x20\143\x61\156\x27\x74\x20\x73\x75\x62\x6d\151\x74\40\146\157\162\155\56\x20\123\157\155\145\40\146\151\x65\154\x64\47\163\40\166\141\154\x75\145\40\x69\x73\x20\x64\x75\160\x6c\151\143\141\164\145\144\40\151\156\40\x67\162\157\x75\160\x2c\x20\x70\x6c\145\141\163\145\x20\146\151\x78\40\145\162\x72\x6f\162\163\x20\x61\x6e\x64\x20\164\x72\171\x20\x61\147\141\151\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())]; oikomikqcwikimkw: $aussmmkwiakayocq[] = [Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; $this->igiywquyccyiaucw(Constants::ukcwqyakgmascwis, $aussmmkwiakayocq); return $this; } public function ygscsskuwuuqgace(?string $pkyyagewkiyckmwy, bool $cwwowqyuwccuykom = true) : self { if (!$pkyyagewkiyckmwy) { goto cecamogauimuwoow; } if (!($cwwowqyuwccuykom || !$this->wuyimwscukmqqsqk(Constants::siwmayqgwaasmcmg))) { goto uwmgacqaowuguiow; } $this->eukmukacucooequu([Constants::siwmayqgwaasmcmg => sprintf("\45\163\40\x25\163", $pkyyagewkiyckmwy, $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei(self::wcmoyuggmesegmcy, ["\x63\x6c\141\x73\163" => "\x69\x74\x65\155\x2d\151\x6e\x64\145\170"])), Constants::kcyioiskeyiemoga => sprintf(__("\101\x64\144\x20\x25\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy)]); uwmgacqaowuguiow: cecamogauimuwoow: return $this; } public function wccqgiuyaekaaqcw() : ?Button { return $this->addButton; } public function cgckaeomyckcwkow(?Button $igmamuiesywmkgeu) : self { $this->addButton = $igmamuiesywmkgeu; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto ygqqeqgiaasoimgs; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); ygqqeqgiaasoimgs: $aiowsaccomcoikus = $aiowsaccomcoikus->mmuyuqussqkgkega($this); $aiowsaccomcoikus = $this->swieomskauosigsm(self::wcmoyuggmesegmcy, $aiowsaccomcoikus); $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function uiwgikskqiusqook(array $ikgwqyuyckaewsow = [], $qqswgiawgeaeoecu = [], $momcykaoccoymeig = 1) : array { if (!$ikgwqyuyckaewsow) { goto goqkegseiummeiak; } $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\x65\x74\x50\x72\x69\157\x72\151\164\x79"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu); yuccckoykmccwyce: } gsiagogeoqwqekei: goqkegseiummeiak: return $ikgwqyuyckaewsow; } public function kuomswokiqmawoiw($momcykaoccoymeig, $aiowsaccomcoikus, $qqswgiawgeaeoecu) : Field { $qsqwqsymmqeoqwcu = $aiowsaccomcoikus; if (!$aiowsaccomcoikus instanceof Field) { goto iqyqgqwwaaigmuou; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($aiowsaccomcoikus instanceof Container) { goto ckmkeuakisiukage; } $aiowsaccomcoikus->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\x66\151\x65\154\x64\x2d\143\x6f\154\x6c\x65\143\164\151\157\x6e\55\146\x69\145\154\144"); if (!$qqswgiawgeaeoecu) { goto wcqyakkqcgmeqaag; } $qsqwqsymmqeoqwcu = $this->swieomskauosigsm($momcykaoccoymeig, clone $aiowsaccomcoikus); $qsqwqsymmqeoqwcu->iygyugseyaqwywyg($qqswgiawgeaeoecu[$aokagokqyuysuksm] ?? ''); wcqyakkqcgmeqaag: $ggauoeuaesiymgee = $this->oiswysuiioecsaae(); if (!($ggauoeuaesiymgee && isset($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]))) { goto coygueuwyguuciww; } $qsqwqsymmqeoqwcu->eyygsasuqmommkua($ggauoeuaesiymgee[$momcykaoccoymeig - 1][$aiowsaccomcoikus->mwikyscisascoeea()]); coygueuwyguuciww: goto uaiqqcsoksgukasg; ckmkeuakisiukage: $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->kuomswokiqmawoiw($momcykaoccoymeig, $ywoeokaikgooiwag, $qqswgiawgeaeoecu); mcoyaaiggymgcsgq: } wgeskeagymiuoigi: $qsqwqsymmqeoqwcu = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); uaiqqcsoksgukasg: iqyqgqwwaaigmuou: return $qsqwqsymmqeoqwcu; } private function swieomskauosigsm($momcykaoccoymeig, $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto woqsaqwocioumoeu; } $aiowsaccomcoikus->ggekcmkgawqocsms("{$this->aakmagwggmkoiiyu()}\133{$momcykaoccoymeig}\x5d\x5b{$aiowsaccomcoikus->aakmagwggmkoiiyu()}\135"); goto ukyoyoqcyywgaywg; woqsaqwocioumoeu: $ecukkacusqswqoem = []; foreach ($aiowsaccomcoikus->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $ywoeokaikgooiwag) { $ecukkacusqswqoem[$aokagokqyuysuksm] = $this->swieomskauosigsm($momcykaoccoymeig, $ywoeokaikgooiwag); iuoqiecqaoosioey: } sqmgqacueqiiekay: $aiowsaccomcoikus = $aiowsaccomcoikus->acakyumkgoeiskqq($ecukkacusqswqoem); ukyoyoqcyywgaywg: return $aiowsaccomcoikus; } public function usosgsaaimqcysyk() : self { return $this->igiywquyccyiaucw("\154\147", 6)->igiywquyccyiaucw("\x78\154", 4); } public function omsoosuoikgueyke() : self { return $this->igiywquyccyiaucw("\x78\154", 6); } public function syuyisqgcskmaymc(array $ggauoeuaesiymgee) : self { if (is_array($this->default)) { goto ugowokkqeoeugkqe; } $this->default = []; ugowokkqeoeugkqe: $this->default[] = $ggauoeuaesiymgee; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if ($this->wccqgiuyaekaaqcw()) { goto qmqumgawyyqqamoa; } $this->cgckaeomyckcwkow($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->aakmagwggmkoiiyu()}\x5f\141\144\x64\137\x69\x74\x65\x6d")->gswweykyogmsyawy($this->imkyoqyocosuqasu(Constants::kcyioiskeyiemoga))->saemoowcasogykak(IconInterface::scqkowciwiiwiuwy)->qigsyyqgewgskemg("\141\x64\144\55\151\164\x65\155")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)); qmqumgawyyqqamoa: if (!$this->msmiagueogcsucgc()) { goto ewcyigsymwuuogci; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\162\x65\161\165\x69\162\145\x64"); ewcyigsymwuuogci: if (!$this->usyiuqmiaiosccca()) { goto auauyoooouqkickk; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x73\x6f\162\164\141\142\154\x65"); auauyoooouqkickk: if (!$this->mwguoawyyuyccsqs()) { goto egcsskmsysqiiikm; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x61\144\144\x61\x62\154\145"); egcsskmsysqiiikm: if (!$this->mqiegywegwkawgmk()) { goto mogomwoquuesmcec; } $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\162\145\x6d\157\x76\141\x62\154\145"); mogomwoquuesmcec: $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ["\155\144", "\154\147", "\x78\154"]; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if (!($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm))) { goto cyikoqssoemgwyyk; } $wkkweuacukumqmya .= "\x20\143\157\x6c\x2d{$imgcoakmmgqsckkm}\55{$uiymkeeaukcyqqik}"; cyikoqssoemgwyyk: emiyocoiuwcucuwu: } akiuyguwqaukuugs: if (!$wkkweuacukumqmya) { goto uceksuykgsckwwsu; } $wkkweuacukumqmya = "\x63\x6f\x6c\x2d\61\62{$wkkweuacukumqmya}"; uceksuykgsckwwsu: $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); if (!($omasqoksqewuwwkq = $this->kmkkesgmcayyesqq())) { goto ummsowuaoeyusgoq; } $oyumuuqqsmuacmak = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($omasqoksqewuwwkq, JSON_UNESCAPED_SLASHES); $this->qigsyyqgewgskemg("\x70\162\55\146\x69\145\x6c\144\x2d\x63\157\x6c\154\x65\143\164\x69\157\156\55\x75\156\x69\161\165\145")->gmywsauuqwcmakuc("\165\x6e\x69\x71\165\145", $oyumuuqqsmuacmak); ummsowuaoeyusgoq: } }
