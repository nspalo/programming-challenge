<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    /**
     * Note: This just temporary rules
     * - will change to setting specific rule rather and selective skip from a rule set
     */
    $containerConfigurator->import(SetList::CLEAN_CODE);
    $containerConfigurator->import(SetList::COMMON);
//    $containerConfigurator->import(SetList::PSR_12);
//    $containerConfigurator->import(SetList::PHP_CS_FIXER);

    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::CACHE_DIRECTORY, '.ecs_cache');
    $parameters->set(Option::INDENTATION, 'spaces');

    $parameters->set(Option::PATHS, [
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $parameters->set(Option::SKIP, [
        // Rule Set Skip from COMMON
        PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class,
        PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class,
        PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class,                  // I want to use Yoda - Skip for now
//        PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, // Always add comma at the end
        PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class,
        PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class,
//        PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class,            // Unnecessary tag checking
//        PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class,                // Always use Single quote over Double
        PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class,
        PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class,
        PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class,
        PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class,
        Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer::class, // Skip for now
    ]);
};
