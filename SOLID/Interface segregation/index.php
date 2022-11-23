<?php

interface ShowPostNameI{
    public function showName($id);
}

interface ShowPostTextI{
    public function showText($id);
}

interface ShowPostImageI{
    public function showImage($id);
}

class TextPost implements ShowPostNameI, ShowPostTextI{
    public function showName($id){/*...*/}
    public function showText($id){/*...*/}
}

class ImagePost implements ShowPostNameI, ShowPostImageI{
    public function showName($id){/*...*/}
    public function showImage($id){/*...*/}
}