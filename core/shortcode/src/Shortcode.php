<?php

namespace Botble\Shortcode;

use Botble\Shortcode\Compilers\ShortcodeCompiler;

class Shortcode
{
    /**
     * Shortcode compiler
     *
     * @var \Botble\Shortcode\Compilers\ShortcodeCompiler
     */
    protected $compiler;

    /**
     * Constructor
     *
     * @param \Botble\Shortcode\Compilers\ShortcodeCompiler $compiler
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function __construct(ShortcodeCompiler $compiler)
    {
        $this->compiler = $compiler;
    }

    /**
     * Register a new shortcode
     *
     * @param  string $name
     * @param  callable|string $callback
     *
     * @return \Botble\Shortcode\Shortcode
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function register($name, $callback)
    {
        $this->compiler->add($name, $callback);

        return $this;
    }

    /**
     * Enable the shortcode
     *
     * @return \Botble\Shortcode\Shortcode
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function enable()
    {
        $this->compiler->enable();

        return $this;
    }

    /**
     * Disable the shortcode
     *
     * @return \Botble\Shortcode\Shortcode
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function disable()
    {
        $this->compiler->disable();

        return $this;
    }

    /**
     * Compile the given string
     *
     * @param  string $value
     * @return string
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function compile($value)
    {
        // Always enable when we call the compile method directly
        $this->enable();

        // return compiled contents
        return $this->compiler->compile($value);
    }

    /**
     * @param $value
     * @return string
     * @author Asif Iqbal <webwizo@gmail.com>
     * @since 2.1
     */
    public function strip($value)
    {
        return $this->compiler->strip($value);
    }
}
