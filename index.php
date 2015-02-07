<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Youtube Downloader</title>
    <meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <style type="text/css">
      body {
        padding-top: 40px;
        padding-left: 40px;
        padding-bottom: 40px;
        background-color: #333333;
      }

      .form-download {
        max-width: 520px;
        padding: 10px 10px 10px;
        background-color: #666;
        border: 1px solid #696969;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }

      .form-download .form-download-heading,
      .form-download .checkbox {
        margin-bottom: 10px;
        text-align: center;
      }
      .form-download input[type="text"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .userscript {
        float: right;
        margin-top: 5px
      }
      #videoid {
        width: 400px;
        background-color: #999;
        font-size: 14px;
        color: #EEE;
        margin-bottom: 0px;
      }
      #type {
      }
    </style>
	</head>
<body>
	<form class="form-download" method="get" id="download" action="getvideo.php">
		<!--<h1 class="form-download-heading">Youtube Downloader</h1>-->
		<input type="text" name="videoid" id="videoid" size="40" placeholder="VideoID" />
		<input type="hidden" name="type" id="type" value="Download"/>
    <!--<button class="btn btn-primary" type="submit" name="go" id="type" value="Download" />-->
    <button id="go" type="button" class="btn btn-default" onclick="document.getElementById('download').submit();">Download</button>
<!--  -->
		<!--<p>Put in just the ID bit, the part after v=.</p>
		<p>Example: http://www.youtube.com/watch?v=<b>Fw-BM-Mqgeg</b></p>-->

    <!-- @TODO: Prepend the base URI -->
    <?PHP
    include_once('config.php');
    function is_chrome(){
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
		if(!strstr($agent, 'Iron')) // but not Iron
			return true;
	}
	return false;	// if isn't chrome return false
    }
    //if(($config['feature']['browserExtensions']==true)&&(is_chrome()))
      //echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
    ?>
  </form>
</body>
</html>
