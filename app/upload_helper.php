<?php
if (!function_exists('ensure_upload_directory_exists')) {
    function ensure_upload_directory_exists($path)
    {
        if (!file_exists(FCPATH . $path)) {
            mkdir(FCPATH . $path, 0777, true);
        }
    }
}
