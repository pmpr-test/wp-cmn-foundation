<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15f5710e7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use CMB2_Boxes; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Form extends Common { protected ?Model $model = null; public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\x5f\x69\156\151\164", [$this, "\x79\145\x79\151\x67\x75\171\x65\x67\x6d\155\x79\x75\163\x65\x61"], 0)->qcsmikeggeemccuu("\141\144\144\x5f\155\145\x74\141\137\x62\157\x78\x65\x73", [$this, "\x6d\165\x67\x63\x63\145\x69\167\157\x73\171\x63\151\167\157\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\141\166\145\x5f\157\x62\152\x65\x63\164", Model::class), [$this, "\x67\x73\x65\147\x73\x69\x6f\x63\x71\x6d\163\157\x61\171\x69\151"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\155\142\62\137\x6f\166\145\162\162\151\144\x65\x5f\x6d\x65\x74\141\137\x76\x61\x6c\x75\145", [$this, "\141\147\165\143\x79\x69\163\151\x6b\143\x73\155\145\x65\165\x67"], 10, 4); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { global $cmb2Override, $pagenow; $cmb2Override = false; if (!($pagenow === "\x61\x64\155\151\x6e\x2e\160\x68\x70")) { goto ccqgkeesikyegcik; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk); if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::awysmmukegasimmq)))) { goto kwaqakoogeiacmwi; } if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) { goto agqmoymkiswqswqo; } $cmb2Override = true; agqmoymkiswqswqo: kwaqakoogeiacmwi: ccqgkeesikyegcik: } public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig) { global $cmb2Override; if (!class_exists("\x43\115\x42\62")) { goto cwcmwogseemgqgqq; } if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\144\151\164\x5f\151\164\x65\x6d", $kqokimuosyuyyucg)) { goto oqwyemgwoossauyk; } $cmb2Override = true; foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) { if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\x6f\x62\152\x65\x63\x74\137\x74\171\x70\x65\x73"], true)) { goto wcoqiwuusoeqiqwi; } $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\x70\x6f\x73\164", $_POST); wcoqiwuusoeqiqwi: iiuawywwoaeyauge: } aakwscykmyyykoms: oqwyemgwoossauyk: cwcmwogseemgqgqq: } public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig) { global $cmb2Override; if (!$mksyucucyswaukig) { goto yuoyackaoigyyyso; } $_REQUEST["\x70\157\x73\x74"] = $this->mgogaykgkoogasim()->keeuqgyooycqoygw($mksyucucyswaukig); $cmb2Override = true; yuoyackaoigyyyso: } public function agucyisikcsmeeug($eqgoocgaqwqcimie, $moqewomugocaueis, $ywmkwiwkosakssii, $aiowsaccomcoikus) { if (!("\157\162\155" === $moqewomugocaueis)) { goto gsimeiqkoyqkuecq; } if (!($aiowsaccomcoikus && isset($aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) && $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm])) { goto kcqieuukskyiywss; } $eqgoocgaqwqcimie = $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]; kcqieuukskyiywss: $qqswgiawgeaeoecu = (array) ($aiowsaccomcoikus->group[Constants::ciyoccqkiamemcmm] ?? []); if (!($qqswgiawgeaeoecu && "\x63\x6d\142\62\x5f\146\151\145\x6c\x64\137\156\157\137\157\x76\145\162\162\x69\x64\145\137\166\x61\154" === $eqgoocgaqwqcimie)) { goto wukuisoeoeomgegu; } $eqgoocgaqwqcimie = $qqswgiawgeaeoecu; wukuisoeoeomgegu: gsimeiqkoyqkuecq: return $eqgoocgaqwqcimie; } }
