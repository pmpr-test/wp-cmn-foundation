<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67522aeb59a71             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\x6f\x6f\x63\157\155\x6d\145\162\143\145\x5f\x74\x61\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\156\151\x74", [$this, "\x79\x65\171\151\x67\x75\171\x65\147\x6d\155\171\165\x73\x65\x61"])->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\155\x65\162\x63\145\x5f\163\x65\164\x74\151\156\147\163\x5f\x74\141\142\163\137{$this->cisyiemkeykgkomc()}", [$this, "\151\x75\x61\165\143\x75\x6f\157\153\147\x6f\161\x69\x69\x69\157"])->qcsmikeggeemccuu("\167\157\157\143\157\x6d\x6d\145\x72\x63\x65\x5f\x75\x70\144\x61\x74\145\x5f\157\160\x74\151\157\x6e\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\165\x77\143\143\163\165\x73\x6b\x69\167\147\145\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\157\143\x6f\155\155\x65\x72\143\x65\137\x73\x65\164\x74\151\x6e\x67\x73\x5f\164\141\142\163\137\x61\162\x72\141\171", [$this, "\147\153\x69\157\163\165\145\x6d\153\165\143\x69\x69\x71\x6b\x71"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\x74\x61\142\137\x73\x65\164\x74\x69\156\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\143\137{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\x74\x61\142") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
