<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705a37ba6a79             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwacquagagwkcisc => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\x72\x6d\137\166\151\145\x77\137\143\141\x70\x61\142\151\x6c\x69\x74\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\x65\x6e\144\145\x72\137{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\137{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\143\x6c\141\163\x73", "\160\162\x2d\x62\x74\x6e\x20\x62\164\x6e\x2d\157\165\164\x6c\x69\156\x65\x2d\160\x72\x69\x6d\x61\162\171\x20\x70\x61\x67\145\x2d\x74\x69\164\154\145\55\x61\143\164\151\x6f\x6e"); } $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\162\155\137\x76\x69\x65\x77\x5f{$this->gueasuouwqysmomu()}\x5f{$cguqsiecqkeekskq}\x5f\x61\x63\x74\x69\157\156\x73", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (isset($aiamqeawckcsuaou[Constants::qescuiwgsyuikume], $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym]) && count($aiamqeawckcsuaou) === 2) { $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\141", $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym], $aiamqeawckcsuaou[Constants::qescuiwgsyuikume]); } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string { $meqocwsecsywiiqs = __("\104\x65\154\145\164\x65", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, "\x23", ["\143\x6c\141\x73\x73" => "\163\x75\x62\x6d\x69\x74\x64\x65\x6c\x65\x74\145\40\x74\145\170\x74\x2d\x64\141\x6e\147\145\162\40\155\x79\x2d\x61\165\164\157\x20\x70\x72\55\143\x6f\156\146\151\162\155\x61\142\x6c\x65\55\x61\x63\x74\151\157\156", "\144\x61\164\x61\x2d\x63\157\156\x66\x69\147" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs); } public function ymaommgoigkakyes($iwywmkygwewiamwm) { $meqocwsecsywiiqs = __("\x44\145\x6c\145\x74\x65", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\x65\40\171\157\165\x20\163\165\x72\x65\x20\171\x6f\x75\x20\x77\141\x6e\x74\40\164\x6f\40\x64\145\154\145\x74\145\x20\164\150\x69\x73\40\x69\x74\x65\155\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\150\x72\x65\146" => $iwywmkygwewiamwm, "\x63\154\141\x73\163" => "\160\x72\x2d\157\x72\155\x2d\x61\143\x74\151\x6f\156\x20\160\x72\55\x62\x74\x6e\x20\142\x74\x6e\55\x64\141\156\147\145\x72", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::gcscaoggkqysyckq => true]]]); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\143\154\141\x73\x73" => "\151\x63\x6f\x6e\55\154\x67"], true); } }
