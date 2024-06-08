<?php

namespace Module\Common;

/**
 * Trait FlashMessages
 * @package App\Traits
 */
trait ApiReturnJsonMessages
{

    public function saveFilePath($file, $user, $field_name)
    {

        $filesIZE = $file->getSize();
        $img_extenstion = strtolower($file->getClientOriginalExtension());

        $filename = time() . rand(11111, 9999) . '.';
        $image_path = $filename . $img_extenstion;
        $file_path = public_path()."uploads/document/" . $filename . $img_extenstion;
        $uploaded = $file->move(public_path('uploads/document'), $image_path);
        if ($oldDocument = \App\Models\Document::where([
            'documentable_type' => 'App\Models\User',
            'documentable_id' => $user->id,
            'field_name' => $field_name
        ])->first()){
            $oldDocument->update([
                'documentable_type' => 'App\Models\User',
                'documentable_id' => $user->id,
                'title' => $filename . $img_extenstion,
                'index' => 0,
                'is_main' => 0,
                'date' => date('Y-m-d H:i:s'),
                'size' => $filesIZE,
                'type' => 'image/' . $img_extenstion,
                'file' => $file_path,
                'field_name' => $field_name
            ]);
        }else{
            \App\Models\Document::create([
                'documentable_type' => 'App\Models\User',
                'documentable_id' => $user->id,
                'title' => $filename . $img_extenstion,
                'index' => 0,
                'is_main' => 0,
                'date' => date('Y-m-d H:i:s'),
                'size' => $filesIZE,
                'type' => 'image/' . $img_extenstion,
                'file' => $file_path,
                'field_name' => $field_name
            ]);
        }

    }

    public function formatMessage($status, $message,$code)
    {
        return response()->json([
            'status' => $status,
            'message' => $message
        ],$code);
    }

    public function returnData($data)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ],200);
    }

    public function successMessage($message)
    {
        return [
            'status' => 'success',
            'message' => $message,
            'status_code' => 200
        ];
    }

    public function returnError($message,$status=500,$errorType = 'error')
    {
        return [
            'status' => $errorType,
            'message' => $message,
            'status_code' => $status
        ];
    }

    public function returnNotFoundError()
    {
        return [
            'status' => 'error',
            'message' => 'Page Not Found',
            'status_code' => 404
        ];
    }

    public function returnServerError()
    {
        return [
            'status' => 'error',
            'message' => 'Something went wrong.',
            'status_code' => 500
        ];
    }

    public function createdMessage($message)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message
        ],201);
    }

    public function updateMessage($message)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message
        ],205);
    }

    public function returnMultipleData($message)
    {
        $sta = ['status' => 'success'];
        $data = array_merge($sta,$message);
        return response()->json($data,200);
    }

    public function pagenationData($datas)
    {
        return [
            'next_page' => $datas->nextPageUrl(),
            'current_page' => $datas->currentPage(),
            'total_pages' => (int) ceil($datas->total() / $datas->perPage()),
        ];
    }

    public function returnValidationError($data)
    {
        return response()->json([
            'status' => 'error',
            'errors' => $data
        ],422);
    }




}
