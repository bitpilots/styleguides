<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = PhpCsFixer\Finder::create()
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$rules = [
    '@Symfony' => true,
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => [
        'align_equals' => false,
        'align_double_arrow' => false
    ],
    'concat_space' => ['spacing' => 'one'],
    'heredoc_to_nowdoc' => true,
    'no_multiline_whitespace_before_semicolons' => true,
    'no_unused_imports' => true,
    'no_useless_return' => true,
    'not_operator_with_successor_space' => true,
    'ordered_imports' => true,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_order' => true,
    'unary_operator_spaces' => false
];

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRiskyAllowed(false)
    ->setRules($rules);
