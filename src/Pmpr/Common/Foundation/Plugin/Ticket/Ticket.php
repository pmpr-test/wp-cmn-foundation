<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Plugin\Ticket\Model\Model; use Pmpr\Common\Foundation\Plugin\Ticket\REST\REST; use Pmpr\Common\Foundation\Plugin\Ticket\Traits\SettingTrait; class Ticket extends Common { use SettingTrait; const iwkmsgmiukksyamy = "\x74\151\x63\153\x65\164\x5f\163\x65\164\164\151\156\147\163"; const qimuqeogsmkigmyk = "\x70\x6c\165\x67\x69\156\x5f\x74\151\x63\x6b\x65\x74\137\147\x65\164\x5f\143\x6f\156\x66\x69\x67\x5f\143\x72\157\x6e\x5f\x68\157\x6f\x6b"; public function mameiwsayuyquoeq() { Model::symcgieuakksimmu(); Ajax::ksyueceqagwomguk(); REST::ksyueceqagwomguk(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\x69\164"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\x69\156\151\x74", [$this, "\x71\x6b\x61\x65\157\167\x79\145\161\x67\x6b\147\x6b\167\161\x61"])->qcsmikeggeemccuu(self::qimuqeogsmkigmyk, [$this, "\156\x77\x67\151\x71\x63\x61\171\x71\171\x6b\x63\x6f\x63\165\165"]); $this->waqewsckuayqguos("\x70\x6c\x75\147\151\x6e\137\164\x69\143\153\x65\164\x5f\162\x65\x6e\144\145\162\x5f\x63\157\156\166\145\x72\x73\141\x74\151\157\x6e", [$this, "\155\153\x65\x65\x6f\x73\151\151\x6d\147\157\x79\x69\141\x79\157"]); } public function init() { $igcseousimqsewkw = $this->uwkmaywceaaaigwo()->cuwcwgaeiugaccei(); if ($igcseousimqsewkw->sceqickmyoseqcue(self::qimuqeogsmkigmyk)) { goto waekkoqkywowucqm; } $igcseousimqsewkw->uwugaiqywmseksqm(Constants::iqaiecywsaysmmkq, self::qimuqeogsmkigmyk); waekkoqkywowucqm: } public function mkeeosiimgoyiayo($iiwuoccgisuaoaka) { echo $this->umqeyekmoagusaiq($iiwuoccgisuaoaka); } public function nwgiqcayqykcocuu() { try { if (!($qeqooyuoiasweuck = API::symcgieuakksimmu()->tkgawykgecmsaeis())) { goto iyyoksuqkyayycyo; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update(self::iwkmsgmiukksyamy, $qeqooyuoiasweuck); iyyoksuqkyayycyo: } catch (Exception $wgaoewqkwgomoaai) { } } public function qkaeowyeqgkgkwqa() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto skuiqymemkkmcasa; } $seammywuwkueoois = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qiouiwasaauyaaue = $seammywuwkueoois->get(self::iwkmsgmiukksyamy, []); if (!empty($qiouiwasaauyaaue)) { goto qyauskeceyuommay; } $this->nwgiqcayqykcocuu(); qyauskeceyuommay: skuiqymemkkmcasa: } }
