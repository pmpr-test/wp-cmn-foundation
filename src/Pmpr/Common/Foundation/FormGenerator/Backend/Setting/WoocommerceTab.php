<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580c648b6e4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\167\x6f\157\143\x6f\155\x6d\x65\162\143\x65\x5f\x74\141\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\156\151\164", [$this, "\171\x65\x79\x69\x67\x75\171\x65\147\155\155\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\x77\x6f\x6f\143\x6f\155\x6d\145\162\143\x65\x5f\x73\145\x74\x74\151\156\x67\163\137\x74\141\x62\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\x69\x75\x61\x75\x63\165\157\157\153\x67\157\161\151\151\151\x6f"])->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\x6d\x6d\x65\162\143\x65\137\165\x70\x64\x61\x74\145\137\157\160\x74\151\157\156\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\161\171\x75\x77\x63\x63\x73\165\163\x6b\x69\167\x67\x65\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\x6f\x6d\x6d\145\162\x63\145\137\x73\145\164\x74\x69\x6e\147\163\x5f\x74\x61\142\x73\137\x61\162\x72\x61\x79", [$this, "\147\x6b\151\x6f\163\x75\145\x6d\153\165\143\151\151\x71\x6b\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\164\141\x62\x5f\x73\145\x74\x74\151\x6e\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\x63\x5f{$this->mwikyscisascoeea()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\141\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
