<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Setting; use Pmpr\Common\Foundation\FormGenerator\Backend\Common; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class WoocommerceTab extends Common { protected ?string $name; protected ?string $title; protected array $sections = []; protected array $fields = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\143\157\x6d\x6d\145\x72\143\145\137\x73\x65\164\164\x69\156\x67\x73\137\x74\141\142\x73\x5f{$this->cisyiemkeykgkomc()}", [$this, "\151\165\141\165\143\x75\157\157\153\147\x6f\x71\151\x69\x69\x6f"])->qcsmikeggeemccuu("\167\x6f\157\x63\x6f\x6d\155\x65\162\x63\145\x5f\x75\x70\x64\x61\164\x65\137\x6f\160\164\x69\157\156\163\137{$this->cisyiemkeykgkomc()}", [$this, "\x6f\x71\171\165\167\143\x63\163\x75\x73\x6b\151\167\x67\145\x77"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\x6f\x63\x6f\x6d\155\x65\162\x63\x65\137\x73\x65\x74\x74\x69\156\147\163\137\x74\x61\142\163\x5f\x61\x72\162\x61\171", [$this, "\147\153\151\157\x73\x75\145\x6d\x6b\x75\143\151\151\x71\153\161"], 999); } public final function oqyuwccsuskiwgew() { $this->kqsgewsukomooiok(); woocommerce_update_options($this->ugmceccgwaaaigiy()); } public final function iuaucuookgoqiiio() { $this->kqsgewsukomooiok(); woocommerce_admin_fields($this->ugmceccgwaaaigiy()); } private function kqsgewsukomooiok() { if ($this->fields) { goto mmkooaugaqyqgyww; } $this->aoqwywcqmoqaukkq(); mmkooaugaqyqgyww: } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function yqyamkmeukygaome($aokagokqyuysuksm, $meqocwsecsywiiqs, $ikgwqyuyckaewsow) : self { $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::squoamkioomemiyi => Constants::qescuiwgsyuikume]); $this->ewweaossowcqywaw($ikgwqyuyckaewsow); $this->mkksewyosgeumwsa($aokagokqyuysuksm, [Constants::squoamkioomemiyi => "\x73\145\143\x74\x69\157\156\x65\156\144"]); return $this; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { $this->sections[] = $awcmekyiwwkeyisq; return $this; } public function ugmceccgwaaaigiy() : array { return $this->fields; } public function mkksewyosgeumwsa(string $aokagokqyuysuksm, array $ywmkwiwkosakssii = [], $sqeykgyoooqysmca = null) : self { if (!(!isset($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) && $sqeykgyoooqysmca)) { goto aeesioaqmuoeyoga; } $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = Constants::kqeokggqcsesmqco; $ywmkwiwkosakssii[Constants::ueaisqkksoeisswi] = $sqeykgyoooqysmca; aeesioaqmuoeyoga: $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] = $this->qmuguoywasawkcyw($aokagokqyuysuksm); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!isset($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig])) { goto ogsasqwsmasgymkq; } foreach ($ywmkwiwkosakssii[Constants::wceagkqgmeogkoig] as $momcykaoccoymeig => $igqsaukqcqscimok) { $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ymckmcsiymwqucoq, []); if (!$ikgwqyuyckaewsow) { goto umisqysaiumusiew; } if (is_array($ikgwqyuyckaewsow)) { goto uqqwyiemackamkca; } if (!is_string($ikgwqyuyckaewsow)) { goto kayygiukegykiwas; } $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq] = $this->qmuguoywasawkcyw($ikgwqyuyckaewsow); kayygiukegykiwas: goto miumuoummqkyeeom; uqqwyiemackamkca: foreach ($igqsaukqcqscimok[Constants::ymckmcsiymwqucoq] as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ywmkwiwkosakssii[Constants::wceagkqgmeogkoig][$momcykaoccoymeig][Constants::ymckmcsiymwqucoq][$uusmaiomayssaecw] = $this->qmuguoywasawkcyw($aiowsaccomcoikus); mmkssgccamceekkq: } geaucesekwmkgusc: miumuoummqkyeeom: umisqysaiumusiew: uqqqaqwamieuwuky: } ikseiooeakoewqqu: ogsasqwsmasgymkq: $this->fields[] = $ywmkwiwkosakssii; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { $sqeykgyoooqysmca = null; if (!(!isset($aiowsaccomcoikus[Constants::kqeokggqcsesmqco]) || !$aiowsaccomcoikus[Constants::kqeokggqcsesmqco])) { goto agqoooycekqkcygs; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->unset($aiowsaccomcoikus, Constants::squoamkioomemiyi); agqoooycekqkcygs: $this->mkksewyosgeumwsa($aokagokqyuysuksm, $aiowsaccomcoikus, $sqeykgyoooqysmca); mcoqyaoecgqswook: } yauaumyywgiiweue: return $this; } public function gkiosuemkuciiqkq($ywoucyskcquysiwc) { $ywoucyskcquysiwc[$this->cisyiemkeykgkomc()] = $this->qcgakseyaikigqco(); return $ywoucyskcquysiwc; } public final function cisyiemkeykgkomc() : string { return "{$this->aakmagwggmkoiiyu()}\137\x74\141\142\x5f\x73\145\164\164\151\156\147"; } private function qmuguoywasawkcyw($aokagokqyuysuksm) : string { return "\167\x63\x5f{$this->aakmagwggmkoiiyu()}\x5f{$aokagokqyuysuksm}"; } public function eiwcuqigayigimak($aiowsaccomcoikus, $ggauoeuaesiymgee = false) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->qmuguoywasawkcyw($aiowsaccomcoikus), $ggauoeuaesiymgee); } public function eiaacegkigqiwawg($aiowsaccomcoikus, $eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->update($this->qmuguoywasawkcyw($aiowsaccomcoikus), $eqgoocgaqwqcimie); } public function eaiyegoagkgeowae() : bool { return $this->caokeucsksukesyo()->wikusamwomuogoau()->eaiyegoagkgeowae() && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\164\x61\x62") === $this->cisyiemkeykgkomc(); } public abstract function aoqwywcqmoqaukkq(); }
