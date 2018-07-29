<!DOCTYPE html><html lang="end">
<head>
<title>Meidafire - JWPlayer 8</title>
<link rel="stylesheet" type="text/css" href="//bowercdn.net/c/html5-boilerplate-4.3.0/css/normalize.css">
<link rel="stylesheet" type="text/css" href="//bowercdn.net/c/html5-boilerplate-4.3.0/css/main.css">
<script src="//bowercdn.net/c/jquery-1.11.1/dist/jquery.min.js"></script>
<script src="http://jwpsrv.com/library/echLdpbKEeSi8w4AfQhyIQ.js"></script>
<meta name="robots" content="noindex">
<meta name="referrer" content="never">
</head>
<body>
<div id="embed">
	Cargando Video! Espere por Favor! WG Tutoriales
</div>
<script type="text/javascript">

var subtitulo='';
if(subtitulo.length > 0){	
subs=[{'file':subtitulo,label:"Spanish",kind:"captions","default":true}];
}
        var primaryCookie = 'html5';
        var skinURL = "Seven";

        var cookies = document.cookie.split(";");
        for (i = 0; i < cookies.length; i++) {
        var x = cookies[i].substr(0, cookies[i].indexOf("="));
        var y = cookies[i].substr(cookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == 'primaryCookie') {
            primaryCookie = y;
        } else if (x == 'skinURL') {
            skinURL = y;
        }
    }

    function switchMode() {
        primaryCookie == 'html5' ? primaryCookie = 'flash' : primaryCookie = 'html5';
        document.cookie = "primaryCookie=" + primaryCookie;
        window.location.reload();
    };

	
    jwplayer.key = 'cbPZjCLEJ+O5oZl0AvaDQqyb50+ydDAD5kEqJuS10Zg=';


    xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4){
if(xmlhttp.status>=200&&xmlhttp.status<300){
//recibir valores
pag = xmlhttp.responseText;
pag = pag.split("http://download")[1];
url = pag.split("\"")[0];
url = "http://download" + url
    jwplayer('embed').setup({
		sources: [{file:url,label:'360p',type: 'video/mp4'}],
    	captions: {
        	back: true,
        	fontSize: 20,
        	edgeStyle: 'raised',
    	    backgroundOpacity: 0
	    },
        primary: primaryCookie,
		allowfullscreen: true,
        width: $(window).width(),
        height: $(window).height(),
        skin: {
            name: skinURL
        }
    })
    	jwplayer("embed").onReady(function() {
		       if (primaryCookie == "flash") { 
		        this.addButton("http://i.imgur.com/Hf3OIWZ.png", "Html", switchMode, "button1");
		      } else { 
		        this.addButton("http://i.imgur.com/AgY6SUL.png", "Flash", switchMode, "button1");
		      }
		    });
			
jwplayer("embed").addButton(
   'http://i.imgur.com/wr8ElYN.png',
   'Download video', 
   function() {  
    window.open(jwplayer("embed").getPlaylistItem()['sources'][jwplayer("embed").getCurrentQuality()].file+'?type=video/mp4&title=abc', '_blank').blur();
 },
'download'
);
}}}
xmlhttp.open("GET","http://www.mediafire.com/file/<?=$_GET['id']?>/116_5935e67a171a9.mp4", true);
xmlhttp.send();


    $(document).ready(function(){
        $(window).resize(function(){
            jwplayer().resize($(window).width(),$(window).height())
        })
    })
</script>
</body>
</html>