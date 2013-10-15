<?php

/*
 * This file is part of the Prismic PHP SDK
 *
 * Copyright 2013 Zengularity (http://www.zengularity.com).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prismic\Fragment\Block;

class PreformattedBlock implements TextInterface
{
    private $text;
    private $spans;
    private $level;

    public function __construct($text, $spans, $level)
    {
        $this->text = $text;
        $this->spans = $spans;
        $this->level = $level;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}