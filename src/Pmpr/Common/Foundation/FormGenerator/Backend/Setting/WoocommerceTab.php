<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791524c10e10             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\x6f\157\143\157\155\155\145\x72\x63\145\x5f\x74\x61\142"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\151\x6e\x69\164", [$this, "\x79\145\171\x69\147\165\171\x65\x67\x6d\155\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\155\155\x65\x72\143\145\137\x73\x65\164\x74\x69\x6e\x67\x73\x5f\x74\x61\x62\163\137{$this->cisyiemkeykgkomc()}", [$this, "\151\165\141\165\x63\165\x6f\157\153\x67\x6f\x71\x69\151\x69\157"])->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\x6d\x65\x72\143\145\137\165\160\144\141\164\145\137\157\160\164\x69\x6f\x6e\x73\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\x79\x75\167\x63\143\x73\165\x73\153\x69\x77\x67\145\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\x63\157\155\155\145\162\143\x65\137\163\x65\x74\164\x69\x6e\x67\x73\137\x74\x61\x62\163\137\x61\162\x72\141\x79", [$this, "\147\x6b\151\x6f\163\x75\x65\x6d\x6b\165\x63\x69\151\x71\x6b\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\x74\141\x62\x5f\163\x65\164\164\151\156\x67"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\143\x5f{$this->mwikyscisascoeea()}\137{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\141\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
