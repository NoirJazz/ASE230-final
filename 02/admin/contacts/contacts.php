<?php

function getContactRequests() {
    $filePath = '../../data/realtors.json';

    // Check if the file exists
    if (!file_exists($filePath)) {
        return []; // Return an empty array if the file doesn't exist
    }

    // Read the content of the JSON file
    $jsonContent = file_get_contents($filePath);

    // Decode the JSON content into an associative array
    $data = json_decode($jsonContent, true);

    // Check if the 'realtors' key exists in the decoded data
    if (isset($data['realtors'])) {
        return $data['realtors'];
    } else {
        return []; // Return an empty array if the 'realtors' key is not found
    }
}

function index() {
    $contactRequests = getContactRequests();
    return $contactRequests;
}

function detail($index) {
    $contactRequests = getContactRequests();
    return isset($contactRequests[$index]) ? $contactRequests[$index] : null;
}


function create($product) {
    $file = '../../data/realtors.json';
    $data = file_get_contents($file);
    $dataArray = json_decode($data, TRUE);
    array_push($dataArray, $product);
    $data = json_encode($dataArray, JSON_UNESCAPED_UNICODE);
    file_put_contents($file, $data);
}

function edit($index, $product) {
    $file = '../../data/realtors.json';
    $data = file_get_contents($file);
    $dataArray = json_decode($data, TRUE);
    $dataArray[$index] = $product;
    $data = json_encode($dataArray, JSON_UNESCAPED_UNICODE);
    file_put_contents($file, $data);
}

function delete($index) {
    $file = '../../data/realtors.json';
    $data = file_get_contents($file);
    $dataArray = json_decode($data, TRUE);
    
    if (isset($dataArray[$index])) {
        unset($dataArray[$index]);
        $dataArray = array_values($dataArray); // Reindex the array
        $data = json_encode($dataArray, JSON_UNESCAPED_UNICODE);
        file_put_contents($file, $data);
    }
}

?>
