<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto omqkeukuycyymmke; } $cciauwuwuqaywgce->ggiaseqygioygumq($this->mwikyscisascoeea() . $cciauwuwuqaywgce->mwikyscisascoeea()); if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto imsmosgqcqgeksws; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); imsmosgqcqgeksws: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; omqkeukuycyymmke: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto wwuiwkkgqescsyyw; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); wwuiwkkgqescsyyw: wicqcmuwosqwyggg: } oiemkksaoaiyckgi: return $this; } }
