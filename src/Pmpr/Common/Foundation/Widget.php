<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0000cbc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, SettingTrait, TemplateTrait, WrapperTrait, HelperTrait, FieldsTrait, CommonTrait, HookTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $yyauwyaeewsickwk->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); } $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ["\143\x6c\x61\x73\x73\156\141\155\145" => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}\x2d{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}\x5f{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\x66\x6f\162\x65\x5f\x65\156\161\165\145\165\x65\137\x62\141\143\153\x65\156\144\137\x61\163\x73\x65\164\163", [$this, "\x6b\153\x75\143\x6d\x63\x61\x61\171\x61\151\x65\x61\163\x79\151"]); $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\x5f\151\x6e\x69\x74", [$this, "\x79\x65\x79\151\147\x75\x79\145\147\155\155\x79\165\163\145\x61"])->qcsmikeggeemccuu("\167\151\144\147\x65\x74\x73\x5f\151\156\x69\x74", [$this, "\x72\x65\147\151\x73\x74\x65\x72"])->qcsmikeggeemccuu("\141\144\155\151\156\137\146\157\x6f\164\145\162\x2d\167\x69\x64\x67\x65\164\163\56\160\x68\x70", [$this, "\147\147\x73\153\x63\147\x67\x61\x61\145\141\x6b\x67\141\x71\143"]); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(static::class); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { $this->enqueue(); } } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); } return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; } else { unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); } } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) { $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($nsmgceoqaqogqmuw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); } } } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->ugwmakayykcmcmqa()); if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); } return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
