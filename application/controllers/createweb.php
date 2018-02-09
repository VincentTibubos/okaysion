<?php
	class Createweb extends CI_Controller{
		public function directory_copy()
	    {
	    	$srcdir= str_replace('okaysion','ci',base_url());
	    	$dstdir= str_replace('okaysion','wow',base_url());
	      
	        //preparing the paths


	        //creating the destination directory
	        if(!is_dir($dstdir)){
	        	echo mkdir($dstdir, 0777, true);
	        	exit();
	        }
	        
	        //Mapping the directory
	        $dir_map=directory_map($srcdir);
	        foreach($dir_map as $object_key=>$object_value)
	        {
	            if(is_numeric($object_key))
	                copy($srcdir.'/'.$object_value,$dstdir.'/'.$object_value);//This is a File not a directory
	            else
	                directory_copy($srcdir.'/'.$object_key,$dstdir.'/'.$object_key);//this is a directory
	        }
	        echo 'done';
	    }
	    public function index(){
	    	echo 'hello';
	    	exit();
	    }
	}
