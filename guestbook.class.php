<?php
class guestbook {
        private $file_name;
        private $xml;
        private $smarty;
        
        function __construct($filename, $smarty) {
            $this->file_name = $filename;
            $this->smarty = $smarty;
            $this->xml = simplexml_load_file($this->file_name);
        }
        
        
        public function printFile() {                          
            $mine_hilsner = array();
			
            $i=0;         
            /* Hent ut info om hver hilsen, lagre dette i assosiativ tabell og overf�r til Smarty  */
            foreach ($this->xml->hilsen as $hilsen) {

                $mine_hilsner[$i] = array('tittel' => utf8_decode($hilsen->tittel), 'tekst' => utf8_decode($hilsen->tekst)
                                    , 'web' => utf8_decode($hilsen->web), 'dato' => utf8_decode($hilsen->dato));
                $i++;
            }
			
			$mine_hilsner = array_reverse($mine_hilsner);
            $this->smarty->assign('gjestebok_poster', $mine_hilsner); 
            $this->smarty->display('gjestebok_vis.tpl');
        }
            
        public function addToFile( $post) {  
			
      	  	$dom = new DOMDocument();
        	$dom->load($this->file_name);
        	
        	$root = $dom->firstChild;
        	
        	$nyttInnlegg = $dom->createElement("hilsen");
        	
        	$nyttInnlegg->appendChild($dom->createElement("tittel",utf8_encode($post->visTittel())));
        	$nyttInnlegg->appendChild($dom->createElement("web",utf8_encode($post->visUrl())));
        	$nyttInnlegg->appendChild($dom->createElement("tekst",utf8_encode($post->visTekst())));
        	$nyttInnlegg->appendChild($dom->createElement("dato",utf8_encode($post->visDato())));
        	
        	$root->appendChild($nyttInnlegg);
        	
        	$status = $dom->save($this->file_name);
            if(!$status) print ("Error during save of XML document");

        }
    }
?>