<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b4dde2139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Traits\SettingTrait; use WP_Widget; abstract class Widget extends WP_Widget { use SingletonTrait, SettingTrait, TemplateTrait, WrapperTrait, HelperTrait, FieldsTrait, CommonTrait, HookTrait; public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $yyauwyaeewsickwk->sggauymmqugqouay($this); } $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ['classname' => $yyauwyaeewsickwk->igcwuwuymeuomaqo("{$wksoawcgagcgoask}-{$aokagokqyuysuksm}"), Constants::eqkeooqcsscoggia => $mkqqqewsokcswckc]); parent::__construct("{$wksoawcgagcgoask}_{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg); $this->gyqeoeemeemicgqi(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'kkucmcaayaieasyi']); $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('widgets_init', [$this, 'register'])->qcsmikeggeemccuu('admin_footer-widgets.php', [$this, 'ggskcggaaeakgaqc']); } public function register() { $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sqiwaoiciieomeyo(static::class); } public function yeyiguyegmmyusea() { } public final function kkucmcaayaieasyi() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kkessyykwcqgecqc()) { $this->enqueue(); } } public function enqueue() { } public function ggskcggaaeakgaqc() { } public function update($new_instance, $old_instance) : array { $owgumcsyqsamiemg = is_array($old_instance) ? $old_instance : []; $this->ykwqaukkycogooii(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($this->ugmceccgwaaaigiy() as $aokagokqyuysuksm => $aiowsaccomcoikus) { $owgumcsyqsamiemg[$aokagokqyuysuksm] = $gkyciwoiiisgywcs->get($new_instance, $aokagokqyuysuksm); } return $owgumcsyqsamiemg; } public function form($owgumcsyqsamiemg) { $this->ykwqaukkycogooii(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ikgwqyuyckaewsow) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $ymqmyyeuycgmigyo = $this->get_field_name($aokagokqyuysuksm); $aiowsaccomcoikus->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->ggiaseqygioygumq($ymqmyyeuycgmigyo); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, $aokagokqyuysuksm)) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); } if ($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $ikgwqyuyckaewsow[$aokagokqyuysuksm] = $aiowsaccomcoikus; } else { unset($ikgwqyuyckaewsow[$aokagokqyuysuksm]); } } $this->caokeucsksukesyo()->wmkogisswkckmeua()->gusskggqyeisgsoy($this->id_base)->ewweaossowcqywaw($ikgwqyuyckaewsow)->render(true); } } public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg) { if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) { $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg); if ($nsmgceoqaqogqmuw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ckyiayyeksyqosei, ''); echo $nsmgceoqaqogqmuw; echo $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gkkeyqoigqiukkqk, ''); } } } public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string { $aqykuigiuwmmcieu = ''; $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg); $qqscaoyqikuyeoaw = $qookweymeqawmcwo[Constants::okciuaikiyaecwmy] ?? $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) { $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => false]); } return $aqykuigiuwmmcieu; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { return !empty($qookweymeqawmcwo); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { return $owgumcsyqsamiemg; } public function ykwqaukkycogooii() { $this->ecwgiiuacoaokqkw(); } public function ecwgiiuacoaokqkw() { } }
