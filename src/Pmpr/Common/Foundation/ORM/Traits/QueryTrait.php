<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67977684bcc9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Traits; use Pmpr\Common\Foundation\ORM\Database\MetaQuery; use Pmpr\Common\Foundation\ORM\Database\Query; use Pmpr\Common\Foundation\ORM\Database\Statement; trait QueryTrait { public function megqywqeuquawkim(string $qgoqiacsiccwoawi = '', $eqgoocgaqwqcimie = '') : Statement\Where { return new Statement\Where($qgoqiacsiccwoawi, $eqgoocgaqwqcimie); } public function gimqoiwysgoimciu(string $qgoqiacsiccwoawi = '') : Statement\ConditionalSUM { return new Statement\ConditionalSUM($qgoqiacsiccwoawi); } public function aackykokeekgaoyw() : Statement\Union { return new Statement\Union(); } public function ucugosowycikeecc() : Statement\Loop { return new Statement\Loop(); } public function owackeyiuiikegqg(string $sysgmomuyiiawwcm = '', string $gcegymooyemmaysk = '') : Statement\Join { return new Statement\Join($sysgmomuyiiawwcm, $gcegymooyemmaysk); } public function owogyemaccuymycq(string $qgoqiacsiccwoawi, $eqgoocgaqwqcimie = []) : Statement\OrderBy { return new Statement\OrderBy($qgoqiacsiccwoawi, $eqgoocgaqwqcimie); } public function kyckwuuiqwmyoqma() : Query { return new Query(); } public function smuggewiwmyesccw(array $ssukygsemqwswumi = []) : MetaQuery { $gqgemcmoicmgaqie = new MetaQuery(); if ($ssukygsemqwswumi) { $gqgemcmoicmgaqie->kaaeuwaawscoeuqq($ssukygsemqwswumi); } return $gqgemcmoicmgaqie; } }
