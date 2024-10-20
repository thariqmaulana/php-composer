<?php

/**
 * Nama class harus sama dengan nama file
 * jadi 1 file 1 class
 * supaya importnya berjalan
 */

//  cara pembuatan

namespace ThariqLibrary\Data;

class People
{
  public function __construct(private string $name) {
    
  }

  public function sayHello($name): void
  {
    echo "Hello $name, my name is $this->name";
  }
}