<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Common; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\ORM\Register; class View extends Common { protected ?string $name = ''; protected array $args = []; protected ?Model $model = null; protected array $columns = []; protected bool $initialized = false; public function __construct(Model $meywaqqsugaoeyys = null, $ywmkwiwkosakssii = []) { if (!$meywaqqsugaoeyys) { goto ugikgkwuwmgymgus; } $this->model = $meywaqqsugaoeyys; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis(); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $yyksucsgisomecgg->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\162\x6d\x5f\166\x69\145\167\x5f\143\x61\160\141\142\x69\x6c\151\x74\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $yyksucsgisomecgg->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => 0, Constants::ciwqeuoqqskekckk => true]); parent::__construct(); ugikgkwuwmgymgus: } public function wigskegsqequoeks() { $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\160\x61\162\x65\x6e\164\137\163\154\165\147"); $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu("\x61\144\x6d\151\156\137\151\156\151\164", [$this, "\x79\145\171\151\147\x75\x79\145\147\155\x6d\171\165\163\x65\141"])->qcsmikeggeemccuu("\143\165\162\162\145\x6e\164\137\x73\143\162\145\x65\156", [$this, "\x6d\x63\x6d\163\x63\143\x69\x79\x75\x6b\x61\165\x65\163\141\x75"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\x6d\145\156\x75", [$this, "\145\x75\161\x67\167\x69\163\x63\167\x67\161\153\161\x6b\x65\x63"], $wgaiuiysuegayseo ? 11 : 12); parent::wigskegsqequoeks(); } public function oyeskqayoscwciem() : Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function ukimmgwaaymwayws() : ?bool { return $this->initialized; } public function init() { } public function mcmscciyukauesau() { } public function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->aqcogscycyycgkuq()); } public function swsoqemyygecmsao() : bool { return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw(); } public function yeyiguyegmmyusea() { if (!$this->swsoqemyygecmsao()) { goto gsgyayuaekgyoumc; } $this->ewcsyqaaigkicgse("\142\145\146\157\x72\145\137\x69\156\151\164\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); $this->mqyuagguukgcoeka(); $this->ewcsyqaaigkicgse("\141\x66\164\x65\162\137\x69\x6e\151\x74\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}", $this); gsgyayuaekgyoumc: } public function yoqiwysegascakim() { return $this->imkyoqyocosuqasu("\x63\157\154\x75\155\x6e\x73", []); } public function syskqukmqoycyswc() { return $this->imkyoqyocosuqasu("\161\x75\x65\x72\x69\145\163", []); } public function gueasuouwqysmomu() { return $this->imkyoqyocosuqasu("\164\171\x70\145", "\143\165\x73\x74\x6f\x6d"); } public function mgogaykgkoogasim() : Model { return $this->model; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function kooiucqkggeagccu() : ?array { return $this->args; } public function qmgcisuuikgmqcsu() : string { return $this->ekwwgogmwykqggyi($this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->aqcogscycyycgkuq())); } public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string { $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\x6f\162\x6d\137\x76\x69\145\167\137\154\x69\x6e\153\x5f\x71\x75\145\x72\151\145\x73", [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm); if (!$uoomaookgsyciacm) { goto omemqagskckoeoog; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm); omemqagskckoeoog: return $iwywmkygwewiamwm; } public function aqcogscycyycgkuq() { return $this->imkyoqyocosuqasu("\x6d\x65\156\165\x5f\x73\x6c\165\147"); } public function euqgwiscwgqkqkec() { $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\163\x68\157\167\137\x69\x6e\x5f\x6d\145\x6e\x75"); $ekiuyucoiagmscgy = [$this, "\162\145\156\x64\x65\x72"]; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->ewcsyqaaigkicgse("\x6f\x72\x6d\x5f\x76\151\x65\x77\137\141\x64\144\x5f\x6d\x65\x6e\165\x5f{$sqeykgyoooqysmca}", $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $meywaqqsugaoeyys); if (!$cyiwaggmwimigmcc) { goto uyksacasqywyessc; } $kuysccmeoqgaiumc = $this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy); if (!(Constants::weiosaewqequuyuq === $sqeykgyoooqysmca && $meywaqqsugaoeyys->kcsywgyywsgqgawm())) { goto wyqmeyoaggwuioak; } $gaeqamemwmwsyukm = $meywaqqsugaoeyys->gmamcycwuyiawksk(); if (!($gaeqamemwmwsyukm > 0)) { goto aeuosggumiiwoesm; } $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)); aeuosggumiiwoesm: wyqmeyoaggwuioak: $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks), Constants::ysgwugcqguggmigq => $this->imkyoqyocosuqasu(Constants::ysgwugcqguggmigq), Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::ucmueuwwcmocgmig => $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig), Constants::wwgusigoaksqmwsm => $ekiuyucoiagmscgy, Constants::wuowaiyouwecckaw => $this->aqcogscycyycgkuq(), Constants::gqmskcacocowcwaw => $this->imkyoqyocosuqasu(Constants::uqaoisqcoykyycwe), Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::yiuwgggacagyeqmo)]); uyksacasqywyessc: } public function render() { $this->ewcsyqaaigkicgse("\x72\x65\x6e\144\145\x72\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { } public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool { $aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get(explode("\137\160\141\x67\145\137", $gcgsqcoqciockquc->id), 1); return $aaokuekaimigoyue && $aaokuekaimigoyue === $this->aqcogscycyycgkuq(); } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\154\141\163\x73" => "\x69\143\157\x6e\x2d\154\147"], true); } }
