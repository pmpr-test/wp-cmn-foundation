<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da387f146             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwswygwykwgsqiwu => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy("\157\162\155\x5f\x76\151\x65\x77\x5f\143\x61\160\141\x62\x69\154\151\164\171", Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("\162\145\x6e\144\145\x72\137{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}\137{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk($cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (is_array($cguqsiecqkeekskq)) { foreach ($cguqsiecqkeekskq as $sqeykgyoooqysmca) { $this->rsaiaimkmskoiysk($sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $aiamqeawckcsuaou); } } else { if (is_string($cguqsiecqkeekskq)) { $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } } return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("\x6f\x72\x6d\x5f\166\x69\x65\x77\x5f{$this->gueasuouwqysmomu()}\137{$cguqsiecqkeekskq}\137\x61\143\164\151\x6f\x6e\163", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (is_array($aiamqeawckcsuaou)) { $meqocwsecsywiiqs = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if ($meqocwsecsywiiqs) { $wwgucssaecqekuek = $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []; if (!isset($wwgucssaecqekuek["\x61\162\x69\x61\55\154\x61\x62\x65\154"])) { $wwgucssaecqekuek["\x74\151\164\154\x65"] = $meqocwsecsywiiqs; $wwgucssaecqekuek["\141\x72\151\x61\55\154\141\x62\x65\154"] = $meqocwsecsywiiqs; } if ($cguqsiecqkeekskq !== Constants::mqkiiimeocmcyecq) { $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; if ($wkaqekwwgqsqwcoi) { $meqocwsecsywiiqs = $wkaqekwwgqsqwcoi . $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\143\x6c\x61\x73\x73" => "\155\154\55\62"]); } $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\163", "\x70\x72\x2d\142\164\156"); } if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\163", "\x62\164\156\x2d\x6f\x75\164\154\x69\156\145\55\160\x72\151\x6d\x61\x72\171\x20\160\x61\147\145\x2d\x74\151\x74\x6c\x65\x2d\x61\143\164\151\x6f\156"); } if ($cguqsiecqkeekskq === Constants::meisqwykgaymauka) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\163", "\142\164\x6e\x2d\x73\155\141\x6c\x6c"); } if (in_array($cguqsiecqkeekskq, [Constants::meisqwykgaymauka, Constants::imywcsggckkcywgk, Constants::cwswygwykwgsqiwu], true)) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\x73", "\x6d\x72\55\62"); } $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if ($aegqqyquausewoqe) { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->igiawkoqiogocsau($aegqqyquausewoqe, $meqocwsecsywiiqs, $wwgucssaecqekuek); } else { $aiamqeawckcsuaou = $swqimwqeweekeusq->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? "\x61", $wwgucssaecqekuek, $meqocwsecsywiiqs); } } } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function ymaommgoigkakyes($uyaimqisayeqocig) : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return [Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => __("\x44\x65\154\x65\164\x65", PR__CMN__FOUNDATION), Constants::ssmskyqgcmeiayco => __("\x41\x72\x65\x20\171\x6f\165\x20\163\x75\x72\x65\40\x79\157\x75\40\167\x61\156\x74\40\164\157\40\144\x65\x6c\x65\164\x65\40\164\150\x69\x73\x20\x69\x74\x65\155\77", PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ["\150\x72\x65\146" => $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)), "\143\x6c\x61\x73\163" => "\x70\162\55\157\x72\x6d\x2d\141\x63\164\x69\157\x6e\40\x70\x72\x2d\x62\164\x6e\40\142\x74\156\55\x64\141\x6e\147\145\x72", Constants::qescuiwgsyuikume => __("\104\145\x6c\145\164\145", PR__CMN__FOUNDATION), Constants::gcscaoggkqysyckq => true]]]; } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ["\x63\x6c\141\163\163" => "\151\143\x6f\156\55\x6c\x67"], true); } public function wgmuagayamwuwsuo() : string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($meywaqqsugaoeyys) . "\137\x70\x61\x67\x65\x5f" . $meywaqqsugaoeyys->cueaickeeoiwayou(); } }
