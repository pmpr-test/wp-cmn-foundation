<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Traits\HookTrait; class Source extends Data { protected $src = false; protected $enqueue = true; protected array $attrs = []; protected string $handle = ''; protected $version = false; protected ?string $inline = ''; protected string $media = "\x61\x6c\154"; protected bool $enqueued = false; protected ?string $after = null; protected bool $inFooter = true; protected array $dependencies = []; protected string $type = Constants::qssgasiyswwaciwc; protected int $priority = 50; public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = Constants::qssgasiyswwaciwc) { $this->src = $ogomymegcoacqisg; $this->type = $sqeykgyoooqysmca; $this->handle = $eueuqacmukymcyya; if (!$this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x73\157\x75\x72\x63\145\137\x61\165\164\157\x5f\x70\x72\x65\x6c\x6f\141\x64", false)) { goto uukskyequmqsieuk; } $this->ogiyyuwciysokiuc(); uukskyequmqsieuk: } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ogiyyuwciysokiuc() : self { if ($this->askiscciokoegcqs()) { goto eaqoyysesmoykmqa; } $this->yiuoscqaekcgiyuy("\141\x73", "\163\164\171\154\145")->yiuoscqaekcgiyuy("\162\x65\x6c", "\160\162\145\154\x6f\141\144")->yiuoscqaekcgiyuy("\x6f\156\154\x6f\141\x64", "\x74\150\x69\163\56\x6f\x6e\154\x6f\x61\x64\x3d\x6e\165\x6c\154\73\x74\x68\151\x73\x2e\162\145\154\75\x27\163\x74\x79\x6c\x65\x73\x68\x65\x65\164\x27"); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ooweqosmskyoiauc($swqimwqeweekeusq->uuccukgasskgimsq("\x6e\x6f\x73\143\162\151\160\164", [], $swqimwqeweekeusq->yuawgssgauywkiia('', $this->mgaeeqsgeoukeokc(), ["\151\x64" => $this->yoickwcyekiwiyqm(), "\x72\145\x6c" => "\163\164\x79\154\x65\x73\x68\145\x65\164"], "\x6c\151\156\153"))); goto ckicaukcwwiukieg; eaqoyysesmoykmqa: $this->yiuoscqaekcgiyuy("\144\x65\146\145\162", true); ckicaukcwwiukieg: return $this; } public function gyimessawacmacwi() : bool { return $this->enqueued; } public function gogiqycisqygoagk() : self { $this->enqueued = true; return $this; } public function askiscciokoegcqs() : bool { return Constants::qssgasiyswwaciwc === $this->gueasuouwqysmomu(); } public function cisyiemkeykgkomc() : string { return "{$this->gueasuouwqysmomu()}\x5f{$this->yoickwcyekiwiyqm()}"; } public function qcumqiyomwauswqu() : bool { return !empty($this->aoamooyyyuyiwuoq()) || !empty($this->iqowoeuikoyckekq()); } public function mgaeeqsgeoukeokc() { return $this->src; } public function sseugukgueoiqega($ogomymegcoacqisg) : self { $this->src = $ogomymegcoacqisg; return $this; } public function yoickwcyekiwiyqm() : string { return $this->handle; } public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self { $this->handle = $eueuqacmukymcyya; return $this; } public function gikwwgqmwccescgy() { return $this->version; } public function aasasueowyemuyoc($kqagasmwymmuiksq) { $this->version = $kqagasmwymmuiksq; return $this; } public function acskcgywyymegikq() : string { return $this->media; } public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self { $this->media = $qsmqqqccagyuaiso; return $this; } public function mequouugayiseiei() : bool { return $this->inFooter; } public function mimekgmssueakiwu(bool $siucegisggggeiei) : self { $this->inFooter = $siucegisggggeiei; return $this; } public function auskmiuqesyqemgc() : array { return $this->dependencies; } public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self { if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc(), true)) { goto ooeaciyoeskuouqi; } $this->dependencies[] = $yeiguwcugmswcysy; ooeaciyoeskuouqi: return $this; } public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self { foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) { $this->ayuciigykaswwqeo($yeiguwcugmswcysy); iqcwoosugwmkmcas: } eqkakgkyqqaewqiu: return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self { $this->enqueue = $wgcyssuyaqysoqya; return $this; } public function eeiaogaokoekgmeq() { return $this->enqueue; } public function simqeemkoyaqkkwe() : bool { $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq(); if (!is_callable($wgcyssuyaqysoqya)) { goto uaymiioykwgkmoeo; } $wgcyssuyaqysoqya = $wgcyssuyaqysoqya(); uaymiioykwgkmoeo: return (bool) $wgcyssuyaqysoqya; } public function mmoosseiswcigswg() : ?string { return $this->inline; } public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function ooweqosmskyoiauc(?string $ewgwqamkygiqaawc, bool $moyaaaascoeowegu = false) : self { if ($moyaaaascoeowegu) { goto yemciswoecayuoga; } $this->after .= $ewgwqamkygiqaawc; goto mumegakqsumekgcs; yemciswoecayuoga: $this->after = $ewgwqamkygiqaawc; mumegakqsumekgcs: return $this; } public function iqowoeuikoyckekq() : ?string { return $this->after; } public function ssimwwmyuyyimmug() : bool { return !empty($this->mmoosseiswcigswg()); } public function render() { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $kqywgoqsmuswammk = ''; switch ($this->gueasuouwqysmomu()) { case Constants::wwukgkqwyakeqwqk: $kqywgoqsmuswammk = Constants::ogigqueukwysusii; $wwgucssaecqekuek["\150\162\145\146"] = $this->mgaeeqsgeoukeokc(); goto iqgqagswgiwgksco; case Constants::qssgasiyswwaciwc: $kqywgoqsmuswammk = Constants::qssgasiyswwaciwc; $wwgucssaecqekuek["\163\162\143"] = $this->mgaeeqsgeoukeokc(); goto iqgqagswgiwgksco; } swcmoacumikkuwma: iqgqagswgiwgksco: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->cisyiemkeykgkomc(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek); } public function uyueeqikkkecakge(string $eueuqacmukymcyya) : self { $iikyogyaiwyueukk = Foundation::symcgieuakksimmu()->miocmcoykayoyyau(); $this->ayuciigykaswwqeo($iikyogyaiwyueukk->yomasssaasmawcso($eueuqacmukymcyya)); return $this; } public function qcgcugswouueymok() : self { $this->uyueeqikkkecakge("\151\156\x6c\151\156\x65")->uyueeqikkkecakge("\151\x6e\x6c\x69\156\x65\x2d\x68\x65\x6c\x70\145\x72"); return $this; } public function simswskycwagoeqy() : self { $this->ayuciigykaswwqeo("\x6a\161\x75\x65\162\171")->uyueeqikkkecakge("\147\154\157\x62\x61\154"); return $this; } public function okawmmwsiuauwsiu($wuomgsuaoscwgsmq = Constants::ygoseweigiigswiu) : self { $eueuqacmukymcyya = "\x68\145\x6c\x70\x65\x72"; $this->uyueeqikkkecakge($eueuqacmukymcyya); if (!in_array($wuomgsuaoscwgsmq, [Constants::iickqyckyaqcaokm, Constants::qiaqeaemuukkikmi], true)) { goto agugmwweyecagkue; } $eueuqacmukymcyya = $wuomgsuaoscwgsmq . "\x2d" . $eueuqacmukymcyya; $this->uyueeqikkkecakge($eueuqacmukymcyya); agugmwweyecagkue: return $this; } }
