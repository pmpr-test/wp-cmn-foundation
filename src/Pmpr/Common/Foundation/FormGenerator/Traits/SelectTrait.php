<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8341d2d030             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait SelectTrait { public function iugmkyouqiwyggik($qiouiwasaauyaaue, int $iqaosyayeiuaisqi = 1) : string { $nsmgceoqaqogqmuw = ''; if ($qiouiwasaauyaaue) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $omkysikckkcieckq) { if (is_string($omkysikckkcieckq)) { $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq, ['class' => "level-{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); } else { if (is_array($omkysikckkcieckq)) { if (isset($omkysikckkcieckq[Constants::uissasisiuymwsmu])) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($omkysikckkcieckq, Constants::uissasisiuymwsmu); $omkysikckkcieckq[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($pkyyagewkiyckmwy, $omkysikckkcieckq); } else { if (isset($omkysikckkcieckq[Constants::qeiauywscugcaqkq]) && $omkysikckkcieckq[Constants::qeiauywscugcaqkq]) { if (isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { $_html = $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis]); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->uuccukgasskgimsq('optgroup', [Constants::uissasisiuymwsmu => $omkysikckkcieckq[Constants::qescuiwgsyuikume]], $_html); } } else { if (isset($omkysikckkcieckq[Constants::miceosguuseyyuqe], $omkysikckkcieckq[Constants::geocwaecmeeskuci])) { $omkysikckkcieckq[Constants::qescuiwgsyuikume] = $omkysikckkcieckq[Constants::miceosguuseyyuqe]; $omkysikckkcieckq[Constants::aeweusomuikewuis] = $omkysikckkcieckq[Constants::geocwaecmeeskuci]; } if (isset($omkysikckkcieckq[Constants::qescuiwgsyuikume], $omkysikckkcieckq[Constants::aeweusomuikewuis])) { $nsmgceoqaqogqmuw .= $this->sgookowsiykykcua($omkysikckkcieckq[Constants::qescuiwgsyuikume], ['class' => "level-{$iqaosyayeiuaisqi}", Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $nsmgceoqaqogqmuw .= $this->iugmkyouqiwyggik($omkysikckkcieckq[Constants::aeweusomuikewuis], $iqaosyayeiuaisqi + 1); } } } } } } } return $nsmgceoqaqogqmuw; } private function sgookowsiykykcua($meqocwsecsywiiqs, array $siquossayskcwkea = []) : string { if ($eqgoocgaqwqcimie = $this->qooeaookuemoqecm()) { if ($eqgoocgaqwqcimie === ($siquossayskcwkea[Constants::ciyoccqkiamemcmm] ?? null)) { $siquossayskcwkea['selected'] = true; } } return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('option', $siquossayskcwkea, $meqocwsecsywiiqs); } }
