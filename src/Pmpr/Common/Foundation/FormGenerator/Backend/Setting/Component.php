<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, CommonTrait, ObjectTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\137\x69\156\x69\164", [$this, "\x79\x65\171\x69\147\x75\x79\x65\147\x6d\x6d\171\x75\163\145\x61"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\160\x72\x65\137\163\x61\x76\145\137{$amakmumgguksgmum}\x5f\157\x70\164\x69\x6f\x6e\163", [$this, "\165\x71\157\x75\x6d\x79\157\x6b\147\143\151\147\151\141\x77\x73"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\x61\x66\164\x65\162\137\147\145\x6e\145\x72\141\164\x65\x5f{$amakmumgguksgmum}\x5f\x70\x61\156\145\x6c", [$this, "\x79\153\x77\161\141\165\153\153\x79\x63\x6f\147\157\x6f\151\x69"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\x64\145\146\141\165\154\x74\163\x5f\157\x70\164\x69\157\156\x73", [$this, "\x61\151\161\145\171\x77\x71\151\171\161\143\x65\x6b\x67\151\165"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); } else { if (is_string($amakmumgguksgmum)) { $uusmaiomayssaecw = $amakmumgguksgmum; } } return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $mksyucucyswaukig = $amakmumgguksgmum; } return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if ($umqqgsiscygmeiem = $this->mggwieqomgcuskme()) { $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { $this->enqueue(); } } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
