<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

include_once 'component.php';
include_once 'dispatcher.php';

$componentA = new Component('Component A');
$componentB = new Component('Component B');
$componentC = new Component('Component C');

/**
 * Something important happens to Module A and so B and C need to take action so each
 *   has to be listed out individually.
 */

$pubsub = Dispatcher::getInstance();
$pubsub::subscribe($componentA,$componentB);
$pubsub::subscribe($componentB,$componentC);

$i = 0;
$componentA->addOneAndEcho($i++);
// $componentB->addOneAndEcho($i++);
// $componentC->addOneAndEcho($i++);
