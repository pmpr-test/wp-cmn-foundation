<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Model; use Pmpr\Common\Foundation\Plugin\Ticket\REST\REST; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; class Ticket extends Common { use SettingTrait; const iwkmsgmiukksyamy = "\x74\x69\x63\153\x65\164\137\163\x65\x74\164\151\x6e\x67\163"; const qimuqeogsmkigmyk = "\x70\x6c\165\147\151\x6e\x5f\x74\151\x63\153\x65\164\x5f\147\145\164\x5f\143\x6f\156\x66\151\147\137\x63\162\x6f\x6e\137\x68\x6f\x6f\153"; public function mameiwsayuyquoeq() { Model::symcgieuakksimmu(); Ajax::ksyueceqagwomguk(); REST::ksyueceqagwomguk(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\156\x69\164", [$this, "\x71\x6b\x61\145\157\167\171\x65\x71\x67\x6b\147\x6b\x77\161\x61"])->qcsmikeggeemccuu(self::qimuqeogsmkigmyk, [$this, "\156\x77\x67\151\161\143\141\171\x71\x79\x6b\143\x6f\143\165\165"]); $this->waqewsckuayqguos("\x70\x6c\x75\147\151\156\x5f\x74\151\x63\153\145\164\137\x72\x65\156\144\x65\x72\137\143\157\156\166\145\x72\163\x61\x74\151\x6f\156", [$this, "\x6d\x6b\x65\145\x6f\x73\151\x69\155\x67\157\x79\x69\x61\x79\157"]); } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::qimuqeogsmkigmyk)) { goto kskqckgmygiwqucm; } $igcseousimqsewkw->uwugaiqywmseksqm(Constants::iqaiecywsaysmmkq, self::qimuqeogsmkigmyk); kskqckgmygiwqucm: } public function mkeeosiimgoyiayo($iiwuoccgisuaoaka) { echo $this->umqeyekmoagusaiq($iiwuoccgisuaoaka); } public function nwgiqcayqykcocuu() { try { if (!($qeqooyuoiasweuck = API::symcgieuakksimmu()->tkgawykgecmsaeis())) { goto sucgyiymguwououy; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(self::iwkmsgmiukksyamy, $qeqooyuoiasweuck); sucgyiymguwououy: } catch (Exception $wgaoewqkwgomoaai) { } } public function qkaeowyeqgkgkwqa() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qkueegaowuyiimgw; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qiouiwasaauyaaue = $seammywuwkueoois->get(self::iwkmsgmiukksyamy, []); if (!empty($qiouiwasaauyaaue)) { goto kcqewweqqqmekuwi; } $this->nwgiqcayqykcocuu(); kcqewweqqqmekuwi: qkueegaowuyiimgw: } }
