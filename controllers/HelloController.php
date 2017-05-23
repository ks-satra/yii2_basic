<?php namespace app\controllers;

class HelloController extends \yii\web\Controller{

	public function actionIndex(){
		//echo "น้องที่รัก";
		//return $this->render('index');
		$weight = 60;

		return $this-> render('index',[
			'firstname' => 'Satra',
			'lastname' => 'Eadtrong',
			'weigth' => $weight
		]
	);
	}

	public function actionProfile(){
		return $this->render('profile');
	}

}
?>
