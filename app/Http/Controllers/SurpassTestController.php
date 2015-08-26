<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class SurpassTestController extends Controller {

    // You need to make a directory to upload and meed to set permission "777" for it in advance.
    // In this case, "LARAVEL_DIR/public/img/uploads/surpass_test"

    private $_surpass_test_path = 'img/uploads';
    private $_surpass_test_dir = 'surpass_test';

    public function surpass_test() {

        $surpass = \Surpass::path($this->_surpass_test_path)
            ->dir($this->_surpass_test_dir)
            ->progress('Uploading..')
            ->ids([
                'input' => 'image_upload',
                'preview' => 'preview_images'
            ])
            ->maxFiles(5)
            ->alert('You can upload up to %d files.')
            ->formData([
                'key_1' => 'value_1',
                'key_2' => 'value_2',
                'key_3' => 'value_3'
            ])
            ->preview(['maxHeight' => 120])
            ->progress('<img src="http://localhost/laravel/public/images/ajax-loader.gif"><br>Uploading..')
            ->callback([
                'upload' => 'alert("Uploading..");',
                'done' => 'alert("Done.");',
                'failed' => 'alert("Failed..");',
                'remove' => 'alert("Removed");',
                'load' => 'alert("Loading..");',
                'timeout' => 'alert("Timeout..");',
                'file_type_error' => 'alert("Only image files are allowed");'
            ])
            ->timeout(3000) // 3 seconds
            ->overwrite(false)   // When using overwriting-mode
            ->resize(['maxWidth' => '100', 'maxHeight' => '50'], $force_crop = false)   // Client Resizing(See "About resizing")
            ->dropZone('drop_zone_id')  // See "Drop Zone"
            ->button('Remove')
            ->css([
                'div' => 'pull-left text-center preview',
                'button' => 'btn btn-danger btn-md'
            ]);
        $surpass->load([1, 2, 3]);
        return view('pages.surpass_test',
            compact('surpass')
        );

    }

    public function surpass_upload_test() {

        $surpass = \Surpass::path($this->_surpass_test_path);

        if($surpass->save()) {

            // Something..

        }

        return $surpass->result();

    }

    public function surpass_remove_test() {

        $surpass = \Surpass::path($this->_surpass_test_path);

        // You may need to check authorization here.

        if($surpass->remove()) {

            // Something..

        }

        return $surpass->result();

    }

}
