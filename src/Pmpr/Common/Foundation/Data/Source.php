<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Asset\Manager; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Foundation; use Pmpr\Common\Foundation\Traits\HookTrait; class Source extends Data { protected $src = false; protected $enqueue = true; protected array $attrs = []; protected string $handle = ''; protected $version = false; protected ?string $inline = ''; protected string $media = "\141\154\x6c"; protected bool $enqueued = false; protected ?string $after = null; protected bool $inFooter = true; protected array $dependencies = []; protected string $type = Constants::qssgasiyswwaciwc; protected int $priority = 50; public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = Constants::qssgasiyswwaciwc) { $this->src = $ogomymegcoacqisg; $this->type = $sqeykgyoooqysmca; $this->handle = $eueuqacmukymcyya; if (!$this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x73\157\165\x72\143\145\x5f\x61\165\x74\157\x5f\x70\162\x65\154\157\x61\144", false)) { goto kouykoaqsyamwkow; } $this->ogiyyuwciysokiuc(); kouykoaqsyamwkow: } public function yywskysiycwkwsgw() : int { return $this->priority; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function ogiyyuwciysokiuc() : self { if ($this->askiscciokoegcqs()) { goto miigyyocoaqouyws; } $this->yiuoscqaekcgiyuy("\x61\163", "\163\x74\x79\154\145")->yiuoscqaekcgiyuy("\162\145\154", "\160\162\x65\x6c\x6f\x61\x64")->yiuoscqaekcgiyuy("\157\x6e\x6c\x6f\141\144", "\x74\150\151\163\56\x6f\156\x6c\157\141\144\x3d\156\165\154\154\x3b\x74\150\x69\163\56\162\x65\154\75\47\x73\164\171\x6c\x65\163\x68\x65\x65\164\47"); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $this->ooweqosmskyoiauc($swqimwqeweekeusq->uuccukgasskgimsq("\156\157\x73\143\162\x69\160\164", [], $swqimwqeweekeusq->yuawgssgauywkiia('', $this->mgaeeqsgeoukeokc(), ["\x69\x64" => $this->yoickwcyekiwiyqm(), "\x72\145\x6c" => "\x73\x74\x79\x6c\145\163\150\x65\x65\164"], "\x6c\151\156\x6b"))); goto oyiogyamekukoqce; miigyyocoaqouyws: $this->yiuoscqaekcgiyuy("\x64\145\146\145\162", true); oyiogyamekukoqce: return $this; } public function gyimessawacmacwi() : bool { return $this->enqueued; } public function gogiqycisqygoagk() : self { $this->enqueued = true; return $this; } public function askiscciokoegcqs() : bool { return Constants::qssgasiyswwaciwc === $this->gueasuouwqysmomu(); } public function cisyiemkeykgkomc() : string { return "{$this->gueasuouwqysmomu()}\137{$this->yoickwcyekiwiyqm()}"; } public function qcumqiyomwauswqu() : bool { return !empty($this->aoamooyyyuyiwuoq()) || !empty($this->iqowoeuikoyckekq()); } public function mgaeeqsgeoukeokc() { return $this->src; } public function sseugukgueoiqega($ogomymegcoacqisg) : self { $this->src = $ogomymegcoacqisg; return $this; } public function yoickwcyekiwiyqm() : string { return $this->handle; } public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self { $this->handle = $eueuqacmukymcyya; return $this; } public function gikwwgqmwccescgy() { return $this->version; } public function aasasueowyemuyoc($kqagasmwymmuiksq) { $this->version = $kqagasmwymmuiksq; return $this; } public function acskcgywyymegikq() : string { return $this->media; } public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self { $this->media = $qsmqqqccagyuaiso; return $this; } public function mequouugayiseiei() : bool { return $this->inFooter; } public function mimekgmssueakiwu(bool $siucegisggggeiei) : self { $this->inFooter = $siucegisggggeiei; return $this; } public function auskmiuqesyqemgc() : array { return $this->dependencies; } public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self { if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc(), true)) { goto cwaksqcggwcaucmo; } $this->dependencies[] = $yeiguwcugmswcysy; cwaksqcggwcaucmo: return $this; } public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self { foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) { $this->ayuciigykaswwqeo($yeiguwcugmswcysy); mycaymeeoakigqwk: } yymmsiqcoeikoges: return $this; } public function gueasuouwqysmomu() : string { return $this->type; } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self { $this->enqueue = $wgcyssuyaqysoqya; return $this; } public function eeiaogaokoekgmeq() { return $this->enqueue; } public function simqeemkoyaqkkwe() : bool { $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq(); if (!is_callable($wgcyssuyaqysoqya)) { goto wosiwcgiequysoiq; } $wgcyssuyaqysoqya = $wgcyssuyaqysoqya(); wosiwcgiequysoiq: return (bool) $wgcyssuyaqysoqya; } public function mmoosseiswcigswg() : ?string { return $this->inline; } public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aoamooyyyuyiwuoq() : array { return $this->attrs; } public function ooweqosmskyoiauc(?string $ewgwqamkygiqaawc, bool $moyaaaascoeowegu = false) : self { if ($moyaaaascoeowegu) { goto ecicsgkwsukqmquo; } $this->after .= $ewgwqamkygiqaawc; goto cqkkmgicucyoeqca; ecicsgkwsukqmquo: $this->after = $ewgwqamkygiqaawc; cqkkmgicucyoeqca: return $this; } public function iqowoeuikoyckekq() : ?string { return $this->after; } public function ssimwwmyuyyimmug() : bool { return !empty($this->mmoosseiswcigswg()); } public function render() { $wwgucssaecqekuek = $this->aoamooyyyuyiwuoq(); $kqywgoqsmuswammk = ''; switch ($this->gueasuouwqysmomu()) { case Constants::wwukgkqwyakeqwqk: $kqywgoqsmuswammk = Constants::ogigqueukwysusii; $wwgucssaecqekuek["\150\162\x65\x66"] = $this->mgaeeqsgeoukeokc(); goto iiymmyommkikmyqa; case Constants::qssgasiyswwaciwc: $kqywgoqsmuswammk = Constants::qssgasiyswwaciwc; $wwgucssaecqekuek["\163\162\x63"] = $this->mgaeeqsgeoukeokc(); goto iiymmyommkikmyqa; } oicqseawwmwcgsua: iiymmyommkikmyqa: $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = $this->cisyiemkeykgkomc(); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek); } public function uyueeqikkkecakge(string $eueuqacmukymcyya) : self { $iikyogyaiwyueukk = Foundation::symcgieuakksimmu()->miocmcoykayoyyau(); $this->ayuciigykaswwqeo($iikyogyaiwyueukk->yomasssaasmawcso($eueuqacmukymcyya)); return $this; } public function qcgcugswouueymok() : self { $this->uyueeqikkkecakge("\x69\x6e\154\x69\x6e\x65")->uyueeqikkkecakge("\151\x6e\154\151\x6e\145\55\150\145\x6c\160\x65\162"); return $this; } public function simswskycwagoeqy() : self { $this->ayuciigykaswwqeo("\x6a\x71\165\145\162\x79")->uyueeqikkkecakge("\147\154\157\x62\141\154"); return $this; } public function okawmmwsiuauwsiu($wuomgsuaoscwgsmq = Constants::ygoseweigiigswiu) : self { $eueuqacmukymcyya = "\150\145\x6c\x70\145\x72"; $this->uyueeqikkkecakge($eueuqacmukymcyya); if (!in_array($wuomgsuaoscwgsmq, [Constants::iickqyckyaqcaokm, Constants::qiaqeaemuukkikmi], true)) { goto mqkkmgeccukekuus; } $eueuqacmukymcyya = $wuomgsuaoscwgsmq . "\55" . $eueuqacmukymcyya; $this->uyueeqikkkecakge($eueuqacmukymcyya); mqkkmgeccukekuus: return $this; } }
