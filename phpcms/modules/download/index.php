<?php

defined('IN_PHPCMS') or exit('No permission resources.');

class index {
    public function download(){
        $url=$_GET['filepath'];
        $this->forceDownload($url);
    }
    
    /**
 * Function 
 * 强制下载pdf
 */
function forceDownload($files) {
    $filename=basename($files);
    $file_sub_path=  $_SERVER['DOCUMENT_ROOT']."/".str_replace(APP_PATH,"",dirname($files));
    $filename= $file_sub_path."/".$filename;
    if (false == file_exists($filename)) {
        return false;
    }
// http headers 
    header('Content-Type: application-x/force-download');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Content-length: ' . filesize($filename));

// for IE6 
    if (false === strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6')) {
        header('Cache-Control: no-cache, must-revalidate');
    }
    header('Pragma: no-cache');

// read file content and output 
    return readfile($filename);
    ;
}

}
