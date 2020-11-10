<?php

namespace Anax\ContentMarkdown;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Route\Exception\NotFoundException;

/**
 * Read Markdown files and convert to HTML view.
 */
class ContentMarkdown implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;

}
