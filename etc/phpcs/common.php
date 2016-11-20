<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kreta\SharedKernel\CS;

use Symfony\CS\Fixer\Contrib\HeaderCommentFixer;

function setHeader()
{
    HeaderCommentFixer::setHeader(<<<'EOF'
This file is part of the Kreta package.

(c) Beñat Espiña <benatespina@gmail.com>
(c) Gorka Laucirica <gorka.lauzirika@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF
    );
}

function fixers()
{
    return [
        '-psr0',
        '-empty_return',
        '-unalign_double_arrow',
        '-concat_without_spaces',
        'align_double_arrow',
        'concat_with_spaces',
        'header_comment',
        'multiline_spaces_before_semicolon',
        'newline_after_open_tag',
        'ordered_use',
        'php4_constructor',
        'phpdoc_order',
        'short_array_syntax',
        'short_echo_tag',
        'strict',
        'strict_param',
    ];
}
