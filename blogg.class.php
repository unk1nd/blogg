<?php
class blogg {
        private $file_name;
        private $xml;
        private $smarty;
        
        function __construct($filename, $smarty) {
            $this->file_name = $filename;
            $this->smarty = $smarty;
            $this->xml = simplexml_load_file($this->file_name);
        }
        
        
        public function printFile() {                          
            $mine_blogginnlegg = array();
            $i=0;         
            
            foreach ($this->xml->innlegg as $innlegg) {

                $mine_blogginnlegg[$i] = array('tittel' => utf8_decode($innlegg->tittel), 'tekst' => utf8_decode($innlegg->tekst)
                                    , 'dato' => utf8_decode($innlegg->dato));
                $i++;
            }
			$mine_blogginnlegg = array_reverse($mine_blogginnlegg);
            $this->smarty->assign('blogg_poster', $mine_blogginnlegg); 
            $this->smarty->display('blogg.tpl');
        }
            
        public function addToFile( $post) {  
			
      	  	$dom = new DOMDocument();
        	$dom->load($this->file_name);
        	
        	$root = $dom->firstChild;
        	
        	$nyttInnlegg = $dom->createElement("innlegg");
        	
        	$nyttInnlegg->appendChild($dom->createElement("tittel",utf8_encode($post->visTittel())));
        	$nyttInnlegg->appendChild($dom->createElement("dato",utf8_encode($post->visDato())));
        	$nyttInnlegg->appendChild($dom->createElement("tekst",utf8_encode($post->visTekst())));
        	
        	$root->appendChild($nyttInnlegg);
        	
        	$status = $dom->save($this->file_name);
            if(!$status) print ("Error during save of XML document");

        }

    }
?>