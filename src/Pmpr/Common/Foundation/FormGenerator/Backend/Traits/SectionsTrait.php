<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67802fd4e8b59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Section; trait SectionsTrait { protected array $sections = []; public function suuogccckocgseyg() : array { return $this->sections; } public function kosacuuaeuweoqau($uusmaiomayssaecw) : ?Section { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->suuogccckocgseyg(), $uusmaiomayssaecw); } public function mgwewyykukaawcmo() : bool { return !empty($this->suuogccckocgseyg()); } public function wmwgqekyoiiegcaq(array $mgiqqesweuqmsymo) : self { $this->sections = $mgiqqesweuqmsymo; return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if ($awcmekyiwwkeyisq instanceof Section) { $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); } } return $this; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { if (!$awcmekyiwwkeyisq->yywskysiycwkwsgw()) { $awcmekyiwwkeyisq->jyumyyugiwwiqomk(count($this->suuogccckocgseyg()) + 1); } $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } }
