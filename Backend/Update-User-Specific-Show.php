<?php $u0=base64_decode('MA==');if(isset($_GET[base64_decode('c2hvdw==')])){$t1=$_GET[base64_decode('c2hvdw==')];}if(isset($_GET[base64_decode('dXNlcg==')])==false){throw new Exception(base64_decode('VVNFUiBOT1QgU0VULg=='));}$n2=$_GET[base64_decode('dXNlcg==')];$t3=file_get_contents(base64_decode('aHR0cHM6Ly9hcGkubWl4Y2xvdWQuY29tLw==').$n2.base64_decode('L2Nsb3VkY2FzdHMv'));$l4=json_decode($t3,true);array_walk_recursive($l4,function($f5,$l6)use(&$i7){if($l6===base64_decode('a2V5'))$i7[]=$f5;});foreach($i7 as $o8){if($o8==="/$n2/"){continue;}else{if(strpos($o8,base64_decode('L2Rpc2NvdmVyLw=='))!==false){continue;}else{if(isset($_GET[base64_decode('c2hvdw==')])&&strpos($o8,$t1)!==false){echo base64_decode('PGJyPg==');$k9=str_replace(base64_decode('Lw=='),base64_decode('JTJm'),"$o8");echo base64_decode('PGlmcmFtZSB3aWR0aD0nMTAwJScnIGhlaWdodD0nNjAnIHNyYz0naHR0cHM6Ly93d3cubWl4Y2xvdWQuY29tL3dpZGdldC9pZnJhbWUvP2hpZGVfY292ZXI9MSZtaW5pPTEmZmVlZD0=').$k9.base64_decode('JyBmcmFtZWJvcmRlcj0nMCcgPjwvaWZyYW1lPg==');$u0++;}else{if(isset($_GET[base64_decode('c2hvdw==')])){continue;}else{echo base64_decode('PGJyPg==');$k9=str_replace(base64_decode('Lw=='),base64_decode('JTJm'),"$o8");echo base64_decode('PGlmcmFtZSB3aWR0aD0nMTAwJScnIGhlaWdodD0nNjAnIHNyYz0naHR0cHM6Ly93d3cubWl4Y2xvdWQuY29tL3dpZGdldC9pZnJhbWUvP2hpZGVfY292ZXI9MSZtaW5pPTEmZmVlZD0=').$k9.base64_decode('JyBmcmFtZWJvcmRlcj0nMCcgPjwvaWZyYW1lPg==');$u0++;}}}}}showlist:echo base64_decode('PGJyPjxoND4=').$u0.base64_decode('IHwgU2hvd3MgRm91bmQ8L2g0Pg==');?>