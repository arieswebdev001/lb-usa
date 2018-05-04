<?php
$zip = new ZipArchive;
$res = $zip->open('magentotheme.zip');
if ($res === TRUE) {
  $zip->extractTo('/home/u564648861/public_html/laybare');
  $zip->close();
  echo 'Success!';
} else {
  echo 'error!';
}
?>