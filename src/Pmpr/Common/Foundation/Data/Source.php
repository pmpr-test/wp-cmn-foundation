<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Traits\HookTrait; class Source extends Data { protected $src = false; protected $enqueue = true; protected array $attrs = []; protected string $handle = ''; protected $version = false; protected ?string $inline = ''; protected string $media = "\x61\154\x6c"; protected bool $enqueued = false; protected ?string $after = null; protected bool $inFooter = true; protected array $dependencies = []; protected string $type = Constants::qssgasiyswwaciwc; protected int $priority = 50; public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = Constants::qssgasiyswwaciwc) { $this->src = $ogomymegcoacqisg; $this->type = $sqeykgyoooqysmca; $this->handle = $eueuqacmukymcyya; if ($this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\163\157\165\x72\143\x65\137\x61\x75\164\x6f\137\x70\162\x65\154\157\x61\x64", false)) { $this->ogiyyuwciysokiuc(); } } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ogiyyuwciysokiuc() : self { if ($this->askiscciokoegcqs()) { $this->yiuoscqaekcgiyuy("\x64\x65\146\x65\x72", true); } else { $this->yiuoscqaekcgiyuy("\x61\163", "\x73\164\171\x6c\x65")->yiuoscqaekcgiyuy("\162\x65\154", "\160\162\145\154\x6f\141\x64")->yiuoscqaekcgiyuy("\157\x6e\x6c\157\x61\144", "\164\x68\x69\163\56\x6f\x6e\x6c\x6f\141\x64\75\156\x75\154\154\73\x74\x68\x69\x73\x2e\162\x65\154\75\x27\163\x74\x79\x6c\145\x73\x68\x65\145\164\47"); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ooweqosmskyoiauc($swqimwqeweekeusq->uuccukgasskgimsq("\x6e\x6f\x73\143\162\151\x70\x74", [], $swqimwqeweekeusq->yuawgssgauywkiia('', $this->mgaeeqsgeoukeokc(), ["\x69\144" => $this->yoickwcyekiwiyqm(), "\162\145\x6c" => "\x73\x74\171\154\145\x73\x68\145\x65\x74"], "\x6c\151\156\153"))); } return $this; } public function gyimessawacmacwi() : bool { return $this->enqueued; } public function gogiqycisqygoagk() : self { $this->enqueued = true; return $this; } public function askiscciokoegcqs() : bool { return Constants::qssgasiyswwaciwc === $this->gueasuouwqysmomu(); } public function cisyiemkeykgkomc() : string { return "{$this->gueasuouwqysmomu()}\137{$this->yoickwcyekiwiyqm()}"; } public function qcumqiyomwauswqu() : bool { return !empty($this->aoamooyyyuyiwuoq()) || !empty($this->iqowoeuikoyckekq()); } public function mgaeeqsgeoukeokc() { return $this->src; } public function sseugukgueoiqega($ogomymegcoacqisg) : self { $this->src = $ogomymegcoacqisg; return $this; } public function yoickwcyekiwiyqm() : string { return $this->handle; } public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self { $this->handle = $eueuqacmukymcyya; return $this; } public function gikwwgqmwccescgy() { return $this->version; } public function aasasueowyemuyoc($kqagasmwymmuiksq) { $this->version = $kqagasmwymmuiksq; return $this; } public function acskcgywyymegikq() : string { return $this->media; } public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self { $this->media = $qsmqqqccagyuaiso; return $this; } public function mequouugayiseiei() : bool { return $this->inFooter; } public function mimekgmssueakiwu(bool $siucegisggggeiei) : self { $this->inFooter = $siucegisggggeiei; return $this; } public function auskmiuqesyqemgc() : array { return $this->dependencies; } public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self { if (!in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc(), true)) { $this->dependencies[] = $yeiguwcugmswcysy; } return $this; } public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self { foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) { $this->ayuciigykaswwqeo($yeiguwcugmswcysy); } return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self { $this->enqueue = $wgcyssuyaqysoqya; return $this; } public function eeiaogaokoekgmeq() { return $this->enqueue; } public function simqeemkoyaqkkwe() : bool { $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq(); if (is_callable($wgcyssuyaqysoqya)) { $wgcyssuyaqysoqya = $wgcyssuyaqysoqya(); } return (bool) $wgcyssuyaqysoqya; } public function mmoosseiswcigswg() : ?string { return $this->inline; } public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function ooweqosmskyoiauc(?string $ewgwqamkygiqaawc, bool $moyaaaascoeowegu = false) : self { if ($moyaaaascoeowegu) { $this->after = $ewgwqamkygiqaawc; } else { $this->after .= $ewgwqamkygiqaawc; } return $this; } public function iqowoeuikoyckekq() : ?string { return $this->after; } public function ssimwwmyuyyimmug() : bool { return !empty($this->mmoosseiswcigswg()); } public function render() { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $kqywgoqsmuswammk = ''; switch ($this->gueasuouwqysmomu()) { case Constants::wwukgkqwyakeqwqk: $kqywgoqsmuswammk = Constants::ogigqueukwysusii; $wwgucssaecqekuek["\x68\x72\145\x66"] = $this->mgaeeqsgeoukeokc(); break; case Constants::qssgasiyswwaciwc: $kqywgoqsmuswammk = Constants::qssgasiyswwaciwc; $wwgucssaecqekuek["\163\162\x63"] = $this->mgaeeqsgeoukeokc(); break; } $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->cisyiemkeykgkomc(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek); } public function uyueeqikkkecakge(string $eueuqacmukymcyya) : self { $yykoaiyakemcoqiu = pr_get_foundation(); $this->ayuciigykaswwqeo($yykoaiyakemcoqiu->caokeucsksukesyo()->usugyumcgeaaowsi()->yomasssaasmawcso($yykoaiyakemcoqiu, $eueuqacmukymcyya)); return $this; } public function qcgcugswouueymok() : self { $this->uyueeqikkkecakge("\x69\x6e\154\151\156\145")->uyueeqikkkecakge("\x69\x6e\x6c\x69\x6e\x65\55\150\x65\x6c\x70\x65\162"); return $this; } public function simswskycwagoeqy() : self { $this->ayuciigykaswwqeo("\152\161\x75\145\162\x79")->uyueeqikkkecakge("\147\154\x6f\142\x61\x6c"); return $this; } public function okawmmwsiuauwsiu($wuomgsuaoscwgsmq = Constants::ygoseweigiigswiu) : self { $eueuqacmukymcyya = "\150\x65\154\160\145\162"; $this->uyueeqikkkecakge($eueuqacmukymcyya); if (in_array($wuomgsuaoscwgsmq, [Constants::iickqyckyaqcaokm, Constants::qiaqeaemuukkikmi], true)) { $eueuqacmukymcyya = $wuomgsuaoscwgsmq . "\55" . $eueuqacmukymcyya; $this->uyueeqikkkecakge($eueuqacmukymcyya); } return $this; } }
