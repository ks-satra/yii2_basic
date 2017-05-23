<?php namespace app\controllers;

class HelloController extends \yii\web\Controller{

	public function actionIndex(){
		//echo "น้องที่รัก";
		return $this->render('index');
	}

	public function actionProfile(){
		return $this->render('profile');
	}

}
?>
