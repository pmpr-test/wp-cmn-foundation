<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Requirements_Check; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\x75\x65\x72\171\137\160\154\x75\x67\x69\x6e\163") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($mseykiqqcmyesccu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\160\x6c\x75\147\x69\x6e\x73")) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $mkysicwccoeicumg; } break; } } } return $ksaameoqigiaoigg; } public function yicegakcoioyuwos() : array { return (array) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\x61\x63\164\x69\x76\145\137\x70\x6c\165\147\x69\x6e\x73", []); } public function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool { return $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai($mkysicwccoeicumg) || $this->sioyqaykmwwugmgi($mkysicwccoeicumg); } public function kyiokwokcqqmgicy() : bool { return $this->ggocakcisguuokai("\145\x6c\x65\155\x65\x6e\164\x6f\162\57\x65\154\145\x6d\145\x6e\x74\x6f\x72\56\160\150\x70"); } public function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool { $ggocakcisguuokai = false; if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa()) { $mseykiqqcmyesccu = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym("\141\143\164\151\x76\145\x5f\163\x69\x74\145\x77\x69\144\x65\x5f\x70\154\x75\147\151\156\x73"); $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]); } return $ggocakcisguuokai; } public function sskmceyamwugkaii(array $ywmkwiwkosakssii = []) : bool { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\150\x70" => "\x37\56\x34", "\x77\160" => "\65\56\x32"]); $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii); return $gioggcykgoikcwiy->passes(); } }
