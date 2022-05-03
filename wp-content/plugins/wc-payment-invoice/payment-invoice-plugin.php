<?php 

/*
 * Plugin Name: payment-invoice-plugin
 * Description: A plugin for payment by invoice
 * Author: Amina Hallam 
 * Version: 1.0
 */



if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;


add_action( 'plugins_loaded', 'invoice_payment_init', 11 );

function invoice_payment_init() {

    class WC_Invoice_Payment extends WC_Payment_Gateway {

        public function __construct() {

            $this->id = 'invoice';
            $this->has_fields = true; 
            $this->method_title = 'invoice_payment';
            $this->method_description = 'Payment by invoice';

            
            $this->init_form_fields();
            
            // load the settings.
            $this->init_settings();
            $this->title = $this->get_option( 'title' );
            $this->description = $this->get_option( 'description' );
            $this->enabled = $this->get_option( 'enabled' );
            $this->instructions = $this->get_option( 'instructions' );


            // This action hook saves the settings
            add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );

            
        } 


            public function init_form_fields() {
            
                $this->form_fields = apply_filters( 'wc_offline_form_fields', array(
                    
                    'title' => array(
                        'title'       => 'Title',
                        'type'        => 'text',
                        'description' => 'This controls the title for the payment method the customer sees during checkout.',
                        'default'     => 'invoice Payment',
                        'desc_tip'    => true,
                    ),

                    'description' => array(
                        'title'       => 'Description',
                        'type'        => 'textarea',
                        'description' => 'This controls the description which the user sees during checkout.',
                        'default'     => 'Pay later via invoice sent after your purchase.',
                        'desc_tip'    => true,
                    ),

                    'enabled' => array(
                        'title'   => 'Enable/Disable',
                        'type'    => 'checkbox',
                        'label'   => 'Enable invoice Payment',
                        'default' => 'yes' // no? 
                    ),
            
                    'instructions' => array(
                        'title'       => 'Instructions',
                        'type'        => 'textarea',
                        'description' => 'Instructions that will be added to the thank you page and emails.',
                        'default'     => '',
                        'desc_tip'    => true,
                    ),
                    
                ) );
            }




            public function process_payment( $order_id ) {
            
                $order = wc_get_order( $order_id );
                        
                // Mark as on-hold (we're awaiting the payment)
                $order->update_status( 'on-hold', 'Awaiting of payment');
                        
                // Reduce stock levels
                $order->reduce_order_stock();
                        
                // Remove cart
                WC()->cart->empty_cart();
                        
                // Return thankyou redirect
                return array(
                    'result'    => 'success',
                    'redirect'  => $this->get_return_url( $order )
                );
                
            }  
             
                
            public function thankyou_page() {
                if ( $this->instructions ) {
                    echo wpautop( wptexturize( $this->instructions ) );
                }
            }
                
                
                
    }
            
}
        
        function add_invoice_payment_gateway( $gateways ) {
            $gateways[] = 'WC_Invoice_Payment';
            return $gateways;
        }
        add_filter( 'woocommerce_payment_gateways', 'add_invoice_payment_gateway' );
        
            

?> 