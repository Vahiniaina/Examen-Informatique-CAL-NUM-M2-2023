<?php
    function connectDb()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=forum', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }

    function reject_request($db ,$group_id,$user_id)
    {   
        
        if(!$db->exec("UPDATE  memberrequest SET request_state='Rejected' WHERE group_id='$group_id' AND user_id='$user_id'  ")) return FALSE;
        return TRUE;
    }