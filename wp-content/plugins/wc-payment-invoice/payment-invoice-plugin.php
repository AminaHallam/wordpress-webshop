<?php 

/*
 * Plugin Name: payment-invoice-plugin
 * Description: A plugin for payment by invoice
 * Author: Amina Hallam 
 * Version: 1.0
 */



if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;


add_action( 'plugins_loaded', 'wc_offline_gateway_init', 11 );

function wc_offline_gateway_init() {

    class WC_Gateway_Offline extends WC_Payment_Gateway {

        $this->has_fields = true; 
        $this->method_title = 'invoice_payment';
        $this->method_description = 'Payment by invoice';

    } 

    $this->init_form_fields();
    $this->init_settings();

    public function init_form_fields() {
      
        $this->form_fields = apply_filters( 'wc_offline_form_fields', array(
              
            'enabled' => array(
                'title'   => 'Enable/Disable',
                'type'    => 'checkbox',
                'label'   => 'Enable invoice Payment',
                'default' => 'yes' // no? 
            ),
    
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
        $order->update_status( 'on-hold', __( 'Awaiting offline payment', 'wc-gateway-offline' ) );
                
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

       
    


    public function email_instructions( $order, $sent_to_admin, $plain_text = false ) {
        
        if ( $this->instructions && ! $sent_to_admin && 'offline' === $order->payment_method && $order->has_status( 'on-hold' ) ) {
            echo wpautop( wptexturize( $this->instructions ) ) . PHP_EOL;
        }
    }


    function wc_offline_add_to_gateways( $gateways ) {
        $gateways[] = 'WC_Gateway_Offline';
        return $gateways;
    }
    add_filter( 'woocommerce_payment_gateways', 'wc_offline_add_to_gateways' );
    

}





?> 