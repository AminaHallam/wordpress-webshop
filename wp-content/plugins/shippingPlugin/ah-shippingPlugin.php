<?php
 
/**
 * Plugin Name: ah-shippingPlugin
 * Description: Custom Shipping Method with drone
 * Version: 1.0.0
 * Author: Amina Hallam
 */

if ( ! defined( 'WPINC' ) ) {
 
    die;
 
}
 
/*
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
    function drone_shipping_method() {
        if ( ! class_exists( 'drone_shipping_method' ) ) {
            class drone_shipping_method extends WC_Shipping_Method {
                
                public function __construct() {
                    $this->id                 = 'drone_shipping'; 
                    $this->method_title       = __( 'Shipment with drone');  
                    $this->method_description = __( 'Custom Shipping Method with drone'); 
 
                    
                    $this->enabled = 'yes';
                    $this->title = 'Drone Shipping';
                    $this->init();
                }
 

                function init() {
                    
                    $this->init_form_fields(); 
                    $this->init_settings(); 
 
                    add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
                }
 
                
               
 
               
                public function calculate_shipping( $package = array() ) {
                    
                        $weight = 0;
                        $cost = 0;
                        $country = $package["destination"]["country"];
     
                        foreach ( $package['contents'] as $item_id => $values ) 
                        { 
                            $_product = $values['data'];
                            /* $weight = $values['Storlek']; OBS! Kolla upp det */ 
                            
                        }
     
                        $weight = wc_get_weight( $weight, 'g' );
     
                        if( $weight <= 30 ) {
     
                            $cost = 299;
     
                        } elseif( $weight <= 50 ) {
     
                            $cost = 399;
     
                        } elseif ( $weight <= 100 ) {
     
                            $cost = 499;
     
                        } elseif ( $weight <= 150 ) {
     
                            $cost = 499;
     
                        } else {

                            $cost = 599;

                        }
     
                        $countryZones = array(
                            'SE' => 0
                        );
     
                        $zonePrices = array(
                            0 => 10
                        );
     
                        $zoneFromCountry = $countryZones[ $country ];
                        $priceFromZone = $zonePrices[ $zoneFromCountry ];
     
                        $cost += $priceFromZone;
     
                        $rate = array(
                            'label' => $this->title,
                            'cost' => $cost, 

                        );
     
                        $this->add_rate( $rate );
                        
                    
                }
            }
        }
                    
                
            
        
    }
 
    add_action( 'woocommerce_shipping_init', 'drone_shipping_method' );
 
    function add_drone_shipping_method( $methods ) {
        $methods['shipment_with_drone'] = 'drone_Shipping_Method';
        return $methods;
    }
 
    add_filter( 'woocommerce_shipping_methods', 'add_drone_shipping_method' );
}