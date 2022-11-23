<?php

interface Document{
    public function read();
}

class DocumentReader{
    private $doc;
    public function __construct(Document $doc){
        $this->doc = $doc;
    }

    public function read(){
        return $this->doc->read();
    }
}

class Txt implements Document{
    public function read(){/*...*/}
}

class Markdown implements Document{
    public function read(){/*...*/}
}