<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68ae2a08a5728             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }
