<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67802fd4e8b59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwswygwykwgsqiwu => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\x72\155\137\x76\x69\145\x77\137\143\x61\160\141\142\151\x6c\x69\x74\x79", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\145\x6e\144\145\162\137{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\137{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk($cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (is_array($cguqsiecqkeekskq)) { foreach ($cguqsiecqkeekskq as $sqeykgyoooqysmca) { $this->rsaiaimkmskoiysk($sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $aiamqeawckcsuaou); } } else { if (is_string($cguqsiecqkeekskq)) { $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } } return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\157\x72\155\x5f\166\151\145\167\137{$this->gueasuouwqysmomu()}\x5f{$cguqsiecqkeekskq}\137\141\x63\x74\151\x6f\x6e\163", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (is_array($aiamqeawckcsuaou)) { $meqocwsecsywiiqs = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if ($meqocwsecsywiiqs) { $wwgucssaecqekuek = $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []; if (!isset($wwgucssaecqekuek["\x61\x72\x69\x61\55\154\141\142\145\154"])) { $wwgucssaecqekuek["\x74\151\164\154\145"] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\x61\162\151\141\55\x6c\x61\142\145\x6c"] = $meqocwsecsywiiqs; } if ($cguqsiecqkeekskq !== Constants::mqkiiimeocmcyecq) { $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; if ($wkaqekwwgqsqwcoi) { $meqocwsecsywiiqs = $wkaqekwwgqsqwcoi . $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\x61\163\163" => "\x6d\154\x2d\62"]); } $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\x73", "\160\x72\55\x62\164\156"); } if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\x73", "\x62\164\156\55\157\x75\164\x6c\x69\x6e\145\55\160\x72\151\x6d\141\162\x79\40\160\x61\147\145\55\164\151\164\x6c\145\55\141\143\164\151\157\156"); } if ($cguqsiecqkeekskq === Constants::meisqwykgaymauka) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\163", "\x62\164\156\x2d\163\x6d\x61\x6c\x6c"); } if (in_array($cguqsiecqkeekskq, [Constants::meisqwykgaymauka, Constants::imywcsggckkcywgk, Constants::cwswygwykwgsqiwu], true)) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\x6d\x72\55\x32"); } $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if ($aegqqyquausewoqe) { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->igiawkoqiogocsau($aegqqyquausewoqe, $meqocwsecsywiiqs, $wwgucssaecqekuek); } else { $aiamqeawckcsuaou = $swqimwqeweekeusq->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\x61", $wwgucssaecqekuek, $meqocwsecsywiiqs); } } } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function ymaommgoigkakyes($uyaimqisayeqocig) : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return [Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => __("\x44\x65\154\x65\164\x65", PR__CMN__FOUNDATION), Constants::ssmskyqgcmeiayco => __("\101\162\145\x20\x79\157\165\x20\x73\165\162\x65\40\x79\157\x75\40\167\x61\x6e\x74\40\164\x6f\x20\x64\x65\154\145\164\145\x20\x74\150\151\x73\40\151\164\x65\x6d\x3f", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\150\162\145\x66" => $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)), "\x63\154\x61\x73\163" => "\x70\162\55\157\162\155\55\141\143\x74\x69\157\x6e\x20\160\x72\55\x62\x74\x6e\x20\x62\x74\156\x2d\144\141\156\147\x65\162", Constants::qescuiwgsyuikume => __("\104\145\x6c\x65\x74\x65", PR__CMN__FOUNDATION), Constants::gcscaoggkqysyckq => true]]]; } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\143\x6c\141\163\x73" => "\x69\143\157\156\55\154\147"], true); } public function wgmuagayamwuwsuo() : string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($meywaqqsugaoeyys) . "\137\x70\141\147\x65\x5f" . $meywaqqsugaoeyys->cueaickeeoiwayou(); } }
