<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Model; use Pmpr\Common\Foundation\Plugin\Ticket\REST\REST; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; class Ticket extends Common { use SettingTrait; const iwkmsgmiukksyamy = "\164\x69\143\x6b\x65\164\137\x73\x65\x74\164\151\156\147\x73"; const qimuqeogsmkigmyk = "\160\x6c\x75\x67\x69\x6e\x5f\164\151\x63\x6b\145\164\137\147\145\x74\137\x63\157\x6e\x66\x69\147\137\143\162\157\x6e\x5f\x68\x6f\157\153"; public function mameiwsayuyquoeq() { Model::symcgieuakksimmu(); Ajax::ksyueceqagwomguk(); REST::ksyueceqagwomguk(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\x6e\151\x74", [$this, "\161\x6b\x61\x65\x6f\167\x79\145\161\147\x6b\147\153\167\161\141"])->qcsmikeggeemccuu(self::qimuqeogsmkigmyk, [$this, "\x6e\167\x67\151\x71\x63\141\171\x71\x79\x6b\143\x6f\143\x75\x75"]); $this->waqewsckuayqguos("\x70\154\x75\x67\151\156\x5f\164\151\x63\x6b\x65\x74\137\x72\x65\x6e\x64\x65\162\137\143\x6f\156\166\145\x72\x73\x61\x74\x69\x6f\156", [$this, "\155\153\x65\145\x6f\x73\x69\x69\x6d\x67\157\x79\151\x61\171\157"]); } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::qimuqeogsmkigmyk)) { goto kskqckgmygiwqucm; } $igcseousimqsewkw->uwugaiqywmseksqm(Constants::iqaiecywsaysmmkq, self::qimuqeogsmkigmyk); kskqckgmygiwqucm: } public function mkeeosiimgoyiayo($iiwuoccgisuaoaka) { echo $this->umqeyekmoagusaiq($iiwuoccgisuaoaka); } public function nwgiqcayqykcocuu() { try { if (!($qeqooyuoiasweuck = API::symcgieuakksimmu()->tkgawykgecmsaeis())) { goto sucgyiymguwououy; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(self::iwkmsgmiukksyamy, $qeqooyuoiasweuck); sucgyiymguwououy: } catch (Exception $wgaoewqkwgomoaai) { } } public function qkaeowyeqgkgkwqa() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qkueegaowuyiimgw; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qiouiwasaauyaaue = $seammywuwkueoois->get(self::iwkmsgmiukksyamy, []); if (!empty($qiouiwasaauyaaue)) { goto kcqewweqqqmekuwi; } $this->nwgiqcayqykcocuu(); kcqewweqqqmekuwi: qkueegaowuyiimgw: } }
