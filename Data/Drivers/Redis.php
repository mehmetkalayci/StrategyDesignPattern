<?php
namespace Data\Drivers;

class Redis implements \Data\Datastore {
    
    public function update() {
        return __CLASS__ . ' üzerindeki veri güncellendi.';
    }
    
}