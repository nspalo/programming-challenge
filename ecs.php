<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Basic\EncodingFixer;
use SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameAfterKeywordSniff;
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
    $containerConfigurator->import(SetList::PHP_CS_FIXER);
//    $containerConfigurator->import(SetList::PSR_12);

    $parameters = $containerConfigurator->parameters();
    $services = $containerConfigurator->services();

    $parameters->set(Option::CACHE_DIRECTORY, '.ecs_cache');
    $parameters->set(Option::INDENTATION, 'spaces');

    $parameters->set(Option::PATHS, [
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $parameters->set(Option::SKIP, [
        // Rule Set Skip from COMMON
//        PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class,                   // Always add space after casting
        PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class,
        PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class,                  // I want to use Yoda - Skip for now
//        PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, // Always add comma at the end
        PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class,
        PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class,
//        PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class,            // Unnecessary tag checking
//        PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class,                // Always use Single quote over Double
        PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class,
        PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class,                       // Skip, Always use LF for line ending
        PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class,          // No whitespace in blank lines(end)
        PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class,             // Always add a blank line at the eof
        Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer::class, // Skip for now

        // Rule Set Skip from PHP_CS_FIXER
        PhpCsFixer\Fixer\Basic\BracesFixer::class,
        PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class,
        PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class,   // Disable post/pre increment checking
        PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class,
        PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer::class,
        PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class,
        PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class,    // Removes @package tag - Skip for now
        PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class,      // Period at the end - Skip for now
        PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class,    // Allow doc to comment
        PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class,
    ]);

    $services->set(EncodingFixer::class);
    $services->set(EmptyCommentSniff::class);
    $services->set(FullyQualifiedClassNameAfterKeywordSniff::class);
};
