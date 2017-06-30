<?php

function urlsApi() {
    //Especial Actions
    $new = 'new';
    $del = 'del';
    $set = 'set';
    $get = 'get';
    $post = 'post';
    $search = 'search';
    $add = "add";
    $snd = "send";
    $cnt = "contactos";

    //
    $det = 'detail';

    //Tables
    //$tab = 'table';
    $agencie = 'agencia';

    //Root Api url
    $root = 'api/v1';

    return array(
        "snd_cnt" => "$root/$snd/$cnt",
        "add_cnt" => "$root/$add/$cnt",
    );
}
