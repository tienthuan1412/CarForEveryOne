<?php
function xetQuyen($kihieu)
{

	$m_role_resource= new M_role_resource();
	$laykihieu=$m_role_resource->laykihieu($kihieu);

	if($laykihieu)
	{
		if(!$_SESSION['role'])
			header('location:'.path.'error.php');
		else
		{
			$chuoi=$laykihieu['allow'];
			$mang=explode(',', $chuoi);
			if(array_search($_SESSION['role'], $mang)===false)
				header('location:'.path.'error.php');
		}
	}
	
}
?>