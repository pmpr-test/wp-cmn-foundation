<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbcd2165a5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwacquagagwkcisc => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\x72\x6d\x5f\166\151\x65\167\137\143\x61\x70\141\142\151\x6c\151\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\x65\156\144\x65\x72\137{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\137{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\143\154\x61\163\163", "\x70\x72\x2d\142\164\156\40\142\x74\156\55\x6f\165\164\154\x69\x6e\145\x2d\x70\162\151\x6d\141\162\x79\x20\x70\141\x67\x65\x2d\x74\151\164\x6c\145\x2d\x61\143\x74\151\157\x6e"); } $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\157\162\155\x5f\166\x69\x65\167\x5f{$this->gueasuouwqysmomu()}\137{$cguqsiecqkeekskq}\137\141\143\164\151\x6f\x6e\x73", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (isset($aiamqeawckcsuaou[Constants::qescuiwgsyuikume], $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym]) && count($aiamqeawckcsuaou) === 2) { $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\141", $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym], $aiamqeawckcsuaou[Constants::qescuiwgsyuikume]); } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string { $meqocwsecsywiiqs = __("\x44\145\154\145\164\145", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, "\43", ["\143\x6c\x61\x73\x73" => "\163\x75\x62\155\151\164\144\145\154\x65\x74\145\x20\x74\145\170\x74\x2d\x64\141\x6e\x67\x65\x72\x20\155\x79\x2d\141\x75\x74\157\40\160\x72\55\x63\157\x6e\x66\151\162\x6d\x61\142\154\145\x2d\x61\x63\164\151\x6f\x6e", "\144\141\164\x61\x2d\143\157\x6e\x66\151\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs); } public function ymaommgoigkakyes($iwywmkygwewiamwm) { $meqocwsecsywiiqs = __("\x44\145\x6c\x65\164\145", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\40\x79\157\165\x20\163\165\162\x65\40\x79\x6f\165\40\x77\141\x6e\164\40\164\157\40\144\145\154\145\x74\x65\x20\x74\150\x69\x73\40\151\164\x65\x6d\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x68\x72\145\x66" => $iwywmkygwewiamwm, "\x63\154\141\x73\x73" => "\160\x72\x2d\157\x72\155\55\x61\143\x74\151\157\x6e\x20\160\x72\x2d\x62\x74\x6e\x20\x62\x74\x6e\x2d\x64\141\156\147\145\162", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::gcscaoggkqysyckq => true]]]); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\x63\x6c\x61\163\x73" => "\151\143\x6f\156\x2d\154\147"], true); } }
