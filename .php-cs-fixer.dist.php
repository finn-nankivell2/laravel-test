<?php

$finder = PhpCsFixer\Finder::create();
$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR2' => true,
        'indentation_type' => true,
    ])
    ->setIndent("\t")
    ->setLineEnding("\n")
	->setFinder($finder)
;
