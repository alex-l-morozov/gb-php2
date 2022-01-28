<?php
class User extends Model
{
    protected static $table = 'users';

    /**
     * @param string $login
     * @param string $password
     * @return string
     */
    static public function login(string $login, string $password): string
    {
        if ($arData = self::isRegistration($login, $password)) {
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
    static public function isRegistration(string $login, string $password)
    {
        $arData = db::getInstance()->Select(
            "SELECT id, login, password, role FROM users WHERE active='Y' AND login = :login AND password = :password",
            [
                'login' => $login,
                'password' => $password,
            ]);
        if ($arData) {
            return [
                'id' => $arData[0]['id'],
                'login' => $arData[0]['login'],
                'password' => $arData[0]['password'],
                'role' => $arData[0]['role'],
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
    static public function registeration($login, $password, $email)
    {

        if (!self::isRegistration($login, $password)) {
            db::getInstance()->Query("INSERT INTO `users` SET `login` = :login, `password` = :password, `email` = :email",
                [
                    'login' => $login,
                    'password' => $password,
                    'email' => $email,
                ]);
            return self::login($login, $password);
        }
        return "Такой пользователь существует";
    }

    /**
     * @return bool
     */
    static public function isAuth(): bool
    {
        if (isset($_SESSION['id']) && intval($_SESSION['id']) > 0) {
            return true;
        }
        return false;
    }

    /**
     * @return void
     */
    static public function logout() : void
    {
        unset($_SESSION['id']);
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
}