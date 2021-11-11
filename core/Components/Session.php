<?php

namespace Core\Components;



class Session 
{
    public function __construct()
    {
        session_start();
    }
}