<?php

    // && : true 만들기가 힘듬. false 만들기가 쉬움.
    // || : true 만들기가 쉬움. false 만들기가 힘듬.

    // 0, 공간 만 false, 정수,음수,문자 섞여도 true

    $name = 1;

    if(1 && 2 && 'a' && $name)
    {
     print " 나는 진실이다. ";
    }

    if(1 || 2)
    {
     print " i'm true. ";
    }

?>