<?php

abstract class RodElement
{

    public function update()
    {
        if ($this->checkState()) {
            echo get_class($this) . ' updated';
        } else {
            echo get_class($this) . ' state is new';
        }
    }

    abstract function checkState();

}


