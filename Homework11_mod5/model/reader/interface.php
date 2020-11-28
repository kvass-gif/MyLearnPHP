<?php

namespace model;

interface iReader
{
    public function __construct($filename);
    public function getArray();
}
