<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed89d7ce97             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = "\x77\157\157\143\x6f\155\x6d\145\162\x63\x65\x5f\x74\x61\x62"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\137\151\156\x69\x74", [$this, "\x79\145\x79\151\x67\165\171\x65\x67\155\x6d\x79\x75\x73\145\141"])->qcsmikeggeemccuu("\167\157\157\143\x6f\x6d\155\x65\x72\x63\x65\x5f\x73\145\x74\164\x69\x6e\147\163\x5f\164\x61\x62\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\x69\165\141\165\143\165\x6f\157\153\147\157\x71\x69\x69\x69\x6f"])->qcsmikeggeemccuu("\167\x6f\157\x63\157\x6d\x6d\x65\x72\143\145\x5f\x75\x70\x64\x61\x74\x65\137\x6f\160\x74\151\157\156\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\157\x71\171\x75\167\x63\x63\163\x75\x73\153\x69\167\147\145\167"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\157\143\157\x6d\155\145\x72\x63\x65\137\163\145\x74\164\x69\156\x67\163\137\164\141\x62\x73\137\x61\162\x72\141\171", [$this, "\x67\x6b\x69\157\163\x75\145\155\153\165\143\x69\x69\161\x6b\161"], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}\137\x74\x61\x62\137\x73\x65\164\164\151\x6e\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\x77\143\x5f{$this->mwikyscisascoeea()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("\164\x61\x62") === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
