<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\FormGenerator\Field; trait FieldsTrait { protected array $fields = []; public function ugmceccgwaaaigiy() : array { return $this->fields; } public function ygwimyogyaqgumam(string $aokagokqyuysuksm) : ?Field { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->fields, $aokagokqyuysuksm); } public function iqoyuqgssusgimwa() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self { $this->fields = $ikgwqyuyckaewsow; return $this; } public function iesuwqcaeswgqeqk(string $eywayoukkqcgaski) : self { unset($this->fields[$eywayoukkqcgaski]); return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto mawsaauyquacosus; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); mawsaauyquacosus: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto symwoekuwqcmowwo; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); symwoekuwqcmowwo: makqqsaegsesgquq: } cwkwkgkqasguwscg: return $this; } }
