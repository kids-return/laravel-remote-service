<?php
namespace Leonsw\Service;

class Service
{
    public function trigger($event, $params)
    {
        $prefix = strtolower(env('SERVICE_ID'));
        if (empty($prefix)) {
            throw new \Exception('Environment `SERVICE_ID` undefined');
        }
        dispatch((new Event($prefix . '.' . $event, $params)));
    }
    
}