<?php
namespace Traits;

trait CreatedAt {

    public function createdAt(){
        return "{$this->created_at->year}/{$this->created_at->month}/{$this->created_at->day}";
    }

}