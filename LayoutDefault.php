<?php

namespace Denis303\Themes\Chalk;

class LayoutDefault extends \Denis303\Liquid\Template
{

    public $content;

    public function toString() : string
    {
        return $this->render(__DIR__ . '/chalk/_layouts/default.html', [
            'content' => $this->content
        ]);
    }

}