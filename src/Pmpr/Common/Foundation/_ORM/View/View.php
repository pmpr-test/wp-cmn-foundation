<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\View; use Pmpr\Common\Foundation\_ORM\Common; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Common { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwacquagagwkcisc => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\x72\155\137\166\151\145\x77\137\x63\141\160\x61\142\151\x6c\x69\164\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\x72\145\x6e\144\x65\x72\x5f{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\137{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (!($cguqsiecqkeekskq === Constants::imywcsggckkcywgk)) { goto aquqkiggamaoegoo; } $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\143\x6c\x61\163\x73", "\160\141\147\x65\x2d\164\151\164\x6c\x65\55\x61\143\164\151\157\x6e"); aquqkiggamaoegoo: $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\x72\155\137\x76\151\145\x77\137{$this->gueasuouwqysmomu()}\137{$cguqsiecqkeekskq}\x5f\x61\143\164\x69\x6f\156\x73", $ccowyogiqwikkkie, $this); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (!is_callable($aiamqeawckcsuaou)) { goto cquecqekuucwoumw; } $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); cquecqekuucwoumw: if (!isset($aiamqeawckcsuaou[Constants::qescuiwgsyuikume], $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym])) { goto koiscokkkaimiecq; } $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\x61", $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym], $aiamqeawckcsuaou[Constants::qescuiwgsyuikume]); koiscokkkaimiecq: $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; agemwookwseyycqo: } mykiyqcqiegkiqys: return $ccowyogiqwikkkie; } public function rkmkouiquumiecqy($iwywmkygwewiamwm) : string { $meqocwsecsywiiqs = __("\104\145\154\x65\x74\x65", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, "\x23", ["\x63\154\x61\163\163" => "\x73\x75\x62\155\x69\x74\144\145\x6c\145\164\145\40\164\145\x78\164\x2d\144\x61\156\x67\145\x72\x20\x6d\x79\x2d\141\165\x74\157\40\160\162\55\143\x6f\x6e\x66\x69\162\x6d\x61\x62\154\x65\55\141\x63\164\151\x6f\156", "\x64\141\164\x61\55\x63\157\156\146\151\147" => $this->ymaommgoigkakyes($iwywmkygwewiamwm)], $meqocwsecsywiiqs); } public function ymaommgoigkakyes($iwywmkygwewiamwm) { $meqocwsecsywiiqs = __("\x44\145\154\x65\x74\145", PR__CMN__FOUNDATION); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy([Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ssmskyqgcmeiayco => __("\x41\x72\145\40\171\157\x75\40\x73\165\162\145\x20\x79\157\165\40\x77\x61\156\x74\40\164\x6f\x20\x64\145\x6c\145\x74\x65\40\x74\150\x69\163\x20\x69\x74\x65\x6d\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\x68\162\145\x66" => $iwywmkygwewiamwm, "\143\154\x61\x73\x73" => "\160\162\55\157\x72\x6d\55\x61\x63\x74\x69\x6f\x6e\x20\160\x72\55\x62\164\x6e\x20\142\164\156\55\144\141\156\x67\x65\x72", Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::gcscaoggkqysyckq => true]]]); } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\x63\x6c\141\x73\x73" => "\151\143\157\x6e\55\154\147"], true); } }
