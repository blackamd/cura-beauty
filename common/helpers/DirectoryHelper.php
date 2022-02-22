<?php

namespace common\helpers;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use common\models\ClientFiles as ModelsClientFiles;
use Yii;

use Cloudinary;
use Cloudinary\Uploader;
// use common\models\ClientFiles;

class DirectoryHelper{


    public $main_directory;
    private $sub_directory;
    function __construct($sub_directory) {
        $this->main_directory = Yii::$app->basePath. '/web/uploads/documents/'.$sub_directory;
        $this->createDirectory('');
    }

    /**
     * Create Directory Functions
     *
     * @return mixed
    */
    
    public function createDirectory($folderName)
    {
        $url = $this->main_directory . '/' . $folderName;
        if($this->checkExist($url))
        {
          return $this->makeDirectory($url);  
        }
        
    }

    private function makeDirectory($url)
    {
        if(mkdir($url, 0777, true)) {
            return true;
        }

        return false;
    }

    private function checkExist($url)
    {
        if (!file_exists($url)) {
            return true;
        }

        return false;
    }

    /**
     * Delete Directory Functions
     *
     * @return mixed
    */
    
    public function deleteDirectory($folderName) {
        $clientArr = explode('_',$this->main_directory);
        $folders = ModelsClientFiles::find()
            ->where(['client_id'=>$clientArr[1]])
            ->andWhere(['folder'=>$folderName])
            ->all();
        
        foreach($folders as $folder){
            $folder->deleted = 1;
            $folder->updated_by = Yii::$app->session->get('userid');
            if(!$folder->save()){
                return false;
            }
        }
        return true;
        // $dirPath = $this->main_directory . '/' . $folderName;
        // if ($this->isDirectory($dirPath)) {
        //     if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        //         $dirPath .= '/';
        //     }
        //     return $this->deleteAllFileInsideDirectory($dirPath);
        // }
    }

    private function isDirectory($url)
    {
        if(is_dir($url))
        {
            return true;
        }
        return false;
    }

    private function deleteAllFileInsideDirectory($dirPath)
    {
        $files = glob($dirPath . '*', GLOB_MARK);
        if(count($files) > 0) {
            return false;
        } 
        rmdir($dirPath); 
        return true;
    }


    /**
     * Rename Directory Functions
     *
     * @return mixed
    */

    public function renameDirectory($oldName , $newName)
    {
        $clientArr = explode('_',$this->main_directory);
        $folders = ModelsClientFiles::find()
            ->where(['client_id'=>$clientArr[1]])
            ->where(['folder'=>$oldName])
            ->all();

        foreach($folders as $folder){
            $folder->folder = $newName;
            if(!$folder->save()){
                return false;
            }
        }
        return true;
        
        // $oldNamePath = $this->main_directory . '/' . $oldName;
        // $newNamePath = $this->main_directory . '/'.$newName;//$clientArr[1] ;
        // //update client_files where client_id = $clientArr[1] and folder = $oldName
        // if($this->isDirectory($oldNamePath))
        // {    
        //     return $this->renameAction($oldNamePath, $newNamePath);
        // }    
    }

    private function renameAction($oldName, $newName)
    {
        if(rename($oldName, $newName))
        {
            return true;
        }
        return false;
    }

    /**
     * Change Directory Mode Functions
     *
     * @return mixed
    */
   
    public function changeMode($folderName, $mode)
    {
        $url = $this->main_directory . '/' . $folderName;
        if($this->isDirectory($url))
        {    
            $this->changeModeAction($url, $mode);
        }    
    }

    private function changeModeAction($url, $mode)
    {
        if(chmod($url,$mode))
        {
            return true;
        }
        return false;
    }

    public function deleteFile($folder,$file){
        \Cloudinary::config(array(
            "cloud_name" => "fitness-master-franchise",
            "api_key" => "443412498826172",
            "api_secret" => "zhbaUhlMTA0KBf7ec5G4TNKSK04",
            "secure" => true
        ));
        //get upload folder
        

        $ext = $folder[count($folder) - 2];
        $idArr = explode('_',$this->main_directory);


        $model = ModelsClientFiles::find()->where(['folder' => $ext])->andWhere(['file' => $file])->one();
        \Cloudinary\Uploader::destroy($model->public_id);
        if($model->delete()){
            return true;
        }
        return false;
    }

     /**
     * upload file  Functions
     *
     * @return mixed
    */

    public function uploadFile($folderName , $file)
    {
        $url = $this->main_directory . '/' . $folderName;
        $name = basename($file["name"]);
        // $target_file =  $url."/" . basename($file["name"]);
        // $folder = explode('/',$this->main_directory);
        //echo $target_file;exit;
        // \Cloudinary::config(array(
        //     "cloud_name" => "fitness-master-franchise",
        //     "api_key" => "443412498826172",
        //     "api_secret" => "zhbaUhlMTA0KBf7ec5G4TNKSK04",
        //     "secure" => true
        // ));
        // //upload to cloudinary
        // $files = array();
        // $files['named_local'] = \Cloudinary\Uploader::upload(
        //     $file['tmp_name']
        //   );
        $idArr = explode('_',$this->main_directory);

        $file = 'cloudinary/testFile/'.$idArr[1].'/'.$folderName.'/' .  $name;
        $bucket = 'gymtour-assets-ap-south-1';
        // $keyname = 'assets/'.$branch.'/client_image/'.$file;
        $s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'ap-south-1',
            'credentials' => [
                'key'    => 'AKIARIK3UMQR24VWKVGZ',
                'secret' => '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',
            ],
        ]);
        try {
            // Upload data.
            $result = $s3->putObject([
                'Bucket' => $bucket,
                'Key'    => $file,
                'SourceFile'   => $_FILES['file']['tmp_name'],
                'ACL'    => 'public-read'
            ]);
            
            // print_r($result);exit;
        } catch (S3Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        // echo json_encode($files);exit;
        //add to database clientID and publicID

        // extracting client id
        $model = new ModelsClientFiles();
        $model->folder = $folderName;
        $model->file = $name;
        // $model->url = $result['ObjectURL'];
        $model->s3_url = $result['ObjectURL'];
        // $model->public_id = $file;//$files['named_local']['public_id'];//'folderUploads/'.$folderName.'/'.basename($file["name"]);
        $model->client_id =  $idArr[1];
        $model->created_by = Yii::$app->session->get('userid');
        if(!$model->save())
            return false;
        return true;

          
        
    }


    public function listDirectory() {
        $idExt = explode('_', $this->main_directory);
        $client = $idExt[1];
        //Select Folders where clientId
        $folder = array();
        $folder = ModelsClientFiles::find()->select(['folder'],'DISTINCT')->where(['client_id'=> $client])->andWhere(['deleted'=>0])->all();
        // Yii::app()->db->createCommand("SELECT folder FROM 'client_files' WHERE client_id = ".$client);
        // model()->findAll(array('select'=>'folder','where'=>'client_id = '.$client) ;
        // ModelsClientFiles::findBySql("SELECT folder FROM 'client_files' WHERE client_id = ".$client);
        // model()->findAll(array('select'=>'folder','where'=>'client_id = '.$client));
        // $folders = $folder->exec();
        return $folder;
        $dirPath = $this->main_directory."/";
        if ($this->isDirectory($dirPath)) {
            $folders = glob($dirPath . "*");
            return $folders;
        }
    }

}