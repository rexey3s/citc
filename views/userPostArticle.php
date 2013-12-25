<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <?php 
      $this->loadscript("jquery-1.10.2.min");
      $this->loadscript("googleAPI");
    	$this->loadstyle("googleAPI");
      $this->loadstyle("user");
      $this->loadstyle("jquery-te-1.4.0");
      $this->loadscript("jquery-te-1.4.0.min");
    ?>


  </head>

  <body onload="initialize()">
    <form method="post" action="" id="post_article_form">
      <input type="hidden" id="sent_title" name="title"/>
      <input type="hidden" id="sent_content" name="content"/>
      <input type="hidden" id="sent_addr" name="addr"/>
      <input type="hidden" id="sent_city" name="city"/>
      <input type="hidden" id="sent_lat" name="lat"/>
      <input type="hidden" id="sent_lng" name="lng"/>
      <input type="hidden" id="sent_beEvent" name="beEvent"/>
      <input type="hidden" id="sent_eventTime" name="eventTime"/>
      <input type="hidden" name="post_new_article" vaule="true"/>

    </form>
    <div id="main-container">
      <?php 
      $this->show("header");
    ?>
    <div id="user-forms-container">
      <h1 style="text-align:center;color:#12ada1">Post a new article</h1>
      <h5 style="text-align:center;color:#555;">You can share some story about some people who need helps or even your story here!</h5>
      <?php 
      if (isset($addArticleSuccess))
      {
        if ($addArticleSuccess)
          echo '<h2 style="text-align:center;color:green">Your article is posted successfully!</h2>';
        else
          echo '<h2 style="text-align:center;color:red">Posting fail! Please try again!</h2>';
          
       }
        ?>
       <h3>Title</h3>
      <input type="text" id="title_input" />
      <h3>Content</h3>
      <div id="textEditor" class="article_content">

      </div>
      <h3>Location</h3>
      <div id="locationField">
        <input id="autocomplete" class="addr_input"  placeholder="Enter your address"
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
      <div class="type_select" style="height:50px;line-height:50px;">
        Article type: 
      <label>
          <input  type="radio" id="beAstory" name="type" class="article_type" style="margin-left:10px;margin-right:10px;" checked="checked">A story
      </label>
      <label style="margin-left:30px">
          <input  type="radio" id="beAEvent"name="type" class="article_type" tyle="margin-left:10px;margin-right:10px;" > A event
      </label>
      <span class="event_time" style="display:none;padding-left:40px">
          When: <input type="date" id="eventTime" name="eventTime"/>
      </span>
    </div>
      <hr style="margin-top:10px;margin-bottom:10px;"/>
      <div class="bt-holder">
        <button id="submit">Post this article</button>
    </div>
      <script>
        $('#textEditor').jqte();

        // posting new article
        $(document).ready(function(){
              $('.article_type').click(function(){
                if ($('#beAEvent').is(':checked'))
                  $('.event_time').show()
                else
                  $('.event_time').hide();
              })

              $('#submit').click(function(){
              var sent_addr = $('#sent_addr').val($('.addr_input').val()).val();
              var sent_city = $('#sent_city').val($('#administrative_area_level_1').val()).val();
              var sent_lat = $('#sent_lat').val();
              var sent_lng = $('#sent_lng').val();
              var sent_title = $('#sent_title').val($('#title_input').val()).val();
              if ($('#beAstory').is(':checked'))
                $('#sent_beEvent').val(0);
              else
                $('#sent_beEvent').val(1);
              $('#sent_eventTime').val($('#eventTime').val());

             var sent_content = $('#sent_content').val($('#textEditor').val()).val();
              $('#post_article_form').submit();
           })
        })
      </script>
    </div>
    <?php 
      $this->show("footer");
    ?>
     </div>
  </body>
</html>