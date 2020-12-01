<?php
class Tweet
{
    protected $data;
    public function from($from)
    {
        $data['from'] = $from;
        return $this;
    }
    public function withStatus($status)
    {
        $data['status'] = $status;
        return $this;
    }
    public function inReplyToId($id)
    {
        $data['id'] = $id;
        return $this;
    }
    public function send()
    {
        // Генерирование запроса Twitter API с использованием
        // информации из $data
        // Отправка https://api.twitter.com/1.1/statuses/update.json
        // с http_build_query($data)
        return $id;
    }
}
$tweet = new Tweet;
$id = $tweet->from('@rasmus')
    ->withStatus('PHP 6 released! #php')
    ->send();
$reply = new Tweet;
$id2 = $reply->withStatus('I <3 Unicode!')
    ->from('@a')
    ->inReplyToId($id)
    ->send();
// випадок коли ми можемо створювати цепочку виклику методів
// є необхідною тоді коли потрібно в порядку викликати методи певного класу
// тикий спосіб може полегшувати читабельність коду ніж кожен метод викликати окремо