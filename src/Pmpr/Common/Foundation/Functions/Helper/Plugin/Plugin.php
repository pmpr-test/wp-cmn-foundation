<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67581610eed2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Requirements_Check; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\x75\x65\162\x79\137\160\154\165\147\x69\156\x73") : array { $ksaameoqigiaoigg = []; $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ciugwooasaqcywas($ywmkwiwkosakssii, $aiamqeawckcsuaou); if (!is_wp_error($sogksuscggsicmac)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($mseykiqqcmyesccu = $gkyciwoiiisgywcs->get($sogksuscggsicmac, "\160\154\165\147\x69\156\x73")) { switch ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::aisguagukaewucii, Constants::eoaiagsgqsmskugs)) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::NAME); } break; case Constants::kgmecoswscqqsymg: case Constants::ckmqoekmugkggeym: foreach ($mseykiqqcmyesccu as $mkysicwccoeicumg) { $ksaameoqigiaoigg[$gkyciwoiiisgywcs->get($mkysicwccoeicumg, Constants::ouywiegeiyuaaawo)] = $mkysicwccoeicumg; } break; } } } return $ksaameoqigiaoigg; } public function yicegakcoioyuwos() : array { return (array) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get("\141\143\164\x69\x76\145\137\x70\154\x75\x67\151\156\x73", []); } public function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool { return $this->uwkmaywceaaaigwo()->essaugkeosgskqme()->ggocakcisguuokai($mkysicwccoeicumg) || $this->sioyqaykmwwugmgi($mkysicwccoeicumg); } public function kyiokwokcqqmgicy() : bool { return $this->ggocakcisguuokai("\145\x6c\x65\x6d\145\156\x74\x6f\x72\x2f\x65\154\145\x6d\x65\x6e\164\157\x72\56\160\x68\x70"); } public function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool { $ggocakcisguuokai = false; if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa()) { $mseykiqqcmyesccu = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym("\x61\x63\164\x69\x76\145\x5f\163\x69\x74\145\167\151\144\x65\137\160\x6c\x75\x67\151\156\163"); $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]); } return $ggocakcisguuokai; } public function sskmceyamwugkaii(array $ywmkwiwkosakssii = []) : bool { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x70\x68\x70" => "\67\x2e\x34", "\167\x70" => "\65\56\62"]); $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii); return $gioggcykgoikcwiy->passes(); } }
