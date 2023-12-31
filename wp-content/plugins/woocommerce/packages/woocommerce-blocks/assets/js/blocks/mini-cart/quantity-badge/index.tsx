/**
 * External dependencies
 */
import { cartOutline, bag, bagAlt } from '@woocommerce/icons';
import { Icon } from '@wordpress/icons';

/**
 * Internal dependencies
 */
import './style.scss';
import { IconType, ColorItem } from '.././types';

interface Props {
	count: number;
	icon?: IconType;
	iconColor: ColorItem | { color: undefined };
	productCountColor: ColorItem | { color: undefined };
}

const QuantityBadge = ( {
	count,
	icon,
	iconColor,
	productCountColor,
}: Props ): JSX.Element => {
	function getIcon( iconName?: 'cart' | 'bag' | 'bag-alt' ) {
		switch ( iconName ) {
			case 'cart':
				return cartOutline;
			case 'bag':
				return bag;
			case 'bag-alt':
				return bagAlt;
			default:
				return cartOutline;
		}
	}

	return (
		<span className="wc-block-mini-cart__quantity-badge">
			<Icon
				className="wc-block-mini-cart__icon"
				color={ iconColor.color }
				size={ 20 }
				icon={ getIcon( icon ) }
			/>
			<span
				className="wc-block-mini-cart__badge"
				style={ { background: productCountColor.color } }
			>
				{ count > 0 ? count : '' }
			</span>
		</span>
	);
};

export default QuantityBadge;
