<?php
namespace Data\Drivers;

class MongoDB implements \Data\Datastore {
    
    public function update() {
        return __CLASS__ . ' üzerindeki veri güncellendi.';
    }
    
}