<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b967a0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\x6f\157\x63\x6f\x6d\155\x65\162\143\x65\x5f\x74\141\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\156\151\x74", [$this, "\171\x65\x79\x69\x67\165\171\x65\147\x6d\x6d\171\x75\163\x65\x61"])->qcsmikeggeemccuu("\167\157\x6f\143\157\x6d\155\145\162\143\145\x5f\x73\x65\x74\164\151\x6e\147\x73\137\164\141\x62\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x69\165\x61\x75\143\x75\157\x6f\153\147\157\x71\151\151\151\x6f"])->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\155\x6d\145\162\143\145\137\165\x70\144\x61\164\145\137\157\160\164\151\157\x6e\163\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\x75\x77\143\143\163\x75\163\x6b\151\167\x67\x65\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\157\x63\157\155\155\145\x72\x63\145\137\x73\x65\x74\x74\151\x6e\147\163\137\x74\x61\142\x73\x5f\141\162\x72\x61\171", [$this, "\x67\153\151\157\163\x75\x65\x6d\153\165\143\x69\151\x71\x6b\x71"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\164\x61\142\137\163\145\x74\x74\151\156\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\143\137{$this->mwikyscisascoeea()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x74\141\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
