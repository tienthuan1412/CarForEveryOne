<?php
include_once('models/Database.php');
class M_nguoi_dung extends Database
{
	public function getDSNguoiDung()
	{			
		$this->setQuery('select * from user');
		return $this->loadAllRow();
	}
	public function DemDSNguoiDung()
	{			
		$this->setQuery('select * from user');
		return $this->countAll();
	}
	public function getNguoiDungDangNhap($username, $password)
	{
		$this->setQuery('select * from user where username=? && password =?');
		return $this->loadRow(array($username, $password));
	}
	public function checkNguoiDungDangNhap($username)
	{
		$this->setQuery('select * from user where username=?');
		return $this->loadRow(array($username));
	}
	public function getNguoiDung($iduser)
	{
		$this->setQuery('select * from user where iduser=?');
		return $this->loadRow(array($iduser));
	}
	public function getTrangThai($iduser)
	{
		$this->setQuery('select status from user where iduser=?');
		return $this->loadRow(array($iduser));
	}
	public function AddNguoiDung($data)
	{
		$this->setQuery('insert into user(`username`, `password`, `fullname`, `birthday`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`, `hinh`,`status`) values(?,?,?,?,?,?,?,?,?,?,?,?)');

		return $this->execute(array($data['username'], $data['password'], $data['fullname'], $data['birthday'], $data['gender'], $data['address'], $data['email'], $data['identitycard'], $data['mobiphone'], $data['role'], $data['hinh'], $data['status']));
	}
	public function EditNguoiDung($data)
	{
		$this->setQuery('update user set `username`=?, `password`=?, `fullname`=?, `birthday`=?, `gender`=?, `address`=?, `email`=?, `identitycard`=?, `mobiphone`=?, `role`=?,  `hinh`=?,`status`=? where iduser=?');

		return $this->execute(array($data['username'], $data['password'], $data['fullname'], $data['birthday'], $data['gender'], $data['address'], $data['email'], $data['identitycard'], $data['mobiphone'], $data['role'], $data['hinh'], $data['status'], $data['iduser']));	
	}
	public function DeleteNguoiDung($iduser)
	{
		$this->setQuery('delete from user where iduser=?');
		return $this->execute(array($iduser));
	}
	public function LayTrangThai($iduser)
	{
		$this->setQuery('select status from user where iduser=?');
		return $this->execute(array($iduser));
	}
	public function TaoTimKiemNguoiDung()
    {
        $this->setQuery("select username, iduser from user");
        return $this->loadAllRow();
    }
    public function TimKiemTenNguoiDung($iduser)
    {
        $ten="'%". $iduser . "%'";
        $this->setQuery("SELECT *
            from user 
            where iduser like ?");
        return $this->loadAllRow(array($iduser));
    }

}
?>