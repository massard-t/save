<?php
/*
** file.php for file.php in /private/var/folders/0b/_nssthn11mxcdv80q42ht5th1d_q77/T/e27d72d8-6bb4-4411-b51c-7ba97ce88c50/var/www/CC/website/class/file.php
**
** Made by MOREAU Julien
** Login   <moreau_j@etna-alternance.net>
**
** Started on Mon Jan 25 09:08:39 2016 MOREAU Julien
** Last update Mon Jan 25 09:08:39 2016 MOREAU Julien
*/

/*class File{

    private $name;
    private $create;
    private $lastModif;
    private $allFile;
    private $stockage;
    private $users;
    private $prop;
    private $public;
    private $size;

    public function __construct($id, $bdd){

      $req = $bdd->prepare("SELECT * FROM backup WHERE ID = :id");
      $req->execute(array('id' => $id));
      $result = $req->fetch();
      $this->name = $result['Name'];
      $this->create = $result['Timestamp'];
      $this->prop = $result['User'];
      $this->public = $result['Visible'];
      $this->size = recupSizeQuery(get_info($this->prop, $bdd)["name"], $this->name);
      if (count($listUser = explode(",", $result['Access'])) != 0)
      {
        $listUser = explode(",", $result['Access']);
        foreach($listUser as $user)
          $this->users[] = $user;
      }
      else
        $this->users[] = $result['Access'];

    }
    public function get_name()
    {
      return $this->name;
    }
    public function get_create()
    {
      return $this->create;
    }
    public function get_users()
    {
      return $this->users;
    }
    public function get_prop()
    {
      return $this->prop;
    }
    public function isPublic()
    {
      return $this->public;
    }
    public function get_size()
    {
      return $this->size;
    }
    /*public get_name()
    {
      return $name;
    }
    public get_name()
    {
      return $name;
    }*/
//}

?>
