<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Controller setting</title>
	<style>
		body {
			margin:0px;padding:0px;
		}
		h2,h3 {
			color:#676;
		}
		h3 {
			margin:0px;
			margin-left:10px;
		}
			table {
			font-size:14px;
			margin:0px;
			padding:0px;
			
		}
		table th {
			border-top:1px solid #ccc;
			border-bottom:1px solid #ccc;
		}
		table tr td {
			border-bottom:1px solid #ccc;
			border-right:1px solid #ccc;
			color:#333;
			font-size:16px;
			text-align:center;
		}
		table tr td:first-child {
			border-left:1px solid #ccc;
		}
		table th {
			min-width:120px;
			background:#06C;
			color:#fff;
		}
		table tr td {
			line-height:20px;
		}
		#edit_form_holder {
			width:100%;
			position:fixed;
			bottom:0px;
			height:100px;
			border-top:1px solid #eee;
			background:#eee;
		}
		input[type="text"] {
			padding:6px;
		}
		button , input[type="submit"]{
			padding:5px;
		}
		
		select {
			padding:3px;
		}
	</style>
</head>

<body>
	<?php 
		/*
			****** Get xml file
		*/
		 $data = simplexml_load_file('../controller/controllers.xml');
		 $datas = $data->children();
		 $controllers = $datas->controllers;
		 $actions = $datas->actions;
		 
		 $controllers_disp = '';
		 $controllersA = array();
		 $controllers_sel = '';
		 $actions_disp = '';
		 $i = 0;
		  
		   /*
		 *
		 *
		 *
		 * Editor and Adder Handler
		 * 
		 *
		 *
		 */
				/*
					Controller Adder 
				*/
				if (isset($_POST['controller_add']))
				{
					$controller = $controllers->addChild('a');
					$controller->addChild('controller',$_POST['controller']);
					$controller->addChild('title',$_POST['title']);
					$data->asXML('../controller/controllers.xml');
				}
				/*
					Action adder 
				*/
				if (isset($_POST['action_add']))
				{
					$action = $actions->addChild('a');
					$action->addChild('action',$_POST['action']);
					$action->addChild('controller',$_POST['controller']);
					$action->addChild('title',$_POST['title']);
					$data->asXML('../controller/controllers.xml');
				}
				/*
					controller edit 
				*/
				if (isset($_POST['controller_edit']))
				{
					foreach ($controllers->children() as $a)
		 			{
						
						if ((string)$a->title == $_POST['old_title'] && (string)$a->controller == $_POST['old_controller'])
						{
							$a->title = $_POST['title'];
							$a->controller = $_POST['controller'];
						}
					}
					$data->asXML('../controller/controllers.xml');
				}
				/*
					action edit 
				*/
				if (isset($_POST['action_edit']))
				{
					foreach ($actions->children() as $a)
		 			{
						
						if ((string)$a->title == $_POST['old_title'] && (string)$a->controller == $_POST['old_controller'] && (string)$a->action == $_POST['old_action'] )
						{
							$a->title = $_POST['title'];
							$a->action = $_POST['action'];
							$a->controller = $_POST['controller'];
						}
					}
					$data->asXML('../controller/controllers.xml');
				}
		  //-----------------------------------------
		  
		  /*
			****** Get controllers name and title from xml
		  */
		 foreach ($controllers->children() as $a)
		 {
			if (!isset($_GET['filter']) || $_GET['filter_controller'] == '' || (isset($_GET['filter']) && (string)$a->controller == $_GET['filter_controller']))
			{
				$controllers_disp .= '<tr><td id="til-'.$i.'">'.(string)$a->title.'</td><td id="con-'.$i.'">'.(string)$a->controller.'</td><td><button onclick="edit_controller('.$i.')">Edit</button></td></tr>';	
				$i++;
			}
			if (!in_array((string)$a->controller,$controllersA))
					$controllersA[] = (string)$a->controller;
		 }
			//*** set the controllers select box content
			foreach ($controllersA as $con)
			{
				$controllers_sel .= '<option value="'.$con.'">'.$con.'</option>';
			}	
			
		  	
	      /*
		  	****** Get actions and associated information from xml
		  */
		 foreach ($actions->children() as $a)
		 {
			if (!isset($_GET['filter']) || $_GET['filter_controller'] == '' || (isset($_GET['filter']) && (string)$a->controller == $_GET['filter_controller']))
			{
				$actions_disp .= '<tr><td id="til-'.$i.'">'.(string)$a->title.'</td><td id="act-'.$i.'">'.(string)$a->action.'</td><td id="con-'.$i.'">'.(string)$a->controller.'</td><td><button onclick="edit_action('.$i.')">Edit</button></td></tr>';			
				$i++;
			}
		 }
		 
		 
		
	?>
    <div style="width:48%;float:left">
    <h2>
    <form id="controller-filter" action="<?php echo $_SERVER['PHP_SELF'];?>">
    	Controllers Table <button onclick="controller_add()">Add</button>
    		<select name="filter_controller">
            	<option value=''>
                	All
                </option>
            	<?php 
					echo $controllers_sel;
				?>
            </select>        
            <input type="submit" name="filter" value="Filter"/>
        </form>
    </h2>
    <table cellspacing="0" cellpadding="10" style="width:100%">
    	<thead>
        	<th>Title</th>
        	<th>Controller</th>
        	<th>Edit</th>
        </thead>
        <tbody>
        	<?php 
				echo $controllers_disp;
			?>
        </tbody>
    </table>
    </div>
    <div style="width:48%;float:right">
    <h2 style="text-align:right"><button onclick="action_add()">Add</button> Action Table </h2>
    
    <table cellspacing="0" cellpadding="10" style="width:100%">
    	<thead>
        	<th>Title</th>
            <th>Action</th>
            <th>Controller</th>
            <th>Edit</th>
        </thead>
           <tbody>
        	<?php 
				echo $actions_disp;
			?>
        </tbody>
    </table>
	</div>
    <div id="edit_form_holder" style="text-align:center">
    	<form id="controller_editor" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="margin:12px;display:none;">
        
    	<h3>Controller Editor</h3>
        	<input type="hidden" class="old_title" name="old_title"/>
        	<input type="hidden" class="old_controller" name="old_controller"/>
        	<input type="text" class="title" name="title" placeholder="title"/>
        	<input type="text" class="controller" name="controller" placeholder="controller"/>
            <input type="submit"  value="Edit" name="controller_edit"/>
        </form>
        
    	<form id="action_editor" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="margin:12px;display:none">
        <h3>Action Editor</h3>
    		<input type="hidden" class="old_title" name="old_title"/>
        	<input type="hidden" class="old_action" name="old_action" />
            <input type="hidden" class="old_controller" name="old_controller"/>
            <input type="text" class="title" name="title" placeholder="title"/>
        	<input type="text" class="action" name="action" placeholder="action"/>
        	 <select class="controller" name="controller">
            	<?php echo $controllers_sel?>
            </select>
            <input type="submit"  value="Edit" name="action_edit"/>
        </form>
        
    	<form id="controller_adder" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="margin:12px;display:none">
        <h3>Controller Adder</h3>
    		<input type="text" class="title" name="title" placeholder="title"/>
        	<input type="text" class="controller"name="controller" placeholder="controller"/>
            <input type="submit"  value="Add" name="controller_add"/>
        </form>
        
    	<form id="action_adder" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="margin:12px;display:none">
        	<h3>Action Adder</h3>
    		
            <input type="text" class="title" name="title" placeholder="title"/>
        	<input type="text" class="action" name="action" placeholder="action"/>
            <select class="controller" name="controller">
            	<?php echo $controllers_sel?>
            </select>
            <input type="submit"  value="Add" name="action_add"/>
        </form>
    </div>
    <script type="text/javascript">
		function hide_all_form()
		{			
			document.getElementById("controller_editor").style.display = "none";
			document.getElementById("action_editor").style.display = "none";
			document.getElementById("action_adder").style.display = "none";
			document.getElementById("controller_adder").style.display = "none";
		}
		function controller_add()
		{
			hide_all_form();
			document.getElementById("controller_adder").style.display = "block";
		}
		function action_add()
		{
			hide_all_form();
			document.getElementById("action_adder").style.display = "block";
		}
		function edit_controller(id)
		{
			hide_all_form();
			document.getElementById("controller_editor").style.display = "block";
			
			document.getElementById("controller_editor").getElementsByClassName("title")[0].value = document.getElementById("til-"+id).innerHTML;
			document.getElementById("controller_editor").getElementsByClassName("old_title")[0].value = document.getElementById("til-"+id).innerHTML;			
			document.getElementById("controller_editor").getElementsByClassName("controller")[0].value = document.getElementById("con-"+id).innerHTML;
			document.getElementById("controller_editor").getElementsByClassName("old_controller")[0].value = document.getElementById("con-"+id).innerHTML;
		}
		function edit_action(id)
		{
			hide_all_form();
			document.getElementById("action_editor").style.display = "block";
			document.getElementById("action_editor").getElementsByClassName("old_title")[0].value = document.getElementById("til-"+id).innerHTML;
			document.getElementById("action_editor").getElementsByClassName("old_action")[0].value = document.getElementById("act-"+id).innerHTML;
			
			document.getElementById("action_editor").getElementsByClassName("title")[0].value = document.getElementById("til-"+id).innerHTML;
			document.getElementById("action_editor").getElementsByClassName("action")[0].value = document.getElementById("act-"+id).innerHTML;
			var sel = document.getElementById("action_editor").getElementsByClassName("controller")[0];
			var value = document.getElementById("con-"+id).innerHTML;
			document.getElementById("action_editor").getElementsByClassName("old_controller")[0].value = value;
			for (var i = 0; i<sel.length; i++)
			{
				if (sel.options[i].innerHTML === value)
				{
					sel.options[i].selected = "selected";
				}
				else
					sel.options[i].selected = null;
			}
		}
		
	</script>
</body>
</html>
