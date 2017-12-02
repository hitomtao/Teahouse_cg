<?php
namespace app\widgets\AvatorUpload\models;

use yii\base\Model;

/**
 * UploadForm is the model behind the upload form.
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @return array the validation rules.
     */
		public function rules()
		{
			 return [
						[['file'], 'file','extensions' => 'jpg,png','maxSize'=>1024000,'checkExtensionByMimeType'=>false],
					];
		}
	
}