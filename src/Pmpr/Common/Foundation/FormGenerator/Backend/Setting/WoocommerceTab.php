<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\157\157\143\157\155\x6d\145\162\x63\x65\x5f\164\141\142"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\137\151\156\x69\x74", [$this, "\171\x65\x79\x69\147\165\171\145\147\155\x6d\171\x75\x73\145\x61"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\155\x65\x72\x63\145\x5f\x73\x65\x74\x74\x69\156\x67\163\x5f\x74\x61\x62\163\x5f{$this->cisyiemkeykgkomc()}", [$this, "\151\x75\x61\165\x63\x75\x6f\157\x6b\x67\x6f\161\x69\151\x69\x6f"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\155\x65\x72\x63\x65\137\165\160\x64\141\x74\x65\137\x6f\160\164\x69\x6f\156\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\171\165\167\143\143\163\x75\x73\153\x69\167\147\145\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\143\157\155\x6d\145\x72\x63\145\x5f\163\x65\164\x74\x69\156\x67\x73\137\164\x61\x62\163\x5f\x61\x72\x72\x61\171", [$this, "\147\x6b\151\157\x73\x75\x65\x6d\x6b\165\x63\x69\x69\161\x6b\x71"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\x5f\164\x61\142\x5f\x73\x65\164\164\151\156\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\x63\137{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\x61\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
