<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9eb1f4f62f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; class Container extends Markup { use FieldsTrait; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, 'container'); } public function yoimakcqmoqokkcu() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('as-block'); return $this; } public function iioyuuyomkoqgiws() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg('as-wrapper'); return $this; } public function omsoosuoikgueyke() : self { $this->qigsyyqgewgskemg('row'); return $this->igiywquyccyiaucw('xl', 6); } public function usosgsaaimqcysyk() : self { $this->qigsyyqgewgskemg('row'); return $this->igiywquyccyiaucw('lg', 6)->igiywquyccyiaucw('xl', 4); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $wkkweuacukumqmya = ''; $waaaiiqwsmggwsak = ['md', 'lg', 'xl']; foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) { if ($uiymkeeaukcyqqik = $this->imkyoqyocosuqasu($imgcoakmmgqsckkm)) { $wkkweuacukumqmya .= " col-{$imgcoakmmgqsckkm}-{$uiymkeeaukcyqqik}"; } } $this->igiywquyccyiaucw(Constants::soquiwyuimckgiow, $wkkweuacukumqmya); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function mkkgumuuwwiogcsk() : self { $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->yqgagqgesqyuyuqq('')); return $this; } }
