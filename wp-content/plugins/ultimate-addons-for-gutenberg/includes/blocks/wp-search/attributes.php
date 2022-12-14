<?php
/**
 * Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$inputBorderDefaults = array(
	'borderTopLeftRadius'     => 3,
	'borderTopRightRadius'    => 3,
	'borderBottomLeftRadius'  => 3,
	'borderBottomRightRadius' => 3,
);

$inputBorderAttributes = UAGB_Block_Helper::uag_generate_border_attribute( 'input', $inputBorderDefaults );

return array_merge(
	array(
		'block_id'                => '',
		'layout'                  => 'input-button',
		'placeholder'             => 'Type & Hit Enter',
		'inputSize'               => 100,
		'textColor'               => '',
		'inputBgColor'            => '#ECEEEF',
		'boxShadowColor'          => '',
		'boxShadowHOffset'        => 0,
		'boxShadowVOffset'        => 0,
		'boxShadowBlur'           => '',
		'boxShadowSpread'         => '',
		'boxShadowPosition'       => 'outset',
		'buttonBgColor'           => '#9d9d9d',
		'buttonBgHoverColor'      => '',
		'buttonIconColor'         => '',
		'buttonIconHoverColor'    => '',
		'buttonWidth'             => 60,
		'buttonIconSize'          => 17,
		'iconColor'               => '',
		'iconSize'                => 17,
		'inputloadGoogleFonts'    => false,
		'inputFontFamily'         => 'Default',
		'inputFontWeight'         => '',
		'inputFontSize'           => '',
		'inputFontSizeType'       => 'px',
		'inputFontSizeTablet'     => '',
		'inputFontSizeMobile'     => '',
		'inputLineHeight'         => '',
		'inputLineHeightType'     => 'em',
		'inputLineHeightTablet'   => '',
		'inputLineHeightMobile'   => '',
		'inputPaddingTypeDesktop' => 'px',
		'vinputPaddingMobile'     => 15,
		'vinputPaddingTablet'     => 15,
		'vinputPaddingDesktop'    => 15,
		'hinputPaddingMobile'     => 13,
		'hinputPaddingTablet'     => 13,
		'hinputPaddingDesktop'    => 13,
		'buttonType'              => 'icon',
		'buttonText'              => 'Search',
		'buttonloadGoogleFonts'   => 'false',
		'buttonFontFamily'        => 'Default',
		'buttonFontWeight'        => '',
		'buttonFontSize'          => '',
		'buttonFontSizeType'      => 'px',
		'buttonFontSizeTablet'    => '',
		'buttonFontSizeMobile'    => '',
		'buttonLineHeight'        => '',
		'buttonLineHeightType'    => 'em',
		'buttonLineHeightTablet'  => '',
		'buttonLineHeightMobile'  => '',
		'buttonTextColor'         => '#313131',
		'buttonTextHoverColor'    => '',
		'inputSizeType'           => '%',
		'mobilePaddingInputUnit'  => 'px',
		'tabletPaddingInputUnit'  => 'px',
		'spacingLink'             => '',
		'iconSizeType'            => 'px',
		'inputTransform'          => '',
		'inputDecoration'         => '',
		'buttonTransform'         => '',
		'buttonDecoration'        => '',
		'buttonIconSizeType'      => 'px',
		'buttonWidthType'         => 'px',
		'inputFontStyle'          => '',
		'buttonFontStyle'         => '',
	),
	$inputBorderAttributes
);
