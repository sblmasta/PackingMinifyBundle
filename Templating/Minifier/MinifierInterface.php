<?php

namespace BeSimple\PackingMinifyBundle\Templating\Minifier;

interface MinifierInterface
{
    /**
     * @param string $content A content
     *
     * @return string The content minified
     */
    function minify($content);
}