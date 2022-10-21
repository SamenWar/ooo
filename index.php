<?php

    CONST TOKEN = '5751752574:AAEchv-AMlPyOQf6l80LGdbbG9My0LlWZww';

    $url = 'https://api.telegramm.org/bot'.TOKEN.'getMe';
    $url = 'https://api.telegramm.org/bot'.TOKEN.'getUpdates';

    $data = json_decode(file_get_contents('php://input'), true);
    file_get_contents('file.txt', '$data'.print_r($data, 1)."\n", FILE_APPEND);
    // https://api.telegram.org/bot.TOKEN./setwebhook?url=*ссылка на бота*;
    $message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');