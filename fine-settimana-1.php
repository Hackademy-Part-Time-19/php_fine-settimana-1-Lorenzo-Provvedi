<?php 

$password = readline('inserisci una password: ');


function checkPassword(string $password){
    $check = false;

    $check = checkLength($password) && checkNumeric($password) && checkSpecial($password) && checkUppercase($password);


    if($check){
        echo "password appropriata";
        return true;
    }
    echo "password troppo semplice";
    return false;
}


 function checkLength(string $password){
  if(strlen($password)<5){
    return false;
  }else{
    return true;
  }
}


function checkNumeric(string $password){
  for($i=0;$i<strlen($password);$i++){
    if(is_numeric($password[$i])){
        return true;
    }
  }
  return false;
}


function checkSpecial(string $password){
  $special = ["!","@","#","?"];
  for($i=0; $i<strlen($password);$i++){
    if(in_array($password[$i],$special)){
        return true;
    }
  }
  return false;
}


function checkUppercase(string $password){
    for($i=0; $i<strlen($password);$i++){
        if(ctype_upper($password[$i])){
            return true;
        }
      }
      return false;
      echo($check);
}

checkPassword($password);



