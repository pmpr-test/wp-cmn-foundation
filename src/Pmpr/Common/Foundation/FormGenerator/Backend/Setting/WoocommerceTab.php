<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3647befc6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\x6f\x6f\143\157\155\x6d\x65\162\143\x65\x5f\x74\x61\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\137\151\156\151\x74", [$this, "\x79\x65\171\x69\147\165\x79\145\x67\155\x6d\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\155\x6d\145\x72\x63\145\x5f\163\x65\164\x74\x69\x6e\x67\x73\x5f\164\x61\x62\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\151\165\x61\x75\143\165\157\x6f\153\x67\x6f\x71\151\x69\151\x6f"])->qcsmikeggeemccuu("\167\x6f\157\x63\157\x6d\x6d\145\162\x63\145\137\x75\160\144\141\x74\145\137\157\160\x74\x69\157\x6e\163\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\x75\167\x63\143\163\x75\163\153\x69\x77\147\x65\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\157\x63\x6f\x6d\x6d\145\x72\143\145\x5f\x73\x65\164\x74\151\x6e\147\x73\137\x74\141\x62\x73\137\x61\x72\x72\141\171", [$this, "\x67\x6b\151\157\x73\165\145\x6d\x6b\x75\x63\151\151\161\x6b\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\x5f\x74\141\142\x5f\x73\145\x74\164\151\x6e\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\143\x5f{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x74\141\142") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
