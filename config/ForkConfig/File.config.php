<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletFileConfig;

class FileConfig extends SkeletFileConfig{

    public static $FileUploads = 'On';

    public static $UploadTmpDir = '';

    public static $UploadMaxFilesize = '2M';

    public static $MaxFileUploads = '20';

    public static $AutoPrependFile = '';
    
    public static $AutoAppendFile = '';

}
