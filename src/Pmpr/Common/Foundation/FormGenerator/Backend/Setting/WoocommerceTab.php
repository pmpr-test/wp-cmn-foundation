<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9f11bf9d9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\167\157\157\x63\157\155\155\x65\x72\143\x65\x5f\x74\x61\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\137\x69\156\151\164", [$this, "\171\145\x79\151\x67\165\171\x65\x67\x6d\155\x79\x75\x73\x65\141"])->qcsmikeggeemccuu("\167\157\157\x63\157\155\x6d\145\x72\x63\145\137\x73\x65\x74\164\x69\156\147\x73\x5f\x74\x61\142\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x69\x75\x61\x75\143\x75\x6f\x6f\x6b\147\x6f\161\x69\151\151\157"])->qcsmikeggeemccuu("\x77\x6f\157\x63\157\155\x6d\x65\162\143\x65\x5f\165\x70\144\x61\x74\x65\x5f\x6f\x70\164\x69\x6f\156\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\157\x71\x79\165\x77\x63\x63\x73\165\163\153\151\x77\x67\x65\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\155\155\145\162\x63\x65\x5f\163\x65\164\x74\151\156\147\163\x5f\164\141\x62\163\x5f\141\162\162\141\x79", [$this, "\147\x6b\151\x6f\163\165\145\155\153\x75\x63\x69\151\x71\x6b\x71"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\x5f\164\141\142\137\163\145\164\164\x69\156\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\x63\137{$this->mwikyscisascoeea()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x74\x61\142") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
