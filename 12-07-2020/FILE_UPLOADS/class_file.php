

<?php
class File{
	private $supportForats = ['image/png','image/jpeg','image/jpg'];

	public function uploadFile($file){
		if(in_array($file ['type'], $this->supportForats)){

			move_uploaded_file($file['tmp_name'], 'uploads/' .$file['name']);

			echo "File has been Uploaded";
		} else{
			die('File formate is not supported');
			}
		}

}

?>