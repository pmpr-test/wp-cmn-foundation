<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, CommonTrait, ObjectTrait, WrapperTrait, TemplateTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x69\x6e\151\164", [$this, "\x79\145\x79\x69\147\165\x79\145\x67\155\155\171\165\163\145\x61"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\x70\x72\x65\x5f\163\141\x76\145\137{$amakmumgguksgmum}\x5f\157\x70\164\x69\x6f\156\x73", [$this, "\165\x71\x6f\165\155\171\157\x6b\x67\x63\x69\x67\151\x61\167\x73"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\x61\x66\164\145\162\137\x67\x65\156\x65\162\x61\164\x65\x5f{$amakmumgguksgmum}\137\x70\x61\156\x65\x6c", [$this, "\x79\153\167\161\141\x75\x6b\x6b\x79\143\157\147\x6f\x6f\151\x69"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\144\145\x66\141\165\154\164\x73\137\x6f\160\x74\x69\x6f\x6e\163", [$this, "\141\x69\161\x65\x79\167\161\x69\171\161\143\x65\153\x67\x69\x75"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); } else { if (is_string($amakmumgguksgmum)) { $uusmaiomayssaecw = $amakmumgguksgmum; } } return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { $mksyucucyswaukig = $amakmumgguksgmum; } return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if ($umqqgsiscygmeiem = $this->mggwieqomgcuskme()) { $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); } return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if ($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw()) { $this->enqueue(); } } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
