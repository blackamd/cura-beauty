<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        Yii::$app->controller->enableCsrfValidation = false;
        return true;
    }
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * Displays time table page.
     *
     * @return mixed
     */
    public function actionTimeTable()
    {
        return $this->render('timetable');
    }
    /**
     * Displays comming soon page.
     *
     * @return mixed
     */
    public function actionCommingSoon()
    {
        return $this->render('commingsoon');
    }
    /**
     * Displays body builder page.
     *
     * @return mixed
     */
    public function actionBodyBuilder()
    {
        return $this->render('body-builder');
    }
    /**
     * Displays body builder 2 page.
     *
     * @return mixed
     */
    public function actionBodyBuilderTwo()
    {
        return $this->render('body-builder-2');
    }
    /**
     * Displays trainer page.
     *
     * @return mixed
     */
    public function actionTrainer()
    {
        return $this->render('trainer');
    }
    /**
     * Displays trainer 2 page.
     *
     * @return mixed
     */
    public function actionTrainerTwo()
    {
        return $this->render('trainer-2');
    }
    /**
     * Displays shop left page.
     *
     * @return mixed
     */
    public function actionShopLeft()
    {
        return $this->render('shop-left');
    }
    /**
     * Displays shop right page.
     *
     * @return mixed
     */
    public function actionShopRight()
    {
        return $this->render('shop-right');
    }
    /**
     * Displays shop single page.
     *
     * @return mixed
     */
    public function actionShopSingle()
    {
        return $this->render('shop-single');
    }
    /**
     * Displays shopping cart page.
     *
     * @return mixed
     */
    public function actionShoppingCart()
    {
        return $this->render('shopping-cart');
    }
    /**
     * Displays checkout page.
     *
     * @return mixed
     */
    public function actionCheckout()
    {
        return $this->render('checkout');
    }
    /**
     * Displays blog page.
     *
     * @return mixed
     */
    public function actionBlog()
    {
        return $this->render('blog');
    }
    /**
     * Displays blog classic page.
     *
     * @return mixed
     */
    public function actionBlogClassic()
    {
        return $this->render('blog-classic');
    }
    /**
     * Displays blog detail page.
     *
     * @return mixed
     */
    public function actionBlogDetail()
    {
        return $this->render('blog-detail');
    }
    /**
     * Displays blog detail 2 page.
     *
     * @return mixed
     */
    public function actionBlogDetailTwo()
    {
        return $this->render('blog-detail-two');
    }
    /**
     * Displays not found page.
     *
     * @return mixed
     */
    public function actionNotFound()
    {
        return $this->render('not-found');
    }
    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        return $this->render('contact');
    }
    /**
     * Displays Classes page.
     *name
     * @return mixed
     */
    public function actionClasses()
    {
        if (isset($_GET['name'])){
            return $this->render('classes', ['name'=>$_GET['name']]);
        }
        return $this->render('classes');
    }
    public function actionFreePass()
    {
        $salutation_id =1;
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $reference_id = 10;
        $country_id = 63;
        $gender = $_POST["gender"];
        $is_walk_in = 0;
        $created_by = 2;
        $promo_code_id = null;
        $freePassUrl = "http://sfcm.gymtour.net/ufc-hmvc/website/v1/add-free-pass?salutation_id=".$salutation_id."&first_name=".$first_name."&last_name=".$last_name."&email=".$email."&phone=".$phone."&reference_id=".$reference_id."&country_id=".$country_id."&gender=".$gender."&is_walk_in=".$is_walk_in."&created_by=".$created_by."&promo_code_id=".$promo_code_id;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $freePassUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $server_output = curl_exec ($ch);
        $result = json_decode($server_output);
        if ($result->success == 1){
            return $this->render('index');
        }else{
            return $this->render('index');
        }
    }
    public function actionContactUsForm()
    {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $created_by = 2;
        $ContactUsUrl = "http://sfcm.gymtour.net/ufc-hmvc/website/v1/add-contact-us?first_name=".$first_name."&last_name=".$last_name."&email=".$email."&phone=".$phone."&subject=".$subject."&comments=".$message;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ContactUsUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $server_output = curl_exec ($ch);
        $result = json_decode($server_output);
        if ($result->success == 1){
            return $this->render('index');
        }else{
            return $this->render('index');
        }
    }
    public function actionAllTrainers()
    {
        return $this->render('all-trainers');
    }
    public function actionCoachPatriciaAmanda()
    {
        return $this->render('coach-patricia-amanda');
    }
    public function actionCoachMagnoAlves()
    {
        return $this->render('coach-magno-alves');
    }

    /******** Article Pages **********/
    /**
     * Displays Article Marcos.
     *name
     * @return mixed
     */
    public function actionArticleMarcos()
    {
        return $this->render('article-marcos');
    }
    /**
     * Displays Article What is Jiu-Jitsu.
     *name
     * @return mixed
     */
    public function actionArticleWhatIsJiuJitsu()
    {
        return $this->render('article-what-is-jiu-jitsu');
    }
    /**
     * Displays Article Jiu-Jitsu benefit.
     *name
     * @return mixed
     */
    public function actionArticleJiuJitsuBenefit()
    {
        return $this->render('article-jiu-jitsu-benefit');
    }

}
