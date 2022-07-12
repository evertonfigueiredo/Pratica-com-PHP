<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

echo gettype($data[0]);
