<?php
 session_start(); $captcha = new SimpleCaptcha(); $captcha->blur = true; $captcha->wordsFile = null; $captcha->resourcesPath = __DIR__.'/resources'; $captcha->CreateImage(); class SimpleCaptcha { public $difficulty = 1.65; public $width = 150; public $height = 51; public $wordsFile = ''; public $resourcesPath = __DIR__.'/resources'; public $minWordLength = 6; public $maxWordLength = 7; public $session_var = 'dig_captcha'; public $backgroundColor = array(255, 255, 255); public $colors = array( array(27,78,181), array(22,163,35), array(214,36,7), ); public $shadowColor = null; public $lineWidth = 1; public $fonts = array( 'Antykwa' => array('spacing' => -3, 'minSize' => 27, 'maxSize' => 30, 'font' => 'AntykwaBold.ttf'), 'Candice' => array('spacing' =>-1.5,'minSize' => 28, 'maxSize' => 31, 'font' => 'Candice.ttf'), 'DingDong' => array('spacing' => -2, 'minSize' => 24, 'maxSize' => 30, 'font' => 'Ding-DongDaddyO.ttf'), 'Duality' => array('spacing' => -2, 'minSize' => 30, 'maxSize' => 38, 'font' => 'Duality.ttf'), 'Heineken' => array('spacing' => -2, 'minSize' => 24, 'maxSize' => 34, 'font' => 'Heineken.ttf'), 'Jura' => array('spacing' => -2, 'minSize' => 28, 'maxSize' => 32, 'font' => 'Jura.ttf'), 'StayPuft' => array('spacing' =>-1.5,'minSize' => 28, 'maxSize' => 32, 'font' => 'StayPuft.ttf'), 'Times' => array('spacing' => -2, 'minSize' => 28, 'maxSize' => 34, 'font' => 'TimesNewRomanBold.ttf'), 'VeraSans' => array('spacing' => -1, 'minSize' => 20, 'maxSize' => 28, 'font' => 'VeraSansBold.ttf'), ); public $Yperiod = 12; public $Yamplitude = 14; public $Xperiod = 11; public $Xamplitude = 5; public $maxRotation = 8; public $scale = 1.8; public $blur = false; public $debug = false; public $imageFormat = 'png'; public $im; public function __construct($config = array()) { } public function CreateImage() { $ini = microtime(true); if($this->difficulty >2) $this->difficulty = 2; if($this->difficulty<=0) $this->difficulty = 0.1; $this->ImageAllocate(); $text = $this->GetCaptchaText(); $fontcfg = $this->fonts[array_rand($this->fonts)]; $this->WriteText($text, $fontcfg); $ses = filter_var($_GET['r'],FILTER_SANITIZE_NUMBER_FLOAT); if(isset($_GET['pr'])) { $prev_ses = filter_var($_GET['pr'], FILTER_SANITIZE_NUMBER_FLOAT); if (isset($_SESSION[$this->session_var . $prev_ses])) unset($_SESSION[$this->session_var . $prev_ses]); } $_SESSION[$this->session_var.$ses] = $text; if (!empty($this->lineWidth)) { $this->WriteLine(); } if ($this->blur && function_exists('imagefilter')) { imagefilter($this->im, IMG_FILTER_GAUSSIAN_BLUR); } if ($this->debug) { imagestring($this->im, 1, 1, $this->height-8, "$text {$fontcfg['font']} ".round((microtime(true)-$ini)*1000)."ms", $this->GdFgColor ); } $this->WriteImage(); $this->Cleanup(); } protected function ImageAllocate() { if (!empty($this->im)) { imagedestroy($this->im); } $this->im = imagecreatetruecolor($this->width*$this->scale, $this->height*$this->scale); $this->GdBgColor = imagecolorallocatealpha($this->im, $this->backgroundColor[0], $this->backgroundColor[1], $this->backgroundColor[2],127 ); imagealphablending($this->im, false); imagesavealpha($this->im, true); imagefilledrectangle($this->im, 0, 0, $this->width * $this->scale, $this->height * $this->scale, $this->GdBgColor); imagealphablending($this->im, true); $color = $this->colors[mt_rand(0, sizeof($this->colors) - 1)]; $this->GdFgColor = imagecolorallocatealpha($this->im, $color[0], $color[1], $color[2], 30); if (!empty($this->shadowColor) && is_array($this->shadowColor) && sizeof($this->shadowColor) >= 3) { $this->GdShadowColor = imagecolorallocate($this->im, $this->shadowColor[0], $this->shadowColor[1], $this->shadowColor[2] ); } } protected function GetCaptchaText() { $text = $this->GetDictionaryCaptchaText(); if (!$text) { $text = $this->GetRandomCaptchaText(); } return $text; } function GetDictionaryCaptchaText($extended = false) { if (empty($this->wordsFile)) { return false; } if (substr($this->wordsFile, 0, 1) == '/') { $wordsfile = $this->wordsFile; } else { $wordsfile = $this->resourcesPath.'/'.$this->wordsFile; } if (!file_exists($wordsfile)) { return false; } $fp = fopen($wordsfile, "r"); $length = strlen(fgets($fp)); if (!$length) { return false; } $line = rand(1, (filesize($wordsfile)/$length)-2); if (fseek($fp, $length*$line) == -1) { return false; } $text = trim(fgets($fp)); fclose($fp); if ($extended) { $text = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY); $vocals = array('a', 'e', 'i', 'o', 'u'); foreach ($text as $i => $char) { if (mt_rand(0, 1) && in_array($char, $vocals)) { $text[$i] = $vocals[mt_rand(0, 4)]; } } $text = implode('', $text); } return $text; } protected function GetRandomCaptchaText($length = null) { if (empty($length)) { $length = rand($this->minWordLength, $this->maxWordLength); } $words = "abcdefghijlmnopqrstvwyz"; $vocals = "aeiou"; $text = ""; $vocal = rand(0, 1); for ($i=0; $i<$length; $i++) { if ($vocal) { $text .= substr($vocals, mt_rand(0, 4), 1); } else { $text .= substr($words, mt_rand(0, 22), 1); } $vocal = !$vocal; } return $text; } protected function WriteText($text, $fontcfg = array()) { if (empty($fontcfg)) { $fontcfg = $this->fonts[array_rand($this->fonts)]; } $fontfile = $this->resourcesPath.'/fonts/'.$fontcfg['font']; $lettersMissing = $this->maxWordLength-strlen($text); $fontSizefactor = 1+($lettersMissing*0.09); $x = 20*$this->scale; $y = round(($this->height*27/40)*$this->scale); $length = strlen($text); for ($i=0; $i<$length; $i++) { $degree = rand($this->maxRotation*-1, $this->maxRotation)*$this->difficulty; $fontsize = rand($fontcfg['minSize'], $fontcfg['maxSize'])*$this->scale*$fontSizefactor; $letter = substr($text, $i, 1); if ($this->shadowColor) { $coords = imagettftext($this->im, $fontsize, $degree, $x+$this->scale, $y+$this->scale, $this->GdShadowColor, $fontfile, $letter); } $coords = imagettftext($this->im, $fontsize, $degree, $x, $y, $this->GdFgColor, $fontfile, $letter); $x += ($coords[2]-$x) + ($fontcfg['spacing']*$this->scale); } $this->textFinalX = $x; } protected function WriteLine() { $x1 = $this->width*$this->scale*.15; $x2 = $this->textFinalX; $y1 = rand($this->height*$this->scale*.40, $this->height*$this->scale*.65); $y2 = rand($this->height*$this->scale*.40, $this->height*$this->scale*.65); $width = $this->lineWidth/2*$this->scale; for ($i = $width*-1; $i <= $width; $i++) { imageline($this->im, $x1, $y1+$i, $x2, $y2+$i, $this->GdFgColor); } } protected function WriteImage() { if ($this->imageFormat == 'png' && function_exists('imagepng')) { header("Content-type: image/png"); header("Expires: 0"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); imagepng($this->im); } else { header("Content-type: image/jpeg"); header("Expires: 0"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); imagejpeg($this->im, null, 80); } } protected function Cleanup() { imagedestroy($this->im); } protected function WaveImage() { $wdf = 1; if($this->difficulty<1) $wdf = 1/$this->difficulty*(0.9/$this->difficulty); if($this->difficulty>1) $wdf = (1/($this->difficulty*1.7))+0.5; $xp = $this->scale*$this->Xperiod*rand(1,3) * $wdf; $k = rand(1, 100); for ($i = 0; $i < ($this->width*$this->scale); $i++) { imagecopy($this->im, $this->im, $i-1, sin($k+$i/$xp) * ($this->scale*$this->Xamplitude), $i, 0, 1, $this->height*$this->scale); } $k = rand(0, 100); $yp = $this->scale*($this->Yperiod)*rand(1,2) * $wdf; for ($i = 0; $i < ($this->height*$this->scale); $i++) { imagecopy($this->im, $this->im, sin($k+$i/$yp) * ($this->scale*$this->Yamplitude), $i-1, 0, $i, $this->width*$this->scale, 1); } } protected function ReduceImage() { $imResampled = imagecreatetruecolor($this->width, $this->height); imagecopyresampled($imResampled, $this->im, 0, 0, 0, 0, $this->width, $this->height, $this->width*$this->scale, $this->height*$this->scale ); imagedestroy($this->im); $this->im = $imResampled; } } ?>
