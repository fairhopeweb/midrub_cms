<?php

if ( !function_exists('md_user_icon_business') ) {
    
    /**
     * The function md_user_icon_business gets the business's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_business($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="ri-building-line' . $class . '"></i>';

    }
    
}

/* End of file business.php */