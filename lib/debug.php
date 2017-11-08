<?php

function debug_memory($message = '')
{
    echo sprintf(
        "%s: %sMB / %sMB\t-> %s\n",
        (new \DateTime())->format('Y-m-d H:i:s'),
        ceil(memory_get_usage()/1048576),
        ceil(memory_get_usage(true)/1048576),
        $message
    );
}

function debug_time($from, $message = '')
{
    echo sprintf(
        "%s: %s\t-> %s\n",
        (new \DateTime())->format('Y-m-d H:i:s'),
        microtime (true) - $from,
        $message
    );
}