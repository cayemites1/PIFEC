<?php  
function  get Browser(){
	$ul_agent=$_server ['HTTP_USER_AGENT'];
	$bname='unknown';
	$platform='unknown';
	$version=" ";
	//first  get  the platform
	if(preg_match('/linux/i',$u_agent)){
		$platform='linux';
		}elseif(preg_match('/Macintosh/mac os x/i', $u_agent)){
			$platform='mac';
			}elseif(preg_match('/windows/win32/i', $u_agent)){
		$platform='windows';		
			}
			//next get the name of the  useragent yes separately and for good reason  
		if(preg_match('/MSIE/i', $u_agent)&&
			!preg_match('/opera/i', $u_agent)){
				$bname='Internet Explorer';
				$ub="MSIE"; 
			}elseif(preg_match('/Firefox/ie', $u_agent)){
				$bname='Mozilla  Firefox';
				$ub="Firefox";  
			}
	}    
}
	
}) 
?>