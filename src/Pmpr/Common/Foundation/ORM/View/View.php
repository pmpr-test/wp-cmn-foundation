<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d16a012f73             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwacquagagwkcisc => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\162\155\137\x76\151\145\167\137\143\141\160\141\142\x69\154\151\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\145\156\144\x65\162\137{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\143\x6c\141\x73\x73", "\160\162\55\x62\x74\x6e\x20\142\164\156\55\157\x75\164\154\x69\156\145\x2d\160\x72\x69\155\141\x72\x79\40\160\141\x67\145\x2d\x74\151\164\154\x65\x2d\141\143\x74\x69\x6f\x6e"); } $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\162\x6d\x5f\166\151\x65\x77\x5f{$this->gueasuouwqysmomu()}\137{$cguqsiecqkeekskq}\x5f\x61\143\164\151\157\156\x73", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (isset($aiamqeawckcsuaou[Constants::qescuiwgsyuikume], $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym]) && count($aiamqeawckcsuaou) === 2) { $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\141", $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym], $aiamqeawckcsuaou[Constants::qescuiwgsyuikume]); } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string { $meqocwsecsywiiqs = __("\104\x65\x6c\145\164\x65", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, "\43", ["\x63\154\141\x73\163" => "\163\165\142\155\x69\164\x64\145\154\x65\164\145\x20\164\x65\x78\x74\x2d\144\141\x6e\147\x65\162\40\155\x79\55\141\165\164\157\40\160\162\x2d\x63\157\x6e\x66\x69\162\x6d\141\142\154\145\55\141\x63\x74\151\157\x6e", "\144\x61\164\x61\55\x63\157\x6e\x66\151\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs); } public function ymaommgoigkakyes($iwywmkygwewiamwm) { $meqocwsecsywiiqs = __("\x44\145\154\x65\164\145", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\162\145\x20\x79\x6f\165\x20\x73\165\162\145\x20\171\157\165\x20\167\x61\156\164\40\x74\x6f\40\144\x65\154\x65\x74\145\x20\x74\150\151\x73\x20\x69\x74\x65\155\77", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x68\162\x65\x66" => $iwywmkygwewiamwm, "\143\x6c\x61\x73\x73" => "\160\162\x2d\x6f\x72\x6d\55\141\x63\x74\151\x6f\x6e\x20\x70\x72\55\142\164\x6e\40\142\x74\x6e\x2d\144\x61\156\147\145\x72", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::gcscaoggkqysyckq => true]]]); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\143\154\x61\163\x73" => "\x69\x63\157\156\x2d\x6c\x67"], true); } }
