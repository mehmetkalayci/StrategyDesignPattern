<?php
namespace Data\Drivers;

class MySQL implements \Data\Datastore {
    
    public function update() {
        return __CLASS__ . ' �zerindeki veri g�ncellendi.';
    }
    
}