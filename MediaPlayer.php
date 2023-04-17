<?php

interface Storage{
    public function list();
    public function add();
}

interface BasicFeatures {
    public function play();
    public function pause();
    public function next();
    public function prev();
}

interface OnlineFeatures {
    public function login();
    public function register();
    public function createPlayList();
    public function saveFavourite();
}

class VideoPlayer implements BasicFeatures, OnlineFeatures, Storage {
    public function play() {

    }
    public function pause() {

    }
    public function next() {

    }
    public function prev() {

    }
    public function login() {

    }
    public function register() {

    }
    public function createPlayList() {

    }
    public function saveFavourite(){

    }
    public function list() {

    }
    public function add() {
        
    }
}