<?php

namespace PUGX\Poser\Render;

/**
 * Interface TemplateEngineInterface
 *
 * @author Claudio D'Alicandro <claudio.dalicandro@gmail.com>
 */
interface TemplateEngineInterface
{
    /**
     * @param string $templatePath
     * @param array $parameters
     *
     * @return string
     */
    public function render($templatePath, array $parameters);
} 