<?phpinclude_once('m/M_User.php');class C_User extends C_Base{	public function action_auth()    {        $this->title .= '::Авторизация';        $user = new M_User();        if (!$user->isAuth()) {            $info = '';            if($_POST){                $info = $user->login($_POST['login'], $_POST['password']);                if ($user->isAuth()) {                    header("Location: index.php?c=user&act=profile");                }            }            else{                $this->content = $this->Template('v/v_auth.php');            }        } else {            header("Location: index.php?c=user&act=profile");        }	}    public function action_reg()    {        $this->title .= '::Регистрация';        $user = new M_User();        if (!$user->isAuth()) {            $info = '';            if($_POST){                $info = $user->registeration($_POST['login'], $_POST['password'], $_POST['email']);                if ($user->isAuth()) {                    header("Location: index.php?c=user&act=profile");                }                $this->content = $this->Template('v/v_reg.php', array('text' => $info));            }            else{                $this->content = $this->Template('v/v_reg.php');            }        } else {            header("Location: index.php?c=user&act=profile");        }	}    public function action_profile()    {        $this->title .= '::Профиль';        $user = new M_User();		$info = "Профиль";        if ($user->isAuth()) {            $this->content = $this->Template('v/v_profile.php', array('text' => $info));        } else {            header("Location: index.php?c=user&act=auth");        }    }    public function action_logout()    {        $user = new M_User();        $user->logout();        header("Location: index.php");    }}