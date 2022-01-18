<?php
include ('m/M_Base.php');

class M_User extends M_Base {

    /**
     * @param string $login
     * @param string $password
     * @return string
     */
    public function login(string $login, string $password): string
    {
        if ($arData = $this->isRegistration($login, $password)) {
            $_SESSION['id'] = $arData['id'];
            $_SESSION['login'] = $arData['login'];
            $_SESSION['password'] = $arData['password'];
            $_SESSION['role'] = $arData['role'];
            return '';
        }
        return "Неверный логин или пароль";
    }

    /**
     * @param string $login
     * @param string $password
     * @return array|false
     */
    public function isRegistration(string $login, string $password)
    {
        $sth = $this->obConnect->prepare("SELECT id, login, password, role FROM users WHERE active='Y' AND login = :login AND password = :password");
        $sth->execute(
            [
                'login' => $login,
                'password' => $password,
            ]
        );
        if ($arData = $sth->fetch(PDO::FETCH_ASSOC)) {
            return [
                'id' => $arData['id'],
                'login' => $arData['login'],
                'password' => $arData['password'],
                'role' => $arData['role'],
            ];
        }
        return false;
    }

    /**
     * @param $login
     * @param $password
     * @param $email
     * @return string
     */
    public function registeration($login, $password, $email)
    {
        if (!$this->isRegistration($login, $password)) {

            $sth = $this->obConnect->prepare("INSERT INTO `users` SET `login` = :login, `password` = :password, `email` = :email");
            $sth->execute(
                [
                    'login' => $login,
                    'password' => $password,
                    'email' => $email,
                ]
            );

            return $this->login($login, $password);
        }
        return "Такой пользователь существует";
    }

    /**
     * @return bool
     */
    public function isAuth(): bool
    {
        if (isset($_SESSION['id']) && intval($_SESSION['id']) > 0) {
            return true;
        }
        return false;
    }

    /**
     * @return void
     */
    public function logout() : void
    {
        unset($_SESSION['id']);
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
}