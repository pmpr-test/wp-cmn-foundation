<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff7768f0b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
