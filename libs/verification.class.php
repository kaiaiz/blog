<?php
// 基于GD库的php验证码,13653659110
class Verification
{
    private $width;//验证码宽度
    private $height;//验证码高度
    private $fontNum;//字符个数
    private $fontContent;//字符内容
    private $fontColor;//字符颜色
    private $fontSize=array();//字符大小
    private $fontAngle=array();//设置字符角度
    private $fontFamily='font.ttf';//设置字体
    private $bgColor;//背景颜色
    private $noisePointNum=array();//干扰点数量
    private $noiseLineNum;//干扰线数量
    private $image;//定义图像
    private $imageType;//设置图像格式
    function __construct($width = 0, $height = 0)
    {
        $this->width=$width;
        $this->height=$height;
    }
    /**
     * 设置图像格式
    */
    public function setImageType($type = 'png')
    {
        $this->imageType='image/'.$type;
    }
    /**
     * 设置字符个数
     * @param setTextNum int 字符个数
    */
    public function setFontNum($fontNum = 0)
    {
        if (empty($fontNum)) {
            $this->fontNum=4;
        } else {
            $this->fontNum=$fontNum;
        }
        return $this;
    }
    /**
     * 设置字符颜色
    */
    public function setFontColor($color)
    {
        if (empty($color)) {
            $this->fontColor=$this.getRandomColor();
        } else {
            $this->fontColor=sscanf($color, '#$2x%2x%2x');
        }
        return $this;
    }
    /**
     * 设置字号
    */
    public function setFontSize($size = 0)
    {
        if (empty($size)) {
            $this->fontSize=array('false',mt_rand(15, 40));
        } else {
            $arr=explode($size);
            $this->fontSize=array('true',mt_rand($arr[0], $arr[1]));
        }
        return $this;
    }
    /**
     * 设置字体
    */
    public function setFontFamily($furl = '')
    {
        if (empty($furl)) {
            $furl=$this->fontFamily;
        } else {
            $this->fontFamily=$furl;
        }
        return $this;
    }
    /**
     * 设置字体角度
    */
    public function setFontAngle($angle = 0)
    {
        if (empty($angle)) {
            $this->fontAngle=mt_rand(-15, 30);
        } else {
            $arr=explode(',', $angle);
            $this->fontAngle=mt_rand($arr[0], mt_rand[1]);
        }
        return $this;
    }
    /**
     * 设置干扰点数量
    */
    public function setNoisePoint($num = 0)
    {
        if (empty($num)) {
            $this->noisePointNum=mt_rand(400, 500);
        } else {
            $arr=explode(',', $angle);
            $this->noisePointNum=mt_rand($arr[0], mt_rand[1]);
        }
        return $this;
    }
    /**
     * 设置干扰线数量
    */
    public function setNoiseLine($num = 0)//注意，若不传参会出错!!!
    {
        if (empty($num)) {
            $this->noiseLineNum=mt_rand(3, 5);
        } else {
            $arr=explode(',', $angle);
            $this->noiseLineNum=mt_rand($arr[0], mt_rand[1]);
        }
        return $this;
    }
    /**
     * 初始化验证码图像
    */
    public function initImage()
    {
        if (empty($this->width)) {
            $this->width=floor($this->fontSize*1.5)*$this->textNum+10;
        }
        if (empty($this->height)) {
            $this->height=$this->fontSize*2;
        }
        $this->image=imagecreatetruecolor($this->width, $this->height);
        if (empty($this->bgColor)) {
                  $this->bgColor=$this->getRandomColor();
        } else {
                $this->bgColor=imagecolorallocate($this->image, $this->bgColor[0], $this->bgColor[1], $this->bgColor[2]);
        }
        imagefill($this->image, 0, 0, $this->bgColor);
    }
    /**
     * 获得随机颜色
    */
    public function getRandomColor($type = 'bgColor')
    {
        $red=$type=='bgColor'?mt_rand(0, 120):mt_rand(121, 255);
        $green=$type=='bgColor'?mt_rand(0, 120):mt_rand(121, 255);
        $blue=$type=='bgColor'?mt_rand(0, 120):mt_rand(121, 255);
        return imagecolorallocate($this->image, $red, $green, $blue);
    }
    /**
     * 产生随机字符
    */
    public function randFont($type = 'en')
    {
        $string='';
        switch ($type) {
            case 'en':
                $str = 'ABCDEFGHJKLMNPQRSTUVWXY3456789';
                for ($i=0; $i<$this->fontNum; $i++) {
                    $string.=$str[mt_rand(0, strlen($str)-1)].',';
                    $this->fontContent.=$str[mt_rand(0, strlen($str)-1)];
                }
                $string=substr($string, 0, -1);
                break;
            case 'cn':
                for ($i=0; $i<$this->textNum; $i++) {
                    $string = $string . ',' . chr(rand(0xB0, 0xCC)) . chr(rand(0xA1, 0xBB));
                }
                $string = iconv('GB2312', 'UTF-8', $string); //转换编码到utf8
                break;
        }
        return $string;
    }
    /**
     * 生成干扰点
    */
    public function getNoisePoint()
    {
        for ($i=0; $i<$this->noisePointNum; $i++) {
            imagesetpixel($this->image, mt_rand(0, $this->width), mt_rand(0, $this->height), $this->getRandomColor());
        }
        return $this;
    }
    /**
     * 生成干扰线
    */
    public function getNoiseLine()
    {
        $space=$this->width/3;//设置线条区间
        for ($i=0; $i<$this->noiseLineNum; $i++) {
            $x1=mt_rand(0, $space);
            $y1=mt_rand(0, $this->height);
            $x2=mt_rand($space*2, $this->width);
            $y2=mt_rand(0, $this->height);
            imageline($this->image, $x1, $y1, $x2, $y2, $this->getRandomColor('a'));
        }
            // imageline($this->image, $x1, $y1, $x2, $y2, $this->getRandomColor());
        return $this;
    }
    //@生成文字
    public function createText()
    {
        $textArray=explode(',', $this->randFont());
        $space=$this->width/$this->fontNum;
        foreach ($textArray as $key => $value) {
            if ($this->fontSize[0]=='false') {
                $this->setFontSize();
                $this->setFontAngle();
            }
            $x=mt_rand($space*$key, $space*$key+$space)+mt_rand(-5, 5) ;
            $arr=imagettfbbox($this->fontSize[1], $this->fontAngle, $this->fontFamily, $value);
            $y=abs($arr[5]-$arr[1]);
            // echo $value.' '.$y.'<br />';
            // echo $this->fontSize.' ';
            imagettftext($this->image, $this->fontSize[1], $this->fontAngle, $x, $y, $this->getRandomColor(), $this->fontFamily, $value);
        }
            // imagettftext($this->image, $this->fontSize, $this->fontAngle, 50, 50, $this->getRandomColor(), $this->fontFamily, 'aa');
                return $this;
    }
     
    //@生成验证码图片
    public function createImage()
    {
        $this->initImage(); //创建基本图片
        $this->setImageType();
        $this->createText(); //输出验证码字符
        $this->getNoisePoint(); //产生干扰点
        $this->getNoiseLine(); //产生干扰线
        header("content-type:{$this->imageType}");
        imagepng($this->image);
        $_SESSION['verification']=$this->fontContent;
        imagedestroy($this->image);
    }
}
// $code=new verification(200, 200);
// $code->setNoiseLine()->setNoisePoint()->setFontNum()->setFontSize()->setFontAngle()->setFontFamily()->createImage();
// $captcha5->setTextNumber(5);
// $captcha5->setTextLang('cn');
// $code = $captcha5->createImage();
