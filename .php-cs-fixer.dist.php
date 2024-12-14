<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->name('*.php')
    ->exclude('var')
    ->exclude('vendor')
    ->exclude('node_modules')
    ->exclude('public')
    ->exclude('config')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony'               => true,
        'array_syntax'           => ['syntax' => 'short'],
        'declare_strict_types'   => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space',
        ],
        'no_unused_imports'          => true,
        'single_line_throw'          => false,
        'concat_space'               => ['spacing' => 'one'],
        'blank_line_after_namespace' => true,
        'class_definition'           => ['single_line' => true],
        'method_argument_space'      => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_align'                => ['align' => 'vertical'],
        'trailing_comma_in_multiline' => [
            'elements' => ['arrays'],
        ],
        'yoda_style'                             => false,
        'native_function_invocation'             => false,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
