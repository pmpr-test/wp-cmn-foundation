<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Common; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\ORM\Register; class View extends Common { protected ?string $name = ''; protected array $args = []; protected ?Model $model = null; protected array $columns = []; protected bool $initialized = false; public function __construct(Model $meywaqqsugaoeyys = null, $ywmkwiwkosakssii = []) { if (!$meywaqqsugaoeyys) { goto wkeuuycukmuqiaom; } $this->model = $meywaqqsugaoeyys; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis(); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $yyksucsgisomecgg->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\162\x6d\137\166\151\145\x77\x5f\x63\141\x70\x61\x62\x69\154\x69\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $yyksucsgisomecgg->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => 0, Constants::ciwqeuoqqskekckk => true]); parent::__construct(); wkeuuycukmuqiaom: } public function wigskegsqequoeks() { $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\162\145\156\164\x5f\163\154\165\x67"); $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\156\x69\164"])->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x69\x6e\151\164", [$this, "\171\x65\171\151\147\x75\x79\x65\147\x6d\x6d\x79\x75\x73\145\141"])->qcsmikeggeemccuu("\143\165\162\162\145\156\164\137\x73\143\x72\x65\x65\x6e", [$this, "\x6d\x63\x6d\x73\143\143\x69\171\165\153\141\165\x65\163\x61\165"])->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\155\x65\156\x75", [$this, "\145\x75\161\x67\167\151\163\x63\x77\x67\161\x6b\x71\x6b\145\143"], $wgaiuiysuegayseo ? 11 : 12); parent::wigskegsqequoeks(); } public function oyeskqayoscwciem() : Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function ukimmgwaaymwayws() : ?bool { return $this->initialized; } public function init() { } public function mcmscciyukauesau() { } public function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->aqcogscycyycgkuq()); } public function swsoqemyygecmsao() : bool { return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw(); } public function yeyiguyegmmyusea() { if (!$this->swsoqemyygecmsao()) { goto wakmayaoqoskekqy; } $this->ewcsyqaaigkicgse("\142\x65\x66\157\162\145\137\x69\x6e\x69\164\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}", $this); $this->mqyuagguukgcoeka(); $this->ewcsyqaaigkicgse("\x61\146\x74\145\162\137\x69\x6e\x69\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); wakmayaoqoskekqy: } public function yoqiwysegascakim() { return $this->imkyoqyocosuqasu("\x63\x6f\x6c\x75\155\156\x73", []); } public function syskqukmqoycyswc() { return $this->imkyoqyocosuqasu("\161\x75\x65\x72\151\145\x73", []); } public function gueasuouwqysmomu() { return $this->imkyoqyocosuqasu("\164\x79\x70\x65", "\x63\x75\163\164\157\155"); } public function mgogaykgkoogasim() : Model { return $this->model; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function kooiucqkggeagccu() : ?array { return $this->args; } public function qmgcisuuikgmqcsu() : string { return $this->ekwwgogmwykqggyi($this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->aqcogscycyycgkuq())); } public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string { $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\157\162\x6d\137\166\151\145\167\x5f\x6c\151\156\153\x5f\x71\165\145\162\151\145\163", [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm); if (!$uoomaookgsyciacm) { goto qmuwoecuacmkwgem; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm); qmuwoecuacmkwgem: return $iwywmkygwewiamwm; } public function aqcogscycyycgkuq() { return $this->imkyoqyocosuqasu("\155\x65\x6e\x75\137\163\x6c\x75\x67"); } public function euqgwiscwgqkqkec() { $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\150\x6f\x77\137\151\x6e\137\x6d\x65\x6e\x75"); $ekiuyucoiagmscgy = [$this, "\x72\145\156\x64\x65\162"]; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->ewcsyqaaigkicgse("\x6f\x72\155\137\x76\151\145\x77\137\x61\144\x64\x5f\x6d\145\x6e\x75\x5f{$sqeykgyoooqysmca}", $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $meywaqqsugaoeyys); if (!$cyiwaggmwimigmcc) { goto eeauyscekuckoues; } $kuysccmeoqgaiumc = $this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy); if (!(Constants::weiosaewqequuyuq === $sqeykgyoooqysmca && $meywaqqsugaoeyys->kcsywgyywsgqgawm())) { goto mwsmsguqqkcwiiuk; } $gaeqamemwmwsyukm = $meywaqqsugaoeyys->gmamcycwuyiawksk(); if (!($gaeqamemwmwsyukm > 0)) { goto owmuceyswmgueasi; } $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)); owmuceyswmgueasi: mwsmsguqqkcwiiuk: $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks), Constants::ysgwugcqguggmigq => $this->imkyoqyocosuqasu(Constants::ysgwugcqguggmigq), Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::ucmueuwwcmocgmig => $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig), Constants::wwgusigoaksqmwsm => $ekiuyucoiagmscgy, Constants::wuowaiyouwecckaw => $this->aqcogscycyycgkuq(), Constants::gqmskcacocowcwaw => $this->imkyoqyocosuqasu(Constants::uqaoisqcoykyycwe), Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::yiuwgggacagyeqmo)]); eeauyscekuckoues: } public function render() { $this->ewcsyqaaigkicgse("\162\x65\x6e\144\145\162\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { } public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool { $aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get(explode("\x5f\160\x61\147\x65\137", $gcgsqcoqciockquc->id), 1); return $aaokuekaimigoyue && $aaokuekaimigoyue === $this->aqcogscycyycgkuq(); } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\x61\x73\x73" => "\x69\143\157\x6e\55\x6c\147"], true); } }
