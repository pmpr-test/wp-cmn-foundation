<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\167\157\157\143\x6f\155\155\x65\x72\143\x65\x5f\x74\141\142"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\151\x6e\151\x74", [$this, "\x79\145\171\x69\x67\165\x79\x65\x67\x6d\x6d\x79\x75\x73\x65\141"])->qcsmikeggeemccuu("\x77\157\x6f\x63\157\x6d\155\145\x72\143\145\x5f\x73\145\x74\x74\x69\x6e\x67\x73\x5f\x74\141\x62\163\137{$this->cisyiemkeykgkomc()}", [$this, "\151\165\x61\165\x63\x75\x6f\157\x6b\147\x6f\161\x69\x69\x69\157"])->qcsmikeggeemccuu("\167\x6f\157\143\157\x6d\155\x65\x72\x63\145\x5f\165\x70\x64\141\164\x65\x5f\157\x70\164\x69\157\156\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\165\x77\x63\143\163\165\x73\153\x69\167\147\145\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\x63\157\x6d\x6d\x65\x72\143\145\x5f\163\x65\164\164\x69\156\147\x73\137\x74\x61\142\x73\137\x61\x72\x72\x61\171", [$this, "\x67\x6b\x69\x6f\x73\x75\x65\x6d\153\x75\x63\151\151\161\153\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\x74\x61\x62\137\x73\145\164\x74\151\156\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\x63\137{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\x61\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
