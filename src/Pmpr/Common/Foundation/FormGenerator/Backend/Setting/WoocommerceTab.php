<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6714d8c9bc679             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\167\x6f\x6f\143\157\x6d\x6d\145\x72\x63\145\x5f\164\141\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\x5f\x69\156\x69\164", [$this, "\x79\x65\x79\151\x67\x75\171\145\147\155\155\171\165\x73\x65\141"])->qcsmikeggeemccuu("\167\x6f\157\143\157\x6d\155\x65\x72\143\145\137\x73\x65\164\x74\x69\x6e\147\x73\137\164\141\x62\163\137{$this->cisyiemkeykgkomc()}", [$this, "\151\165\x61\x75\143\x75\x6f\157\x6b\x67\x6f\x71\151\151\151\x6f"])->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\155\x65\162\x63\145\137\x75\160\144\141\164\x65\x5f\x6f\160\164\x69\x6f\x6e\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\165\x77\143\x63\163\x75\x73\x6b\x69\167\147\x65\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\x6f\x63\x6f\x6d\155\x65\x72\x63\145\137\163\x65\x74\164\151\x6e\147\x73\137\164\x61\142\163\x5f\x61\x72\x72\141\171", [$this, "\147\153\x69\x6f\x73\x75\x65\155\x6b\165\143\151\151\161\x6b\x71"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\x74\x61\x62\x5f\163\x65\x74\x74\151\x6e\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\143\x5f{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\x61\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
