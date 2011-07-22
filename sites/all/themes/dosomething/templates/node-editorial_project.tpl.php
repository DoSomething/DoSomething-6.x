<?php if ($node->field_editorial_project_view[0]['value']):?>

 <style type="text/css">
   div#main ul.tabs { position: relative; bottom: 16px; }
 </style>

  <div class="block blue">


 <h2 >This project got funded!</h2>

	<div class="col_left">
    <?php
      $project = node_load($node->field_project_reference[0]['nid']);
      if($project->field_project_photo[0]['fid'] != 0)
      {
        print '<img src="/files/imagecache/111/'.$project->field_project_photo[0]['filepath'].'" />';
      }
    ?>

	</div>
	
    <div class="col_right post">
    <h3><a href="/node/<?php print $node->field_project_reference[0]['nid']; ?>"><?php print $title;?></a></h3>	
     <?php print $node->field_teaser_project [0]['value'];?>
  <br />
    <a href="/node/<?php print $node->field_project_reference[0]['nid']; ?>" class="more">Check it out</a>
    <div class="hr"><hr/></div>
  </div>
  
  
       </p>

                <ul>
                    <li class="first"><a href="/projects/grant-winners">All Grant Projects</a></li>
                    <li class="last"><a href="/grants">Fund your project</a></li>
                </ul>
  
  </div>
  
 <? else: ?>
  
  

  <div class="block blue">


 <h2 class="img"><a href="/node/<?php print $node->field_project_reference[0]['nid']; ?>"><img src="/sites/all/themes/dosomething/images/header_projectoftheday.png" width="161" height="29" alt="Project of the Day" /></a></h2>

	<div class="col_left">
    <?php
      $project = node_load($node->field_project_reference[0]['nid']);
      if($node->field_teaser_project_photo[0]['value']) {
        print '<img src="'.$node->field_teaser_project_photo[0]['value'].'" />';
      } else if($project->field_project_photo[0]['fid'] != 0) {
        print '<img src="/files/imagecache/111/'.$project->field_project_photo[0]['filepath'].'" />';
      }
    ?>

	</div>
	
    <div class="col_right post">
    <h3><a href="/node/<?php print $node->field_project_reference[0]['nid']; ?>"><?php print $title;?></a></h3>	
     <?php print $node->field_teaser_project [0]['value'];?>
  <br />
    <a href="/node/<?php print $node->field_project_reference[0]['nid']; ?>" class="more">Check it out</a>
    <div class="hr"><hr/></div>
  </div>
  
  
     <p style="clear: left;">Find projects 
<form id="signup" method="get" action="/projects/location">
    <input type="text" style="border: 1px solid rgb(74, 193, 225); width: 40px; height: 13px; margin-right: 2px;" onclick="if (this.value == 'zipcode') { this.value=''; }" class="styled short" maxlength="" value="zipcode" name="filter0" id="filter0"/><input id="go-projofday" type="image" style="margin-top: 1px;" class="submit" alt="go" value="go" name="go" mce_src="/sites/all/themes/dosomething/images/form_submit_go.png" src="/sites/all/themes/dosomething/images/form_submit_go.png"/>
  
<input type="hidden" value="10" name="op0"/>
  </form>   </p>

                <ul>
                    <li class="first"><a href="/projects">All Projects</a></li>
                    <li class="last"><a href="/node/add/project">Have your work featured here</a></li>
                </ul>
  
  </div>

      <script type="text/javascript">

      function buildUrlProjOfTheDay() {
        var args = new Array();
        args.push('*');
        args.push('*');
        args.push('*');
        args.push('*');
        args.push('pictures');
        args.push('*');
        args.push('*');
        args.push('*');
        args.push('10');
        if ($("input#filter0").val()) {
            args.push($("input#filter0").val());
        } else {
            args.push('*');
        }

       return args.join('/');

      }
       $('input#go-projofday').click(function(){
          location.href = '/projects-search/*/' + buildUrlProjOfTheDay();
          return false; });
      </script>
  
<?php endif;?>
