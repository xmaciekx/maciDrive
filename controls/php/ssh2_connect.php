<?php
require_once "constants.php";

// Connect to the host
$ssh2_con = ssh2_connect($SSH2_HOSTNAME);
if(!$ssh2_con){
    echo "Unable to connect to the host.";
    exit();
}

// Authenticate the session
$ssh2_auth = ssh2_auth_password($ssh2_con, $SSH2_USERNAME, $SSH2_PASSWORD);
if(!$ssh2_auth){
    echo "Unable to authenticate SFTP connection.";
    exit();
}

$sftp_conn = ssh2_sftp($ssh2_con);
$sftp_fd = intval($sftp_conn);


$ssh2_dir = opendir("ssh2.sftp://$sftp_fd/volume(sda1)/");

$contents = array();


while (($file = readdir($handle)) !== false) {
    if (substr("$file", 0, 1) != "."){
      if (is_dir("$dir/$file")){
        if ($recursive) {
          $contents[$file] = array();
          $contents[$file] = $this->ls("$remote_path/$file", $recursive);
        }
      } else {
        $contents[] = $file;
      }
    }
  }



echo "123";