<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Common; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\ORM\Register; class View extends Common { protected ?string $name = ''; protected array $args = []; protected ?Model $model = null; protected array $columns = []; protected bool $initialized = false; public function __construct(Model $meywaqqsugaoeyys = null, $ywmkwiwkosakssii = []) { if (!$meywaqqsugaoeyys) { goto okycquokqoamsquy; } $this->model = $meywaqqsugaoeyys; $yyksucsgisomecgg = $meywaqqsugaoeyys->oyeskqayoscwciem(); $this->name = $meywaqqsugaoeyys->miwqiiqeegeqcwis(); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $yyksucsgisomecgg->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\x72\155\x5f\166\151\x65\167\x5f\143\141\160\x61\142\151\154\151\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $yyksucsgisomecgg->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $yyksucsgisomecgg->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => 0, Constants::ciwqeuoqqskekckk => true]); parent::__construct(); okycquokqoamsquy: } public function wigskegsqequoeks() { $wgaiuiysuegayseo = $this->imkyoqyocosuqasu("\x70\x61\x72\x65\156\164\137\x73\x6c\x75\147"); $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\156\x69\x74", [$this, "\171\145\x79\x69\x67\165\171\x65\x67\155\155\x79\165\163\145\x61"])->qcsmikeggeemccuu("\x63\x75\162\x72\x65\x6e\x74\137\163\x63\162\x65\145\156", [$this, "\155\143\x6d\163\143\143\x69\x79\165\x6b\x61\165\145\163\x61\x75"])->qcsmikeggeemccuu("\141\144\155\x69\156\137\x6d\145\x6e\165", [$this, "\145\x75\161\x67\x77\151\163\x63\167\x67\x71\153\161\x6b\145\143"], $wgaiuiysuegayseo ? 11 : 12); parent::wigskegsqequoeks(); } public function oyeskqayoscwciem() : Register { return $this->mgogaykgkoogasim()->oyeskqayoscwciem(); } public function ukimmgwaaymwayws() : ?bool { return $this->initialized; } public function init() { } public function mcmscciyukauesau() { } public function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->aqcogscycyycgkuq()); } public function swsoqemyygecmsao() : bool { return $this->qcsgmgoukiouuscw() && $this->oyeskqayoscwciem()->uwaascqoguwkwiaw(); } public function yeyiguyegmmyusea() { if (!$this->swsoqemyygecmsao()) { goto cgwokqwakqcmiieo; } $this->ewcsyqaaigkicgse("\x62\x65\146\157\x72\145\137\x69\156\151\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}", $this); $this->mqyuagguukgcoeka(); $this->ewcsyqaaigkicgse("\x61\146\164\x65\x72\137\x69\x6e\x69\x74\x5f{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\137{$this->gueasuouwqysmomu()}", $this); cgwokqwakqcmiieo: } public function yoqiwysegascakim() { return $this->imkyoqyocosuqasu("\143\x6f\x6c\165\x6d\156\163", []); } public function syskqukmqoycyswc() { return $this->imkyoqyocosuqasu("\x71\x75\x65\162\x69\x65\x73", []); } public function gueasuouwqysmomu() { return $this->imkyoqyocosuqasu("\x74\171\160\145", "\143\165\163\x74\x6f\x6d"); } public function mgogaykgkoogasim() : Model { return $this->model; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function kooiucqkggeagccu() : ?array { return $this->args; } public function qmgcisuuikgmqcsu() : string { return $this->ekwwgogmwykqggyi($this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($this->aqcogscycyycgkuq())); } public function ekwwgogmwykqggyi(string $iwywmkygwewiamwm) : string { $uoomaookgsyciacm = $this->ocksiywmkyaqseou("\157\162\x6d\137\166\151\145\x77\137\x6c\151\156\153\x5f\161\165\145\x72\151\145\x73", [], $this->mgogaykgkoogasim(), $iwywmkygwewiamwm); if (!$uoomaookgsyciacm) { goto egwgyekaiqomyeaa; } $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($uoomaookgsyciacm, $iwywmkygwewiamwm); egwgyekaiqomyeaa: return $iwywmkygwewiamwm; } public function aqcogscycyycgkuq() { return $this->imkyoqyocosuqasu("\155\145\156\x75\x5f\163\154\165\x67"); } public function euqgwiscwgqkqkec() { $cyiwaggmwimigmcc = $this->imkyoqyocosuqasu("\x73\150\157\167\137\151\156\x5f\155\x65\156\165"); $ekiuyucoiagmscgy = [$this, "\x72\145\156\x64\145\x72"]; $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->ewcsyqaaigkicgse("\x6f\162\155\137\166\151\145\167\137\141\x64\x64\x5f\x6d\145\x6e\165\x5f{$sqeykgyoooqysmca}", $this->kooiucqkggeagccu(), $ekiuyucoiagmscgy, $meywaqqsugaoeyys); if (!$cyiwaggmwimigmcc) { goto mciumqyyossyiuyk; } $kuysccmeoqgaiumc = $this->imkyoqyocosuqasu(Constants::qsegwakiwaiyimyy); if (!(Constants::weiosaewqequuyuq === $sqeykgyoooqysmca && $meywaqqsugaoeyys->kcsywgyywsgqgawm())) { goto uwusswwekqcsisus; } $gaeqamemwmwsyukm = $meywaqqsugaoeyys->gmamcycwuyiawksk(); if (!($gaeqamemwmwsyukm > 0)) { goto kssuqmsgmaaeqigw; } $kuysccmeoqgaiumc .= $this->caokeucsksukesyo()->wmkogisswkckmeua()->uyouiyyykmoqmicg($this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)); kssuqmsgmaaeqigw: uwusswwekqcsisus: $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea([Constants::qoquaeuooeycomks => $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks), Constants::ysgwugcqguggmigq => $this->imkyoqyocosuqasu(Constants::ysgwugcqguggmigq), Constants::qsegwakiwaiyimyy => $kuysccmeoqgaiumc, Constants::ucmueuwwcmocgmig => $this->imkyoqyocosuqasu(Constants::ucmueuwwcmocgmig), Constants::wwgusigoaksqmwsm => $ekiuyucoiagmscgy, Constants::wuowaiyouwecckaw => $this->aqcogscycyycgkuq(), Constants::gqmskcacocowcwaw => $this->imkyoqyocosuqasu(Constants::uqaoisqcoykyycwe), Constants::kekcgssiyagioocg => $this->imkyoqyocosuqasu(Constants::yiuwgggacagyeqmo)]); mciumqyyossyiuyk: } public function render() { $this->ewcsyqaaigkicgse("\x72\145\x6e\x64\145\162\137{$this->oyeskqayoscwciem()->aakmagwggmkoiiyu()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { } public function mmukyoaoamekoswk($gcgsqcoqciockquc) : bool { $aaokuekaimigoyue = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get(explode("\137\x70\141\x67\145\x5f", $gcgsqcoqciockquc->id), 1); return $aaokuekaimigoyue && $aaokuekaimigoyue === $this->aqcogscycyycgkuq(); } public function imkyoqyocosuqasu($uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($this->oyeskqayoscwciem()->uikgwcuascgeissw($pkyyagewkiyckmwy), $this->oyeskqayoscwciem()->qyyikeaseoskcacm(), ["\x63\x6c\x61\163\x73" => "\x69\143\x6f\x6e\55\154\147"], true); } }
