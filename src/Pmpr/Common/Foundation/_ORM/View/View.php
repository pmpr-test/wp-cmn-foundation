<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Common; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Common { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwacquagagwkcisc => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\162\155\x5f\x76\151\145\167\137\x63\141\x70\141\x62\x69\x6c\151\164\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\145\x6e\144\145\x72\x5f{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (!($cguqsiecqkeekskq === Constants::imywcsggckkcywgk)) { goto aquqkiggamaoegoo; } $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\x63\154\141\x73\x73", "\x70\x61\x67\x65\x2d\x74\151\164\x6c\145\55\141\x63\x74\x69\x6f\156"); aquqkiggamaoegoo: $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\157\162\155\x5f\166\151\x65\x77\137{$this->gueasuouwqysmomu()}\137{$cguqsiecqkeekskq}\137\141\143\x74\151\x6f\x6e\163", $ccowyogiqwikkkie, $this); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (!is_callable($aiamqeawckcsuaou)) { goto cquecqekuucwoumw; } $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); cquecqekuucwoumw: if (!isset($aiamqeawckcsuaou[Constants::qescuiwgsyuikume], $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym])) { goto koiscokkkaimiecq; } $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\x61", $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym], $aiamqeawckcsuaou[Constants::qescuiwgsyuikume]); koiscokkkaimiecq: $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; agemwookwseyycqo: } mykiyqcqiegkiqys: return $ccowyogiqwikkkie; } public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string { $meqocwsecsywiiqs = __("\104\x65\x6c\x65\164\x65", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, "\x23", ["\143\x6c\x61\x73\163" => "\163\x75\x62\155\x69\164\x64\145\154\x65\164\x65\x20\164\x65\x78\164\x2d\144\x61\156\x67\145\x72\x20\x6d\x79\55\x61\x75\x74\157\40\160\162\x2d\x63\157\156\x66\x69\162\155\141\142\x6c\145\55\x61\x63\x74\x69\157\156", "\144\141\164\141\55\143\x6f\156\146\151\x67" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs); } public function ymaommgoigkakyes($iwywmkygwewiamwm) { $meqocwsecsywiiqs = __("\x44\145\154\x65\x74\145", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\101\162\x65\x20\x79\157\x75\40\163\x75\x72\x65\40\x79\x6f\165\40\167\x61\156\x74\40\x74\157\40\144\145\154\x65\x74\x65\x20\x74\x68\x69\x73\x20\151\164\x65\155\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x68\162\x65\x66" => $iwywmkygwewiamwm, "\143\154\x61\163\x73" => "\160\x72\x2d\157\162\x6d\55\x61\143\x74\151\157\x6e\x20\x70\162\x2d\142\164\156\x20\x62\x74\x6e\55\144\x61\156\x67\145\x72", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::gcscaoggkqysyckq => true]]]); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\143\154\x61\163\163" => "\x69\x63\157\156\x2d\154\147"], true); } }
