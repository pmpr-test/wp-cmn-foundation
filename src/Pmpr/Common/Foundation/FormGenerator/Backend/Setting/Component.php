<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; abstract class Component { use HookTrait, HelperTrait, ObjectTrait, WrapperTrait, CommonTrait, ComponentTrait, SingletonTrait; protected $setting; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\x69\x6e\151\x74", [$this, "\171\145\x79\151\147\165\x79\145\147\155\x6d\171\165\163\145\141"]); $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->waqewsckuayqguos("\x70\162\x65\137\163\141\x76\145\137{$amakmumgguksgmum}\137\157\x70\x74\151\157\x6e\163", [$this, "\165\161\x6f\x75\x6d\171\x6f\x6b\147\x63\x69\147\151\x61\x77\163"]); } public function kgquecmsgcouyaya() { $amakmumgguksgmum = $this->msaksssmsuscmwaq(); $this->aqaqisyssqeomwom("\x61\146\x74\145\162\x5f\x67\145\156\145\162\x61\x74\x65\x5f{$amakmumgguksgmum}\137\160\x61\156\x65\154", [$this, "\x79\153\167\x71\141\165\x6b\153\171\x63\x6f\147\157\x6f\151\151"])->aqaqisyssqeomwom("{$amakmumgguksgmum}\137\x64\x65\x66\141\x75\x6c\x74\x73\x5f\157\x70\164\151\x6f\x6e\x73", [$this, "\x61\151\161\x65\171\167\x71\151\171\x71\x63\x65\x6b\147\x69\165"], 10, 2); } public function eiwcuqigayigimak() { return $this->setting; } public function msaksssmsuscmwaq() : string { $uusmaiomayssaecw = ''; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if ($amakmumgguksgmum instanceof Setting) { goto souucimemowwaseo; } if (!is_string($amakmumgguksgmum)) { goto qqcusuaqmyukwyqk; } $uusmaiomayssaecw = $amakmumgguksgmum; qqcusuaqmyukwyqk: goto oqyeyuocsyoeogim; souucimemowwaseo: $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc(); oqyeyuocsyoeogim: return $uusmaiomayssaecw; } public function mggwieqomgcuskme() : ?Setting { $mksyucucyswaukig = null; $amakmumgguksgmum = $this->eiwcuqigayigimak(); if (!$amakmumgguksgmum instanceof Setting) { goto egawiicamoykemqq; } $mksyucucyswaukig = $amakmumgguksgmum; egawiicamoykemqq: return $mksyucucyswaukig; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $omkysikckkcieckq = $ggauoeuaesiymgee; if (!($umqqgsiscygmeiem = $this->mggwieqomgcuskme())) { goto qqwukskiymcymgqc; } $omkysikckkcieckq = $umqqgsiscygmeiem->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee); qqwukskiymcymgqc: return $omkysikckkcieckq; } public function yeyiguyegmmyusea() { $umqqgsiscygmeiem = $this->mggwieqomgcuskme(); if (!($umqqgsiscygmeiem && $umqqgsiscygmeiem->qcsgmgoukiouuscw())) { goto ksoygkwycsqicooa; } $this->enqueue(); ksoygkwycsqicooa: } public function enqueue() { } public function ykwqaukkycogooii() { } public function uqoumyokgcigiaws($qiouiwasaauyaaue) { return $qiouiwasaauyaaue; } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { return $qiouiwasaauyaaue; } }
