<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0000cbc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\167\x6f\x6f\x63\x6f\155\155\x65\x72\x63\145\x5f\164\141\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\x69\x6e\x69\164", [$this, "\171\x65\171\151\147\165\x79\145\x67\155\155\171\165\x73\145\141"])->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\x6d\155\145\162\143\145\x5f\163\145\x74\x74\x69\x6e\x67\x73\x5f\164\x61\142\163\x5f{$this->cisyiemkeykgkomc()}", [$this, "\151\165\x61\165\143\165\x6f\157\153\147\x6f\x71\x69\x69\x69\157"])->qcsmikeggeemccuu("\x77\157\157\143\157\155\155\x65\x72\x63\x65\x5f\165\160\x64\x61\164\x65\x5f\157\160\164\x69\x6f\x6e\163\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x71\171\165\167\143\143\x73\x75\163\153\x69\x77\x67\x65\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\157\x63\157\155\x6d\x65\162\x63\145\x5f\163\145\x74\x74\x69\156\147\163\x5f\164\141\x62\163\137\x61\x72\162\x61\171", [$this, "\x67\153\151\157\x73\165\145\155\153\165\143\151\x69\161\153\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\x5f\164\x61\x62\137\163\x65\164\164\x69\x6e\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\x63\x5f{$this->mwikyscisascoeea()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\141\142") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
