<?php

Schema::create('movie', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->float('vote_average');
    $table->integer('vote_count');
    $table->timestamps();
});