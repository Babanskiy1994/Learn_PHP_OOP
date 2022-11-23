<?php

interface PostShowL{
    public function show($id):array;
    public function print($id):array;
}

class FilePostShowL implements PostShowL{
    public function show($id):array{
        return $files;
    }
    public function print($id):array{
        return $files;
    }
}

class DbPostShowL implements PostShowL{
    public function show($id):array{
        return Post::all()->toArray();
    }
    public function print($id):array{
        return Post::all()->toArray();
    }
}