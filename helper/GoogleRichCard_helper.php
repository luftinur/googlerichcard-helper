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
	 * @link		https://www.codeigniter.com/userguide3/general/helpers.html
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
						  "image": '.json_encode($data['images']).',
						  "datePublished": "'.$data['datePublished'].'",
						  "dateModified": "'.$data['dateModified'].'",
						  "author": {
						    "@type": "'.$authortype.'",
						    "name": "'.$data['authorname'].'"
						  },
						   "publisher": {
						    "@type": "Organization",
						    "name": "'.$data['publisherName'].'",
						    "logo": {
						      "@type": "ImageObject",
						      "url": "'.$data['publisherLogo'].'"
						    }
						  },
						  "description": "'.$data['excerpt'].'"			
			}';
			
			$richcard .= "</script>";
			
			return $richcard;
		}
		
		return "";
			
	}
	 
	 
	
	
	
	
}

