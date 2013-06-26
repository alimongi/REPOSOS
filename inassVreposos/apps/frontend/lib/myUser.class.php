<?php

class myUser extends sfGuardSecurityUser
{

  public function cambiarPassword($user, $password, $new_pass, $confirm) {
    if($user->checkPassword($password)) {
        if($new_pass == $confirm) {
            $user->setPassword($new_pass);
            $user->save();
            return 'Su contraseña ha sido cambiada con éxito';
        } else {
            return 'Las contraseñas no coinciden';
        }
    } else {
        return 'Contraseña actual incorrecta';
    }
}
    

}
