<?php


$app
    ->match('/', 'App\\Integration\\Jira\\Controller::getMilestones')
    ->method('GET|POST')
    ->bind('milestone');

$app
    ->match('/task/{ver}', 'App\\Integration\\Jira\\Controller::getTasks')
    ->method('GET|POST')
    ->bind('task');