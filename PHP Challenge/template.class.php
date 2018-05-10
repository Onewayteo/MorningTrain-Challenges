<!-- Author information is given in the page  -->

<?php
	class Template{
		var $assignedValues = array();

		function __construct($__path = ''){
			if(!empty($__path)){
				if(file_exists($__path)){
					$this->tpl = file_get_contents($__path);
				}else{
						echo "<b>Template Error <b>: File Inclusion Error.";
				}
			}
		}

		function assign($_searchString, $_replaceString){
			if(!empty($_searchString)){
				$this->assignedValues[strtoupper($_searchString)] = $_replaceString;
			}
		}

		function show(){
			if(count($this->assignedValues) > 0){
				foreach ($this->assignedValues as $key => $value) {
					$this->tpl = preg_replace("/{($key)}/", $value, $this->tpl);
				}
			}
		echo $this->tpl;
		}

	}
?>