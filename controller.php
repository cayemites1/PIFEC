namespace  frontend\controllers;
use  Yii;
use  yii\base\invalidparamException;
use  yii\web\badRequestHTTPException;
use  yii\web\Controller; 
use  yii\filters\VerbFilter; 
use  yii\filters\accessControl;
use  Common\models\loginForm;
use  frontend\models\passwordResetRequestForm;
use  frontend\models\ResetPasswordForm;
use  frontend\models\signupForm;
use  frontend\models\contactForm;
/**
 *site controller  
 */
 	Class siteControllerExtendsController	 
 	{
 		/**
 			*@inheritdoc
 			*/
 				public function actionExchange ($message='Hello') 
 			{
 				return $this->render ('expérience', ['message'=$message]);
 				  )  
 			}
 			
 		
 	                                 
      