<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, CommonTrait, ObjectTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\x69\156\151\164", [$this, "\171\x65\x79\x69\x67\x75\171\145\x67\155\x6d\x79\165\x73\x65\141"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\x70\x72\145\x5f\163\141\x76\x65\137{$amakmumgguksgmum}\137\157\160\x74\151\157\156\x73", [$this, "\165\x71\x6f\x75\155\x79\157\x6b\x67\143\151\x67\x69\141\x77\x73"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\x66\x74\145\162\137\x67\145\156\145\x72\x61\164\145\x5f{$amakmumgguksgmum}\137\160\x61\156\145\154", [$this, "\x79\x6b\x77\x71\x61\x75\x6b\x6b\x79\143\157\147\157\x6f\151\x69"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\144\x65\x66\141\x75\x6c\x74\163\x5f\x6f\x70\x74\151\157\x6e\163", [$this, "\x61\x69\161\145\171\167\161\x69\x79\161\x63\x65\153\x67\151\x75"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); } else { if (is_string($amakmumgguksgmum)) { $uusmaiomayssaecw = $amakmumgguksgmum; } } return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $mksyucucyswaukig = $amakmumgguksgmum; } return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if ($umqqgsiscygmeiem = $this->mggwieqomgcuskme()) { $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { $this->enqueue(); } } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
