<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ArgsTrait; class View extends Container { use ModelTrait, ArgsTrait; protected array $actions = [Constants::mqkiiimeocmcyecq => [], Constants::imywcsggckkcywgk => [], Constants::ecwwqsqmiiqocoyw => [], Constants::meisqwykgaymauka => [], Constants::cwswygwykwgsqiwu => []]; public function __construct(Model $meywaqqsugaoeyys, array $ywmkwiwkosakssii = []) { $this->asumqyigwsqmyeoc($meywaqqsugaoeyys); $this->args = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::wuowaiyouwecckaw => $meywaqqsugaoeyys->aakmagwggmkoiiyu(), Constants::uqaoisqcoykyycwe => '', Constants::ysgwugcqguggmigq => '', Constants::ucmueuwwcmocgmig => $this->sscegwueamckwmcy('orm_view_capability', Constants::gewmeskawiqikkoc), Constants::qsegwakiwaiyimyy => $meywaqqsugaoeyys->qeeuwmmksmqiuywg(), Constants::qoquaeuooeycomks => $meywaqqsugaoeyys->licekmysugkqeoay(Constants::qoquaeuooeycomks), Constants::yiuwgggacagyeqmo => 0]); parent::__construct(); } public function render() { $this->ewcsyqaaigkicgse("render_{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}_{$this->gueasuouwqysmomu()}", $this); } public function mqyuagguukgcoeka() { $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::xgimwmogukqqcuky, $this->gueasuouwqysmomu(), $this); } public function gueasuouwqysmomu() : string { return (string) $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public final function rsaiaimkmskoiysk($cguqsiecqkeekskq, string $ymqmyyeuycgmigyo, $aiamqeawckcsuaou) : self { if (is_array($cguqsiecqkeekskq)) { foreach ($cguqsiecqkeekskq as $sqeykgyoooqysmca) { $this->rsaiaimkmskoiysk($sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $aiamqeawckcsuaou); } } else { if (is_string($cguqsiecqkeekskq)) { $this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } } return $this; } public function skmmaimsukseaacw(string $cguqsiecqkeekskq, string $ymqmyyeuycgmigyo) : self { unset($this->actions[$cguqsiecqkeekskq][$ymqmyyeuycgmigyo]); return $this; } public function mekqsagqkuiocckw(string $cguqsiecqkeekskq = '') : bool { return $cguqsiecqkeekskq ? !empty($this->actions[$cguqsiecqkeekskq]) : !empty($this->actions); } public function igmckyamugkymqku(string $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq) : array { $ccowyogiqwikkkie = $this->actions[$cguqsiecqkeekskq] ?? []; $ccowyogiqwikkkie = $this->ocksiywmkyaqseou("orm_view_{$this->gueasuouwqysmomu()}_{$cguqsiecqkeekskq}_actions", $ccowyogiqwikkkie, $this); $somigmaseguyueuu = $this->mgogaykgkoogasim()->osgoqoeuiiiwowke(Constants::cyqqqmqasqoasmwu, $ccowyogiqwikkkie, $cguqsiecqkeekskq, ...$eykyyaaomkcqyiyq); if ($somigmaseguyueuu) { $ccowyogiqwikkkie = $somigmaseguyueuu; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ccowyogiqwikkkie as $ymqmyyeuycgmigyo => $aiamqeawckcsuaou) { if (is_callable($aiamqeawckcsuaou)) { $aiamqeawckcsuaou = $aiamqeawckcsuaou(...$eykyyaaomkcqyiyq); } if (is_array($aiamqeawckcsuaou)) { $meqocwsecsywiiqs = $aiamqeawckcsuaou[Constants::qescuiwgsyuikume] ?? ''; if ($meqocwsecsywiiqs) { $wwgucssaecqekuek = $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? []; if (!isset($wwgucssaecqekuek['aria-label'])) { $wwgucssaecqekuek['title'] = $meqocwsecsywiiqs; $wwgucssaecqekuek['aria-label'] = $meqocwsecsywiiqs; } if ($cguqsiecqkeekskq !== Constants::mqkiiimeocmcyecq) { $wkaqekwwgqsqwcoi = $aiamqeawckcsuaou[Constants::qgqyauaqwqmqseim] ?? ''; if ($wkaqekwwgqsqwcoi) { $meqocwsecsywiiqs = $wkaqekwwgqsqwcoi . $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs, ['class' => 'ml-2']); } $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-btn'); } if ($cguqsiecqkeekskq === Constants::imywcsggckkcywgk) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'btn-outline-primary page-title-action'); } if ($cguqsiecqkeekskq === Constants::meisqwykgaymauka) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'btn-small'); } if (in_array($cguqsiecqkeekskq, [Constants::meisqwykgaymauka, Constants::imywcsggckkcywgk, Constants::cwswygwykwgsqiwu], true)) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'mr-2'); } $aegqqyquausewoqe = $aiamqeawckcsuaou[Constants::ismwycwsasweqomi] ?? []; if ($aegqqyquausewoqe) { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->igiawkoqiogocsau($aegqqyquausewoqe, $meqocwsecsywiiqs, $wwgucssaecqekuek); } else { $aiamqeawckcsuaou = $swqimwqeweekeusq->uuccukgasskgimsq($aiamqeawckcsuaou[Constants::ELEMENT] ?? 'a', $wwgucssaecqekuek, $meqocwsecsywiiqs); } } } $ccowyogiqwikkkie[$ymqmyyeuycgmigyo] = $aiamqeawckcsuaou; } return array_filter($ccowyogiqwikkkie); } public function ymaommgoigkakyes($uyaimqisayeqocig) : array { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return [Constants::squoamkioomemiyi => Constants::wyaqwomqwwaoiwas, Constants::qescuiwgsyuikume => __('Delete', PR__CMN__FOUNDATION), Constants::ssmskyqgcmeiayco => __('Are you sure you want to delete this item?', PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, ['href' => $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->mwyqswsaeeewsosm($uyaimqisayeqocig)), 'class' => 'pr-orm-action pr-btn btn-danger', Constants::qescuiwgsyuikume => __('Delete', PR__CMN__FOUNDATION), Constants::gcscaoggkqysyckq => true]]]; } public function mmqossqsksemasay($pkyyagewkiyckmwy) : ?string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->wmkogisswkckmeua()->smawkkqgsoawiquc($meywaqqsugaoeyys->euwycwigoeawgckq($pkyyagewkiyckmwy), $meywaqqsugaoeyys->eyamqkqiykagecsw(), ['class' => 'icon-lg'], true); } public function wgmuagayamwuwsuo() : string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); return $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($meywaqqsugaoeyys) . '_page_' . $meywaqqsugaoeyys->cueaickeeoiwayou(); } }
