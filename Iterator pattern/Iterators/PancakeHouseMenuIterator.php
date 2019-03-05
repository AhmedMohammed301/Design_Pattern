<?php

namespace Iterator\Iterators;


use Iterator\Interfaces\Iterator;

class PancakeHouseMenuIterator implements Iterator {

    private $menuItems;
    private $index = 0;

    public function __construct(array $array){
        $this->menuItems = $array;
    }

    public function next(){
        return $this->menuItems[$this->index++];
    }

    public function hasNext(){
        if($this->index >= count($this->menuItems))
            return false;
        return true;
    }
}