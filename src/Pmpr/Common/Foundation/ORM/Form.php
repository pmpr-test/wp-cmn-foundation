<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use CMB2_Boxes; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Form extends Common { protected ?Model $model = null; public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\x69\x6e\151\x74", [$this, "\x79\x65\171\x69\147\x75\x79\145\147\x6d\x6d\171\x75\x73\x65\141"], 0)->qcsmikeggeemccuu("\141\144\144\x5f\x6d\x65\164\x61\137\x62\157\170\x65\x73", [$this, "\155\165\147\x63\x63\145\x69\x77\x6f\x73\171\x63\151\x77\157\163"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\141\x76\x65\x5f\157\142\152\145\143\164", Model::class), [$this, "\x67\x73\145\147\x73\151\x6f\143\161\x6d\163\157\x61\171\x69\151"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x6d\142\x32\x5f\157\x76\145\x72\162\151\x64\x65\137\155\145\x74\x61\137\166\141\154\x75\x65", [$this, "\141\147\x75\x63\x79\x69\x73\x69\153\143\163\x6d\x65\x65\165\x67"], 10, 4); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { global $cmb2Override, $pagenow; $cmb2Override = false; if (!($pagenow === "\x61\144\x6d\x69\156\x2e\160\x68\160")) { goto mkwskuycuyguqqok; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk); if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::awysmmukegasimmq)))) { goto kuicqywysciceggs; } if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) { goto cuykwgmswkskqkyi; } $cmb2Override = true; cuykwgmswkskqkyi: kuicqywysciceggs: mkwskuycuyguqqok: } public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig) { global $cmb2Override; if (!class_exists("\x43\x4d\102\62")) { goto kiqogmwcgcamwiig; } if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\x64\x69\164\137\x69\x74\x65\x6d", $kqokimuosyuyyucg)) { goto yowsmsiyimmimemc; } $cmb2Override = true; foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) { if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\142\152\145\143\164\x5f\x74\x79\160\x65\163"], true)) { goto kwagwqyusyiyoaqs; } $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\x70\x6f\163\164", $_POST); kwagwqyusyiyoaqs: eqkauqciwewmgeoi: } sciwggaeogcoesiu: yowsmsiyimmimemc: kiqogmwcgcamwiig: } public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig) { global $cmb2Override; if (!$mksyucucyswaukig) { goto iomcaiwewsawiamu; } $_REQUEST["\160\157\x73\164"] = $this->mgogaykgkoogasim()->keeuqgyooycqoygw($mksyucucyswaukig); $cmb2Override = true; iomcaiwewsawiamu: } public function agucyisikcsmeeug($eqgoocgaqwqcimie, $moqewomugocaueis, $ywmkwiwkosakssii, $aiowsaccomcoikus) { if (!("\157\162\155" === $moqewomugocaueis)) { goto uukumskkeggaowck; } if (!($aiowsaccomcoikus && isset($aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) && $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm])) { goto sqiciiuwmykocycc; } $eqgoocgaqwqcimie = $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]; sqiciiuwmykocycc: $qqswgiawgeaeoecu = (array) ($aiowsaccomcoikus->group[Constants::ciyoccqkiamemcmm] ?? []); if (!($qqswgiawgeaeoecu && "\x63\155\142\62\x5f\146\151\145\154\x64\x5f\x6e\157\x5f\157\166\x65\162\162\151\144\145\137\166\141\154" === $eqgoocgaqwqcimie)) { goto eequksumcoogyoem; } $eqgoocgaqwqcimie = $qqswgiawgeaeoecu; eequksumcoogyoem: uukumskkeggaowck: return $eqgoocgaqwqcimie; } }
