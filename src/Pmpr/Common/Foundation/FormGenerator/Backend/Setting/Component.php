<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132d18d1e6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, ObjectTrait, WrapperTrait, CommonTrait, ComponentTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\x69\156\151\164", [$this, "\171\x65\171\x69\x67\x75\171\x65\147\x6d\155\171\x75\163\145\141"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\160\x72\145\x5f\163\141\x76\x65\x5f{$amakmumgguksgmum}\137\x6f\160\x74\151\x6f\156\x73", [$this, "\x75\x71\157\165\155\171\157\x6b\147\143\x69\147\x69\x61\x77\163"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\141\146\x74\x65\162\x5f\147\145\x6e\x65\162\x61\164\145\137{$amakmumgguksgmum}\x5f\160\x61\x6e\145\154", [$this, "\x79\153\x77\161\141\x75\x6b\153\171\x63\x6f\147\157\x6f\151\x69"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\144\145\x66\141\x75\154\164\x73\137\x6f\160\164\151\x6f\156\163", [$this, "\x61\151\161\x65\171\167\x71\x69\x79\161\x63\x65\153\x67\x69\165"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { goto kuyeoaemuwcqkoae; } if (!is_string($amakmumgguksgmum)) { goto asoweekcciigkweo; } $uusmaiomayssaecw = $amakmumgguksgmum; asoweekcciigkweo: goto cuwasskqkoysieey; kuyeoaemuwcqkoae: $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); cuwasskqkoysieey: return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if (!$amakmumgguksgmum instanceof Setting) { goto mqigiiusqaieqeaa; } $mksyucucyswaukig = $amakmumgguksgmum; mqigiiusqaieqeaa: return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if (!($umqqgsiscygmeiem = $this->mggwieqomgcuskme())) { goto igeiewqcwieuawms; } $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); igeiewqcwieuawms: return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if (!($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw())) { goto wuqysikmouuiawwi; } $this->enqueue(); wuqysikmouuiawwi: } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
