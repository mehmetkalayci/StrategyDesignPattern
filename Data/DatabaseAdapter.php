<?php
namespace Data;

class DatabaseAdapter {
    
    private $strategy = null;
    
    public function __construct(Datastore $strategy) {
        $this->strategy = $strategy;
    }
    
    public function updateStore() {
        return $this->strategy->update();
    }
}