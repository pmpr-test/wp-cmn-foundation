<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b479de2e4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\ORM\Common; use Pmpr\Common\Foundation\ORM\Database\Schema\BigInteger; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Database\Schema\Integer; use Pmpr\Common\Foundation\ORM\Database\Schema\Schema; use Pmpr\Common\Foundation\ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text as FormText; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Radio as FormRadio; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select as FormSelect; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container as FormContainer; use Pmpr\Common\Foundation\Interfaces\Constants; class Form extends Container { use ModelTrait, FieldsTrait; public function ugmceccgwaaaigiy() : array { if (empty($this->fields)) { $this->mgogaykgkoogasim()->aoqwywcqmoqaukkq(); $this->fields = $this->kmwyuisimagiqskw($this->fields); } return $this->fields; } public function kmwyuisimagiqskw($ikgwqyuyckaewsow) : array { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof FormText || $aiowsaccomcoikus instanceof FormSelect) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } if ($aiowsaccomcoikus instanceof FormContainer) { $aiowsaccomcoikus->acakyumkgoeiskqq($this->kmwyuisimagiqskw($aiowsaccomcoikus->ugmceccgwaaaigiy())); } else { $aaqqkgyougeiueyq = $this->mgogaykgkoogasim()->uqeoyqiwywwmsiew($aiowsaccomcoikus->mwikyscisascoeea()); if ($aaqqkgyougeiueyq instanceof Schema) { $ggauoeuaesiymgee = $aaqqkgyougeiueyq->oiswysuiioecsaae(); if ($aiowsaccomcoikus instanceof FormText && ($aaqqkgyougeiueyq instanceof Integer || $aaqqkgyougeiueyq instanceof BigInteger)) { $aiowsaccomcoikus->escqqisecooswqgo(); } else { if (($aiowsaccomcoikus instanceof FormSelect || $aiowsaccomcoikus instanceof FormRadio) && $aaqqkgyougeiueyq instanceof Enum && !$aiowsaccomcoikus->myacgeeekqcmemge()) { $qiouiwasaauyaaue = $aaqqkgyougeiueyq->gkwkqmwweiawigae(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { $aiowsaccomcoikus->kesomeowemmyygey($gkyciwoiiisgywcs->get($omkysikckkcieckq, Constants::NAME), $gkyciwoiiisgywcs->get($omkysikckkcieckq, Constants::qescuiwgsyuikume)); } $ggauoeuaesiymgee = $aaqqkgyougeiueyq->qksikkwyuwmciusw($ggauoeuaesiymgee); } } if (!$aiowsaccomcoikus->oiswysuiioecsaae()) { $aiowsaccomcoikus->eyygsasuqmommkua($ggauoeuaesiymgee); } if (!$aiowsaccomcoikus->qcgakseyaikigqco()) { $aiowsaccomcoikus->gswweykyogmsyawy($aaqqkgyougeiueyq->qcgakseyaikigqco()); } } } } return $ikgwqyuyckaewsow; } }
