<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record		=	Users::model()->findByAttributes(array('username'=>$this->username));
		if(empty($record))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($record->password!=$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        else if($record->status==0)
			$this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
        else
        {
			$developer	=	Developer::model()->findByAttributes(array('users_id'=>$record->id));
			$this->setState('id', $record->id);
			$this->setState('activation', $record->status);
			if(empty($developer)){
				$this->setState('developerId', '0');
			}else{
				$this->setState('developerId', $developer->id);
				$this->setState('developerStatus', $developer->status);
			}
			$this->setState('role', $record->role);
			$this->setState('name', $record->display_name);
			$this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;		
	}
}