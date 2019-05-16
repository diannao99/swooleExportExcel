<?php
$client = new swoole_client(SWOOLE_SOCK_TCP);
if (!$client->connect('127.0.0.1', 9526, -1))
{
    exit("connect failed. Error: {$client->errCode}\n");
}
$client->send("hello world\n");
echo $client->recv(1) . PHP_EOL;
$client->close();

