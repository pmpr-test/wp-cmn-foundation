<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Text extends Schema { public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym('text'); parent::__construct('text', $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, ?Model $meywaqqsugaoeyys) { if (is_string($eqgoocgaqwqcimie) && $meywaqqsugaoeyys && $meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->owgcciayoweymuws()->nl2br($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }); } }