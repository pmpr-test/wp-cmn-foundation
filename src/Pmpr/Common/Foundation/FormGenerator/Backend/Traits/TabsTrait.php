<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto oqccquoqqkkaqksk; } $cciauwuwuqaywgce->ggiaseqygioygumq($this->mwikyscisascoeea() . $cciauwuwuqaywgce->mwikyscisascoeea()); if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto eyyamwsogeqwamug; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); eyyamwsogeqwamug: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; oqccquoqqkkaqksk: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto someqooawckycwao; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); someqooawckycwao: iougqueaywwucoko: } wouekamwmcuguaoa: return $this; } }
