<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GoogleRichCard{
	
	/**
	 * CodeIgniter GoogleRichCard Helper Class
	 *
	 * This class enables you to mark points and calculate the time difference
	 * between them.  Memory consumption can also be displayed.
	 *
	 * @package		CodeIgniter
	 * @subpackage	Helpers
	 * @category	Helper
	 * @author		Lufti Nurfahmi
	 * @link		http://luftinurfahmi.net/tags/googlerichcard-helper
	 */
	
	
	
	
	
	/**
	 * Create Social Profile Structure Data.
	 * Ref : https://developers.google.com/search/docs/data-types/social-profile
	 * @access	public
	 * @param	string	a particular marked point
	 * @param	string	a particular marked point
	 * @param	array
	 * @return	string	 
	 */	
	public static function SocialProfile($fullname = '', $url = '', $data = array()){
		
			if(!empty($data)){
				$richcard = '<script type="application/ld+json">';
				$richcard .='{
					  "@context": "http://schema.org",
					  "@type": "Person",
					  "name": "'.$fullname.'",
					  "url": "'.$url.'",
					  "sameAs": '.json_encode($data['social']).'
					}';
				$richcard .= '</script>';
				
				return $richcard;
			}
			
			return '';
			
		}
	

		
	/**
	 * Create Article Structure Data.
	 * Ref : https://developers.google.com/search/docs/data-types/article
	 * @access	public
	 * @param   array
	 * @param	string path url article
	 * @param	string Type author Person/Organization
	 * @return	string	 
	 */	
	 
	 public static function RichCardArticle($data = array(), $pathurl, $authortype = 'Person'){
		
		if(!empty($data)){
			$richcard = "<script type='application/ld+json'>";
		
			$richcard .= '{
						 "@context": "http://schema.org",
						  "@type": "NewsArticle",
						  "mainEntityOfPage": {
						    "@type": "WebPage",
						    "@id": "'.$pathurl.'"
						  },
						  "headline": "'.$data['title'].'",
						  "image": [
						    "https://example.com/photos/1x1/photo.jpg",
						    "https://example.com/photos/4x3/photo.jpg",
						    "https://example.com/photos/16x9/photo.jpg"
						   ],
						  "datePublished": "2015-02-05T08:00:00+08:00",
						  "dateModified": "2015-02-05T09:20:00+08:00",
						  "author": {
						    "@type": "'.$authortype.'",
						    "name": "'.$data['authorname'].'"
						  },
						   "publisher": {
						    "@type": "Organization",
						    "name": "'.$data['publisherName'].'",
						    "logo": {
						      "@type": "ImageObject",
						      "url": "'.$data['publisherLogo'].'",
						      "width" : 
						    }
						  },
						  "description": "'.$data['excerpt'].'"			
			}';
			
			$richcard .= "</script>";
			
			return $richcard;
		}
		
		return "";
			
	}
	 
	  
	// .. next method will update
	
	
	
}

