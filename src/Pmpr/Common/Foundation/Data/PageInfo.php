<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; class PageInfo extends Data { protected ?string $title = ''; protected ?string $type = ''; protected bool $isPaged = false; protected ?string $screen = ''; protected ?string $permalink = ''; protected ?int $priority = 0; protected bool $isCurrent = true; public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk(?int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function asuigsqoowmekwok() : ?string { return $this->screen; } public function ugaqcouwcuiaemgo(?string $gcgsqcoqciockquc) : self { $this->screen = $gcgsqcoqciockquc; return $this; } public function esqicqsuigywkaqw() : bool { return $this->isPaged; } public function cggwsuueqwqscgei(bool $esqicqsuigywkaqw) : self { $this->isPaged = $esqicqsuigywkaqw; return $this; } public function ycqquoiyyuesegsy() : ?string { return $this->permalink; } public function qmueseocuuekommo(?string $migiiksoiymissge) : self { $this->permalink = $migiiksoiymissge; return $this; } public function maycusgiycegmmqs() : bool { return $this->isCurrent; } public function uaomeggmwqmmeoki(bool $maycusgiycegmmqs) : self { $this->isCurrent = $maycusgiycegmmqs; return $this; } public function is($gcgsqcoqciockquc = null, $sqeykgyoooqysmca = null) : bool { return (!$gcgsqcoqciockquc || $this->asuigsqoowmekwok() === $gcgsqcoqciockquc) && (!$sqeykgyoooqysmca || $this->gueasuouwqysmomu() === $sqeykgyoooqysmca); } }
