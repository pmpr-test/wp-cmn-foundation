<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d720531f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwswygwykwgsqiwu => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\x6f\162\155\x5f\166\x69\x65\x77\x5f\x63\x61\x70\141\x62\x69\x6c\x69\x74\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\x72\x65\x6e\144\145\x72\x5f{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\x5f{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk($cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (is_array($cguqsiecqkeekskq)) { foreach ($cguqsiecqkeekskq as $sqeykgyoooqysmca) { $this->rsaiaimkmskoiysk($sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $aiamqeawckcsuaou); } } else { if (is_string($cguqsiecqkeekskq)) { $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } } return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\157\162\x6d\x5f\x76\x69\145\x77\137{$this->gueasuouwqysmomu()}\x5f{$cguqsiecqkeekskq}\x5f\141\x63\164\151\x6f\x6e\x73", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (is_array($aiamqeawckcsuaou)) { $meqocwsecsywiiqs = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if ($meqocwsecsywiiqs) { $wwgucssaecqekuek = $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []; if (!isset($wwgucssaecqekuek["\141\162\x69\x61\55\x6c\141\x62\145\x6c"])) { $wwgucssaecqekuek["\x74\151\164\154\145"] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\162\x69\x61\x2d\154\141\x62\x65\154"] = $meqocwsecsywiiqs; } if ($cguqsiecqkeekskq !== Constants::mqkiiimeocmcyecq) { $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; if ($wkaqekwwgqsqwcoi) { $meqocwsecsywiiqs = $wkaqekwwgqsqwcoi . $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\143\x6c\x61\163\x73" => "\x6d\154\55\62"]); } $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\160\162\55\142\x74\156"); } if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\163", "\142\x74\x6e\x2d\x6f\165\164\x6c\x69\156\x65\x2d\160\x72\x69\155\141\162\171\x20\160\x61\x67\145\55\164\x69\x74\x6c\145\55\141\143\164\151\x6f\x6e"); } if ($cguqsiecqkeekskq === Constants::meisqwykgaymauka) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\163\x73", "\x62\x74\156\x2d\163\155\141\x6c\x6c"); } if (in_array($cguqsiecqkeekskq, [Constants::meisqwykgaymauka, Constants::imywcsggckkcywgk, Constants::cwswygwykwgsqiwu], true)) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", "\155\x72\55\62"); } $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if ($aegqqyquausewoqe) { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->igiawkoqiogocsau($aegqqyquausewoqe, $meqocwsecsywiiqs, $wwgucssaecqekuek); } else { $aiamqeawckcsuaou = $swqimwqeweekeusq->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\141", $wwgucssaecqekuek, $meqocwsecsywiiqs); } } } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function ymaommgoigkakyes($uyaimqisayeqocig) : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return [Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => __("\104\145\154\x65\164\145", PR__CMN__FOUNDATION), Constants::ssmskyqgcmeiayco => __("\101\x72\145\40\171\157\165\40\163\x75\x72\x65\x20\171\157\x75\x20\x77\x61\x6e\164\40\x74\x6f\x20\144\x65\x6c\145\x74\x65\40\164\150\x69\163\40\x69\x74\145\155\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\150\x72\145\x66" => $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)), "\143\x6c\x61\163\163" => "\x70\x72\x2d\x6f\x72\x6d\x2d\141\x63\164\151\x6f\x6e\x20\160\162\x2d\142\x74\156\40\x62\x74\156\55\144\141\x6e\147\x65\162", Constants::qescuiwgsyuikume => __("\104\145\154\145\x74\145", PR__CMN__FOUNDATION), Constants::gcscaoggkqysyckq => true]]]; } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\143\154\141\x73\163" => "\x69\x63\157\156\x2d\x6c\147"], true); } public function wgmuagayamwuwsuo() : string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($meywaqqsugaoeyys) . "\137\x70\x61\x67\145\137" . $meywaqqsugaoeyys->cueaickeeoiwayou(); } }
