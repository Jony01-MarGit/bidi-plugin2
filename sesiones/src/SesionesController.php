<?php
    namespace RDCFTF;
          
    class SesionesController
    {
    
        public function __construct()
        {
    
        }
        public static function cmb2_sample_metaboxes() {

            /**
             * Initiate the metabox
             */
            $cmb = new_cmb2_box( array(
                'id'            => 'test_metabox',
                'title'         => __( 'Test Metabox', 'cmb2' ),
                'object_types'  => array( 'sesion', ), // Post type
                'context'       => 'normal',
                'priority'      => 'high',
                'show_names'    => true, // Show field names on the left
                // 'cmb_styles' => false, // false to disable the CMB stylesheet
                // 'closed'     => true, // Keep the metabox closed by default
            ) );
        
            // Regular text field
            $cmb->add_field( array(
                'name'       => __( 'Test Text', 'cmb2' ),
                'desc'       => __( 'field description (optional)', 'cmb2' ),
                'id'         => 'yourprefix_text',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
                // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
                // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
                // 'on_front'        => false, // Optionally designate a field to wp-admin only
                // 'repeatable'      => true,
            ) );
        
            // URL text field
            $cmb->add_field( array(
                'name' => __( 'Website URL', 'cmb2' ),
                'desc' => __( 'field description (optional)', 'cmb2' ),
                'id'   => 'yourprefix_url',
                'type' => 'text_url',
                // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
                // 'repeatable' => true,
            ) );
        
            //Agregar URL de video
            $cmb->add_field( array(
                'name' => 'oEmbed',
                'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
                'id'   => 'wiki_test_embed',
                'type' => 'oembed',
            ) );
            
            //Duración de video
            $cmb->add_field( array(
                'name' => 'Test Time Picker',
                'id' => 'wiki_test_texttime',
                'type' => 'text_time'
                // Override default time-picker attributes:
                // 'attributes' => array(
                // 	'data-timepicker' => json_encode( array(
                // 		'timeOnlyTitle' => __( 'Choose your Time', 'cmb2' ),
                // 		'timeFormat' => 'HH:mm',
                // 		'stepMinute' => 1, // 1 minute increments instead of the default 5
                // 	) ),
                // ),
                // 'time_format' => 'h:i:s A',
            ) );
        
            // Add other metaboxes as needed
        
        }
    }