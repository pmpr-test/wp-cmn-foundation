<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1666776f24             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SegmentsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Component { use SegmentsTrait; public function qiccuiwooiquycsg() { $this->template = 'woocommerce_tab'; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu("woocommerce_settings_tabs_{$this->cisyiemkeykgkomc()}", [$this, 'iuaucuookgoqiiio'])->qcsmikeggeemccuu("woocommerce_update_options_{$this->cisyiemkeykgkomc()}", [$this, 'oqyuwccsuskiwgew']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_settings_tabs_array', [$this, 'gkiosuemkuciiqkq'], 999); } public function yeyiguyegmmyusea() { if ($this->eaiyegoagkgeowae()) { $this->ykwqaukkycogooii(); } } public final function oqyuwccsuskiwgew() { $this->ykwqaukkycogooii(); [$wgksyimicsqyaiqu, $cegwokqskcaoqewu] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($this->ogwccyaguaieayiq(), $_POST); $ikgwqyuyckaewsow = $icwicymcioeyeyek = []; foreach ($wgksyimicsqyaiqu as $aiowsaccomcoikus) { $eywayoukkqcgaski = $this->qmuguoywasawkcyw($aiowsaccomcoikus->mwikyscisascoeea()); $icwicymcioeyeyek[$eywayoukkqcgaski] = $cegwokqskcaoqewu[$aiowsaccomcoikus->mwikyscisascoeea()]; $ikgwqyuyckaewsow[] = [Constants::gouqcwikiiygyasc => $eywayoukkqcgaski, Constants::squoamkioomemiyi => $aiowsaccomcoikus->gueasuouwqysmomu()]; } if ($ikgwqyuyckaewsow && $icwicymcioeyeyek) { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->qogqigmumcwsuuoo($ikgwqyuyckaewsow, $icwicymcioeyeyek); } } public final function iuaucuookgoqiiio() { $this->caokeucsksukesyo()->wmkogisswkckmeua()->uiwgikskqiusqook($this->ogwccyaguaieayiq(), function (Field $aiowsaccomcoikus) { return $this->eiwcuqigayigimak($aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); }); $this->render(true); } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->mwikyscisascoeea()}_tab_setting"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "wc_{$this->mwikyscisascoeea()}_{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey('tab') === $this->cisyiemkeykgkomc(); } public abstract function ykwqaukkycogooii(); }
