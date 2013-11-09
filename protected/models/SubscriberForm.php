<?php
/**
 * RegisterForm.php
 *
 * @author: spiros kabasakalis <kabasakalis@gmail.com>
 * Date: 11/15/12
 * Time: 22:46 PM
 */
class SubscriberForm extends CFormModel
{

    public $name;
    public $email;
    public $age;
    public $gender;
    public $state;


    public function rules()
    {
        return array(
            array('email,name', 'required'),
            array('email', 'email'),
            array('email', 'length', 'min' => User::EMAIL_MIN, 'max' => User::EMAIL_MAX),
            array('name', 'length', 'min' => User::USERNAME_MIN, 'max' => User::USERNAME_MAX),
            array('age', 'length', 'min' => '1', 'max' =>'3'),
            array('age', 'numerical', 'integerOnly'=>true, 'min'=>10,'max'=>100),

        //   array('verify_code', 'captcha'),
        );
    }


    public function attributeLabels()
    {
        return array(
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'gender' => Yii::t('app', 'Gender'),
            'state' => Yii::t('app', 'State'),
        );
    }
}