# googlerichcard-helper
Google Rich Card Helper For Codeigniter
=========================

This help you to generate Google Structure Data for better search engine result.
Result will create string with application/ld+json;

Installation
------------
Copy `GoogleRichCard_helper.php` into the `applications/helpers` directory.

You can set autoload helper in config/autoload

$autoload['helper'] = array('GoogleRichCard_helper');

or you can load in each controller 

$this->load->helper('GoogleRichCard_helper');


Usage
=====

Social Profile:
-----------------------------------
```php
GoogleRichCard::SocialProfile($fullname = '', $url = '', $data = array());

# Results in
<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Person",
		  "name": "Your Name",
		  "url": "http://your-url-here",
		  "sameAs": [
			"social link",
			"social link",
			"social link",
		  ]
		}
		</script>
```

