<div id="main-header">
	<div id="quicklogin">
        <?php 
            if (isset($uid))
            {
                echo "Welcome ".$username." <span class='a account_menu_bt' style='margin-left:15px' href='".__SITE_LINK."user'>
                    Account Manager</span>
                        <ul class='account_menu sub'>
                            <a href='".__SITE_LINK."user/post_article'><li>Post articles</li></a>
                            <a href='".__SITE_LINK."user/your_article'><li>Your articles</li></a>
                            <a href='".__SITE_LINK."logout'><li>Logout</li></a>
                         </ul>
                         <script>
                            $(document).ready(function(){
                                $('.account_menu_bt').hover(function(){
                                    $('ul.account_menu').show();
                                    $('ul.account_menu').on('mouseleave',function(){
                                        $(this).hide();
                                    });
                                })
                            })
                         </script>
                    ";
            }
            else
            {
        ?>
    	<form action="" method="post">
        	Email: <input type="text" name="email" />
        	password: <input type="password" name="pass" />
            <input type="submit" name="login" value="Login">
        </form>
        <a href="<?php echo __SITE_LINK.'register';?>">Create a new account</a>
        <?php
        }
        ?>
    </div>
        	<a href="<?php echo __SITE_LINK?>"><h1 class="title"><span style="font-size:18px">A</span> <span style="font-size:22px">little</span> <span style="color:#269abc">Help</span></h1></a>
            <ul class="menu">
            	<li>
                	HOW YOU CAN HELP
                 	<ul class="sub">
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Share some places need help</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Giving something</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Making some donation</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Joining events to help</li></a>
                    </ul>
                 </li>
            	<li>
                	WHAT WE HAVE HERE
                    <ul class="sub">
                    	<a href="<?php echo __SITE_LINK.'list/some_places_need_help'?>"><li>Some places need help</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>list/charity_events"><li>Some events you can join</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Someone can help</li></a>
                    </ul>
                </li>
            	<li>
                	WHY WE DO THIS
                	<ul class="sub">
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Poverty out there</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>Making people happy</li></a>
                    	<a href="<?php echo __SITE_LINK.'/'?>"><li>For a better world</li></a>
                    </ul>
                </li>
            	<div class="clear"></div>
            </ul>
            <div class="clear"></div>
        	<div class="quick-access">
            	<b><span style="color:#12ada1">QUICK ACCESS</span></b>: 
                	<a href="<?php echo __SITE_LINK?>list/most_needed_help">MOST HELP NEEDED</a>
                	<a href="<?php echo __SITE_LINK?>list/help_someone_near_you">HELP SOMEONE NEAR YOU</a>
                	<a href="<?php echo __SITE_LINK?>user/post_article">NEED SOME HELP</a>
                	<a href="<?php echo __SITE_LINK?>user/post_article">KNOW SOMEONE NEED HELP</a>
            </div>
        	<div class="clear"></div>
        </div>
        
        	<div class="clear"></div>