<?php

function getTeamworkData($url){
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Authorization: Basic cmF2aXZhZ2hlbGFAa2dudGVjaG5vbG9naWVzLmNvbTp0aGlua2VyOTk='
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);    
}

/*********************************************************************************************/
/*
 * RETRIEVE ALL PROJECTS
 * Param : Status
*/
getTeamworkData('https://kgnitsolutionpvtltd.teamwork.com/projects.json?status=active');

/*********************************************************************************************/
/*
 * RETRIEVE ALL BOARDS LIST FOR PARTICULAR PROJECT
 * value = Project_ID 
 * 'https://kgnitsolutionpvtltd.teamwork.com/projects/{project_id}/tasks.json'
*/
getTeamworkData('https://kgnitsolutionpvtltd.teamwork.com/projects/344724/tasks.json');

/*********************************************************************************************/
/*
 * RETRIEVE ALL TASK LIST FROM SINGLE BOARD COLUMN
 * value = Column ID
 * https://kgnitsolutionpvtltd.teamwork.com/boards/columns/{COLUMN_ID}/cards.json
*/
getTeamworkData('https://kgnitsolutionpvtltd.teamwork.com/boards/columns/144034/cards.json');

/*********************************************************************************************/
