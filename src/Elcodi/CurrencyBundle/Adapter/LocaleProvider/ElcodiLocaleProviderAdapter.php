<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\CurrencyBundle\Adapter\LocaleProvider;

use Elcodi\CurrencyBundle\Adapter\LocaleProvider\Interfaces\LocaleProviderAdapterInterface;
use Elcodi\LanguageBundle\Entity\Interfaces\LocaleInterface;

/**
 * Class ElcodiLocaleProviderAdapter
 */
class ElcodiLocaleProviderAdapter implements LocaleProviderAdapterInterface
{
    /**
     * @var string
     *
     * Adapter name
     */
    const ADAPTER_NAME = 'elcodi';

    /**
     * @var string
     *
     * Elcodi locale
     */
    protected $locale;

    /**
     * Constructor method
     *
     * @param LocaleInterface $locale Locale
     */
    public function __construct(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }

    /**
     * Get locale
     *
     * @return string Locale iso
     */
    public function getLocaleIso()
    {
        return $this->locale->getIso();
    }
}
