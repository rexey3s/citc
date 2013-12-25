<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Little Help</title>

<?php $this->loadStyle('listPage')?>
 <?php 
		
         $this->loadscript("jquery-1.10.2.min");
         	if (isset($loadAjax) && $loadAjax == 'nearestPosition')
			{
				?>
                
                
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
                <?php
				$this->loadscript("checkingPosition");
			}
		
		?>
        
</head>
	
<body <?php if (isset($location_filter) && $location_filter) echo ' onload="initialize()"'; else echo '';?>>
 
	<div id="main-container">
    	<?php 
			$this->show("header");
			
		?>
        <div class="list-container">
        <h1 class="list-til"><?php echo $list_til?></h1>
        <?php 
      /*
        =============== have location filter here
      */
			if (isset($location_filter) && $location_filter)
			{ 
			?>	
            	 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
            <?PHP
				$this->loadscript("googleAPI");
    			$this->loadstyle("googleAPI");
				?>
                	<div class="location_filter">
                    	<h3>Enter some location here</h3>
                        
                        <div id="locationField">
        <input id="autocomplete" class="addr_input" style="width: 800px;height: 30px;line-height: 30px;
padding: 8px;border: 1px solid #eee;border-radius: 6px;" placeholder="Enter your address"
               onFocus="geolocate()" name="" type="text"></input>
      </div>

      <!---- address handler ---->
      <table id="address">
        <tr>
          <td class="label">Street address</td>
          <td class="slimField"><input class="field" id="street_number"
                disabled="true"></input></td>
          <td class="wideField" colspan="2"><input class="field" id="route"
                disabled="true"></input></td>
        </tr>
        <tr>
          <td class="label">City</td>
          <td class="wideField" colspan="3"><input class="field" id="locality"
                disabled="true"></input></td>
        </tr>
        <tr>
          <td class="label">State</td>
          <td class="slimField"><input class="field"
                id="administrative_area_level_1" disabled="true"></input></td>
          <td class="label">Zip code</td>
          <td class="wideField"><input class="field" id="postal_code"
                disabled="true"></input></td>
        </tr>
        <tr>
          <td class="label">Country</td>
          <td class="wideField" colspan="3"><input class="field"
                id="country" disabled="true"></input></td>
        </tr>

      </table>
                    </div>
                    <button class="location_filter_bt">FIND</button>
                    <hr/>
                    <script>
						$(document).ready(function(){
							$('.location_filter_bt').click(function(){
								var ct = $('#administrative_area_level_1').val();
								$.ajax({
									url: '<?php echo __SITE_LINK?>/list/get_article_by_city',
									type: "POST",
									data: {city: ct},
									beforeSend: function(){
										$('.listing-ver2').html('<div id="loading"></div>');
									},
									success: function(data){
										if (data != '')											
											$('.listing-ver2').html(data);
										else
											$('.listing-ver2').html('<h2 style="text-align:center;"> Nothing found!</h2>');	
                  },
									fail:function(){
										$('.listing-ver2').html("erro");
									}
									
								})
							})
						})
					</script>
                <?php
			}
		?>
        <ul class="listing-ver2">
  			
            
            <?php 
	       			echo $content_list;
			     
              ?>
               
            <div class="clear"></div>
        </ul>
        <?php 
          if (isset($loadAjax) && $loadAjax == 'nearestPosition') {
              ?>
              <input type="hidden" id="cur_lat" /> 
              <input type="hidden" id="cur_lng" />
                <script>
                  $(document).ready(function()
                  {

                    console.log(distHaversine($('#cur_lat').val(),$('#cur_lng').val(),10.8090053,106.6654926));
                    $.ajax({
                    url: '<?php echo __SITE_LINK?>/list/nearest_places',
                    type: "POST",
                    data: {lat: $('#cur_lat').val(), lng: $('#cur_lng').val()},
                    beforeSend: function(){
                      $('.listing-ver2').html('<div id="loading"></div>');
                    },
                    success: function(data){
                      if (data != '')                     
                        $('.listing-ver2').html(data);
                      else
                        $('.listing-ver2').html('<h2 style="text-align:center;"> Nothing found!</h2>'); 
                    },
                    fail:function(){
                      $('.listing-ver2').html("erro");
                    }
                  })
                })
                </script>

              <?php
          }
        ?>
        
       
       
        </div>
    <?php 
      $this->show("footer");
    ?>
    </div>	
</body>
</html>