<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Container\Container; abstract class RESTRegister extends Container { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\x73\x74\x5f\x61\160\151\137\x69\x6e\x69\164", [$this, "\164\x69\x73\x77\x61\171\x73\x71\141\x77\x75\x63\147\x67\165\x63"]); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if ($ioqmgqkiwqgmgcks instanceof RESTController) { $ioqmgqkiwqgmgcks->register_routes(); } } } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
