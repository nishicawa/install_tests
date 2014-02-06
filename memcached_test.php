<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->set('int', 2013);
$m->set('string', 'hoge');
$m->set('array', array(10, 20));
$m->set('object', new stdclass);

echo '<pre>';
var_dump($m->get('int'));
var_dump($m->get('string'));
var_dump($m->get('array'));
var_dump($m->get('object'));
echo '</pre>';
