<?php 

namespace Mycontrole;

use Rain\Tpl;

class Page {

	private $tpl;
	private $options = [];
	private $defaults = [
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];

	        public function __construct($opts = array(), $tpl_dir = "/views/", $inadmin = 0)
    {
         
        $this->tpl_dir = $tpl_dir;
         
        $this->options = array_merge($this->defaults, $opts);
     
        switch ($tpl_dir) {
            case '/views/':
            case '/views/admin/':
                    
                break;
                
            default:
                switch ($inadmin) {
                    case 0:
                        $tpl_dir = "/views/";
                        break;
                        
                    default:
                        $tpl_dir = "/views/admin/";
                        break;
                }
                break;
        }
         
        $this->config = array(
            "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'].$tpl_dir,
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT']."/views-cache/",
            "debug"         => false
        );
         
        Tpl::configure( $this->config );
         
        $this->tpl = new Tpl;
         
        $this->setData($this->options['data']);
         
        if ($this->options["header"] === true) $this->tpl->draw("header");
         
    }

	    public function __destruct()
    {
     
        if (isset($this->tpl2)) {
            Tpl::configure($this->config);
        }
     
        if ($this->options["footer"] === true) $this->tpl->draw("footer");
     
    }

	private function setData($data = array())
	{

		foreach($data as $key => $val)
		{

			$this->tpl->assign($key, $val);

		}

	}

	    public function setTpl($name, $data = array(), $returnHtml = false)
    {
     
        if ($this->tpl_dir != '/views/') {
     
            $config2 = array(
    	    "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'].$this->tpl_dir,
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT']."/views-cache/",
    	    "debug"         => false
    	);
     
    	Tpl::configure( $config2 );
     
    	$this->tpl2 = new Tpl;
     
        } else {
    	$this->tpl2 = $this->tpl;
        }
     
        $this->setData($data);
     
        return $this->tpl2->draw($name, $returnHtml);
             
    }

}

 ?>