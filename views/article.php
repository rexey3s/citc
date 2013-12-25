<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Little Help</title>

<?php $this->loadStyle('article');
    $this->loadscript('jquery-1.10.2.min');
?>
</head>

<body>
     <!----
    Facebook plugins
   ---->
          <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=656514764399766";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, "script", "facebook-jssdk"));</script>
   <!------------>
	<div id="main-container">
    	<?php 
			$this->show("header");
		?>
		<div class="article-container">
        	<div class="content">
            	<?php 
					echo $article_content;
				?>
            	<!---
                <h2 class="til">There are a lot of the poors out there!</h2>
                Do you know there are still so much 
                Do you know there are still so much 
              
                
                Do you know there are still so much <br/>
                Do you know there are still so much 
                Do you know there are still so much 
				---->
            </div>
        </div>	
    <?php 
      $this->show("footer");
    ?>
     </div>	
</body>
</html>