<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use CMB2_Boxes; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Form extends Common { protected ?Model $model = null; public function mgogaykgkoogasim() : ?Model { return $this->model; } public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self { $this->model = $meywaqqsugaoeyys; return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\151\156\x69\x74", [$this, "\171\145\x79\151\x67\x75\171\x65\147\155\x6d\x79\x75\163\145\x61"], 0)->qcsmikeggeemccuu("\x61\x64\x64\137\x6d\x65\x74\141\x5f\142\x6f\170\x65\163", [$this, "\x6d\165\x67\143\143\x65\151\x77\157\x73\171\143\x69\167\x6f\x73"], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\x61\x76\x65\137\157\142\x6a\x65\x63\164", Model::class), [$this, "\147\163\145\147\x73\151\157\143\x71\155\x73\x6f\141\171\x69\x69"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x6d\x62\x32\x5f\x6f\x76\x65\162\x72\151\144\145\137\155\145\164\141\x5f\166\141\x6c\165\145", [$this, "\x61\x67\x75\x63\171\x69\163\x69\153\143\x73\155\145\x65\165\x67"], 10, 4); parent::kgquecmsgcouyaya(); } public function yeyiguyegmmyusea() { global $cmb2Override, $pagenow; $cmb2Override = false; if (!($pagenow === "\x61\x64\155\x69\156\56\160\x68\160")) { goto mssaawaiaimogowg; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::imywcsggckkcywgk); if (!($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua(Constants::awysmmukegasimmq)))) { goto giuoqsumkimmuaya; } if (!($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq())) { goto yueosioyegouuwqo; } $cmb2Override = true; yueosioyegouuwqo: giuoqsumkimmuaya: mssaawaiaimogowg: } public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig) { global $cmb2Override; if (!class_exists("\103\115\102\x32")) { goto kuimgwmkcgcoecko; } if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\144\x69\164\137\x69\x74\145\155", $kqokimuosyuyyucg)) { goto gaiaucesmcqgqwac; } $cmb2Override = true; foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) { if (!in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box["\157\142\x6a\x65\x63\x74\x5f\164\171\160\x65\163"], true)) { goto swkeiggkawwgewuw; } $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, "\x70\x6f\163\x74", $_POST); swkeiggkawwgewuw: umamqqwcoewcigew: } ccyiggckemwgooco: gaiaucesmcqgqwac: kuimgwmkcgcoecko: } public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig) { global $cmb2Override; if (!$mksyucucyswaukig) { goto oaskqsoyesmmeaew; } $_REQUEST["\160\x6f\x73\164"] = $this->mgogaykgkoogasim()->keeuqgyooycqoygw($mksyucucyswaukig); $cmb2Override = true; oaskqsoyesmmeaew: } public function agucyisikcsmeeug($eqgoocgaqwqcimie, $moqewomugocaueis, $ywmkwiwkosakssii, $aiowsaccomcoikus) { if (!("\x6f\162\x6d" === $moqewomugocaueis)) { goto yywwaaiicukuwcao; } if (!($aiowsaccomcoikus && isset($aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]) && $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm])) { goto aacaoywsaqscgyua; } $eqgoocgaqwqcimie = $aiowsaccomcoikus->args[Constants::ciyoccqkiamemcmm]; aacaoywsaqscgyua: $qqswgiawgeaeoecu = (array) ($aiowsaccomcoikus->group[Constants::ciyoccqkiamemcmm] ?? []); if (!($qqswgiawgeaeoecu && "\x63\155\x62\62\137\146\151\x65\x6c\144\137\156\157\x5f\157\166\145\162\162\x69\x64\x65\x5f\x76\141\154" === $eqgoocgaqwqcimie)) { goto miigqygoawqmkkqm; } $eqgoocgaqwqcimie = $qqswgiawgeaeoecu; miigqygoawqmkkqm: yywwaaiicukuwcao: return $eqgoocgaqwqcimie; } }
