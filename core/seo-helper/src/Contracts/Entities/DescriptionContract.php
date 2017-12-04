<?php
namespace Botble\SeoHelper\Contracts\Entities;

use Botble\SeoHelper\Contracts\RenderableContract;

interface DescriptionContract extends RenderableContract
{
    /**
     * Get raw description content.
     *
     * @return string
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function getContent();

    /**
     * Get description content.
     *
     * @return string
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function get();

    /**
     * Set description content.
     *
     * @param  string $content
     *
     * @return self
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function set($content);

    /**
     * Get description max length.
     *
     * @return int
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function getMax();

    /**
     * Set description max length.
     *
     * @param  int $max
     *
     * @return self
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function setMax($max);

    /**
     * Make a description instance.
     *
     * @param  string $content
     * @param  int $max
     *
     * @return self
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public static function make($content, $max = 155);
}
