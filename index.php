<?php
session_start();

// Disqus Comments
function comments() {
?>
<br /><br />
<hr />

   <div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'i-paysdu42';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<?php
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Le pays du 42 <?php
  if (isset($_GET['page']))
    echo ":: ".ucwords(str_replace('-', ' ', $_GET['page']));
?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="DC.Language" scheme="RFC3066" content="fr" />
    <meta name="author" content="The db0 company, http://db0.fr Contact db0company [at] gmail [dot] com" />
    <meta name="copyright" content="The db0 company, Copyright 2010, Tout droits résérvés. Si du contenu vous appartient et que vous souhaitez qu'il soit retiré du site, demandez-le par mail db0company [at] gmail [dot] com" />
    <meta name="Keywords" content="Pays du 42 paysdu42 journal intime blonde epitech" />
    <meta name="description" content="Le Pays du 42 vous apprend à programmer rapidement et sans détours" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="Normal" />
  <link rel="stylesheet" href="css/<?php
  if (!isset($_SESSION['style']))
    {
      $style = "default";
      $_SESSION['style'] = $style;
    }
   if (isset($_GET['style']) && file_exists('css/'.$_GET['style'].".css"))
     {
       $style = $_GET['style'];
       $_SESSION['style'] = $style;
       echo $style.".css";
     }
   else
     echo $_SESSION['style'].".css";
?>" type="text/css" media="screen" title="Normal" />
    <link rel="shortcut icon" href="fav.ico" />
    <link rel="icon" href="fav.ico" />
    <script type="text/javascript">
      function show(id)
      {
        if (document.getElementById)
        {
          tabler = document.getElementById(id);
          if (tabler.style.display=="none")
          {
            tabler.style.display="";
          }
          else
          {
            tabler.style.display="none";
          }
        }
      }
    </script>
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/pojoaque.min.css">
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>
  <body>
    <div id="main">
<div id="header">
<pre>&#160;&#160;&#160;&#160;&#160;__&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;___&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;_&#160;&#160;_&#160;&#160;____
&#160;&#160;&#160;&#160;/&#160;/&#160;&#160;___&#160;&#160;&#160;&#160;/&#160;_&#160;\__&#160;_&#160;_&#160;&#160;&#160;_&#160;___&#160;&#160;&#160;&#160;__|&#160;|_&#160;&#160;&#160;_&#160;&#160;|&#160;||&#160;||___&#160;\
&#160;&#160;&#160;/&#160;/&#160;&#160;/&#160;_&#160;\&#160;&#160;/&#160;/_)/&#160;_`&#160;|&#160;|&#160;|&#160;/&#160;__|&#160;&#160;/&#160;_`&#160;|&#160;|&#160;|&#160;|&#160;|&#160;||&#160;|_&#160;__)&#160;|
&#160;&#160;/&#160;/__|&#160;&#160;__/&#160;/&#160;___/&#160;(_|&#160;|&#160;|_|&#160;\__&#160;\&#160;|&#160;(_|&#160;|&#160;|_|&#160;|&#160;|__&#160;&#160;&#160;_/&#160;__/
&#160;&#160;\____/\___|&#160;\/&#160;&#160;&#160;&#160;\__,_|\__,&#160;|___/&#160;&#160;\__,_|\__,_|&#160;&#160;&#160;&#160;|_||_____|
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;|___/</pre>
</div>

      <br />
      
      <!-- Menu -->
      <div class="menu">
      <a href=".">Accueil</a>
      | 
      <a href="?page=old">Archives</a>   
      |    
      <a href="https://github.com/db0company/paysdu42" target="_blank">Contribuer <span style="color: red">&#9829;</span></a>   
      |    
      <a href="?page=faq">Plus</a>   
      |
      db0company[at]gmail[dot]com 
      </div>
      <br />

      $> ls -l<br />

      <?php
         $list = "pages/list.html";	
         if (file_exists($list)) {
	   include($list);
         }
         ?>
      
      <br />
      <br />

      
      <!-- Contenu de la page -->

    <?php
      if (isset($_GET['page']))
	{
	  $page = $_GET['page'];
	}
      else
	{
	  $page = "home";
	}
if (file_exists("pages/$page.html"))
  {
    echo '<div class="pages">';
    require("pages/$page.html");
    echo '</div>';
  }
elseif (file_exists("pages/articles/$page.html"))
  {
    echo '<div class="pages">';
    require("pages/articles/$page.html");
    echo '</div>';
    comments();
  }
elseif (file_exists("pages/old/$page.html"))
  {
    require('pages/old.html');
    echo '<div class="pages"><pre><code>';
    require("pages/old/$page.html");
    echo '</code></pre></div>';
    comments();
  }
 else
   {
     require("pages/error.html");
   }
?>

<div id="footer"></div>      
      <script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
      </script>
      <script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-4691079-13");
	pageTracker._trackPageview();
	} catch(err) {}</script>
    </div>
  </body>
</html>

