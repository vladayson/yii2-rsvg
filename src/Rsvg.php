<?php

namespace vladayson\rsvg;

use yii\base\Component;

/**
 * Class Inkscape
 * @package vladayson\Inkscape
 */
class Rsvg extends Component
{
    /**
     * @var null|int
     */
    private $width = null;

    /**
     * @var null|int
     */
    private $height = null;

    /**
     * @param $svgFilename
     * @param $outputFilename
     * @param $format 'png', 'pdf', 'ps', 'svg', 'xml', 'recording'
     *
     * @return string|null
     */
    public function convert($svgFilename, $outputFilename, $format)
    {
        $cmd = "/usr/bin/rsvg-convert -f {$format}";
        if ($this->width) {
            $cmd .= " -w {$this->width}";
        }
        if ($this->height) {
            $cmd .= " -h {$this->height}";
        }

        $cmd .= " \"{$svgFilename}\" > \"{$outputFilename}\"";

        return shell_exec($cmd);
    }

    /**
     * @param $width
     * @param $height
     * @return $this
     */
    public function setSize($width, $height): self
    {
        $this->width = $width;
        $this->height = $height;

        return $this;
    }
}