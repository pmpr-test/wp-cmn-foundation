<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679775b18836a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, SettingTrait, TemplateTrait, WrapperTrait, HelperTrait, FieldsTrait, CommonTrait, HookTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $yyauwyaeewsickwk->sggauymmqugqouay($this); } $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\x6c\141\163\163\156\141\x6d\145" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\x2d{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\146\157\x72\x65\137\145\156\161\165\x65\165\x65\137\x62\x61\143\x6b\x65\x6e\x64\137\x61\x73\163\145\164\163", [$this, "\153\x6b\x75\143\x6d\143\x61\141\171\141\151\x65\x61\163\171\x69"]); $this->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\x69\x6e\151\x74", [$this, "\171\145\x79\151\147\x75\171\145\x67\155\x6d\x79\x75\163\145\x61"])->qcsmikeggeemccuu("\x77\151\x64\147\x65\164\x73\137\x69\x6e\151\x74", [$this, "\162\145\147\x69\163\164\x65\162"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\146\x6f\157\x74\x65\162\55\x77\151\x64\x67\145\164\x73\56\x70\150\x70", [$this, "\147\x67\x73\153\143\x67\147\x61\x61\145\141\153\147\x61\161\x63"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(static::class); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { $this->enqueue(); } } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); } return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; } else { unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); } } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) { $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($nsmgceoqaqogqmuw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); } } } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); } return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
