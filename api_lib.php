<?php
// file api_lib.php
function decorate($data) {
    if (is_array($data)) {
        $decorated = [];
        foreach ($data as $key => $value) {
            $decorated[] = array_merge($value, [
                'link' => "/api/v1/bahan/{$value['id']}"
            ]);
        }
        return $decorated;
    } else {
        return [];
    }
}
function api_response($body) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(decorate($body));
}