<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto yckkwcimmakkieos; } $cciauwuwuqaywgce->ggiaseqygioygumq($this->mwikyscisascoeea() . $cciauwuwuqaywgce->mwikyscisascoeea()); if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto gecywkyeskagueqm; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); gecywkyeskagueqm: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; yckkwcimmakkieos: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto wcgoiisqmmawuiag; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); wcgoiisqmmawuiag: oqkcuegyumswqekg: } ekwmcssqowkcoyci: return $this; } }
