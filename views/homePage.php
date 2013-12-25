<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Little Help</title>

<?php $this->loadStyle('homePageMain');
        $this->loadscript('jquery-1.10.2.min');
?>
</head>

<body>
	<div id="main-container">
    	<?php 
			$this->show("header");
		?>
        <div class="list-container">
        <a href="<?php echo __SITE_LINK?>list/help_someone_near_you">
            <style>

                button.big {
                    width:350px;height:100px;line-height:100px;background:#269abc;font-size:25px;color:#fff;border:1px solid #eee;border-radius:3px;
                }
                button.big:hover{
                    background:#39b3d7;
                }
            </style>
            <div style="width:350px;height:100px;margin:auto;margin-top:70px;">
                <button class="big">
                    HELPING AROUND YOU
                </button>
            </div>
        </a>
        <h1 class="list-til">WHY WE DO THIS</h1>
        <ul class="listing-ver1">
  			<a href="<?php echo __SITE_LINK?>">
            <li>
            	
                <div class="hover">
                	<h2 class="caption">There're a lot of the poors out there!</h2>
                </div>
            	<?php 
					$this->loadImage("child1.jpg","","There're a lot of the poors out there!");
				?>
                <h4 class="til">
                	The poverty
                </h4>
            </li>
        </a>
  			<a href="<?php echo __SITE_LINK?>">
                <li>
            	<div class="hover">
                	<h2 class="caption">A little help that you do can make them happy</h2>
                </div>
            	<?php 
					$this->loadImage("child2.jpg","","A little help that you do can make them happy");
				?>
                <h4 class="til">
                	Happy people
                </h4>
            </li>
        </a>
        <a href="<?php echo __SITE_LINK?>">
            <li>
            	<div class="hover">
                	<h2 class="caption">We will have a better if each of you are ready to make a little help</h2>
                </div>
            	<?php 
					$this->loadImage("earth1.jpg","","We will have a better if each of you are ready to do a little help");
				?>
                <h4 class="til">
                	A better world
                </h4>
            </li>
        </a>
            <div class="clear"></div>
        </ul>
        
        <h1 class="list-til">WHAT WE HAVE HERE</h1>
        <ul class="listing-ver1">
  			<a href="<?php echo __SITE_LINK?>list/find_someone_need_help">
                <li>
            	<div class="hover">
                	<h2 class="caption">Finding someone need help in your area!</h2>
                </div>
            	<?php 
					$this->loadImage("location1.jpg","","Finding someone need help in your area!");
				?>
                <h4 class="til">
                	Someone need help around you
                </h4>
            </li>
        </a>
        <a href="<?php echo __SITE_LINK?>list/most_needed_help">
            <li>
            	<div class="hover">
                	<h2 class="caption">Some people who need help and their story </h2>
                </div>
            	<?php 
					$this->loadImage("povertyerase.jpg","","Some people who need help and their story");
				?>
                <h4 class="til">
                	Some story need your eraser
                </h4>
            </li>
        </a>
         <a href="<?php echo __SITE_LINK?>list/charity_events">
            <li>
            	<div class="hover">
                	<h2 class="caption">Finding some events that you can join to help people!</h2>
                </div>
            	<?php 
					$this->loadImage("helpingevent.jpg","","Joining some upcoming charity events!");
				?>
                <h4 class="til">
                	Charity events
                </h4>
            </li>
        </a>
        <div class="clear"></div>
        </ul>
        <h1 class="list-til">HOW YOU CAN HELP</h1>
        <ul class="listing-ver1">
         <a href="<?php echo __SITE_LINK?>list/some_places_need_help">
  			 <li>
            	<div class="hover">
                	<h2 class="caption">Giving a donation for helping someone!</h2>
                </div>
            	<?php 
					$this->loadImage("donation_0.jpg","","Giving a donation for helping someone!");
				?>
                <h4 class="til">
                	Making some donate
                </h4>
            </li>
        </a>
         <a href="<?php echo __SITE_LINK?>user/post_article">
             <li>
            	<div class="hover">
                	<h2 class="caption">Sharing someone need help and their story!</h2>
                </div>
            	<?php 
					$this->loadImage("poorstory.jpg","","Giving a donation for helping someone!");
				?>
                <h4 class="til">
                	Sharing story
                </h4>
            </li>
        </a>
         <a href="<?php echo __SITE_LINK?>user/post_article">
        
             <li>
            	<div class="hover">
                	<h2 class="caption">Sharing charity events that need some volunteers!</h2>
                </div>
            	<?php 
					$this->loadImage("helpingevent.jpg","","Charity events that need some volunteer!");
				?>
                <h4 class="til">
                	Sharing events
                </h4>
            </li>
        </a>
         <a href="<?php echo __SITE_LINK?>list/charity_events">
        
             <li>
            	<div class="hover">
                	<h2 class="caption">Joining some upcoming charity events!!</h2>
                </div>
            	<?php 
					$this->loadImage("helpingevent.jpg","","Charity events that need some volunteer!");
				?>
                <h4 class="til">
                	Joining events
                </h4>
            </li>
        </a> <a href="<?php echo __SITE_LINK?>user/find_someone_need_help">
        
             <li>
            	<div class="hover">
                	<h2 class="caption">Finding someone to help! Their location is right here!</h2>
                </div>
            	<?php 
					$this->loadImage("helpingevent.jpg","","Finding someone to help!");
				?>
                <h4 class="til">
                	Help someone
                </h4>
            </li>
        </a>
            	<div class="clear"></div>
        </ul>
        <div class="clear"></div>
        </div>
        <div class="clear"></div>
    	<?php 
			$this->show("footer");
		?>
    </div>	
</body>
</html>