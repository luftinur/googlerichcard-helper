# googlerichcard-helper
Google Rich Card Helper For Codeigniter
=========================

This help you to generate Google Structure Data for better search engine result.
Result will create string with application/ld+json;

Installation
------------
Copy `goooglerichcard_helper.php` into the `applications/helpers` directory.

You can set autoload helper in config/autoload

$autoload['helper'] = array('goooglerichcard_helper');

or you can load in each controller 

$this->load->helper(goooglerichcard_helper);


Usage
=====
Usefull Link How To Use This Helper :
http://www.luftinurfahmi.net/tags/structure-data

Social Profile:
-----------------------------------
```php
GoogleRichCard::SocialProfile($fullname = '', $url = '', $sociallink = array());

# Results in
<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Person",
		  "name": "Your Name",
		  "url": "http://your-url-here",
		  "sameAs": $sociallink // json
		}
		</script>
```

