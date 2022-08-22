<?php

namespace App\Controllers;
use App\Models\Post;
use App\Controllers\BaseController;

class ControlController extends BaseController
{
    public function search()
    {   
         
        include('..\app\Views\controlsystems\find_string.php');
        include('..\app\Views\controlsystems\check.php');
        check();
        //獲取搜索關鍵字
        
        $keyword=$this->request->getVar('search');
        //檢查是否為空
        if($keyword==''){
        echo'
        <script>
        alert("您要搜索的關鍵字不能為空")
        </script>
        '; 
        return view('univStar/index');       
        }
        else
        {   $data_store = [];
            $data_store = find_string($keyword);           
            return view('univStar/search.php',$data_store);
        }
        
        
    }
    public function alert()
    {
        return view('controlsystems/find_string');
    }
    public function upload()
    {
        return view('controlsystems/upload.php');
    }
    public function return_index()
    {
        return view('posts/index');
    }
    
}
?>
