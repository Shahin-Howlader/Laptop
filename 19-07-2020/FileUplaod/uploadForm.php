<?php
class FileUplaod{
	private $fileType = ['image/jpg','image/png','image/gif','image/jpeg'];
	private $fileSize = 20000;

	public function FileToUpload($fileLoad){
		if (in_array($fileLoad['type'], $this->fileType)) {
			if ($fileLoad['size'] < $this->fileSize) {
				move_uploaded_file($fileLoad['tmp_name'], 'uploads/' . $fileLoad['name']);
				echo "File Has been Uploaded";
			}else{
				echo "File Sie Not Mtched";

			}
		} else{
			echo "File Formte must be only JPG, PNG, GIF OR JPEG";
		}
		

	}
}

?>