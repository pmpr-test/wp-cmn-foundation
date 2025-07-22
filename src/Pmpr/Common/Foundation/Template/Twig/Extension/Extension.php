<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             687f52d68f1ed             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
