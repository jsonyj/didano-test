<?php
use OSS\OssClient;
use OSS\Core\OssException;
use OSS\Model\CorsConfig;
use OSS\Model\CorsRule;
use OSS\Model\LiveChannelConfig;

class TestController extends AppController {

    var $ossClient = null;
    var $bucket = null;
    var $TestModel = null;

	function TestController() {
        $this->AppController();
        $this->ossClient = $this->getOssClient();
        $this->bucket = $this->code('oss.default.bucket');
        $this->TestModel = $this->getModel('Test');
    }

    function deldir($olddir){
        $dh=opendir($olddir);
        while ($file=readdir($dh)) {
            if($file!="." && $file!="..") {
                $fullpath=$olddir."/".$file;
                if(!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    deldir($fullpath);
                }
            }
        }
        closedir($dh);
        //删除当前文件夹：
        if(rmdir($olddir)) {
            return true;
        } else {
            return false;
        }
    }
    function traverse($path = '.') {
        $array = array();
        $current_dir = opendir($path);    //opendir()返回一个目录句柄,失败返回false
        while(($file = readdir($current_dir)) !== false) {    //readdir()返回打开目录句柄中的一个条目
            $sub_dir = $path . DIRECTORY_SEPARATOR . $file;    //构建子目录路径
            if($file == '.' || $file == '..') {
                continue;
            } elseif(is_dir($sub_dir)) {  
                $array[] = $file ;
             }
         }
         return $array;
     }
    function indexAction(){
        // $id = 1670;
        // $student_parent_list = $this->TestModel->getParentListByStudentId($id);
        // var_dump($student_parent_list);
    $form = Array(
        'name' => '测试234',
        'gender' => '1',
        'birthday' => '2017-01-16',
        'class_id' => '35',
        'status' => '1',
        'parent1' => Array(
                'relation_id' => 1,
                'relation_title' => '',
                'phone' => 13685900001,
            ),
        'parent2' => Array (
                'relation_id' => 2,
                'relation_title' => '',
                'phone' => 13685900002,
            ),
        'parent3' => Array
            (
                'relation_id' => 3,
                'relation_title' => '',
                'phone' => 13685900003,
            ),
        'parent4' => Array(
                'relation_id' => 4,
                'relation_title' => '',
                'phone' => 13685900004,
            ),
        'parent5' => Array(
                'relation_id' => 5,
                'relation_title' => '',
                'phone' => 13685900005,
            ),
        'parent6' => Array(
                'relation_id' => 6,
                'relation_title' => '',
                'phone' => 13685900006,
            ),
        'school_id' => 4,
    );
    $user = array('school_id' => 4,);
    // var_dump(array_splice($form,5));
        $parent_list = array_values(array_splice($form,5));
        $form = array_slice($form,0,5);
        $form['school_id'] =  $user['school_id'];
        $form['parent_list'] = $parent_list;
        var_dump($form);

// $url = 'http://www.example.com/path?googleguy=googley&a=c';
// $urll = parse_url($url);
// var_dump($urll);
// parse_str($urll['query'], $s);
// var_dump($s);
    // $array = array(
        //     array(
        //         'class_name' => '凹凸曼',
        //         'student_name' => '小红',
        //         'student_gender' => '女',
        //         'student_birthday' => '2001-11-12',
        //         'relation_title' => '妈妈',
        //         'parent_phone' => '15484256321',
        //         'relation_title1' => '爸爸',
        //         'parent_phone1' => '15484256321',
        //         'relation_title2' => '奶奶',
        //         'parent_phone2' => '15484256321',
        //         'relation_title3' => '爷爷',
        //         'parent_phone3' => '15484256321',
        //         'relation_title4' => '姥姥',
        //         'parent_phone4' => '15484256321',
        //         'relation_title5' => '姥爷',
        //         'parent_phone5' => '15484256321',
        //     ),
        //     array(
        //         'class_name' => '凹凸曼',
        //         'student_name' => '小米',
        //         'student_gender' => '女',
        //         'student_birthday' => '2001-1-12',
        //         'relation_title' => '妈妈',
        //         'parent_phone' => '15488256321',
        //         'relation_title1' => '爸爸',
        //         'parent_phone1' => '1548256321',
        //         'relation_title2' => '奶奶',
        //         'parent_phone2' => '15488256321',
        //         'relation_title3' => '爷爷',
        //         'parent_phone3' => '15488256321',
        //         'relation_title4' => '姥姥',
        //         'parent_phone4' => '15488256321',
        //         'relation_title5' => '姥爷',
        //         'parent_phone5' => '15488256321',
        //     ),
            
        // );
        // foreach ($array as $key => $value) {
        //     $array1[$key] = array_slice($value,0,4);
        //     $array1[$key]['parent_list'] = array_chunk(array_slice($value,4),2);
        // }
       
        // foreach ($array1 as $key => $value) {
        //     echo 111;
        //     echo "<br>";
        //     foreach ($value['parent_list'] as $k => $v) {
        //         echo $student_parent_name[] = $value['student_name']."-".$v[0];
        //         echo "<br>";
        //     }
        // }
        // $this->log(var_dump($student_parent_name,true),'test');
        // $time = "2016-12-05";
        // $year=((int)substr($time,0,4));//取得年份
        // $month=((int)substr($time,5,2));//取得月份
        // $day=((int)substr($time,8,2));//取得几号
        // $old_unix = mktime(0,0,0,$month,$day,$year);
        // $log_array = $this->traverse(APP_LOG);
        // foreach ($log_array as $value) {
        //     $year=((int)substr($value,0,4));//取得年份
        //     $month=((int)substr($value,5,2));//取得月份
        //     $day=((int)substr($value,8,2));//取得几号
        //     $log_unix = mktime(0,0,0,$month,$day,$year);
        //     if($log_unix < $old_unix){
        //         $log_unix = date("Y-m-d",$log_unix); 
        //         $olddir = APP_LOG . $log_unix;
        //         echo $olddir;
        //         echo $this->deldir($olddir)?"true":"false";
        //         echo "<br/>";
        //     }
        // }
        // var_dump($array1);
        // $today = date('Y-m-d');
        // $oldday = date('Y-m-d', strtotime('-1 month'));
        // $oldday = "2016-12-18";
        // $olddir = APP_LOG . $oldday ;
        // echo $this->deldir($olddir) ? 'suessce' : 'error';

        // $this->view->layout();
        // $object = $_FILES['file']['name'];
        // // $object = 'http://test-image-didanuo.oss-cn-shanghai.aliyuncs.com/schoolStaffSign/20161213/8dd18ea8cb835b1f3126f75e490a67c7.jpg';
        // $filePath = $_FILES['file']['tmp_name'];
        // $this->ossClient->uploadFile($this->bucket, $object, $filePath);
        // $objectUrl = APP_OSS_URL . $object;
        // $a = $object . $this->thumburl($objectUrl);
        // var_dump($a);
        // $detectionList = $this->TestModel -> getdetection();
        // foreach ($detectionList as $key => $value) {
        //     $from = $this->TestModel -> getfile($value['file_img_id']);
        //     $from['file_path'] =  substr($from['file_path'],0,55);
        //     $this->TestModel -> savefile($from);
        // }

        // $detectionList = $this->TestModel -> getdetection1();
        // print_r($detectionList);
        // echo "<br>";
        // foreach ($detectionList as $key => $value) {
        //     $from = $this->TestModel -> getfile1($value['file_img_id']);
        //     print_r($from);
        //     $from['file_path'] =  substr($from['file_path'],0,55);
        //     $this->TestModel -> savefile1($from);
        //     echo "<br>";
        // }
        
        // $id = $detectionList[0]['file_img_id'];
        // print_r($this->TestModel -> getfile1($id));
        // $list = $this->ossClient->listBucketLiveChannels($this->bucket);
        // $this->println("bucket $this->bucket listLiveChannel:\n" . 
        // "list live channel prefix: ". $list->getPrefix() . "\n" .
        // "list live channel marker: ". $list->getMarker() . "\n" .
        // "list live channel maxkey: ". $list->getMaxKeys() . "\n" .
        // "list live channel IsTruncated: ". $list->getIsTruncated() . "\n" .
        // "list live channel getNextMarker: ". $list->getNextMarker() . "\n");

        // foreach($list->getChannelList()  as $list)
        // {
        //     $this->println("bucket $this->bucket listLiveChannel:\n" . 
        //     "list live channel IsTruncated: ". $list->getName() . "\n" .
        //     "list live channel Description: ". $list->getDescription() . "\n" .
        //     "list live channel Status: ". $list->getStatus() . "\n" .
        //     "list live channel getNextMarker: ". $list->getLastModified() . "\n");
        // }

        // $config = new LiveChannelConfig(array(
        //     'description' => 'live channel test',
        //     'type' => 'HLS',
        //     'fragDuration' => 10,
        //     'fragCount' => 5,
        //     'playListName' => 'hello.m3u8'
        //     ));
        // $info = $this->ossClient->putBucketLiveChannel($this->bucket, 'test_rtmp_live', $config);
        // $this->println("bucket $this->bucket liveChannel created:\n" . 
        // "live channel name: ". $info->getName() . "\n" .
        // "live channel description: ". $info->getDescription() . "\n" .
        // "publishurls: ". $info->getPublishUrls()[0] . "\n" .
        // "playurls: ". $info->getPlayUrls()[0] . "\n");

    //     $imgsrc = 'http://test-image-didanuo.oss-cn-shanghai.aliyuncs.com/logo_2.jpg';
    // list($width,$height,$type)=getimagesize($imgsrc); 
    // var_dump(getimagesize($imgsrc));
        // $result = $this->ossClient->putObject($this->bucket, "f.file", "hi, oss");
        // $this->ossClient->copyObject($this->bucket, "b.file", $this->bucket, "b.file.copy");
        // $this->getObjectToLocalFile($this->ossClient, $this->bucket);

        // $fileNameArray = explode('.',$_FILES['file']['name']);
        // $object_fileName = md5($fileNameArray['0'].time()) . '.' . $fileNameArray['1'];
        // $object_dir = 'http://test-image-didanuo.oss-cn-shanghai.aliyuncs.com/version/main/cafef559b1b698d38a3f7f5f511334f3.zip';
        // $object = $object_dir . $object_fileName;
        // $filePath = $_FILES['file']['tmp_name'];
        // $object = 'logo_2.jpg';
        // $filePath = 'C:\Users\admin\Desktop/logo_2.jpg'; 
        // $a = $this->ossClient->uploadFile($this->bucket, $object, $filePath);
        // var_dump($a);
        // $signedUrl = $this->ossClient->signUrl($this->bucket, "3.jpg", 3600);
        // $this->println($signedUrl);
        // 图片缩放
        // $options = array(
        //     OssClient::OSS_FILE_DOWNLOAD => '3.jpg',
        //     OssClient::OSS_PROCESS => "image/resize,m_lfit,h_100,w_100", 
        //     );
        // $this->ossClient->getObject($this->bucket, $object, $options);
        // $this->printImage("imageResize",'3.jpg');

        // $this->getBucketAcl($this->ossClient, $this->bucket);
        // $filePath = 'C:\Users\admin\Desktop\3.jpg'; 
        // $this->ossClient->uploadFile($bucket, $object, $filePath);
        // $this->println("bucket $bucket created");
        // $corsConfig = new CorsConfig();
        // $rule = new CorsRule();
        // $rule->addAllowedHeader("x-oss-header");
        // $rule->addAllowedOrigin("http://www.b.com");
        // $rule->addAllowedMethod("POST");
        // $rule->setMaxAgeSeconds(10);
        // $corsConfig->addRule($rule);
        // $this->ossClient->putBucketCors($this->bucket, $corsConfig);
        // $this->println("bucket $this->bucket corsConfig created:" . $corsConfig->serializeToXml());
        // $this -> listBuckets($ossClient);
        // echo "<pre>";
        // $this->view->layout();
        // $object = $_FILES['file']['name'];
        // $object = 'http://test-image-didanuo.oss-cn-shanghai.aliyuncs.com/schoolStaffSign/20161213/8dd18ea8cb835b1f3126f75e490a67c7.jpg';
        // $filePath = $_FILES['file']['tmp_name'];
        // // $this->ossClient->uploadFile($this->bucket, $object, $filePath);
        // $a = $this->thumburl($object);
        // var_dump($a);
        // $this->view->layout();
  // //       $options = array(
  // //   					OssClient::OSS_FILE_DOWNLOAD => "a.file",
		// // 			);
		// // if($ossClient->getObject($bucket, "a.file", $options))
		// // 	echo 111;56 97
// detection/20161215/1c7ff44e729abfeaca82a2f82b405fe4.jpg.?x-oss-process=image/resize,m_lfit,h_,w_
		// // echo 222;
// $str = 'detection/20161215/1c7ff44e729abfeaca82a2f82b405fe4.jpg.?x-oss-process=image/resize,m_lfit,h_,w_';
// echo substr($str,0,55);
        // $this->deleteObject($this->ossClient, $this->bucket);
        // $this->deleteObjects($this->ossClient, $this->bucket);
        // $this->deleteBucket($this->ossClient, $this->bucket);
  //       $ossClient->getBucketCors($bucket, $options = null);
    }

    function listBuckets($ossClient)
    {
        $bucketList = null;
        try {
            $bucketListInfo = $ossClient->listBuckets();
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
        $bucketList = $bucketListInfo->getBucketList();
        foreach ($bucketList as $bucket) {
            print($bucket->getLocation() . "\t" . $bucket->getName() . "\t" . $bucket->getCreatedate() . "\n");
        }
    }

    function deleteObjects($ossClient, $bucket)
    {
        $objects = array();
        $objects[] = "b.file";
        $objects[] = "b.file.copy";
        $objects[] = "d.file";
        $objects[] = "c.file";
        $objects[] = "e.file";
        $objects[] = "f.file";
        try{
            $ossClient->deleteObjects($bucket, $objects);
        } catch(OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
    }

    function deleteObject($ossClient, $bucket)
    {
        $object = "b.file";
        try {
            $ossClient->deleteObject($bucket, $object);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
    }

    function deleteBucket($ossClient, $bucket)
    {
        try {
            $ossClient->deleteBucket($bucket);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
    }

    function getBucketAcl($ossClient, $bucket)
    {
        try {
            $res = $ossClient->getBucketAcl($bucket);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
        print('acl: ' . $res);
    }

    function putBucketAcl($ossClient, $bucket)
    {
        $acl = OssClient::OSS_ACL_TYPE_PUBLIC_READ_WRITE;
        try {
            $ossClient->putBucketAcl($bucket, $acl);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK" . "\n");
    }

    function printImage($func, $imageFile)
    {
        $array = getimagesize($imageFile);
        $this->println("$func, image width: " . $array[0]);
        $this->println("$func, image height: " . $array[1]);
        $this->println("$func, image type: " . ($array[2] === 2 ? 'jpg' : 'png'));
        $this->println("$func, image size: " . ceil(filesize($imageFile)));
    }

    function getObjectToLocalFile($ossClient, $bucket)
    {
        $object = "version/main/cafef559b1b698d38a3f7f5f511334f3.zip";
        $localfile = "C:\Users\admin\Desktop/1.zip";
        $options = array(
            OssClient::OSS_FILE_DOWNLOAD => $localfile,
        );

        try {
            $ossClient->getObject($bucket, $object, $options);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        print(__FUNCTION__ . ": OK, please check localfile: 'upload-test-object-name.txt'" . "\n");
        if (file_get_contents($localfile) === file_get_contents(__FILE__)) {
            print(__FUNCTION__ . ": FileContent checked OK" . "\n");
        } else {
            print(__FUNCTION__ . ": FileContent checked FAILED" . "\n");
        }
        if (file_exists($localfile)) {
            unlink($localfile);
        }
    }
/**结束分割**/
}