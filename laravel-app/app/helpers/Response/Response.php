<?php


return response()->json($params, $params['code']);

// try {
//     $input = $request->all();
//     $success = true;
//     $message = "Book successfully stored";
// } catch (QueryException $ex) {
//     $success = false;
//     $message = $ex->getMessage();
// }

// // make response
// $response = [
//     'success' => $success,
//     'message' => $message
// ];

// // return response
// return response()->json($response, 200);