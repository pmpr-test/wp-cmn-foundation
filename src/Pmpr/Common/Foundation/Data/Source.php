<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbcd2165a5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Traits\HookTrait; class Source extends Data { protected $src = false; protected $enqueue = true; protected array $attrs = []; protected string $handle = ''; protected $version = false; protected ?string $inline = ''; protected string $media = "\141\154\x6c"; protected bool $enqueued = false; protected ?string $after = null; protected bool $inFooter = true; protected array $dependencies = []; protected string $type = Constants::qssgasiyswwaciwc; protected int $priority = 50; public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = Constants::qssgasiyswwaciwc) { $this->src = $ogomymegcoacqisg; $this->type = $sqeykgyoooqysmca; $this->handle = $eueuqacmukymcyya; if ($this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\163\157\165\162\x63\x65\x5f\x61\x75\x74\157\137\x70\x72\145\x6c\x6f\141\x64", false)) { $this->ogiyyuwciysokiuc(); } } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ogiyyuwciysokiuc() : self { if ($this->askiscciokoegcqs()) { $this->yiuoscqaekcgiyuy("\144\145\x66\x65\x72", true); } else { $this->yiuoscqaekcgiyuy("\141\163", "\x73\x74\x79\154\145")->yiuoscqaekcgiyuy("\162\145\x6c", "\x70\x72\145\154\157\141\144")->yiuoscqaekcgiyuy("\x6f\156\154\x6f\x61\x64", "\x74\x68\x69\163\56\157\156\x6c\x6f\x61\144\x3d\156\x75\154\154\73\164\150\151\163\56\162\145\154\75\x27\163\164\x79\154\x65\163\x68\x65\145\x74\47"); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ooweqosmskyoiauc($swqimwqeweekeusq->uuccukgasskgimsq("\156\157\x73\x63\x72\151\x70\164", [], $swqimwqeweekeusq->yuawgssgauywkiia('', $this->mgaeeqsgeoukeokc(), ["\151\144" => $this->yoickwcyekiwiyqm(), "\162\145\154" => "\163\164\x79\154\x65\x73\150\x65\145\x74"], "\154\151\x6e\x6b"))); } return $this; } public function gyimessawacmacwi() : bool { return $this->enqueued; } public function gogiqycisqygoagk() : self { $this->enqueued = true; return $this; } public function askiscciokoegcqs() : bool { return Constants::qssgasiyswwaciwc === $this->gueasuouwqysmomu(); } public function cisyiemkeykgkomc() : string { return "{$this->gueasuouwqysmomu()}\137{$this->yoickwcyekiwiyqm()}"; } public function qcumqiyomwauswqu() : bool { return !empty($this->aoamooyyyuyiwuoq()) || !empty($this->iqowoeuikoyckekq()); } public function mgaeeqsgeoukeokc() { return $this->src; } public function sseugukgueoiqega($ogomymegcoacqisg) : self { $this->src = $ogomymegcoacqisg; return $this; } public function yoickwcyekiwiyqm() : string { return $this->handle; } public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self { $this->handle = $eueuqacmukymcyya; return $this; } public function gikwwgqmwccescgy() { return $this->version; } public function aasasueowyemuyoc($kqagasmwymmuiksq) { $this->version = $kqagasmwymmuiksq; return $this; } public function acskcgywyymegikq() : string { return $this->media; } public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self { $this->media = $qsmqqqccagyuaiso; return $this; } public function mequouugayiseiei() : bool { return $this->inFooter; } public function mimekgmssueakiwu(bool $siucegisggggeiei) : self { $this->inFooter = $siucegisggggeiei; return $this; } public function auskmiuqesyqemgc() : array { return $this->dependencies; } public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self { if (!in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc(), true)) { $this->dependencies[] = $yeiguwcugmswcysy; } return $this; } public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self { foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) { $this->ayuciigykaswwqeo($yeiguwcugmswcysy); } return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self { $this->enqueue = $wgcyssuyaqysoqya; return $this; } public function eeiaogaokoekgmeq() { return $this->enqueue; } public function simqeemkoyaqkkwe() : bool { $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq(); if (is_callable($wgcyssuyaqysoqya)) { $wgcyssuyaqysoqya = $wgcyssuyaqysoqya(); } return (bool) $wgcyssuyaqysoqya; } public function mmoosseiswcigswg() : ?string { return $this->inline; } public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function ooweqosmskyoiauc(?string $ewgwqamkygiqaawc, bool $moyaaaascoeowegu = false) : self { if ($moyaaaascoeowegu) { $this->after = $ewgwqamkygiqaawc; } else { $this->after .= $ewgwqamkygiqaawc; } return $this; } public function iqowoeuikoyckekq() : ?string { return $this->after; } public function ssimwwmyuyyimmug() : bool { return !empty($this->mmoosseiswcigswg()); } public function render() { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $kqywgoqsmuswammk = ''; switch ($this->gueasuouwqysmomu()) { case Constants::wwukgkqwyakeqwqk: $kqywgoqsmuswammk = Constants::ogigqueukwysusii; $wwgucssaecqekuek["\150\162\x65\x66"] = $this->mgaeeqsgeoukeokc(); break; case Constants::qssgasiyswwaciwc: $kqywgoqsmuswammk = Constants::qssgasiyswwaciwc; $wwgucssaecqekuek["\x73\162\143"] = $this->mgaeeqsgeoukeokc(); break; } $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->cisyiemkeykgkomc(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek); } public function uyueeqikkkecakge(string $eueuqacmukymcyya) : self { $iikyogyaiwyueukk = Foundation::symcgieuakksimmu()->miocmcoykayoyyau(); $this->ayuciigykaswwqeo($iikyogyaiwyueukk->yomasssaasmawcso($eueuqacmukymcyya)); return $this; } public function qcgcugswouueymok() : self { $this->uyueeqikkkecakge("\151\156\154\x69\x6e\x65")->uyueeqikkkecakge("\x69\156\x6c\x69\x6e\145\55\x68\145\x6c\x70\x65\x72"); return $this; } public function simswskycwagoeqy() : self { $this->ayuciigykaswwqeo("\152\x71\x75\145\162\x79")->uyueeqikkkecakge("\147\154\x6f\142\141\x6c"); return $this; } public function okawmmwsiuauwsiu($wuomgsuaoscwgsmq = Constants::ygoseweigiigswiu) : self { $eueuqacmukymcyya = "\x68\145\x6c\160\x65\162"; $this->uyueeqikkkecakge($eueuqacmukymcyya); if (in_array($wuomgsuaoscwgsmq, [Constants::iickqyckyaqcaokm, Constants::qiaqeaemuukkikmi], true)) { $eueuqacmukymcyya = $wuomgsuaoscwgsmq . "\x2d" . $eueuqacmukymcyya; $this->uyueeqikkkecakge($eueuqacmukymcyya); } return $this; } }
