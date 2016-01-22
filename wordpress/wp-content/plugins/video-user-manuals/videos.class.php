<?php
class vum_videos {
	
	private static $instance; 

	public function __construct() {
		
        $this->_url = new stdClass;
		$this->show_local = get_option( 'wpm_o_num_local' );
		$this->_videos_to_show = false;
		$this->_videos_to_hide = false;

	}
	public static function getInstance( $reset = false) { 

		if( ! self::$instance || $reset ) self::$instance = new self();

		return self::$instance;
	}

	public function preset_url( ){
	    $this->_url->plugin_version    = VUM_VERSION;
        $this->_url->wp_version        = get_bloginfo('version');
        $this->_url->lang              = get_option('wpm_o_lang');
        $this->_url->branding_img 	   = urlencode( get_option( 'wpm_o_branding_img' ) );
        $this->_url->video_image       = urlencode( get_option( 'wpm_o_custom_vid_placeholder' ) );
        
        return $this->_url;
	}

	public function get_url(){

		$this->preset_url();
        $url_params = '';

        foreach($this->_url as $k=>$v) {
			if ( $v === FALSE ) {
				$v = '0';
			}
			$url_params .= $k . ':\'' . $v . '\',';
		}

        /* Trim last character (a comma) from string */
        $url_params = substr_replace($url_params ,'',-1);
        
        return $url_params;
	}

	public function set_url( $index, $value ){
		$this->_url->$index = $value;
	}
	
	public function get_local_videos() {

		$show_local = get_option( 'wpm_o_num_local' );

		$local_videos = array();
		$custom_local_videos = array();

		if ( $show_local ) {

			$local_videos = array();
			$num_local    = get_option( 'wpm_o_num_local' );
			$count        = 1;

			while ( $count <= $num_local ) {

				if ( get_option( 'wpm_o_localvideos_' . $count . '_loc' ) == 0 ) {

					$local_videos[$count]          = new stdClass();
					$local_videos[$count]->name    = get_option( 'wpm_o_localvideos_' . $count . '_0' );
					$local_videos[$count]->thumb   = get_option( 'wpm_o_localvideos_' . $count . '_1' );
					$local_videos[$count]->vid     = get_option( 'wpm_o_localvideos_' . $count . '_2' );
					$local_videos[$count]->desc    = get_option( 'wpm_o_localvideos_' . $count . '_3' );
					$local_videos[$count]->image   = get_option( 'wpm_o_localvideos_' . $count . '_4' );
					$local_videos[$count]->embed   = get_option( 'wpm_o_localvideos_' . $count . '_5' );
					$local_videos[$count]->doembed = get_option( 'wpm_o_localvideos_' . $count . '_6' );

				} else {

					$custom_local_videos[$count]          = new stdClass();
					$custom_local_videos[$count]->name    = get_option( 'wpm_o_localvideos_' . $count . '_0' );
					$custom_local_videos[$count]->thumb   = get_option( 'wpm_o_localvideos_' . $count . '_1' );
					$custom_local_videos[$count]->vid     = get_option( 'wpm_o_localvideos_' . $count . '_2' );
					$custom_local_videos[$count]->desc    = get_option( 'wpm_o_localvideos_' . $count . '_3' );
					$custom_local_videos[$count]->image   = get_option( 'wpm_o_localvideos_' . $count . '_4' );
					$custom_local_videos[$count]->embed   = get_option( 'wpm_o_localvideos_' . $count . '_5' );
					$custom_local_videos[$count]->doembed = get_option( 'wpm_o_localvideos_' . $count . '_6' );
					$custom_local_videos[$count]->loc     = get_option( 'wpm_o_localvideos_' . $count . '_loc' );

				}

				$count ++;
			}
		}

		$this->local_videos = $local_videos;
		$this->custom_local_videos = $custom_local_videos;

		return $show_local;
	}
	function set_videos(){

		global $wpdb;

		$sections       = $wpdb->get_results( "select option_name, option_value from $wpdb->options where option_name like 'wpm_o_show_%' AND option_value IN ('1', '0')" );
		$sectionsToShow = '';
		$vidsToHide = '';

		// Get all sections we ARE showing.
		foreach ( $sections as $section ) {

			$vid_section_name = strpos($section->option_name, "wpm_o_show_video_");

			if ( $vid_section_name === false ) {
				if ( $section->option_value == '1' ) {
					$sectionsToShow .= str_replace( 'wpm_o_show_', '', $section->option_name ) . ",";
				}
			} else {
				if ( $section->option_value == '0' ) {
					$vidsToHide .= str_replace( 'wpm_o_show_video_', '', $section->option_name ) . ",";
				}
			}

		}
		$sectionsToShow = substr_replace( $sectionsToShow, '', - 1 );
		$vidsToHide = substr_replace( $vidsToHide, '', - 1 );

		$this->_videos_to_show = $sectionsToShow;
		$this->_videos_to_hide = $vidsToHide;

	}
}
vum_videos::getInstance();