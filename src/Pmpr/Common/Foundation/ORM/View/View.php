<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Common; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\ORM\Register; class View extends Common { protected ?string $name = ''; protected array $args = []; protected ?Model $model = null; protected array $columns = []; protected bool $initialized = false; public function __construct(Model $meywaqqsugaoeyys = null, $ywmkwiwkosakssii = []) { if (!$meywaqqsugaoeyys) { goto ugikgkwuwmgymgus; } $this->model = $meywaqqsugaoeyys; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis(); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $yyksucsgisomecgg->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\x72\x6d\x5f\x76\x69\x65\167\137\x63\x61\160\x61\142\x69\154\151\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $yyksucsgisomecgg->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => 0, Constants::ciwqeuoqqskekckk => true]); parent::__construct(); ugikgkwuwmgymgus: } public function wigskegsqequoeks() { $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\141\162\145\156\x74\x5f\x73\154\165\x67"); $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\x6e\151\164", [$this, "\x79\145\x79\151\147\x75\x79\x65\x67\155\155\x79\165\163\145\x61"])->qcsmikeggeemccuu("\143\x75\x72\x72\x65\156\x74\x5f\163\143\x72\x65\145\156", [$this, "\x6d\143\155\163\x63\x63\151\171\x75\153\141\165\145\163\x61\x75"])->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\137\x6d\x65\156\x75", [$this, "\x65\x75\161\147\x77\x69\x73\x63\x77\147\161\153\161\153\145\143"], $wgaiuiysuegayseo ? 11 : 12); parent::wigskegsqequoeks(); } public function oyeskqayoscwciem() : Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function ukimmgwaaymwayws() : ?bool { return $this->initialized; } public function init() { } public function mcmscciyukauesau() { } public function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->aqcogscycyycgkuq()); } public function swsoqemyygecmsao() : bool { return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw(); } public function yeyiguyegmmyusea() { if (!$this->swsoqemyygecmsao()) { goto gsgyayuaekgyoumc; } $this->ewcsyqaaigkicgse("\142\145\146\x6f\162\x65\x5f\151\x6e\x69\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); $this->mqyuagguukgcoeka(); $this->ewcsyqaaigkicgse("\x61\x66\x74\x65\x72\137\x69\156\151\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); gsgyayuaekgyoumc: } public function yoqiwysegascakim() { return $this->imkyoqyocosuqasu("\143\x6f\x6c\x75\155\156\163", []); } public function syskqukmqoycyswc() { return $this->imkyoqyocosuqasu("\x71\x75\145\162\x69\145\x73", []); } public function gueasuouwqysmomu() { return $this->imkyoqyocosuqasu("\164\x79\x70\145", "\143\x75\163\164\x6f\155"); } public function mgogaykgkoogasim() : Model { return $this->model; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function kooiucqkggeagccu() : ?array { return $this->args; } public function qmgcisuuikgmqcsu() : string { return $this->ekwwgogmwykqggyi($this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->aqcogscycyycgkuq())); } public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string { $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\166\151\x65\167\137\154\x69\x6e\x6b\x5f\161\165\145\x72\151\x65\x73", [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm); if (!$uoomaookgsyciacm) { goto omemqagskckoeoog; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm); omemqagskckoeoog: return $iwywmkygwewiamwm; } public function aqcogscycyycgkuq() { return $this->imkyoqyocosuqasu("\155\x65\x6e\x75\137\x73\x6c\165\x67"); } public function euqgwiscwgqkqkec() { $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\150\x6f\167\137\151\x6e\x5f\x6d\x65\156\165"); $ekiuyucoiagmscgy = [$this, "\x72\x65\156\144\145\162"]; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->ewcsyqaaigkicgse("\157\162\155\x5f\x76\151\x65\x77\x5f\141\144\x64\x5f\155\x65\x6e\x75\x5f{$sqeykgyoooqysmca}", $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $meywaqqsugaoeyys); if (!$cyiwaggmwimigmcc) { goto uyksacasqywyessc; } $kuysccmeoqgaiumc = $this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy); if (!(Constants::weiosaewqequuyuq === $sqeykgyoooqysmca && $meywaqqsugaoeyys->kcsywgyywsgqgawm())) { goto wyqmeyoaggwuioak; } $gaeqamemwmwsyukm = $meywaqqsugaoeyys->gmamcycwuyiawksk(); if (!($gaeqamemwmwsyukm > 0)) { goto aeuosggumiiwoesm; } $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)); aeuosggumiiwoesm: wyqmeyoaggwuioak: $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks), Constants::ysgwugcqguggmigq => $this->imkyoqyocosuqasu(Constants::ysgwugcqguggmigq), Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::ucmueuwwcmocgmig => $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig), Constants::wwgusigoaksqmwsm => $ekiuyucoiagmscgy, Constants::wuowaiyouwecckaw => $this->aqcogscycyycgkuq(), Constants::gqmskcacocowcwaw => $this->imkyoqyocosuqasu(Constants::uqaoisqcoykyycwe), Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::yiuwgggacagyeqmo)]); uyksacasqywyessc: } public function render() { $this->ewcsyqaaigkicgse("\x72\x65\156\x64\145\162\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { } public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool { $aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get(explode("\x5f\160\141\147\x65\x5f", $gcgsqcoqciockquc->id), 1); return $aaokuekaimigoyue && $aaokuekaimigoyue === $this->aqcogscycyycgkuq(); } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\x61\163\163" => "\x69\143\157\x6e\55\154\147"], true); } }
