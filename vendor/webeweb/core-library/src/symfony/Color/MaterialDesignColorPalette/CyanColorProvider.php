<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Color\MaterialDesignColorPalette;

use WBW\Library\Symfony\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\AbstractColorProvider;
use WBW\Library\Symfony\Provider\Color\CyanColorProviderInterface;

/**
 * Cyan color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Color\MaterialDesignColorPalette
 */
class CyanColorProvider extends AbstractColorProvider implements CyanColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.color.material_design_color_palette.cyan";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::COLOR_DOMAIN);
    }

    /**
     * {@inheritdoc}
     */
    public function getColors(): array {

        return [
            self::COLOR_50   => self::CYAN_COLOR_50,
            self::COLOR_100  => self::CYAN_COLOR_100,
            self::COLOR_200  => self::CYAN_COLOR_200,
            self::COLOR_300  => self::CYAN_COLOR_300,
            self::COLOR_400  => self::CYAN_COLOR_400,
            self::COLOR_500  => self::CYAN_COLOR_500,
            self::COLOR_600  => self::CYAN_COLOR_600,
            self::COLOR_700  => self::CYAN_COLOR_700,
            self::COLOR_A100 => self::CYAN_COLOR_A100,
            self::COLOR_A200 => self::CYAN_COLOR_A200,
            self::COLOR_A400 => self::CYAN_COLOR_A400,
            self::COLOR_A700 => self::CYAN_COLOR_A700,
        ];
    }

    /**
     *{@inheritdoc}
     */
    public function getName(): string {
        return self::CYAN_COLOR_NAME;
    }
}
