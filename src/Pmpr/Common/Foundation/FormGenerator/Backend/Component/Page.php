<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680156f35b43a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; class Page extends Component { use FieldsTrait, ButtonsTrait, SidebarTrait; public function qiccuiwooiquycsg() { $this->template = Constants::imywcsggckkcywgk; $this->templateClass = self::class; $this->emcamkaesyeaaqgm([Constants::kekcgssiyagioocg => 0, Constants::wuowaiyouwecckaw => null, Constants::ysgwugcqguggmigq => null, Constants::qsegwakiwaiyimyy => null, Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy('form_generator_backend_page_capability', Constants::gewmeskawiqikkoc), Constants::qoquaeuooeycomks => null]); parent::qiccuiwooiquycsg(); } public function wigskegsqequoeks() { if ($this->kooiucqkggeagccu()) { $this->qcsmikeggeemccuu('admin_menu', [$this, 'euqgwiscwgqkqkec'], 9999); } $this->waqewsckuayqguos('before_enqueue_assets', [$this, 'kkucmcaayaieasyi']); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aaucwooggikimwgq()) { $this->iumcsgkcwwwsyggc(); } } public function kkucmcaayaieasyi() { if ($this->qcsgmgoukiouuscw() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aaucwooggikimwgq()) { $this->enqueue(); } } public function euqgwiscwgqkqkec() { if (!$this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy)) { $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, $this->qcgakseyaikigqco()); } if (!$this->imkyoqyocosuqasu(Constants::ysgwugcqguggmigq)) { $this->igiywquyccyiaucw(Constants::ysgwugcqguggmigq, $this->qcgakseyaikigqco()); } if (!$this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)) { $this->igiywquyccyiaucw(Constants::wuowaiyouwecckaw, $this->cisyiemkeykgkomc()); } $ywmkwiwkosakssii = $this->kooiucqkggeagccu(); $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm] = function () { $this->render(true); }; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ywmkwiwkosakssii); } public function enqueue() { } public function iumcsgkcwwwsyggc() { } public function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function oiucukewkckkwiqc() : ?string { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->cisyiemkeykgkomc()); } }
