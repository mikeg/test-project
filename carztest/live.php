<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<script type="text/javascript" src="http://www.primcast.com/jwplayer/swfobject.js"></script>
  <div id="player_preview" style="float:left;">This text will be replaced</div>
  <script type="text/javascript"> 
    var so = new SWFObject('http://www.primcast.com/jwplayer/player-licensed.swf','mpl',320,240,'9'); 
    so.addParam('allowscriptaccess','always'); 
    so.addParam('allowfullscreen','true'); 
    so.addParam('flashvars','&autostart=true&streamer=rtmp://jowil.flashmediacast.com/live/&stretching=uniform&type=&file=livestream.flv'); 
    so.write('player_preview') 
  </script>
</body>
</html>
