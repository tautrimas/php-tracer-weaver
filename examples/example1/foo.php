<?php

class Foo {
  function dims($x, $f = null) {
    return 42;
  }
}

class Bar {}

$f = new Foo();
$f->dims(new Bar());