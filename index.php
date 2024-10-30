<?php

/**
*
* Plugin Name: Boost Online Sales
* Plugin URI: https://www.app.ro/wordpress-plugins/
* Description: Boost your online sales with this flash sales plugin! The Boost Online Sales offers features that boost the sales of your web sites products and much more. Stay put for many other features.
* Version: 1.0
* Author: ccrd
* Author URI: https://www.app.ro/
* Text Domain: boost-online-sales
* License: GPLv2
* Boost Online Sales
* Powered by app.ro
*
*
* Copyright (C) 2008-2021, ccrd - info@app.ro
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
**/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'BOOST_SALE_WOOCOMMERCE_SRC' ) ) {
    define( 'BOOST_SALE_WOOCOMMERCE_SRC', "/".basename(WP_CONTENT_DIR)."/".basename(WP_PLUGIN_DIR)."/".basename(dirname(__FILE__)) );
}

if ( ! class_exists( 'Flash_sbWoo' ) ) {
    require_once dirname(__FILE__). "/Code/Flash_sbWoo.php";
}

register_uninstall_hook  ( __FILE__  , 'flash_sbWoo_Unstall' );

function flash_sbWoo_Unstall() {
    require_once  ( dirname(__FILE__) ."/Code/Flash_sbWooUnstall.php");
}


$init = new Flash_sbWoo();
