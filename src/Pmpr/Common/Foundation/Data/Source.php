<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6780382025b61             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Traits\HookTrait; class Source extends Data { protected $src = false; protected $enqueue = true; protected array $attrs = []; protected string $handle = ''; protected $version = false; protected ?string $inline = ''; protected string $media = "\141\x6c\154"; protected bool $enqueued = false; protected ?string $after = null; protected bool $inFooter = true; protected array $dependencies = []; protected string $type = Constants::qssgasiyswwaciwc; protected int $priority = 50; public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = Constants::qssgasiyswwaciwc) { $this->src = $ogomymegcoacqisg; $this->type = $sqeykgyoooqysmca; $this->handle = $eueuqacmukymcyya; if ($this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\163\x6f\x75\162\x63\x65\x5f\x61\165\x74\157\x5f\x70\162\x65\154\157\141\x64", false)) { $this->ogiyyuwciysokiuc(); } } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ogiyyuwciysokiuc() : self { if ($this->askiscciokoegcqs()) { $this->yiuoscqaekcgiyuy("\x64\x65\146\x65\162", true); } else { $this->yiuoscqaekcgiyuy("\141\x73", "\x73\x74\171\154\145")->yiuoscqaekcgiyuy("\162\x65\154", "\x70\x72\x65\x6c\x6f\x61\144")->yiuoscqaekcgiyuy("\x6f\x6e\154\x6f\x61\x64", "\164\150\x69\x73\x2e\157\x6e\154\157\x61\144\75\156\x75\x6c\154\x3b\164\150\151\163\56\162\x65\x6c\75\47\x73\x74\x79\154\x65\163\x68\145\x65\164\47"); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ooweqosmskyoiauc($swqimwqeweekeusq->uuccukgasskgimsq("\x6e\157\x73\x63\162\151\160\x74", [], $swqimwqeweekeusq->yuawgssgauywkiia('', $this->mgaeeqsgeoukeokc(), ["\151\144" => $this->yoickwcyekiwiyqm(), "\x72\145\x6c" => "\x73\x74\x79\x6c\145\x73\x68\145\x65\164"], "\154\151\156\153"))); } return $this; } public function gyimessawacmacwi() : bool { return $this->enqueued; } public function gogiqycisqygoagk() : self { $this->enqueued = true; return $this; } public function askiscciokoegcqs() : bool { return Constants::qssgasiyswwaciwc === $this->gueasuouwqysmomu(); } public function cisyiemkeykgkomc() : string { return "{$this->gueasuouwqysmomu()}\137{$this->yoickwcyekiwiyqm()}"; } public function qcumqiyomwauswqu() : bool { return !empty($this->aoamooyyyuyiwuoq()) || !empty($this->iqowoeuikoyckekq()); } public function mgaeeqsgeoukeokc() { return $this->src; } public function sseugukgueoiqega($ogomymegcoacqisg) : self { $this->src = $ogomymegcoacqisg; return $this; } public function yoickwcyekiwiyqm() : string { return $this->handle; } public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self { $this->handle = $eueuqacmukymcyya; return $this; } public function gikwwgqmwccescgy() { return $this->version; } public function aasasueowyemuyoc($kqagasmwymmuiksq) { $this->version = $kqagasmwymmuiksq; return $this; } public function acskcgywyymegikq() : string { return $this->media; } public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self { $this->media = $qsmqqqccagyuaiso; return $this; } public function mequouugayiseiei() : bool { return $this->inFooter; } public function mimekgmssueakiwu(bool $siucegisggggeiei) : self { $this->inFooter = $siucegisggggeiei; return $this; } public function auskmiuqesyqemgc() : array { return $this->dependencies; } public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self { if (!in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc(), true)) { $this->dependencies[] = $yeiguwcugmswcysy; } return $this; } public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self { foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) { $this->ayuciigykaswwqeo($yeiguwcugmswcysy); } return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self { $this->enqueue = $wgcyssuyaqysoqya; return $this; } public function eeiaogaokoekgmeq() { return $this->enqueue; } public function simqeemkoyaqkkwe() : bool { $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq(); if (is_callable($wgcyssuyaqysoqya)) { $wgcyssuyaqysoqya = $wgcyssuyaqysoqya(); } return (bool) $wgcyssuyaqysoqya; } public function mmoosseiswcigswg() : ?string { return $this->inline; } public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function ooweqosmskyoiauc(?string $ewgwqamkygiqaawc, bool $moyaaaascoeowegu = false) : self { if ($moyaaaascoeowegu) { $this->after = $ewgwqamkygiqaawc; } else { $this->after .= $ewgwqamkygiqaawc; } return $this; } public function iqowoeuikoyckekq() : ?string { return $this->after; } public function ssimwwmyuyyimmug() : bool { return !empty($this->mmoosseiswcigswg()); } public function render() { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $kqywgoqsmuswammk = ''; switch ($this->gueasuouwqysmomu()) { case Constants::wwukgkqwyakeqwqk: $kqywgoqsmuswammk = Constants::ogigqueukwysusii; $wwgucssaecqekuek["\x68\x72\x65\146"] = $this->mgaeeqsgeoukeokc(); break; case Constants::qssgasiyswwaciwc: $kqywgoqsmuswammk = Constants::qssgasiyswwaciwc; $wwgucssaecqekuek["\163\x72\x63"] = $this->mgaeeqsgeoukeokc(); break; } $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->cisyiemkeykgkomc(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek); } public function uyueeqikkkecakge(string $eueuqacmukymcyya) : self { $yykoaiyakemcoqiu = pr_get_foundation(); $this->ayuciigykaswwqeo($yykoaiyakemcoqiu->caokeucsksukesyo()->usugyumcgeaaowsi()->yomasssaasmawcso($yykoaiyakemcoqiu, $eueuqacmukymcyya)); return $this; } public function qcgcugswouueymok() : self { $this->uyueeqikkkecakge("\151\x6e\x6c\151\156\145")->uyueeqikkkecakge("\x69\156\x6c\x69\156\145\x2d\x68\x65\154\160\x65\162"); return $this; } public function simswskycwagoeqy() : self { $this->ayuciigykaswwqeo("\x6a\161\165\145\162\171")->uyueeqikkkecakge("\147\x6c\x6f\x62\x61\154"); return $this; } public function okawmmwsiuauwsiu($wuomgsuaoscwgsmq = Constants::ygoseweigiigswiu) : self { $eueuqacmukymcyya = "\150\x65\x6c\160\145\x72"; $this->uyueeqikkkecakge($eueuqacmukymcyya); if (in_array($wuomgsuaoscwgsmq, [Constants::iickqyckyaqcaokm, Constants::qiaqeaemuukkikmi], true)) { $eueuqacmukymcyya = $wuomgsuaoscwgsmq . "\55" . $eueuqacmukymcyya; $this->uyueeqikkkecakge($eueuqacmukymcyya); } return $this; } }
