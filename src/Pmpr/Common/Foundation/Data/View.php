<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; class View extends Data { const woeeycaeoaiwuiac = "\154\x69\163\164\x5f\x76\151\x65\167"; const igqcciosuoyiuwiu = "\x67\x72\151\x64\x5f\166\x69\x65\x77"; protected ?string $name = ''; protected ?string $icon = ''; protected ?string $title = ''; protected ?int $priority = 0; protected bool $isDefault = false; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ayseokmqycoqaigc() : bool { $qqomumygoacsmsie = $this->cgswceaawqgeskua(); return $qqomumygoacsmsie && $this->aakmagwggmkoiiyu() == $qqomumygoacsmsie || !$qqomumygoacsmsie && $this->wcosmascwoyyuimi(); } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk(?int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function wcosmascwoyyuimi() : bool { return $this->isDefault; } public function aagycuaqiaeuaysq(bool $wcosmascwoyyuimi) : self { $this->isDefault = $wcosmascwoyyuimi; return $this; } public function cgswceaawqgeskua() { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(self::woeeycaeoaiwuiac, false); } public function qcaekwgmiswccowk($qqomumygoacsmsie) : bool { return $this->cgswceaawqgeskua() == $qqomumygoacsmsie; } }
